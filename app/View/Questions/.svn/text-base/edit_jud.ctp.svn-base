<?php
if (isset($id)) $label = '修改';
else $label = '添加';
?>
<h1><?=$label?>判断题</h1>

<?php
    $cho = array('Y' => '正确', 'N' => '错误');

    echo $this->Form->create('Question', array('action'=>'save'));
    if (isset($id)) echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('q_type', array('type' => 'hidden', 'default' => 1));
    echo $this->Form->input('q_text', array('rows' => '2', 'label'=>'题目'));
    echo $this->Form->radio('q_cho', $cho, array('legend'=>'选项'));
    echo $this->Form->input('test_type_id', array('type' => 'hidden'));
    echo $this->Form->end('保存');


