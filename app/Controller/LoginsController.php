<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author you
 */
class LoginsController extends AppController {
    /*
     * result: 1=>
     */
    public $uses = array('Manager', 'Student');
    private $err_mes = array(array("ret" => 0, "mes" => "登录成功"),
        array("ret" => 1, "mes" => "用户名不存在"),
        array("ret" => 2, "mes" => "密码错误"),
        array("ret" => 3, "mes" => "用户名、密码、登录类型不能为空")
        );
   
    public function index() {
        $title_for_layout = 'fengjie';
        $this->layout="";
//        $this->layout = "dangxiao";
    }

    public function LoginCheck() {
        $this->autoRender = false;
        $data = $this->request->data;
        if (!isset($data['upass']) || !isset($data['uname']) || !isset($data['logtype'])) {
            return json_encode($this->err_mes[3]);
        } else {
            $pwd = $data['upass'];
            $user = $data['uname'];
            $logType = $data['logtype'];
            
            /*
             * 此处确保帐号按照分类登录，deparment_id != 0 和 department_id = 0
             */
            if ($logType == '1') 
                $retNum = $this->Student->check($user, $pwd);
            else if ($logType == '2') 
                $retNum = $this->Manager->check($user, $pwd, 2);
            else if ($logType == '3') 
                $retNum = $this->Manager->check($user, $pwd, 3);
            
            if ($retNum == 0){
                switch($logType){
                    case '1':
                        $this->loadModel('Student');
                        $Student = $this->Student->find('first', array(
                           'conditions' => array('s_user' => $user),
                            'fields' => 'Student.*, Class.*, Major.*, Department.*, ', 
                            'joins' => $this->Student->fullJoins()
                        ));
                        $this->Student->save(array(
                                'id' => $Student['Student']['id'],
                                'last_login' => date('Y-m-d H:i:s')
                                ));
                        $_SESSION['Student'] = $Student;
                        //CakeSession::write('Student', $Student);
                        break;
                    case '2':
                        $this->loadModel('Manager');
                        $this->Manager->setSession($user);
                        break;
                    case '3':
                        $this->loadModel('Manager');
                        $this->Manager->setSession($user);
                        break;
                }
            }
            return json_encode($this->err_mes[$retNum]); 
        }
    }
    public function exitSystem(){
        session_start();
        session_destroy();
        CakeSession::destroy();
        $this->redirect('/logins/index', null, true);
    }
    public function loginOutOfdate(){
    }
}

?>
