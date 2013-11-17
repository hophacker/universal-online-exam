<?php

class Manager extends AppModel {

    public $belongsTo = 'Department';

    /*
     * ret:
     *  1 => 用户名不存在
      2 => 密码不对
      0 => 正确
     * $type:
     * 2: department_manager
     * 3: school_manager
     */

    public function check($m_user, $m_pwd, $type) {
        if ($type == 2)
            $dept_con = 'department_id != 0';
        else if ($type == 3)
            $dept_con = 'department_id = 0';
        $manager = $this->find('first', array('conditions' => array('m_user' => $m_user, $dept_con)));
        if ($manager) {
            if ($manager['Manager']['m_pwd'] == md5($m_pwd))
                return 0;
            else
                return 2;
        }
        else
            return 1;
    }

    public function setSession($user) {
        $Manager = $this->find('first', array(
            'conditions' => array('m_user' => $user)// , 'department_id != 0')
        ));
        $_SESSION['Manager'] = $Manager;
    }

}
