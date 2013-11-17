<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InformationController
 *
 * @author john
 */
class InformationController extends AppController{
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }
    //put your code here
    public function index(){
        $this->set('title_for_layout', '查看通知');
    }
}

?>
