<?php

include_once '../../../../../class/DB_Connect.php';
//include_once 'errorHandler.php';
//include_once 'session.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//$data = json_decode(file_get_contents("php://input"));

class major {

    public $major_id;
    public $major_name;

    public function __construct() {
        
    }

    public function setVal($id, $name) {
        $this->major_id = $id;
        $this->major_name = $name;
    }

}

class classes {

    public $class_id;
    public $class_name;

    public function __construct() {
        
    }

    public function setVal($id, $name) {
        $this->class_id = $id;
        $this->class_name = $name;
    }

}

$oper = (string)($_POST['oper']);         // 获取前台传递过来的操作码，根据操作码判断执行何种操作
//　调用对应的函数
$oper();
/*
switch ($oper) {
    // CheckUserIfUsed
    case 1: CheckUser();
        break;
    // LoadMajor
    case 2: LoadMajor();
        break;
    // LoadClass
    case 3: LoadClass();
        break;
    case 4: judgeUser();
        break;
}*/

function CheckUser() {
    $db = new DB_Connect();
    $st_user = (string)$_POST['st_user'];
    $statement = 'select * from students where s_user=:st_user';
    
    $result = $db->prepare($statement);
    $result->execute(array('st_user'=>$st_user));
    $used = false;
    if($result->fetch()) {
        $used = true;                       // 如果结果集中有数据说明这个学生存在过
    }
    echo json_encode(array('isUsed'=>$used));
}

function CheckMail() {
    $db = new DB_Connect();
    $st_mail = (string)$_POST['st_mail'];
    $statement = 'select * from students where s_mail=:st_mail';
    
    $result = $db->prepare($statement);
    $result->execute(array(':st_mail'=>$st_mail));
    $used = false;
    if($result->fetch()) {
        $used = true;                       // 如果结果集中有数据说明这个邮箱已经被使用过
    }
    echo json_encode(array('isUsed'=>$used));
}

function CheckNo() {
    $db = new DB_Connect();
    $st_no = (string)$_POST['st_No'];
    $statement = 'select * from students where s_num=?';
    
    $result = $db->prepare($statement);
    $result->execute(array($st_no));
    $used = false;
    if($result->fetch()) {
        $used = true;
    }
    echo json_encode(array('isUsed'=>$used));
}

function LoadMajor() {
    $db = new DB_Connect();
    $dept_id = (string) $_POST['dept_id'];
    $statement = 'select * from majors where department_id=:dept_id';

    $result = $db->prepare($statement);
    $result->execute(array(':dept_id'=>$dept_id));
    $index = 0;
    $ret = "";
    while ($row = $result->fetch()) {
        $element = new major();
        $element->setVal($row['id'], $row['major_name']);
        $ret[$index++] = $element;
    }
    echo json_encode($ret);
}

function LoadClass() {
    $db = new DB_Connect();
    $major_id = (string) $_POST['major_id'];
    $statement = 'select * from classes where major_id=:major_id';
    $result = $db->prepare($statement);
    $result->execute(array(':major_id'=>$major_id));
    $index = 0;
    $ret = "";
    while ($row = $result->fetch()) {
        $element = new classes();
        $element->setVal($row['id'], $row['class_name']);
        $ret[$index++] = $element;
    }
    echo json_encode($ret);
}

function judgeUser() {
    $uname = (string) $_POST['uname'];
    $upass = (string) $_POST['upass'];
    $logtype = (int) $_POST['logtype'];
    if ($logtype == 1)//student    
        $query = "select s_user from students where s_user='$uname' and `s_pwd`=md5('$upass')";
    else //与数据库对应 2:dept 3:school 4当然不行
        $query = "select m_user from manager where m_user='$uname' and `m_pwd`=md5('$upass')";

    $con = new DB_Connect();
    $stmt = $con->query($query);
    if ($stmt->fetch() == null)
        $ret = 0;
    else{
        $ret = 1;
        session::initial($uname, $logtype);
    }
    echo json_encode($ret);
}

function Register() {
    $birth = (string)$_POST['st_birth'];
    //$birth = substr($birth,6,4).'-'.substr($birth,0,2).'-'.substr($birth,3,2);
    $param = array($_POST['st_user'], $_POST['st_no'],md5($_POST['st_pwd']),
        $_POST['st_name'], $_POST['st_mail'],
        $_POST['st_phone'], $birth,
        $_POST['st_class'],date('y-m-d', time()), intval($_POST['st_edu']),$_POST['st_grade']
        );
    $db = new DB_Connect();
    $column = 's_user, s_num, s_pwd, s_name, s_mail, s_phone, s_date, class_id, reg_date, edu_id, s_grade';
    $statement = 'insert into students('.$column.') values(?,?,?,?,?,?,?,?,?,?,?)';
    $result = $db->prepare($statement);
    $result->execute($param);
    echo json_encode(array('flag'=>$result->rowCount()));
}
?>
