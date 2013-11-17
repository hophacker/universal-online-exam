<?php
if (isset($id)) $label = '修改';
else $label = '添加';
?>
<h1><?=$label?>选择题</h1>

<?php
    $cho = array('A' => 'A', 'B' => 'B', 'C'=>'C', 'D'=>'D');

    echo $this->Form->create('Question', array('action'=>'save'));
    if (isset($id)) echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('test_type_id', array('type' => 'hidden'));
    
    echo $this->Form->input('q_type', array('type' => 'hidden', 'default' => 0));
    echo $this->Form->input('q_text', array('rows' => '2', 'label'=>'题目'));
    echo $this->Form->input('q_a', array('rows' => '1', 'label'=>'A'));
    echo $this->Form->input('q_b', array('rows' => '1', 'label'=>'B'));
    echo $this->Form->input('q_c', array('rows' => '1', 'label'=>'C'));
    echo $this->Form->input('q_d', array('rows' => '1', 'label'=>'D'));

    echo $this->Form->radio('q_cho', $cho, array('legend'=>'选项'));
    echo $this->Form->end('保存');

