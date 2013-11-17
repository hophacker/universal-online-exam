<?php
require_once 'autoload.inc';
$oper = (string)$_POST['oper'];
$oper();

function readMessage($st_user, $info_id) {
    if($info_id=="") return;
    $db = new DB_Connect();
    $info_id = $info_id.",";
    $statement = "update students set read_message_id=concat(read_message_id,?) where s_user=?";
    $result = $db->prepare($statement);
    $result->execute(array($info_id,$st_user));
}

function setReadLabel() {
    $st_user = (string)$_POST['st_user'];
    $info_id = (string)$_POST['info_id'];
    readMessage($st_user,$info_id);
}

function getReadMessage($st_user) {
      $db = new DB_Connect();
      $statement = "select read_message_id from students where s_user=?";
      $result = $db->prepare($statement);
      $result->execute(array($st_user));
      while($row=$result->fetch()) {
          return $row['read_message_id'];
      }
      return null;
}

function getReadMessageNumber($st_user) {
      $db = new DB_Connect();
      $statement = "select read_message_id from students where s_user=?";
      $result = $db->prepare($statement);
      $result->execute(array($st_user));
      while($row=$result->fetch()) {
          return count(explode(',', $row['read_message_id']));
      }
      return 0;
}

function getMessageType() {
    $db = new DB_Connect();
    $statement = "select * from information_types";
    $result = $db->prepare($statement);
    $result->execute();
    $unreadMessageNumber = getReadMessageNumber((string)$_POST['st_user']);
    $ret = "<input type='radio' class='message' id='rdo' value='-1' name='information' checked='checked' /><label for='rdo' id='unread' ><u><b>未读通知</b></u></label>";
    while($row = $result->fetch()) {
//         if($first == 1) {
//             $first = 0;
//             $ret = $ret . "<input type='radio' class='message' id='rdo". $row['information_type_id'] ."' value='". $row['information_type_id'] ."' name='information' checked='checked' /><label for='rdo". $row['information_type_id'] ."'>". $row['name'] ."</label>";
//         } else {
            $ret = $ret . "<input type='radio' class='message' id='rdo". $row['id'] ."' value='". $row['id'] ."' name='information' /><label for='rdo". $row['id'] ."'>". $row['name'] ."</label>";
//         }
    }
    echo json_encode(array('content'=>$ret));
}

function getMessage() {
    $dept_id = (string)$_POST['dept_id'];
    $is_super = (string)$_POST['is_super'];
    $info_type = (string)$_POST['info_type'];
    $st_user = (string)$_POST['st_user'];
    // 获取学员未读消息列表
    $unread_message_list = getReadMessage($st_user);
    $not_in = substr(substr($unread_message_list, 1),0,strlen($unread_message_list)-2);
    if(strlen($not_in)!=0) {        // 已经看过消息
        $in = " and a.id in(".$not_in.") ";
        $not_in = " and a.id not in(".$not_in.") ";
    } else {
        $in = " and 1=2 ";            
        $not_in = "";
    }
    
    
    $db = new DB_Connect();
    if($is_super==0) {
        if($info_type == "-1")//　未读消息，消息id不在已读消息中
            $statement = "select a.id, title, info_date, info, dept_name from information a left join departments b on a.department_id=b.id where (a.department_id=".$dept_id." or a.department_id=-1) ".$not_in." order by info_date desc";
        else 
            $statement = "select a.id, title, info_date, info, dept_name from information a left join departments b on a.department_id=b.id where (a.department_id=".$dept_id." or a.department_id=-1) and information_type_id=".$info_type.$in." order by info_date desc";
    } else {
        if($info_type == "-1")
            $statement = "select a.id, title, info_date, info, dept_name from information a left join departments b on a.department_id=b.id where a.id!=null ".$not_in."order by info_date desc";
        else
            $statement = "select a.id, title, info_date, info, dept_name from information a left join departments b on a.department_id=b.id where information_type_id=".$info_type.$in."order by info_date desc";
    }
    $result = $db->prepare($statement);
    $result->execute();
    $ret = "";
    $count = 0;
    while($row = $result->fetch()) {
        $count++;
        $ret = $ret . "<h3 id='".$row['id']."'>
        <table width='100%'>
            <tr>
            <td width='60%'>". $row['title'] ."</td>
            <td width='20%' align='left'>发布时间：". $row['info_date'] ."</td>
            <td width='20%' align='left'>发布部门：";
        if($row['dept_name'] != "") $ret = $ret . $row['dept_name'];
        else $ret = $ret . "UOES";
        $ret = $ret . "</td>
            </tr>
        </table>
    </h3>
    <div>
        <p>". $row['info'] ."</p>
    </div>";

    }
    if($ret != "") echo json_encode(array('content'=>$ret,'count'=>$count));
    else echo json_encode(array('content'=>"没有通知！",'count'=>$count));
}

function postMessage() {
    $title = (string)$_POST['title'];
    $info = (string)$_POST['info'];
    $info_type = (string)$_POST['info_type'];
   // $dept_id = $_SESSION['dept_id'];
    $dept_id = -1;
    $db = new DB_Connect();
    $statement = "insert into information(title,info,info_date,department_id,information_type_id) values(?,?,?,?,?)";
    $result = $db->prepare($statement);
    $result->execute(array($title,$info,date('y-m-d', time()), $dept_id, $info_type));
    echo json_encode(array('flag'=>$result->rowCount()));
}

function getMessageTypeToSelect() {
    $db = new DB_Connect();
        $statement = "select * from information_types";
        $result = $db->prepare($statement);
        $result->execute();
        $first = 1;
        $ret = "";
        while($row = $result->fetch()) {
            $ret = $ret . "<option value='".$row['id']."'>".$row['name']."</option>";
        }
        echo json_encode(array('content'=>$ret));
}



?>
