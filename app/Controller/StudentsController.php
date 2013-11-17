<?php

class StudentsController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        parent::requireManager();
    }
    var $helpers = array(
        'Html',
        'Session',
        'Paginator',
        'Chart'
    );
    var $paginate = array(
        'limit' => 25,
        'order' => array(
            'Students.s_id' => 'asc'
        )
    );

    public function testing() {
        pr($this->Student->find('all', array(
                    'conditions' => array('Student.id' => 1)
        )));
    }

    public function index() {
        $data = $this->paginate('students');
        $this->set('students', $data);
    }

    public function register() {
        
    }

    public function setTestIds() {
        $this->autoRender = false;
        $test_id = $this->request->data('test_id');
        $student_ids = $this->request->data('student_ids');
        $ids = explode(',', $student_ids);
        $records = array();
        foreach ($ids as $id) {
            // if id == "" then id will be 0
            $records[] = array('id' => $id, 'test_id' => $test_id);
        }
        if ($this->Student->saveAll($records)) {
            return array('result' => '成功');
        }
        else
            return array('result' => '失败');
    }

    public function setTestType($type = 0) {
        if ($type == 0) {
            $this->loadModel('TestType');
            $test_type_names = $this->TestType->getTestTypesList();
            $this->set('test_type_names', $test_type_names);
        } else if ($type == 1) {
            $this->autoRender = false;
            $test_type_id = $this->request->data['test_type_id'];
            $s_nums = $this->request->data['s_nums'];
            $SNs = explode(',', $s_nums);
            $this->loadModel('Student');

            $ret_mes = "";
            foreach ($SNs as $s_num) {
                if ($this->Student->find('all', array('conditions' => array('s_num' => $s_num))))
                    $this->Student->updateAll(array('test_type_id' => $test_type_id,
                        'test_type_changed' => 1,
                        'highest' => 0,
                        'times' => 0), array('s_num' => $s_num));
                else
                    $ret_mes .= "$s_num,";
            }
            
            if ($ret_mes != ""){
                $this->json_error("以下学号的同学由于学号不存在无法更新:" . $ret_mes);
            }else $this->json_success ();
            
        }
    }
    public function viewRegisterChartPerDepartment(){
    }
    public function viewRegisterChartPerDepartmentNow($dept_id, $major_id, $class_id, $span){
        $this->layout = 'blank';
        $this->loadModel('Department');
        $options['joins'] = $this->Student->fullJoins();
        $options['conditions'] = $this->Department->getConditions($dept_id, $major_id, $class_id);
        $options['fields'] = array('reg_date');
        $data = $this->Student->find('all', $options);
        $this->set('data', $data);
        $this->set('span', intval($span));
    }
}