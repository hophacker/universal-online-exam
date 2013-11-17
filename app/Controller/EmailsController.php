<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassesController
 *
 * @author john
 */
class EmailsController extends AppController {

    //put your code here
    public function send() {
        $this->autoRender = false;
        App::uses('CakeEmail', 'Network/Email');
        $Email = new CakeEmail();
        $Email->from(array('676384955@qq.com' => 'qq.com'));
        $Email->to('fengjie1314126@126.com');
        $Email->subject('About');
        $Email->send('My message');
    }
}

?>
