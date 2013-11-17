<?php

/**
 * 帐号管理
 */
class FengjiesController extends AppController {
    public $helpers = array('Excel', 'Form', 'Html', 'Chart');
    public function insertMajors() {
        return false;
        $this->autoRender = false;
        $this->loadModel('Department');
        $this->loadModel('Major');
        $departments = $this->Department->find('all');
        foreach ($departments as $department) {
            $DId = $department['Department']['id'];
            $data = array(
                array('department_id' => $DId, 'major_name' => '硕士生'),
                array('department_id' => $DId, 'major_name' => '博士生'),
                array('department_id' => $DId, 'major_name' => '成教生'),
            );
            if ($this->Major->saveMany($data))
                echo "yes<br/>";
            else
                echo "no<br/>";
        }
    }

    public function insertClasses() {
        return false;
        $this->loadModel('Major');
        $this->loadModel('Cla');
        $results = $this->Major->find('all', array(
            'conditions' => array('or' => array(
//                array('major_name'=>'硕士生'),
//                array('major_name'=>'博士生'),
                    array('major_name' => '成教生')
                ))
        ));
        foreach ($results as $result) {
            $MId = $result['Major']['id'];
            $data = array(
                array('major_id' => $MId, 'class_name' => '2009班'),
                array('major_id' => $MId, 'class_name' => '2010班')
//                array('major_id'=>$MId, 'class_name'=>'2013班'),
            );
            if ($this->Cla->saveMany($data))
                echo "yes<br/>";
            else
                echo "no<br/>";
        }
    }

    public function test() {
        pr(App::themePath('purple'));
        pr(App::path('Model'));
        debug(App::paths());
        pr(App::path('Component', 'DebugKit'));

        debug(env('document_root'));
        debug(h('fengjie ; fengjie '));
        LogError('fengjie');
        pr(array('fengjie', 'fengjie'));
        debug(h('fengjie ; fengjie '));
        pr(YEAR);
        pr(HOUR);
    }

    public function testChart() {
        
    }

}
