<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TryHistory
 *
 * @author john
 */
class TryHistory extends AppModel {

    //put your code here
    //public $belongsTo = 'Student';

    public $joinStudent = array(
        array('table' => 'students',
            'alias' => 'Student',
            'conditions' => array('TryHistory.student_id=Student.id')));

}

?>
