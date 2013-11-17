<?php
/**
 * 考试分配信息的相关函数
 * @author jiangjun 
 * @version 1.0 考试分配页面相关函数
 */
class MenusController extends AppController {
    public function Student() {
        parent::requireStudent();
        $this->layout = "";
        $this->view = "index";
        $this->set('type', "1");
    }

    public function DepartmentManager() {
        parent::requireDeptManager();
        $this->layout = "";
        $this->view = "index";
        $this->set('type', "2");
    }

    public function SchoolManager() {
        parent::requireSchoolManager();
        $this->layout = "";
        $this->view = "index";
        $this->set('type', "3");
    }

    public function tabs($type) {
        $this->layout = "";
        if ($type == 1) {
            $data = array(
                'style' => 'south-street',
            );
        } else if ($type == 2) {
            $data = array(
                'style' => 'sunny'
            );
        } else if ($type == 3) {
            $data = array(
                'style' => 'sunny'
            );
        }
        $this->set('data', $data);
    }

    public function menu($type) {
        $this->layout = "";
        if ($type == 1) {
            $data = array(
                'xml' => 'student_menu',
                'style' => 'vista'
            );
        } else if ($type == 2) {
            $data = array(
                'xml' => 'department_manager_menu',
                'style' => 'bluearrow'
            );
        } else if ($type == 3) {
            $data = array(
                'xml' => 'school_manager_menu',
                'style' => 'bluearrow'
            );
        }
        $this->set('data', $data);
    }

}
