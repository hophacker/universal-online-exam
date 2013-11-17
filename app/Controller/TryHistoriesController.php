<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TryHistories
 *
 * @author john
 */
class TryHistoriesController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
    }
    //put your code here
    public function testing() {
        echo "fengjie";
        $this->flash("fengjie", array('controller' => 'TryHistories', 'actoin' => 'testing'), 10, '');
    }

    public function getExcresizeHitories() {
        parent::requireManager();
        $student_id = $this->getInt($this->request->data('student_id'));
        $test_type_id = $this->getInt($this->request->data('test_type_id'));

        $this->autoRender = false;
        $data = $this->TryHistory->find('all', array(
            'conditions' => array(
                'try_type' => 0,
                'student_id' => $student_id,
                'test_type_id' => $test_type_id
            )
        ));
        return json_encode($data);
    }

    /* The student has already login, and student_id is in 
     */

    public function viewHistories($test_type_id = 0) {
        $student_id = $_SESSION['Student']['Student']['id'];
        $this->loadModel('TestType');

        $test_types = $this->TestType->getTestTypesList();
        $this->set('test_types', $test_types);

        if ($test_type_id != 0) {
            $this->set('list_it', 1);
            $this->set('test_type_name', $test_types[$test_type_id]);
            $this->set('excercise_histories', $this->TryHistory->find('all', array(
                        'conditions' => array(
                            'try_type' => 0,
                            'student_id' => $student_id,
                            'test_type_id' => $test_type_id
                        )
            )));
            $this->set('exam_histories', $this->TryHistory->find('all', array(
                        'conditions' => array(
                            'try_type' => 1,
                            'student_id' => $student_id,
                            'test_type_id' => $test_type_id
                        )
            )));
        }
    }

    public function viewExamAnsHistories() {
        parent::requireManager();
        $this->loadModel('TestType');
        $testtypes = $this->TestType->getTestTypesWithAns();
        $this->set('testtypes', $testtypes);
    }

    public function getExamAnsHistories() {
        parent::requireManager();
        $this->autoRender = false;
        if (!$this->request->is('ajax') || !$this->request->is('post')) {
            throw new ForbiddenException();
        }

        $this->loadModel('Student');
        $options['joins'] = array_merge($this->TryHistory->joinStudent, $this->Student->fullJoins());
//        debug($options['joins']);

        $conditions = array();
        $conditions['try_type']= 1;
        $dept_id = $this->getInt($this->request->data('dept_id'));
        $major_id = $this->getInt($this->request->data('major_id'));
        $class_id = $this->getInt($this->request->data('class_id'));
        $st_type = $this->getInt($this->request->data('st_type'));
        $s_grade = $this->getInt($this->request->data('s_grade'));
        $s_user = trim($this->request->data('s_user'));

        if ($s_user != "")
            $conditions['s_user'] = $s_user;
        else {
            if ($class_id != -1)
                $conditions['Class.id'] = $class_id;
            else if ($major_id != -1)
                $conditions['Major.id'] = $major_id;
            else if ($dept_id != -1)
                $conditions['Department.id'] = $dept_id;
        }

        if ($st_type != -1)
            $conditions['Student.test_type_id'] = $st_type;
        if ($s_grade != -1)
            $conditions['s_grade'] = $s_grade;

        if ($conditions)
            $options['conditions'] = $conditions;
//        debug($conditions);
        $options['fields'] = array('Department.dept_name, Major.major_name, Class.class_name, Student.s_name, Student.s_num, 
            TryHistory.id, TryHistory.has_checked, TryHistory.ans_score');
//        $options['fields'] = array('id', 's_name', 's_num', 'test_id', 'times', 'highest', 'TryHistory.*');
        $histories = $this->TryHistory->find('all', $options);
        $this->response->body(json_encode($histories));
    }
    /**
     * 给简答题答案批阅成绩
     */
    public function markAnsHistory($tryHistoryid){
        parent::requireManager();
    	if(empty($tryHistoryid)) return false;
    	$this->set('tryHistoryid',$tryHistoryid);
    	//获得考试记录
    	$this->loadModel('TryHistory');
    	$tryHistory=$this->TryHistory->findById($tryHistoryid);
    	//考试记录不存在、或者此次并非考试
    	if(empty($tryHistory)||$tryHistory['TryHistory']['try_type']!=1){
    		return false;
    	}
    	//获得考试类别信息
    	$this->loadModel('TestType');
    	$testType=$this->TestType->findById($tryHistory['TryHistory']['test_type_id']);
    	if(empty($testType)){
    		return false;
    	}
    	//获得学生信息
    	$this->loadModel('Student');
    	$student=$this->Student->find('first',array('conditions'=>array('Student.id'=>$tryHistory['TryHistory']['student_id']),'joins'=>$this->Student->fullJoins(),'fields'=>'*'));
    	if(empty($student)){
    		return false;
    	}
    	//获得简答题答案记录
    	$this->loadModel('AnsHistory');
    	$conditions=array();
    	$conditions['try_history_id']=$tryHistoryid;
    	$ansHistory=$this->AnsHistory->find('all',array('conditions'=>$conditions));
    	//获得题目信息
    	$questions=array();
    	if(!empty($ansHistory)){
    		$this->loadModel('Question');
    		$qids=array();
    		foreach ($ansHistory as $ans){
    			$qids[]=$ans['AnsHistory']['question_id'];
    		}
    		$questions=$this->Question->find('all',array('conditions'=>array('id'=>$qids)));
    	}
    	$ques=array();
    	foreach ($questions as $q){
    		$ques[$q['Question']['id']]=$q;
    	}
    	
    	if($this->request->is('post')&&$this->request->is('ajax')){
    		$this->autoRender=false;
    		if($tryHistory['TryHistory']['has_checked']==1){
    			return $this->json_error('该试卷简答题已经批改！');
    		}
    		
    		$qids=$this->request->data('qids');//回答的id
    		$scores=$this->request->data('scores');//评分
    		$this->loadModel('AnsHistory');
    		$ret=false;
    		if(!empty($qids)){
    			$ans_score=0;
    			foreach ($qids as $i=>$id){
    				$data=array();
    				$score=intval($scores[$i]);
    				if($score<0) $score=0;
    				else if($score>$testType['TestType']['ans_score']) $score=$testType['TestType']['ans_score'];
    				$data=array();
    				$data['score']=$score;
    				$ans_score+=$score;
    				$this->AnsHistory->id=$id;
    				$ret=$this->AnsHistory->save($data);
    				if(!$ret) break;
    			}
    		}
    		if($ret){
    			$this->loadModel('TryHistory');
    			$this->TryHistory->id=$tryHistoryid;
    			$data=array();
    			$data['ans_score']=$ans_score;
    			$data['has_checked']=1;
    			$ret=$this->TryHistory->save($data);
    			if($ret) return $this->json_success('批改成功！');
    		}
    		return $this->json_error('批改失败！');
    	}
    	
    	$this->set('testType',$testType);
    	$this->set('student',$student);
    	$this->set('tryHistory',$tryHistory);
    	$this->set('ansHistory',$ansHistory);
    	$this->set('questions',$ques);
    }
}

?>
