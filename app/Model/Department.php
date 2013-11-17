<?php

class Department extends AppModel {

//    public $hasAndBelongsToMany = array(
//        'TestType' =>
//        array(
//            'className' => 'TestType',
//            'joinTable' => 'tests',
//            'foreignKey' => 'department_id',
//            'associationForeignKey' => 'test_type_id',
//            'unique' => true,
//            'conditions' => '',
//            'fields' => '',
//            'type' => 'inner',
//            'order' => '',
//            'limit' => '',
//            'offset' => '',
//            'finderQuery' => '',
//            'deleteQuery' => '',
//            'insertQuery' => ''
//        )
//    );
    public $hasMany = array(
        'Test' => array(
            'className' => 'Test',
            'dependent' => true
        ),
        'Major' => array(
            'className' => 'Major'
        )
    );
    public function combine($fromId, $toId) {
        $dataSource = $this->getDataSource();
        $dataSource->begin();
        $ok1 = $this->Major->updateAll(
                array('department_id' => $toId),
                array('department_id' => $fromId)
                );
        $ok2 = $this->Test->updateAll(
                array('department_id' => $toId),
                array('department_id' => $fromId)
                );
        
        $ok3 = $this->delete($fromId);
        if ($ok1 && $ok2 && $ok3) {
            $dataSource->commit();
            return true;
        } else {
            $dataSource->rollback();
            return false;
        }
    }
     public function getDepartmentArray() {
        $data = $this->find('all');
        foreach($data as $row) {
            $department[$row['Department']['id']] = $row['Department']['dept_name'];
        }
        return $department;
    }
    public function getConditions($dept_id, $major_id, $class_id){
        $conditions = array();
        if ($class_id != -1)
            $conditions['Class.id'] = $class_id;
        else if ($major_id != -1)
            $conditions['Major.id'] = $major_id;
        else if ($dept_id != -1)
            $conditions['Department.id'] = $dept_id;
        return $conditions;
    }

}
