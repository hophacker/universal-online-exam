<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestsController
 *
 * @author you
 */
class TestsController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }

    public $helpers = array('Excel', 'Form', 'Html');

    public function TestThisClass() {
        $this->Test->getActiveTestsWithDuration(0, 0, 1, 2);
    }

    //put your code here
    public function getAvailableByDept($department_id = null, $test_type_id = null) {
        $this->autoRender = false;
        //$data = $this->Test->getActiveTests(0, 10000, $department_id, $test_type_id);
        $data = $this->Test->getActiveTestsWithDuration($department_id, $test_type_id);

        return json_encode($data);
    }

    public function getAvailableBySUser($s_user) {
        $this->loadModel('Student');
        $data = $this->Student->find('first', array('joins' => $this->Student->fullJoins(),
            'conditions' => array('s_user' => $s_user),
            'fields' => 'Student.test_type_id, Department.*'));
        return $this->getAvailableByDept($data['Department']['id'], $data['Student']['test_type_id']);
    }

    public function addTest() {
        $data = $this->request->data;
//        debug($data);
        // return;
        if ($this->Test->save($data)) {
            $this->Session->setFlash('Your post has been saved.');
            $this->redirect(array('controller' => 'departments',
                'action' => 'viewTime', $data['Test']['department_id']));
        } else {
            $this->Session->setFlash('Unable to add your post.');
        }
    }

    public function saveTest() {
        $data['Test'] = $this->request->data;
//        CakeLog::error(print_r($data, true));

        if ($this->Test->save($data)) {
            $this->Session->setFlash('Your post has been saved.');
            $this->redirect(array('controller' => 'departments',
                'action' => 'viewTime', $data['Test']['department_id']));
        } else {
            $this->Session->setFlash('Unable to add your post.');
            CakeLog::error($this->Test->validationErrors);
        }
    }

    public function viewHistoryTests($departmen_id = null) {
        $this->set('historyTests', $this->Test->getHistoryTests($departmen_id));
    }

    public function addToHistory($id = null) {
        if ($this->request->is('get'))
            throw new NotFoundException(__('get in addToHistory, you sucked'));
        if (!$id)
            throw new NotFoundException(__('Missing test Id'));
        $data['Test'] = array(
            'id' => intval($id),
            'active' => 0
        );
        debug($data);
        $this->Test->save($data, false);
        debug($this->Test->getDataSource()->getLog());
    }

    public function viewScores($test_id) {
        $this->set('test', $this->Test->find('first', array(
                    'conditions' => array('Test.id' => $test_id)
        )));

        $this->loadModel('TryHistory');
        $this->loadModel('Student');
        $this->TryHistory->belongsTo = array();

        $joins = array_merge(array(array('table' => 'students',
                'alias' => 'Student',
                'conditions' => array('TryHistory.student_id=Student.id'))), $this->Student->fullJoins());
        $this->set('tryHistories', $this->TryHistory->find('all', array('fields' => array('TryHistory.*', 'Student.s_name', 'Student.s_num', 'Class.class_name'
                        , 'Major.major_name', 'Department.dept_name'),
                    'conditions' => array('TryHistory.test_id' => $test_id, 'try_type' => 1),
                    'joins' => $joins)
        ));
        $this->set('test_id', $test_id);
    }

    public function downScores($test_id) {
        $this->viewScores($test_id);
    }

}

?>