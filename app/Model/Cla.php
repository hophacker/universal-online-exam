<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Class
 *
 * @author john
 */
class Cla extends AppModel{
//put your code here
    public $name = 'Class';
    public $belongsTo = 'Major';
    public $hasMany = array(
        'Student' => array(
            'className' => 'Student',
            'dependent' => true
        )
    );
    
    public function combine($fromId, $toId) {
        $dataSource = $this->getDataSource();
        $dataSource->begin();
        $ok1 = $this->Student->updateAll(
                array('class_id' => $toId), array('class_id' => $fromId)
        );
        $ok2 = $this->delete($fromId);
        if ($ok1 && $ok2) {
            $dataSource->commit();
            return true;
        } else {
            $dataSource->rollback();
            return false;
        }
    }
}
?>
