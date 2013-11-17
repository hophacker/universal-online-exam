<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of STUDENT
 *
 * @author j
 */
include_once 'DB_Connect.php';
//include_once 'errorHandler.php';


class student {
    private $s_user;                    // 用户帐号
    private $s_num;                     // 用户学号
    private $s_pwd;                    // 用户密码
    private $s_name;                    // 用户姓名 
    private $s_mail;                    //　用户电子邮箱
    private $s_phone;                   // 用户电话号码
    private $s_date;                    // 用户生日
    private $dept_name;                 // 学院名称
    private $dept_id;                   // 学院id
    private $major_name;                // 专业名称
    private $major_id;                  // 专业id
    private $class_name;                // 班级名称
    private $class_id;                  // 班级id
    private $score_1;                   // 成绩１
    private $score_2;                   // 成绩２
    private $score_3;                   // 成绩３ 
    private $score_ans;                 //　成绩答案
    private $score_type;                // 成绩类型
    private $reg_date;                    // 注册时间
    private $s_role;                    // 用户角色
    private $edu_name;                  // 学历
    private $edu_id;                    // 学历的id
    private $test_type_id;              // 考试类型
    public function __construct($s_user) {
        $db = new DB_Connect();
        $column = 'a.s_user, a.s_num, a.s_pwd, a.s_name, a.s_mail, a.s_phone, a.s_date, a.test_type_id, d.dept_name, d.id dept_id, c.major_name, c.id major_id,
            b.class_name, b.id class_id, a.score_1, a.score_2, a.score_3, a.score_ans, a.score_type, a.reg_date, a.s_role, e.edu_name, e.edu_id ';
        $from_clause = 'from students a left join classes b on a.class_id=b.id 
            left join majors c on b.major_id=c.id 
            left join departments d on c.department_id=d.id 
            left join educations e on a.edu_id= e.edu_id ';
        $where_clause = 'where a.state=1 and a.s_user=:s_user';
        $statement = 'select '. $column . $from_clause . $where_clause;
        $result = $db->prepare($statement);
        
        $result->execute(array(':s_user'=>$s_user));
        if($row = $result->fetch()) {
            $this->s_user = $row['s_user']; $this->s_num = $row['s_num'];
            $this->s_pwd = $row['s_pwd']; $this->s_name = $row['s_name'];
            $this->s_mail = $row['s_mail']; $this->s_date = $row['s_date'];
            $this->dept_name = $row['dept_name']; $this->major_name = $row['major_name'];
            $this->class_name = $row['class_name']; $this->score_1 = $row['score_1'];
            $this->score_2 = $row['score_2']; $this->score_3 = $row['score_3'];
            $this->score_ans = $row['score_ans']; $this->score_type = $row['score_type'];
            $this->reg_date = $row['reg_date']; $this->s_role = $row['s_role'];
            $this->edu_name = $row['edu_name']; $this->s_phone = $row['s_phone'];
            $this->dept_id = $row['dept_id'];   $this->major_id = $row['major_id'];
            $this->class_id = $row['class_id']; $this->edu_id = $row['edu_id'];
            $this->test_type_id = $row['test_type_id'];
        } else {
            
        }
    }
    public function __get($name) {
        return $this->$name;
    }
    public static function gradeSelect(){
        $html = "入学年份: <select id='st_grade' class='dept_select'>
                <option value='-1'>全部</option>";
        for ($i=2002; $i<=2020; $i++){
            $html .= "<option value='$i'> $i </option>";
        }
        $html .= "</select>";
        return $html;
    }
    public static function role(){
        $html = "学员等级: <select id='st_role' class='dept_select' style='width:60px;color:red'>
                <option value='0'>初级</option>
                <option value='2'>中级</option>
                <option value='4'>高级</option>
                <option value='6'>高级结业</option>
                </select>";
        return $html;
    }
    //put your code here
/*    public static checkExist(){
        
    }*/
}
/*$st = new student('blossom');
echo $st->s_name;*/
?>
