<?php
class Question extends AppModel {
    public $validate = array(
        'q_cho' => array(
            'rule' => '/[ABCDNY]{1,1}/',
            'message' => '选项只能是ABCD 或者 NY'
        )
    );
    public function addMulSel($test_type_id, $text){
        $cols = array('q_text','q_a','q_b','q_c','q_d','q_cho','test_type_id', 'q_type');
        $ques = explode('#Q', $text);
        array_shift($ques);
        $this->create();
        $data = array();
        foreach($ques as $que){
            $arr = explode("#", $que);
            $this->trimArr($arr);
            if (count($arr) == 6){
                $arr[] = $test_type_id;
                $arr[] = 0;
                $data[] = array_combine($cols, $arr);
            }
        }
        $this->saveMany($data);
    }
    public function addMulJud($test_type_id, $text){
        $cols = array('q_text','q_cho','test_type_id', 'q_type');

        $ques = explode('#Q', $text);
        array_shift($ques);
        $this->create();
        $data = array();
        foreach($ques as $que){
            $arr = explode("#", $que);
            $this->trimArr($arr);
            if (count($arr) == 2){
                $arr[] = $test_type_id;
                $arr[] = 1;
                $data[] = array_combine($cols, $arr);
            }
        }
        $this->saveMany($data);
    }
    public function addMulAns($test_type_id, $text){
        $cols = array('q_text','q_a','test_type_id','q_type');
        $ques = explode('#Q', $text);
        array_shift($ques);
        $this->create();
        $data = array();
        foreach($ques as $que){
            $arr = explode("#", $que);
            $this->trimArr($arr);
            if (count($arr) == 2){
                $arr[] = $test_type_id;
                $arr[] = 2;
                $data[] = array_combine($cols, $arr);
            }
        }
        $this->saveMany($data);
    } 
    public function trimArr(&$arr){
        foreach ($arr as &$ele){
            $ele = trim($ele, " \n\r\t");
        }
    }
}