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
class  ClasController extends AppController{
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }
    //put your code here
    public $uses = array('Cla', 'Student');
    public function index(){
        $this->autoRender = false;
        var_dump($this->Cla->find('first'));
        return "fegnjie";
    }
    public function testing(){
        pr($this->Cla->find('all', array('conditions' => array('Cla.id' => 1))));
    }
    public function setting($major_id){
        $this->Cla->hasMany = array();
        
        $this->set('data', $this->Cla->find('all', array(
            'conditions' => array('major_id' => $major_id),
            'fields' => array('Cla.id', 'Cla.class_name', 'COUNT(`Student`.`id`) as `count`'),
            'joins' => array('LEFT JOIN `students` AS `Student` ON `Student`.`class_id` = `Cla`.`id`'),
            'group' => array('Cla.id')
        )));
        $this->set('classes', $this->Cla->find('list', array(
            'conditions' => array('major_id' => $major_id),
            'fields' => array('id', 'class_name')
        )));
        $this->set('major_id', $major_id);
        
    }
    public function delete(){
        if ($this->request->is('get')) 
            throw new MethodNotAllowedException();
        $id = $this->request->data['Cla']['id'];
        if ($this->Student->findByClassId($id)){
            $this->artMessage('该专业还有下属班级，请先删除各下属班级后再操作，或者将该专业合并至其他专业');
        }elseif ($this->Cla->delete($id, true)) {
            $this->artFlash('ok');
        }
        $this->redirect($this->referer());
    }
    public function add(){
        if ($this->request->is('post')) {
            $this->Cla->create();
            if ($this->Cla->save($this->request->data)) 
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
            $data = $this->request->data['Cla'];
            $fromId = trim($data['from']);
            $toId = trim($data['to']);
//            debug($fromId);
//            debug($toId);
            if ($fromId == $toId)
                $this->artMessage('合并的两个学院不可以相同');
            else{
                if ($this->Cla->combine($fromId, $toId))
                    $this->artFlash('ok');
                else $this->artFlash('fail');
            }
        }
        $this->redirect($this->referer());
    }
}

?>
