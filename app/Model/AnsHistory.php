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
class AnsHistory extends AppModel{
    function jionTryHistory() {
        return array(
            array('table' => 'try_histories',
                'alias' => 'TryHistory',
                'conditions' => array('AnsHistory.try_history_id=TryHistory.id'))
        );
    }
}

?>
