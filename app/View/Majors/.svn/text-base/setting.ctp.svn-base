<?php 
echo $this->Html->css('department_major_class');
echo $this->Html->script('department_major_class');
?>
<?php
echo $this->Form->create('Major', array('action'=>"add"));
echo '添加专业';
echo $this->Form->input('major_name', array('label'=>false));
echo $this->Form->hidden('department_id', array('value'=>$department_id));
echo $this->Form->end(array('class' => 'add_button', 'label'=>'添加'));
?>
<table class='medium_font'>
    <tr>
        <th>专业</th>
        <th>下属班级数</th>
        <th>查看修改下属班级</th>
        <th>删除</th>
        <th>合并</th>
    </tr>

    <?php 
    foreach ($data as $row):
        $dept_name = $row['Major']['major_name'];
        $id = $row['Major']['id'];
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
            echo $this->Form->postLink('查看修改下属班级', "/clas/setting/$id", array('target'=>'_blank'));
            ?>
        </td>
        <td>
            <?php 
            echo $this->Form->create('Major', array('action' => 'delete', 'class' => 'tableForm'));
            echo $this->Form->hidden('id', array('value'=> $id));
            echo $this->Form->end(array('label'=>'删除该专业', 'class'=> 'delete_button'));
            ?>
        </td>
        <td class='temp'>
            <?php 
            echo $this->Form->create('Major', array('action' => 'combine', 'class' => 'tableForm'));
            echo $this->Form->hidden('from', array('value'=> $id, 'div' => false));
            echo $this->Form->input('to', array('options' => $majors, 'label' => false, 'div' => false)); 
            echo $this->Form->end(array('label'=>'将该专业并至', 'class'=> 'combine_button'));
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>