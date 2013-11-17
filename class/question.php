<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of question
 *
 * @author you
 */
require_once 'autoload.inc';
class question extends DB_Connect{
    private $possibleSelCho = array("A", "B", "C", "D");
    private $possibleJudCho = array("Y", "N");
    
    public function trimArr(&$arr){
        foreach ($arr as &$ele){
            $ele = trim($ele, " \n\r\t");
        }
    }
    public function message($errorCho){
        if ($errorCho == 0) return "添加成功"; 
        else return "错误：$errorCho 条题目选项不是规定字符, 请仔细检查!";
    }
    public function addOneSel($q_text, $q_a, $q_b, $q_c, $q_d, $q_cho, $test_type_id){
        $sql = "insert into question(q_type,q_text,q_a,q_b,q_c,q_d,q_cho,test_type_id)
            values(0, ?, ?, ?, ?, ?, ?, ?)";
        $sth = parent::prepare($sql);
        $arr = array($q_text, $q_a, $q_b, $q_c, $q_d, $q_cho, $test_type_id);
        $this->trimArr($arr);
        $sth->execute($arr);
        return "添加成功";
    }
    public function addMulSel($text, $test_type_id){
        $ques = explode('#Q', $text);
        array_shift($ques);
        $sql = "insert into question(q_type, q_text,q_a,q_b,q_c,q_d,q_cho,test_type_id)
            values(0,?, ?, ?, ?, ?, ?, ?)";
        $sth = parent::prepare($sql);
        
        $errorCho = 0;
        foreach($ques as $que){
            $arr = explode("#", $que);
            $this->trimArr($arr);
            if (count($arr) == 6){
                if (in_array($arr[5], $this->possibleSelCho)){
                    $arr[] = $test_type_id;
                    $sth->execute($arr);
                }else $errorCho ++;
            }
        }

        return $this->message($errorCho);
    }
    public function getSel($test_type_id=-1, $q_text="", $q_id=-1){
        $sql = "select q_id, q_text,q_a,q_b,q_c,q_d,q_cho from question where q_type=0 ";
        if ($test_type_id != -1)
            $sql .= " and test_type_id=$test_type_id";
        if ($q_text != "")
            $sql .= " and instr(q_text, '$q_text') > 0";
        if ($q_id != -1)
            $sql .= " and q_id=$q_id";
        $sth = parent::prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll();
        return $res;
    }
    public function getRandSel($test_type_id=-1, $que_of_num=60){
        $sql = "select * from question where q_type=0 ";
        if ($test_type_id != -1)
            $sql .= " and test_type_id=$test_type_id";
        
        $sth = parent::prepare($sql);
        $sth->execute();
        $res_all = $sth->fetchAll();
        $res_rand = array();
        $pid_num = count($res_all);
        $temp = array();
        
        if($pid_num<$que_of_num)
            $que_of_num = $pid_num;
        
        for ($i=0; $i<$que_of_num; $i++)
        {
            $rand_num = rand(0,$pid_num-$i-1);
            $res_rand[$i] = $res_all[$rand_num];
            $temp = $res_all[$rand_num];
            $res_all[$rand_num]=$res_all[$pid_num-$i-1];
            $res_all[$pid_num-$i-1] = $temp;
        }
        
        return $res_rand;
    }
    public function addOneJud($q_text, $q_cho, $test_type_id){
        if (empty($q_text) || empty($q_cho) || empty($test_type_id)) return "添加失败";
        
        $sql = "insert into question(q_type,q_text,q_cho,test_type_id) values(1,?,?,?)";
        $sth = parent::prepare($sql);
        $arr = array($q_text, $q_cho, $test_type_id);
        $this->trimArr($arr);
        $sth->execute($arr);
        
        return "添加成功";
    }
    public function addMulJud($text, $test_type_id){
        $ques = explode('#Q', $text);
        array_shift($ques);
        $sql = "insert into question(q_type,q_text,q_cho,test_type_id) values(1,?,?,?)";
        $sth = parent::prepare($sql);
        
        $errorCho = 0;
        foreach($ques as $que){
            $arr = explode("#", $que);
            $this->trimArr($arr);
            if (count($arr) == 2){
                if (in_array($arr[1], $this->possibleJudCho)){//Check if the choose char is legal
                    $arr[] = $test_type_id;
                    $sth->execute($arr);
                }else $errorCho ++;
            }
        }
        
        return $this->message($errorCho);
    }
    public function getJud($test_type_id=-1, $q_text="", $q_id=-1){
        $sql = "select q_id, q_text, q_cho from question where q_type=1 ";
        if ($test_type_id != -1)
            $sql .= " and test_type_id=$test_type_id";
        if ($q_text != "")
            $sql .= " and instr(q_text, '$q_text') > 0";
        $sth = parent::prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll();
        return $res;
    }
    public function getRandJud($test_type_id=-1, $que_of_num=60){
        $sql = "select * from question where q_type=1 ";
        if ($test_type_id != -1)
            $sql .= " and test_type_id=$test_type_id";
        
        $sth = parent::prepare($sql);
        $sth->execute();
        $res_all = $sth->fetchAll();
        $res_rand = array();
        $pid_num = count($res_all);
        $temp = array();
        
        if($pid_num<$que_of_num)
            $que_of_num = $pid_num;
        
        for ($i=0; $i<$que_of_num; $i++)
        {
            $rand_num = rand(0,$pid_num-$i-1);
            $res_rand[$i] = $res_all[$rand_num];
            $temp = $res_all[$rand_num];
            $res_all[$rand_num]=$res_all[$pid_num-$i-1];
            $res_all[$pid_num-$i-1] = $temp;
        }
        
        return $res_rand;
    }
    public function addOneAns($q_text, $q_a, $test_type_id){
        $sql = "insert into question(q_type,q_text,q_a,test_type_id) values(2,?,?,?)";
        $sth = parent::prepare($sql);
        $arr = array($q_text, $q_a, $test_type_id);
        $this->trimArr($arr);
        $sth->execute($arr);
        return "添加成功";
    }
    public function addMulAns($text, $test_type_id){
        $ques = explode('#Q', $text);
        array_shift($ques);
        $sql = "insert into question(q_type,q_text,q_a,test_type_id) values(2,?,?,?)";
        $sth = parent::prepare($sql);
        foreach($ques as $que){
            $arr = explode("#", $que);
            $this->trimArr($arr);
            if (count($arr) == 2){
                $arr[] = $test_type_id;
                $sth->execute($arr);
            }
        }
        return "添加成功";
    }
    public function getAns($test_type_id=-1, $q_text="", $q_id=-1){
        $sql = "select q_id, q_text,q_a from question where q_type=2 ";
        if ($test_type_id != -1)
            $sql .= " and test_type_id=$test_type_id";
        if ($q_text != "")
            $sql .= " and instr(q_text, '$q_text') > 0";
        if ($q_id != -1)
            $sql .= " and q_id=$q_id";
        $sth = parent::prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll();
        return $res;
    }
    public function getRandAns($test_type_id=-1, $que_of_num=60){
        $sql = "select * from question where q_type=2 ";
        if ($test_type_id != -1)
            $sql .= " and test_type_id=$test_type_id";
        
        $sth = parent::prepare($sql);
        $sth->execute();
        $res_all = $sth->fetchAll();
        $res_rand = array();
        $pid_num = count($res_all);
        $temp = array();
        
        if($pid_num<$que_of_num)
            $que_of_num = $pid_num;
        
        for ($i=0; $i<$que_of_num; $i++)
        {
            $rand_num = rand(0,$pid_num-$i-1);
            $res_rand[$i] = $res_all[$rand_num];
            $temp = $res_all[$rand_num];
            $res_all[$rand_num]=$res_all[$pid_num-$i-1];
            $res_all[$pid_num-$i-1] = $temp;
        }
        
        return $res_rand;
    }
    
}
$que = new question();
$que->getRandJud(1,60);
//$que->addMulAns(" #QI'm a ?  #man #Qfengjei #plant", 1); 
//$que->addMulJud("#Qfengjiu# Y#Qchenyou# N", 1);
//echo $que->addMulSel("#Qque#A#B#C#D# C#QUE#AA#BB#CC#DD#  E", 1);
//$que->getSel(-1,'凤姐');
//$que->addOneAns("fengjie", "man", 1);
//$que->addOneJud("fengji", " Y ", 1);
//$que->addOneSel("fengjie", "Y", "B", "C", "D"," A ", 1);

?>




