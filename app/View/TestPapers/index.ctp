
<?php
    header('Content-Type: application/force-download');
    echo $this->Html->script('TestPaper/TestPaper');
    echo $this->Html->css('TestPaper/TestPaper');
    echo $this->Html->css('common');
    $form = $this->Form;
    echo '<div style="float:left;width:100%">';
    echo '<p class="larger_label"　style="color:purple">重置键将使所有院系获得下一个未使用中级试卷下载资格！请慎重使用该键！</p>';
    echo $form->button('重置中级考试下载状态', array('id'=>'reset'));
    if($enable==1) $info = "学院可以下载";
    else $info = "学院不可以下载";
    echo $form->button('设定考试状态,当前状态:<span style="color:red">'.$info.'</span>', array('id'=>'enable'));
    echo '</div>';
    echo '<div style="float:left;width:50%">';
    echo '<p class="larger_label">上传中级考试试卷</p>';
    echo $form->create('TestPapers', array('action' => 'index', 'type' => 'file'));
    echo $form->input('comment', array('rows'=>2,'cols'=>50,'label' => '试卷描述'));
    echo '<label for="TestPapersPaper">选择试卷</label>';
    echo $form->file('Paper');
    echo $form->submit('上传');
    echo $form->end();
    echo '</div>';
    
    
    echo '<div style="float:right;width:50%">';
    echo '<p class="larger_label">重新上传中级考试试卷(如果不选择文件则默认不修改文件)</p>';
    echo '<p class="bold">&nbsp;序号：<span id="paper_id" style="color:green;font-size:18px">未选中试卷</span></p>';
    echo $form->create('TestPaper', array('action' => 'modify', 'type' => 'file'));
    echo $form->input('id', array('id'=>'Pid', 'type'=>'hidden'));
    echo $form->input('suffix', array('id'=>'Suffix', 'type'=>'hidden'));
    echo $form->input('comment', array('id'=>'pComment','rows'=>2,'cols'=>50,'label' => '试卷描述'));
    echo '<label for="TestPapersPaper">选择试卷</label>';
    echo $form->file('Paper');
    echo '<div id="uploadBtn" style="display:none">';
    echo $form->submit('上传');
    echo '</div>';
    echo $form->end();
    echo '</div>';
?>
<table>
    <th>序号</th><th>试卷名</th><th>试卷描述</th><th>修改</th><th>下载</th><th>删除</th>
    <?php 
        $count = 1;
        foreach($papers as $paper) {
            $d_array = explode(',', $paper['TestPaper']['using_department_ids']);
            echo '<tr>';
            echo '<td id="No'.$paper['TestPaper']['id'].'">'.$count++.'</td>';
            echo '<td>'.$paper['TestPaper']['name'].'</td>';
            echo '<td id="com'.$paper['TestPaper']['id'].'">'.$paper['TestPaper']['comment'].'</td>';
//          echo '<td><a href="WebRoot/files/'.$paper['TestPaper']['id'].$paper['TestPaper']['suffix'].'">下载</a></td>';
            echo '<td><span class="modifyLink" suffix="'.$paper['TestPaper']['suffix'].'" pid="'.$paper['TestPaper']['id'].'">修改</span></td>';
            echo '<td>'.$this->Html->link('下载', array('action' => 'download', $paper['TestPaper']['id'].$paper['TestPaper']['suffix'], $paper['TestPaper']['name'])).'</td>';
            echo '<td>'.$this->Html->link('删除', array('action' => 'delete', $paper['TestPaper']['id'])).'</td>';
            echo '</tr>';
            echo '<tr><td colspan=6>使用院系：';
            for($i = 1; $i < count($d_array)-1; $i++) {
                echo $department[$d_array[$i]].'、';
            }
            echo '</td></tr>';
        }
    ?>
</table>