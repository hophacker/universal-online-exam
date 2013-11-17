<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Major
 *
 * @author john
 */
class Major extends AppModel {

//    public $name = 'Class';
//    //put your code here
    public $name = 'Major';
    public $belongsTo = 'Department';
    public $hasMany = array(
        'Cla' => array(
            'className' => 'Cla',
            'dependent' => true
        )
    );

    public function combine($fromId, $toId) {
        $dataSource = $this->getDataSource();
        $dataSource->begin();
        $ok1 = $this->Cla->updateAll(
                array('major_id' => $toId), array('major_id' => $fromId)
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
