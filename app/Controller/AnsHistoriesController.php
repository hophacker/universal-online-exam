<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TryHistories
 *
 * @author john
 */
class AnsHistoriesController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }


}

?>
