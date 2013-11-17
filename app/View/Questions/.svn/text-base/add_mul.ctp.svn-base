<?php echo $this->Html->script('Question/check');
echo $this->Html->css('Question/view'); 
?>
<h1>添加多条<span style='color:red'><?=$test_type_name?></span> 
<?php echo $this->element('QTypeName', array('q_type' => $q_type)); ?>
</h1>

<?php
    echo $this->Form->create('', array('action'=>'saveMul'));
    echo $this->Form->input('text', array('rows'=>13, 'label'=>'文本区域'));
    echo $this->Form->input('test_type_id', array('type' => 'hidden', 'value'=>$test_type_id));
    echo $this->Form->input('q_type', array('type' => 'hidden', 'value'=>$q_type));
    echo $this->Form->end(array('label'=>'保存', 'id'=>'save'));
