<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MajorsController
 *
 * @author john
 */
class MajorsController extends AppController{
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }
    //put your code here
    public $uses = array('Major', 'Cla');
    public function index(){
        $this->autoRender = false;
        var_dump($this->Major->find('first'));
        return "fegnjie";
    }
    public function setting($department_id){
        $this->Major->hasMany = array();
        
        $this->set('data', $this->Major->find('all', array(
            'conditions' => array('department_id' => $department_id),
            'fields' => array('Major.id', 'Major.major_name', 'COUNT(`Cla`.`id`) as `count`'),
            'joins' => array('LEFT JOIN `classes` AS `Cla` ON `Cla`.`major_id` = `Major`.`id`'),
            'group' => array('Major.id')
        )));
        $this->set('majors', $this->Major->find('list', array(
            'conditions' => array('department_id' => $department_id),
            'fields' => array('id', 'major_name')
        )));
        $this->set('department_id', $department_id);
        
    }
    public function delete(){
        if ($this->request->is('get')) 
            throw new MethodNotAllowedException();
        $id = $this->request->data['Major']['id'];
        if ($this->Cla->findByMajorId($id)){
            $this->artMessage('该专业还有下属班级，请先删除各下属班级后再操作，或者将该专业合并至其他专业');
        }elseif ($this->Major->delete($id, true)) {
            $this->artFlash('ok');
        }
        $this->redirect($this->referer());
    }
    public function add(){
        if ($this->request->is('post')) {
            $this->Major->create();
            if ($this->Major->save($this->request->data)) 
                $this->artFlash('ok');
            else 
                $this->artFlash('fail');
            
        }
        $this->redirect($this->referer());
    }
    public function combine(){
//            $this->artMessage('出于系统安全以及稳定考虑，暂不支持合并操作');
//            $this->redirect($this->referer());
//        return;
        if ($this->request->is('post')) {
            $data = $this->request->data['Major'];
            $fromId = trim($data['from']);
            $toId = trim($data['to']);
            if ($fromId == $toId)
                $this->artMessage('合并的两个学院不可以相同');
            else{
                if ($this->Major->combine($fromId, $toId))
                    $this->artFlash('ok');
                else $this->artFlash('fail');
            }
        }
        $this->redirect($this->referer());
    }
}
?>
