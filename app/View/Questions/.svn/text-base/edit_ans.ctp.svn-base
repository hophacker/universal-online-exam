<?php
if (isset($id)) $label = '修改';
else $label = '添加';
?>

<h1><?=$label?>解答题</h1>

<?php
    echo $this->Form->create('Question', array('action'=>'save'));
    if (isset($id)) echo $this->Form->input('id', array('type' => 'hidden'));
    
    echo $this->Form->input('q_type', array('type' => 'hidden', 'default' => 2));
    echo $this->Form->input('q_text', array('rows' => '2', 'label' => '题目'));
    echo $this->Form->input('q_a', array('rows' => '1', 'label' => '答案'));
    echo $this->Form->input('test_type_id', array('type' => 'hidden'));
    echo $this->Form->end('保存');
