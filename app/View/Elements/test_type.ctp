<?php
$options = array();
//$options[0] = '无'; 
foreach($test_types as $tt){
    $options[$tt['TestType']['id']] = $tt['TestType']['name'];
}
echo $this->Form->create();
echo $this->Form->input('searchText', array('label'=>'搜索文本'));
echo $this->Form->select('test_type_id', $options, array('empty'=>false, 'value'=>$test_type_id));
echo $this->Form->end(array('id' => 'sure', 'label' => '确定'));
if ($test_type_id != 0) echo $this->Form->label($options[$test_type_id]);
?>
<style>
    input[type=radio]{
        display: inline-block;        
        float:left;
    }
    label{
        color:red;
        display: inline-block; 
        float:left;
    }
    select{
        float: left;
        margin-top: 20px;
    }
    .submit{
        
        display: inline-block;
    }
</style>
