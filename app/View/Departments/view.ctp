<h1>考试时间设置</h1>


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
            <?php echo $this->Html->link('查看', array('action' => 'look', $department['id']));?>
            <?php echo $this->Html->link('设置考试时间', array('action' => 'setTime', $department['id']));?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
