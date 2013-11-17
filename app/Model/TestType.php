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
class TestType extends AppModel {
    public $uses = 'Promotion';
    public function getLegalTypes(){
        return $this->find('all', Array('fields' => array('id','name')));
    }
    public function getTestTypes(){
        return $this->find('all', Array('fields' => array('id','name', 'grad_test_type_id'),
            'conditions' => array('id != grad_test_type_id')
        ));
    }
    public function getTestTypeName() {
        $data = $this->find('all', array('fields' => array('id','name')));
        foreach($data as $row) {
            $ret[$row['TestType']['id']] = $row['TestType']['name'];
        }
        return $ret;
    }
    public function getTestTypesWithAns(){
        return $this->find('list', Array('fields' => array('id','name'),
            'conditions' => array('id != grad_test_type_id', 'ans_num != 0')
        ));
    }
    public function getTestTypesList(){
         return $this->find('list', array(
            'conditions' => array('id != grad_test_type_id'),
            'fields' => array('name')
         ));
    }
    //put your code here
    public $hasMany = array(
        'Promotion' =>array(
            'className'=>'Promotion',
            'foreignKey'=>'test_type_id',
            'dependent'=>true
        )
    );
    
    public $validate = array(
        'name'=>array(
          'rule'=>'/.*/',
          'allowEmpty'=>false  
        ),
        'sel_num'=> array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'
        ),
        'sel_score'=> array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'
        ),
        'jud_num'=> array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'
        ),
        'jud_score'=> array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'
        ),
        'ans_num'=> array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'
        ),
        'ans_score'=> array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'
        ),
        'pass_score'=> array (
            'rule'=>'numeric',
            'required'=>true,
            'message'=>'请输入数字'  
        )
    );
}

?>
