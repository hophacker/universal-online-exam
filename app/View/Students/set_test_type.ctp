<?php
echo $this->Html->script('Student/setTestType');
echo $this->Form->label('', '学生考试级别转换', array('class' => 'very_larger_label'));

echo $this->Form->label('', '请将学生的学生号以逗号","分隔，贴入下面文本框内,例如:"MZ12445,112503115"(不含引号)', array('class' => 'larger_label'));
echo $this->Form->label('', '学院管理员无权使用此操作,数据库将自动录入所有级别被更改的学生', array('class' => 'larger_label'));

echo $this->Form->input('s_nums', array('rows' => 13, 'label' => false));

echo $this->Form->label('', '欲设置等级', array('class' => 'larger_label'));
echo $this->Form->input('testTypeNames', array('options' => $test_type_names, 'label' => false));
echo $this->Form->button('确定', array('class' => 'submit'));

?>
<style>
    #s_nums{
        width: 600px;
    }    
</style>