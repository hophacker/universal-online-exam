<?php
echo $this->element('test_type', array("test_types" => $test_types));
$q_name = array(0=>'Sel', 1=>'Jud', 2=>'Ans');
if ($test_type_id != 0){
    echo $this->Form->postLink('添加单个', "/questions/addOne{$q_name[$q_type]}/".$test_type_id);
    echo ' ';
    echo $this->Form->postLink('添加多个', "/questions/addMul/".$test_type_id.'/'.$q_type);
}
echo $this->Form->hidden('test_type_id', array('value' => $test_type_id));
echo $this->Form->hidden('q_type', array('value' => $q_type));
?>
