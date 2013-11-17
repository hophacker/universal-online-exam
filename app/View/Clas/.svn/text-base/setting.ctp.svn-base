<?php 
echo $this->Html->css('department_major_class');
echo $this->Html->script('department_major_class');
?>
<?php
echo $this->Form->create('Cla', array('action'=>"add"));
echo '添加专业';
echo $this->Form->input('class_name', array('label'=>false));
echo $this->Form->hidden('major_id', array('value'=>$major_id));
echo $this->Form->end(array('class' => 'add_button', 'label'=>'添加'));
?>
<table class='medium_font'>
    <tr>
        <th>班级</th>
        <th>下属学生数</th>
        <th>删除</th>
        <th>合并</th>
    </tr>

    <?php 
    foreach ($data as $row):
        $class_name = $row['Cla']['class_name'];
        $id = $row['Cla']['id'];
        $count = $row['0']['count'];
    ?>
    <tr>
        <td>
            <?=$class_name?>
        </td>
        <td>
            <?=$count?>
        </td>
        <td>
            <?php 
            echo $this->Form->create('Cla', array('action' => 'delete', 'class' => 'tableForm'));
            echo $this->Form->hidden('id', array('value'=> $id));
            echo $this->Form->end(array('label'=>'删除该班级', 'class'=> 'delete_button'));
            ?>
        </td>
        <td class='temp'>
            <?php 
            echo $this->Form->create('Cla', array('action' => 'combine', 'class' => 'tableForm'));
            echo $this->Form->hidden('from', array('value'=> $id, 'div' => false));
            echo $this->Form->input('to', array('options' => $classes, 'label' => false, 'div' => false)); 
            echo $this->Form->end(array('label'=>'将该班级并至', 'class'=> 'combine_button'));
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>