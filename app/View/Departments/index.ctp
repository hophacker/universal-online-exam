<h1>考试时间设置</h1>

<?php 
echo $this->Html->link('查看所有考试',array('action' => 'viewAllTime'), array('target'=>'_blank',
        'class' => 'very_larger_label'));
?>
<table>
    <tr>
        <th>院系</th>
        <th>操作</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php 
    foreach ($departments as $department):
        $department = $department['Department'];
    ?>
    <tr>
        <td>
            <?=$department['dept_name']?>
        </td>
        <td>
            <?php echo $this->Html->link('查看设置考试时间', array('action' => 'viewTime', $department['id']));?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
