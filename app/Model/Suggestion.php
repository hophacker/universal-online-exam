<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Information
 *
 * @author john
 */
class Suggestion extends AppModel{
    //put your code here
    public $belongsTo = array(
        'Student' =>array(
            'className'=>'Student',
            'foreignKey'=>'student_id',
            'dependent'=>true
        )
    );
    public $hasMany = array(
        'SuggestionReply' => array(
            'className' => 'SuggestionReply',
            'foreignKey' => 'suggestion_id',
            'dependent' => true,
            'order' => 'date DESC, id DESC'
        )
    );
}

?>
