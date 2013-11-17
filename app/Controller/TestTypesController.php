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
    public  $helpers  = array(
        'Html'
    );
    
    public function getName($data) {
        foreach($data as $row) {
            $name[$row['TestType']['id']] = $row['TestType']['name'];
        }
        return $name;
    }
    
    public function index() {
        $data = $this->TestType->find('all');
        $this->set('test_types',$data);
        
        $this->set('name', $this->getName($data)); 
    }
    
    public function delType($id) {
        //if ($this->request->is('get')) throw new MethodNotAllowedException();

        if ($this->TestType->delete($id)) {
            $this->artFlash('ok');
            $this->redirect(array('action' => 'index', 1));
        }
    }
    
    public function editType($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $test_type = $this->TestType->findById($id);
        $data = $this->TestType->find('all');
        $this->set('option', $this->getName($data));
        if (!$test_type) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->TestType->id = $id;
            debug($this->request->data);
            if ($this->TestType->save($this->request->data)) {
                $this->artFlash('ok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->artFlash('fail');
            }
        }
        if (!$this->request->data) {
            $this->request->data = $test_type;
        }
    }
    
    public function addType() {
        $data = $this->TestType->find('all');
        $this->set('option', $this->getName($data));
        if ($this->request->is('post') || $this->request->is('put')) {
            //$this->TestType->id = $id;
            //debug($this->request->data);
            if ($this->TestType->save($this->request->data)) {
                $this->artFlash('ok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to insert your post.');
            }
        }
    }
    
    public function delPromotion($id, $test_type_id) {
        $this->loadModel('Promotion');
        if ($this->Promotion->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => '/editPromotion/'.$test_type_id));
        }
    }
    
    
    public function editPromotion($id) {  
        
        if ($this->request->is('post') || $this->request->is('put')) {
            //debug($this->request->data);
            $this->loadModel('Promotion');
            
            if ($this->Promotion->save($this->request->data)) {
                $this->artFlash('ok');
                $this->redirect(array('action' => '/editPromotion/'.$id));
            } else {
                $this->artFlash('fail');
            }
        }
        
        $data = $this->TestType->find('all');
        $name = $this->getName($data);
        $test_type = $this->TestType->findById($id);
        //debug($data);
        $this->set('legend', $name[$test_type['TestType']['id']].'=>'.$name[$test_type['TestType']['grad_test_type_id']]);
        
        $promotion = $this->TestType->find('all', array(
            'conditions' => array('`TestType`.`id`'=>$id),
                'fields' => array('`promotions`.`test_type_id`',
                    '`promotions`.`id`','`promotions`.`times`','`promotions`.`highest`'),
            'joins' => array(
                array(
                    'table' => 'promotions',
                    //'type' => 'LEFT',
                    'conditions' => '`TestType`.`id` = `promotions`.`test_type_id`'
                )
            )
        ));
        //debug($promotion);
        $this->set('promotions', $promotion);
        $this->set('test_type_id', $id);
    }
    
    public function confirmPromotion() {
        $name = $this->TestType->getTestTypeName();
        $test_types = $this->TestType->getTestTypes();
        foreach ($test_types as $test_type) {
            $promotion[$test_type['TestType']['id']] = $name[$test_type['TestType']['id']].' ==> '.$name[$test_type['TestType']['grad_test_type_id']];
        }
        if(!empty($this->data)) {
            /**/
            debug($this->data);
            
            
        }
        $this->set('promotion', $promotion);
    }
    
    public function getPromotion() {
        $this->autoRender = false;
        $st_depart = $this->request->data('st_depart');
        $st_major = $this->request->data('st_major');
        $st_class = $this->request->data('st_class');
        $test_type_id = $this->request->data('test_type');
        // 当前test_type状态
        $test_type = $this->TestType->findById($test_type_id);
        /*$sel = $test_type['TestType']['sel_score'];
        $jud = $test_type['TestType']['jud_score'];
        $ans = $test_type['TestType']['ans_score'];*/
        $pass = $test_type['TestType']['pass_score'];
        $this->loadModel('Student');
        // 设置查询的条件
        $join = $this->Student->fullJoins();
        $join[count($join)] = array('table' => 'try_histories',
                'alias' => 'TryHistory',
                'conditions' => array('Student.id=TryHistory.student_id'));
        $option['joins'] = $join;
        $condition['Student.test_type_id'] = $test_type_id;
        if($st_class != -1) {
            $condition['Class.id'] = $st_class;
        } else if($st_major != -1) {
            $condition['Major.id'] = $st_major;
        } else if($st_depart != -1) {
            $condition['Department.id'] = $st_depart;
        }
        $condition['TryHistory.try_type'] = 1;
        $condition[] = 'TryHistory.sel_score + TryHistory.jud_score + TryHistory.ans_score >='.$pass;
        $field = array('Student.id', 'Student.s_name', 'Student.s_num','Department.dept_name', 'Major.major_name', 'Class.class_name','TryHistory.sel_score','TryHistory.jud_score','TryHistory.ans_score');
        $option['conditions'] = $condition;
        $option['fields'] = $field;
        //　查询符合条件的同学
        $students = $this->Student->find('all', $option);
        //debug($pass);
        //debug($students);
        // 拼接成表格
        $html = '';
        foreach($students as $student) {
            $html = $html . '<tr><td><input type="checkbox" class="chkStudent" name="chkPromotion" value="'.$student['Student']['id'].'"/></td>';
            $html = $html . '<td>'.$student['Student']['s_name'].'</td>';
            $html = $html . '<td>'.$student['Student']['s_num'].'</td>';
            $html = $html . '<td>'.$student['Department']['dept_name'].'</td>';
            $html = $html . '<td>'.$student['Major']['major_name'].'</td>';
            $html = $html . '<td>'.$student['Class']['class_name'].'</td></tr>';
        }
        echo json_encode(array('html'=>$html));
    }
    
    public function doPromotion() {
        $this->autoRender = false;
        $students = $this->request->data('student');
        $promotion = $this->request->data('promotion');
        $test_type = $this->TestType->findById($promotion);
        $students = explode(',', $students);
        $this->loadModel('Student');
        $flag = true;
       // debug($students);
        for($i=0 ;$i<count($students)-1;$i++) {
            $id  = $students[$i];
            $data = array('id'=>$id,'times'=>0,'highest'=>0,'test_type_id'=>$test_type['TestType']['grad_test_type_id']);
            if(!$this->Student->save($data)) {
                $flag = false;
            }
        }
        echo json_encode(array('success'=>$flag));
    }
}

?>
