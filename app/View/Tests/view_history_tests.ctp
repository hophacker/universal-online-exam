

<?php
//debug($historyTests);
?>
<label class='very_larger_label'>
考试历史
</label>
<table>
    <tr>
        <th style="width:80px;">考试类型</th>
        <th>学院</th>
        <th>开始时间</th> 
        <th>时长</th>
        <th>有效时间</th>
        <th>补考开始时间</th>
        <th>说明</th>
        <th class='important'>查看考试成绩</th>
    </tr>

    <?php
    $department_id = $_SESSION['Manager']['Manager']['department_id'];
    foreach ($historyTests as $test):
        $test_id = $test['Test']['id'];
        $test_type_name = $test['TestType']['name'];
        $dept_name = $test['Department']['dept_name'];
        $test = $test['Test'];
        if ($department_id != 0 && $department_id != $test['department_id']) //判断是否是本院
            continue;
        ?>
        <tr>

            <td>
                <?php echo $this->Form->label($test_type_name) ?> 
            </td>
            <td>
                <?=$dept_name?>
            </td>
            <td>
                <?php echo $this->Form->label($test['begin_time']) ?> 
            </td>

            <td>
                <?php echo $this->Form->label($test['duration'])?> 
            </td>

            <td>
                <?php echo $this->Form->label($test['available']) ?> 
            </td>

            <td>
                <?php echo $this->Form->label($test['second_begin_time']) ?> 
            </td>

            <td>
                <?php echo $this->Form->label($test['comment']) ?> 
            </td>
            <td class="important">
                <?php echo $this->Html->link('查看',array('action' => 'viewScores', $test_id), 
                        array('target'=>'_blank', 'class' => 'important'));?>
            </td>
        </tr>   

<?php endforeach ?> 
</table>
<br/> <br/> <br/> 

