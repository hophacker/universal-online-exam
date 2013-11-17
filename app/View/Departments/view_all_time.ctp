<?php echo $this->Html->script('Department/index.js');
echo $this->Html->link('查看考试历史记录',array('controller'=> 'tests', 'action' => 'viewHistoryTests'), array('target'=>'_blank','class' => 'very_larger_label'));
echo $this->element('Department/all_time_entry', array('name' => 'TestsOnGoing','label' => "正在进行的考试"));
echo $this->element('Department/all_time_entry', array('name' => 'hour_tests','label' => "一小时内开始"));
echo $this->element('Department/all_time_entry', array('name' => 'day_tests','label' => "一天内开始"));
echo $this->element('Department/all_time_entry', array('name' => 'week_tests','label' => "一周内开始"));
echo $this->element('Department/all_time_entry', array('name' => 'above_week_tests','label' => "一周外开始"));
echo $this->element('Department/all_time_entry', array('name' => 'inactive_tests','label' => "已过期考试", 'addToHistory' => 1));
?>
