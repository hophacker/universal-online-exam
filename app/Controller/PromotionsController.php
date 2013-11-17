<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestTypesController
 *
 * @author ark
 */
class TestTypesController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }
    //put your code here
  
}

?>
