<?php

App::import('Controller', 'Jqgrid');

/**
 * 通知部分信息相关函数
 * @author jiangjun
 * @version 1.0 发布新通知
 */
class ManagersController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }
    public function changeInfo(){
        if (!$this->request->data){
            $this->request->data = $_SESSION['Manager'];
        }else{
            $this->request->data['Manager']['m_pwd'] = md5($this->request->data['Manager']['m_pwd']);
            $this->Manager->save($this->request->data);
            $this->Manager->setSession($this->request->data['Manager']['m_user']);
            $this->request->data = $_SESSION['Manager'];
        }
    }
}