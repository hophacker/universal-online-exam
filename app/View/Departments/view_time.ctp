<?php echo $this->Html->script('Department/index.js');
echo $this->Form->label('', $dept_name."考试记录", array('class' => 'very_larger_label'));
echo $this->Html->link('查看考试历史记录',array('controller'=> 'tests', 'action' => 'viewHistoryTests',
    $department_id), array('target'=>'_blank'));

echo $this->Form->button("添加考试", array('id' => 'addTime'));
echo $this->Form->button("取消添加", array('id' => 'cancelAddTime'));

echo "<div id='addBlock'>";
echo "<br/>";
echo $this->Form->create('Test', array('action'=>'addTest'));
echo $this->Form->select('test_type_id', $test_types, array('empty'=>false));

echo $this->Form->hidden('department_id', array('value' => $department_id)); 
echo $this->Form->input('begin_time', array('label'=>'开始时间'));
echo $this->Form->input('duration', array('label'=>'时长(分钟)'));
echo $this->Form->input('available', array('label'=>'有效时间(小时)'));
echo $this->Form->input('second_begin_time', array('label'=>'补考开始时间'));
echo $this->Form->input('Comment', array('label'=>'说明'));
echo $this->Form->end('保存');
echo "</div>";
$this->Js->buffer("$('#addBlock').hide();");


echo $this->element('Department/time_entry', array('name' => 'TestsOnGoing','label' => "正在进行的考试"));
echo $this->element('Department/time_entry', array('name' => 'hour_tests','label' => "一小时内开始"));
echo $this->element('Department/time_entry', array('name' => 'day_tests','label' => "一天内开始"));
echo $this->element('Department/time_entry', array('name' => 'week_tests','label' => "一周内开始"));
echo $this->element('Department/time_entry', array('name' => 'above_week_tests','label' => "一周外开始"));
echo $this->element('Department/time_entry', array('name' => 'inactive_tests','label' => "已过期考试", 'addToHistory' => 1));





//debug($hour_tests);
//debug($day_tests);
//debug($week_tests);
//debug($above_week_tests);
//debug($inactive_tests);

?>
