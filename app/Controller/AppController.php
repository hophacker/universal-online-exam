<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    protected static $dbMes = array("ok" => "您的记录已修改至数据库",
        "fail" => "您的记录修改失败");
    public function artFlash($type) {
        $this->Session->setFlash(AppController::$dbMes[$type]);
    }

    public function artMessage($mes) {
        $this->Session->setFlash($mes);
    }

    /*
     * 2: 院系管理员
     * 3: 校管理员
     */

    public function isManager() {
        if (isset($_SESSION['Manager'])) {
            if ($_SESSION['Manager']['Manager']['department_id'] == 0){
                $this->set('isManager', 3);
                return 3;
            }
            else{
                $this->set('isManager', 2);
                return 2;
            }
        }
        else
            return 0;
    }

    public function isStudent() {
        if (isset($_SESSION['Student']))
            return 1;
        else
            return 0;
    }

    public function requireManager() {
        $this->layout = "manager";
        if ($this->isManager() == 0)
            $this->logout();
    }

    public function requireDeptManager() {
        $this->layout = "manager";
        if ($this->isManager() != 2)
            $this->logout();
    }

    public function requireSchoolManager() {
        $this->layout = "manager";
        if ($this->isManager() != 3)
            $this->logout();
    }

    public function requireStudent() {
        $this->layout = "student";
        if ($this->isStudent() == 0)
            $this->logout();
    }

    public function logout() {
        $this->redirect("/Logins/loginOutOfDate");
    }

    public function beforeFilter() {
        $this->layout = 'manager';
        if (session_id() == '') {
            session_start();
        }
//        $controller = $this->request['controller'];
//        if (strtolower($controller) == 'logins' || strtolower($controller) == 'login'){}
//        else{
//            if(session_id() == '') {
//                session_start();
//            }
//            if ($this->isManager() == 0 && $this->isStudent() == 0){
//                $this->logout();
//            }else{
//                echo (//session_cache_expire());
//            }
//        }
    }

    /**
     * ------------------------------------------------------------
     * -------------公共json返回信息的函数开始------------------
     * ------------------------------------------------------------
     */

    /**
     * ajax返回成功json信息
     * @param string $info
     * @param array $data 附加信息
     */
    protected function json_success($info = '操作成功！', $data = array()) {
        $response['status'] = 1;
        $response['data'] = $data;
        $response['info'] = $info;
        $this->response->body(json_encode($response));
        return true;
    }

    /**
     * ajax返回失败json信息
     * @param string $info
     * @param array $data 附加信息
     */
    protected function json_error($info = '操作失败！', $data = array()) {
        $response['status'] = 0;
        $response['data'] = $data;
        $response['info'] = $info;
        $this->response->body(json_encode($response));
        return false;
    }

    /**
     * ------------------------------------------------------------
     * -------------公共json返回信息的函数结束------------------
     * ------------------------------------------------------------
     */

    /**
     * 检查内容（数组）是否存在空值
     * @param array|string $data
     * @return boolean 不存在则返回true
     */
    protected function checkEmpty($data) {
        if (empty($data) || !isset($data))
            return false;
        foreach ($data as $d) {
            if (empty($data) || !isset($data))
                return false;
        }
        return true;
    }

    /**
     * 检查内容（数组）是否为空
     * @param json|boolean 空则返回ajax错误信息，否则返回true 
     */
    protected function checkEmptyAjax($data) {
        if (!$this->checkEmpty($data))
            $this->json_error('请输入正确的信息！');
        else
            return true;
    }

    /**
     * 给数组中的非int型的值加上引号
     * @param array $array
     */
    protected function __add_quote(&$array) {
        foreach ($array as $k => $a) {
            if (is_int($a))
                $array[$k] = $a;
            else
                $array[$k] = "'$a'";
        }
    }

    /**
     * 将字符串转换为数字形式，无参数给与默认值-1
     * @param string|int $key
     * @param int $default
     */
    protected function getInt($value, $default = -1) {
        if (isset($value) && !empty($value))
            return intval($value);
        else
            return $default;
    }

}
