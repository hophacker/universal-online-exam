<?php 
    echo $this->Form->create('TestType');
    
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('name', array('rows' => '1','label'=>'考试类型'));
    echo '<div class="input textarea">';
    echo '<label for="TestTypeStyle">考试方式</label>';
    echo $this->Form->select('style', array(0=>'抽取题库',1=>'抽取试卷'),array('empty'=>false));
    echo '</div>';
    echo '<div class="input textarea">';
    echo '<label for="TestTypeGradTestTypeId">通过后参加</label>';
    echo $this->Form->select('grad_test_type_id',$option,array('empty'=>false));
    echo '</div>';
    echo $this->Form->input('sel_num',array('rows' => '1','label'=>'选择题数'));
    echo $this->Form->input('sel_score',array('rows' => '1','label'=>'选择题分值'));
    echo $this->Form->input('jud_num',array('rows' => '1','label'=>'判断题数'));
    echo $this->Form->input('jud_score',array('rows' => '1','label'=>'判断题分值'));
    echo $this->Form->input('ans_num',array('rows' => '1','label'=>'解答题数'));
    echo $this->Form->input('ans_score',array('rows' => '1','label'=>'解答题分值'));
    echo $this->Form->input('pass_score',array('rows' => '1','label'=>'通过分值'));
    echo $this->Form->input('exam_duration',array('rows' => '1','label'=>'练习时长'));
    echo $this->Form->input('comment',array('rows' => '2','label'=>'备注'));
    echo $this->Form->end('保存');
?>