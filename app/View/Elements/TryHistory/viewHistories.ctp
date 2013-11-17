
<table>
    <tr>

        <th>考试时间</th>
        <th>判断题分数</th>
        <th>选择题分数</th>
        <th>解答题分数</th>
        <th>考试场次</th>
    </tr>
    
    <?php
    echo $this->Form->label('', $try_type_name, array('class' => 'larger_label'));
    foreach ($tryHistories as $tryHistory):
        $tryHistory = $tryHistory['TryHistory'];
        ?>
        <tr>
            <td>
                <?= $tryHistory['test_date'] ?>
            </td>
            <td>
                <?= $tryHistory['jud_score'] ?>
            </td>
            <td>
                <?= $tryHistory['sel_score'] ?>
            </td>
            <td>
                <?= $tryHistory['ans_score'] ?>
            </td>
            <td>
                <?= $tryHistory['test_id'] ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
