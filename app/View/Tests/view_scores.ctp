<label class='very_larger_label'>考试成绩查看</label>
<?php echo $this->Form->postButton('下载成绩Excel表格', array('action' => 'downScores', $test_id));
?>
<br/>
<label class='larger_label'>
参考学院:<?=$test['Department']['dept_name']?>
</label>
<label class='larger_label'>
考试场次:<?=$test['Test']['id']?>
</label>
<label class='larger_label'>
考试开始时间:<?=$test['Test']['begin_time']?>
</label>
<table>
    <tr>
        <th>序号</th>
        <th>学院</th>
        <th>专业</th>
        <th>班级</th>
        <th>姓名</th>
        <th>学号</th>
        <th>选择题</th> 
        <th>判断题</th>
        <th>解答题</th>
        <th>总分</th>
    </tr>

    <?php
    $num = 0;
    foreach ($tryHistories as $tryHistory):
        ?>
        <tr>
            <td><?=++$num?></td>
            <td>
                <?=$tryHistory['Department']['dept_name']?> 
            </td>
            <td>
                <?=$tryHistory['Major']['major_name']?> 
            </td>
            <td>
                <?=$tryHistory['Class']['class_name']?> 
            </td>
            <td>
                <?=$tryHistory['Student']['s_name']?> 
            </td>
            <td>
                <?=$tryHistory['Student']['s_num']?> 
            </td>
            <td>
                <?=$tryHistory['TryHistory']['sel_score']?> 
            </td>

            <td>
                <?=$tryHistory['TryHistory']['jud_score']?> 
            </td>
            
            <td>
                <?=$tryHistory['TryHistory']['ans_score']?> 
            </td>
            <td>
                <?=$tryHistory['TryHistory']['sel_score'] + $tryHistory['TryHistory']['jud_score']+ $tryHistory['TryHistory']['ans_score']?> 
            </td>
        </tr>   

<?php endforeach ?> 
</table>
<br/> <br/> <br/> 

