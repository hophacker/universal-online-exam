<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestType
 *
 * @author ark
 */
class Promotion extends AppModel {
    //put your code here
    public $validate = array(
        'times'=>array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'
        ),
        'highest'=>array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'
        )
    );
    public function getPromotionConditions($test_type_id){
        $promotions = $this->find('all', array(
            'conditions' => array('test_type_id' => $test_type_id)
        ));
        //(S.times > 1 and S.highest>1) or(S.times > 1 and S.highest>1)
        $condition = array();
        foreach($promotions as $promotion){
            $promotion = $promotion['Promotion'];
            $condition[] = array('and' => 
                array(
                    array('times >=' => $promotion['times']),
                    array('highest >=' => $promotion['highest']))
                );
        }
        return array('or' => $condition);
    }
}

?>
