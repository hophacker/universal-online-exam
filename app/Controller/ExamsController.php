<?php
/**
 * 考试页面
 */
class ExamsController extends AppController {
    public function index($isTest=0) {
    	$ispost=false;
    	if($this->request->is('post')){
    		$ispost=true;
    	}
		$student_id=$_SESSION['Student']['Student']['id'];//登录用户编号
    	//实时抽取获得登录用户信息
		$this->loadModel('Student');
    	$student=$this->Student->findById($student_id);
    	$student=$student['Student'];
    	
    	$student_id=empty($student['id'])?0:$student['id'];//学生id
    	$test_type_id=empty($student['test_type_id'])?0:$student['test_type_id'];//考试类别
    	$test_id=empty($student['test_id'])?0:$student['test_id'];//分配的考试号
    	
    	$test_type=array();
    	//获得考试类别信息
    	if(!empty($test_type_id)){
    		$this->loadModel('TestType');
    		$test_type = $this->TestType->findById($test_type_id);
    	}
    	//获得考试信息
    	$test_info=array();
    	if(!empty($test_id)){
    		$this->loadModel('Test');
    		$test_info=$this->Test->findById($test_id);
    	}
    	
    	//判断当前是否有资格,检查当前是否有资格练习和考试
    	if(empty($student_id)||empty($test_type_id)||empty($test_type)){
    		$this->redirect('check');
    	}
		
    	//考试检查
    	if($isTest==1){
    		$hasPass=$this->check();
    		if(!$hasPass){
    			$this->redirect('check');
    		}
    	}
    	//提交答卷
    	if($ispost){
    		$this->autoRender=false;
    		//获得正确答案
    		$answer=$this->request->data('answer');
    		App::uses('CodeComponent','Controller/Component');
    		//前台加密的答案
    		$answer=CodeComponent::decode($answer);
    		$rightAnswer=split(',',$answer);
    		if(empty($rightAnswer)){
    			return $this->json_error();
    		}

    		$data=$this->request->data;
    		//获得用户判断与选择的答案
    		$user_answers=array();
    		for($i=1;$i<=count($rightAnswer);$i++){
    			$user_answers[$i-1]=!empty($data['an'.$i])?$data['an'.$i]:null;
    		}
    		$score=$this->get_score($student['test_type_id'], $rightAnswer, $user_answers);
    		if($score===false) return $this->json_error();
    		else{
    			$data=array();
    			$data['test_date']=date('Y-m-d H:i:s',time());
    			$data['sel_score']=$score['select'];
    			$data['jud_score']=$score['judge'];
    			$data['student_id']=$student_id;
    			$data['ans_score']=0;
    			$data['test_type_id']=$test_type_id;
    			$data['try_type']=$isTest;
    			$data['test_id']=$isTest==1?$test_id:0;//考试编号
    			
    			$this->loadModel('TryHistory');
    			$ret=$this->TryHistory->save($data);//更新数据
    			
    			if($ret){
    				$try_history_id=$this->TryHistory->getLastInsertID();
    				
    				//简答题
    				if($test_type['TestType']['ans_num']>0){
    					$allAnswerIds=$this->request->data('ans_ids');//简答题的题目id
    					$allAnswers=$this->request->data('ans');//简答题
    				
    					$this->loadModel('AnsHistory');
    					$updateData=array();
    					if(!empty($allAnswerIds)){
    						foreach ($allAnswerIds as $i=>$id){
    							$data=array();
    							$data['question_id']=$id;
    							$data['answer']=$allAnswers[$i];
    							$data['try_history_id']=$try_history_id;
    							$updateData[]=$data;
    						}
    						$ret=$this->AnsHistory->saveMany($updateData);
    					}
    				}
    			}else{
    				return $this->json_error('交卷失败！');
    			}
    			if($isTest==0){//平时练习，更新练习次数和最高分
    				$conditions=array();
    				$conditions['student_id']=$student_id;
    				$conditions['test_type_id']=$test_type_id;
    				$this->loadModel('TryHistory');
    				$try_histories=$this->TryHistory->find('all',array('conditions'=>$conditions));
    				$data=array();
    				//$data['times']=count($try_histories);
    				$highest=0;
    				$exam_score=$this->get_allow_score();
    				$times=0;
    				foreach ($try_histories as $try){
    					$total=intval($try['TryHistory']['sel_score'])+intval($try['TryHistory']['jud_score'])+intval($try['TryHistory']['ans_score']);
    					if($total>=$exam_score) $times++;
    					$highest=$highest>$total?$highest:$total;
    				}
    				$data['times']=$times;
    				$data['highest']=$highest;
    				$this->loadModel('Student');
    				$this->Student->id=$student_id;
    				$this->Student->save($data);
    			}else{
    			}
    			if($ret){
    				if(($isTest==0&&$score['select']+$score['judge']>=$exam_score)||$isTest==1){
    					return $this->json_success('交卷成功，点击关闭本页面！',$score);
    				}else{
    					return $this->json_success('交卷成功，但本次练习无效，练习成绩不得低于'.$exam_score.'分，！',$score);
    				}
    				
    			}
    			else return $this->json_error('交卷失败！');
    		}
    	}else{
    		//生成考题
	        $this->loadModel('Question');
	        $conditions=array();
	        $conditions['test_type_id']=$test_type_id;
	        if($isTest==0){//取出用于练习的题目
	        	$conditions['usage_scope']=0;
	        }else{//取出用于考试的题目
	        	
	        }
	        //判断题
	        $conditions['q_type']=1;
	        $judge = $this->Question->find('all',array(
	            'conditions' => $conditions,
	            'fields' => array('id','q_text','q_cho')
	        ));
	        $total=count($judge);
	        $judgeList=$total>intval($test_type['TestType']['jud_num'])?array_rand($judge,intval($test_type['TestType']['jud_num'])):array_keys($judge);
	        //选择题
	        $conditions['q_type']=0;
	        $select = $this->Question->find('all', array(
	            'conditions' => $conditions,
	            'fields' => array('id', 'q_text', 'q_cho' ,'q_a','q_b','q_c','q_d')
	        ));
	        $total=count($select);
	        $selectList=$total>intval($test_type['TestType']['sel_num'])?array_rand($select, intval($test_type['TestType']['sel_num'])):array_keys($select);
	        
	        //解答题
	        $ans=array();
	        $ansList=array();
	        if($test_type['TestType']['ans_num']>0){
		        $conditions['q_type']=2;
		        $ans = $this->Question->find('all', array(
		            'conditions' =>$conditions,
		            'fields' => array('id', 'q_text', 'q_cho')
		        ));
		        $total=count($ans);
		        $ansList=$total>intval($test_type['TestType']['ans_num'])?array_rand($ans,intval($test_type['TestType']['ans_num'])):array_keys($ans);
	        }
	        
			//输出考试题目
	        $this->set('JUDGES', $judge);
	        $this->set('judgeList', $judgeList);
	        $this->set('SELECTS', $select);
	        $this->set('selectList', $selectList);
	        $this->set('ANSES', $ans);
	        $this->set('ansList', $ansList);
	        
	        $this->set('isTest',$isTest);
	        $this->set('test_type', $test_type);
	        $this->set('student',$_SESSION['Student']);//输出用户的所有信息
	        if($isTest==1){//考试信息
	        	$this->set('test_info',$test_info);
	        }
	        //给正确答案加密操作
	        App::uses('CodeComponent','Controller/Component');
	        $answers=array();
	        foreach ($judgeList as $j){
	        	$answers[]=$judge[$j]['Question']['q_cho'];
	        }
	        foreach ($selectList as $s){
	        	$answers[]=$select[$s]['Question']['q_cho'];
	        }
	        $answer=CodeComponent::encode(join(',',$answers));
	        $this->set('answer',$answer);
    	}
    }
	/**
	 * 检查是否已经参加过考试
	 * @param int $test_id 考试编号
	 * @param int $student_id 学生编号
	 * @return boolean 参加过考试则返回true
	 */
    protected function has_exam_check($test_id,$student_id){
    	$conditions=array();
    	if(empty($test_id)||empty($student_id)) return false;
    	$conditions['test_id']=$test_id;
    	$conditions['student_id']=$student_id;
    	$conditions['try_type']=1;//类别为考试
    	$this->loadModel('TryHistory');
    	$has_test=$this->TryHistory->find('first',array('conditions'=>$conditions));
    	if(!empty($has_test['TryHistory'])) return true;
    	else return false;
    }
    /**
     * 检查是否可参加考试
     * @param int $test_type_id 考试类别
     * @param array $student 学生信息
     * @param array $promotions 引用，练习条件
     * @return boolean 通过检查则返回true
     */
    protected function exercise_check($test_type_id,$student,&$promotions){
    	//$this->loadModel('Student');
    	//$student=$this->Student->findById($student_id);
    	//$student=$student['Student'];
    	if(empty($test_type_id)||empty($student['id'])){
    		return false;
    	}
    	$conditions=array();
    	$conditions['test_type_id']=$test_type_id;
    	//考试类型设置的成绩与分数限制，可以有多个条件
    	$this->loadModel('Promotion');
    	$promotions=$this->Promotion->find('all',array('conditions'=>$conditions));
    	if(empty($promotions)){//没有限制
    		return true;
    	}
    	//取得平时成绩
    	/*
    	$this->loadModel('TryHistory');
    	$options=array();
    	$conditions['try_type']=0;
    	$conditions['student_id']=$student['id'];
    	$options['conditions']=$conditions;
    	$tryHistory=$this->TryHistory->find('all',array('conditions'=>array($conditions)));
    	if(empty($tryHistory)) return false;
    	else{
    		foreach($promotions as $promotion){
    			$promotion=$promotion['Promotion'];
    			//考试次数不符合
    			if(count($tryHistory)<$promotion['times']) return false;
    			//只要有一次符合最低成绩则返回成功
    			foreach ($tryHistory as $try){
    				$score_enough=false;
    				if($try['TryHistory']['score']>=$promotion['highest']){
    					$score_enough=true;
    					break;
    				}
    				else continue;
    			}
    			if(!$score_enough){//不符合分数要求
    				return false;
    			}
    		}
    		if($score_enough){//全部符合要求
    			return true;
    		}
    	}
    	*/
    	if(!isset($student['times'])||!isset($student['highest'])) return false;
    	foreach($promotions as $promotion){
    		if($student['highest']>=$promotion['Promotion']['highest'] && 
                $student['times'] >= $promotion['Promotion']['times']) return true;
    	}
    	return false;
    }
    /**
     * 自动给选择题和判断题评分
     * @param int $test_type_id 考试类型
     * @param array $right_ansers 正确答案
     * @param array $user_answers 用户的答案
     * @return array('select'=>(int),'judge'=>(int))
     */
    private function get_score($test_type_id,$right_ansers,$user_answers){
    	$this->loadModel('TestType');
    	$test_type = $this->TestType->findById($test_type_id);
    	if(empty($test_type)){
    		return false;
    	}else{
    		$counts=count($right_ansers);//总题目数
    		if($counts!=count($user_answers)||$counts!=($test_type['TestType']['sel_num']+$test_type['TestType']['jud_num'])){
    			return false;
    		}
    		$sel_score=0;
    		$jud_score=0;
    		$error=array();
    		//评判判断题
    		for($i=0;$i<$test_type['TestType']['jud_num'];$i++){
    			if($right_ansers[$i]==$user_answers[$i]){
    				$jud_score+=$test_type['TestType']['jud_score'];
    			}else{
    				$error[]=$i+1;
    			}
    		}
    		//评判选择题
    		for($i=$test_type['TestType']['jud_num'];$i<$counts;$i++){
    			if($right_ansers[$i]==$user_answers[$i]){
    				$sel_score+=$test_type['TestType']['sel_score'];
    			}else{
    				$error[]=$i+1;
    			}
    		} 
    		return array('select'=>$sel_score,'judge'=>$jud_score,'error'=>$error);
    	}
    }
    /**
     * 检查考试状态
     */
    public function check(){
    	//检查登录
    	
    	//登录用户编号
    	$student_id=$_SESSION['Student']['Student']['id'];
    	//实时抽取获得登录用户信息
    	$this->loadModel('Student');
    	$student=$this->Student->findById($student_id);
    	$student=$student['Student'];
    	 
    	//$student_id=empty($student['id'])?0:$student['id'];//学生id
    	$test_type_id=empty($student['test_type_id'])?0:$student['test_type_id'];//考试类别编号
    	$test_id=empty($student['test_id'])?0:$student['test_id'];//分配的考试号
    	
    	$test_type=array();
    	//获得考试类别信息
    	if(!empty($test_type_id)){
    		$this->loadModel('TestType');
    		$test_type = $this->TestType->findById($test_type_id);
    	}
    	
    	//判断当前是否有资格
    	//条件数组
    	$check=array();
    	$check['has_test']=true;
    	if(empty($student_id)||empty($test_type_id)||empty($test_type)){
    		$check['has_test']=false;
    		//if($ispost) return $this->json_error('抱歉，您当前没有进行练习或考试的资格！');
    		//else throw new ForbiddenException('抱歉，您当前无法进行练习或考试！');
    	}
    	$exam_score=$this->get_allow_score();
    	$this->set('exam_score',$exam_score);
    	//考试检查
    	$test_info=array();
    	if(!empty($test_id)){//获得考试信息
    		$this->loadModel('Test');
    		$test_info=$this->Test->findById($test_id);
    	}
    	//平时成绩不合格，练习次数、最高分，要求 <1>
    	$check['exercise_pass']=true;
    	$promotions=array();
    	if(!$this->exercise_check($test_type_id, $student,$promotions)){
    		$check['exercise_pass']=false;
    		//if($ispost) return $this->json_error('抱歉，您的平时成绩未达到参加本场考试的要求！');
    		//else throw new ForbiddenException('抱歉，您的平时成绩未达到参加本场考试的要求！');
    	}
    	//无分配考试 <2>
    	$check['has_exam']=true;
    	if(empty($test_id)||empty($test_info)){
    		$check['has_exam']=false;
    		//if($ispost) return $this->json_error('抱歉，您当前没有可以参加的考试！');
    		//	else throw new ForbiddenException('抱歉，您当前没有可以参加的考试！');
    	}
    	else{
    		//检查考试时间是否开始 <3.1>
    		$check['not_start']=true;
    		//检查考试时间是否过期 <3.2>
    		$check['over_time']=true;
    		//开始考试时间
    		$begin_time=strtotime($test_info['Test']['begin_time']);
    		$time=time();
    		if($begin_time>$time){
    			$check['not_start']=false;
    			//throw new ForbiddenException('抱歉，考试登录时间已过期！');
    		}else{
    			//考试有效时间为小时
    			$available=intval($test_info['Test']['available'])*HOUR;
    			if($begin_time+$available<$time){
    				$check['over_time']=false;
    				//throw new ForbiddenException('抱歉，考试登录时间已过期！');
    			}
    		}
    		
    		//检查是否参加过考试 <4>
    		$check['has_join']=true;
    		if($this->has_exam_check($test_id, $student_id)){
    			$check['has_join']=false;
    			//if($ispost) return $this->json_error('您已经成功交卷，无法再次交卷！');
    			//else throw new ForbiddenException('抱歉，您已经参加过本场考试！');
    		}
    	}
    	$hasPass=true;
    	foreach ($check as $pass){
    		if($pass) continue;
    		else{
    			$hasPass=false;
    			break;
    		}
    	}
    	
    	$this->set('test_info',$test_info);
    	$this->set('student',$student);
    	$this->set('promotions',$promotions);
    	$this->set('check',$check);
    	$this->set('hasPass',$hasPass);
    	return $hasPass;
    }
    /**
     * 获得考试最低分
     */
    private function get_allow_score(){
    	$this->loadModel('Parameter');
    	$parameter=$this->Parameter->find('first',array('conditions'=>array('name'=>'exam_pass_score')));
    	$exam_score=$parameter['Parameter']['value'];
    	return $exam_score;
    }
}


?>
