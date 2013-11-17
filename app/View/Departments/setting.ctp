<?php 
echo $this->Html->css('department_major_class');
echo $this->Html->script('department_major_class');
?>
<?php
echo $this->Form->create('Department', array('action'=>"add"));
echo '添加院系';
echo $this->Form->input('dept_name', array('label'=>false));
echo $this->Form->end(array('class' => 'add_button', 'label'=>'添加'));
?>
<table class='medium_font'>
    <tr>
        <th>院系</th>
        <th>下属专业数</th>
        <th>查看修改下属专业</th>
        <th>删除</th>
        <th>合并</th>
    </tr>

    <?php 
    foreach ($data as $row):
        $dept_name = $row['Department']['dept_name'];
        $id = $row['Department']['id'];
        $count = $row['0']['count'];
    ?>
    <tr>
        <td>
            <?=$dept_name?>
        </td>
        <td>
            <?=$count?>
        </td>
        <td>
            <?php 
            echo $this->Form->postLink('查看修改下属专业', "/majors/setting/$id", array('target'=>'_blank'));
            ?>
        </td>
        <td>
            <?php 
            echo $this->Form->create('Department', array('action' => 'delete', 'class' => 'tableForm'));
            echo $this->Form->hidden('id', array('value'=> $id));
            echo $this->Form->end(array('label'=>'删除该院系', 'class'=> 'department_delete_button'));
            ?>
        </td>
        <td class='temp'>
            <?php 
            echo $this->Form->create('Department', array('action' => 'combine', 'class' => 'tableForm'));
            echo $this->Form->hidden('from', array('value'=> $id, 'div' => false));
            echo $this->Form->input('to', array('options' => $departments, 'label' => false, 'div' => false)); 
            echo $this->Form->end(array('label'=>'将该院合并至', 'class'=> 'department_combine_button'));
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>
