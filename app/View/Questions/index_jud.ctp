<!-- File: /app/View/Questions/index.ctp -->
<?php echo $this->Html->script('Question/view'); ?>
<h1>判断题</h1>
<p>
<?php 
echo $this->element('Question/add_panel', array(
    'test_type_id' => $test_type_id,
    'q_type' => $q_type,
    'test_types' => $test_types
));
echo $this->Form->hidden('test_type_id', array('value' => $test_type_id));
echo $this->Form->hidden('q_type', array('value' => $q_type));
?>
<table>
    <tr>
        <th>题目</th>
        <th>答案</th>
        <th>操作</th>
    </tr>

<!-- Here's where we loop through our $questions array, printing out Question info -->

    <?php 
$num = 0;
foreach ($questions as $question): 
    $question = $question['Question'];
?>
    <tr>
        <td>
            <?php echo (++$num) . "." . h($question['q_text']); ?>
        </td>
        <td  style='vertical-align:middle;color:red;font-size:20px;'><?=$question['q_cho']?></td>
        <td style="width:80px;">
            <?php echo $this->Form->button('删除', array('type' => 'button', 
                'action' => 'delete', 
                'class'=>'delButton',
                'delId' => $question['id']
            ));?>
            <?php echo $this->Html->link('编辑', array('action' => 'editJud', $question['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
