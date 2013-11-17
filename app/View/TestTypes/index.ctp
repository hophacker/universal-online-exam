<table>
<?php
    //echo 'hello';
    echo $this->Html->link('添加新条目', array('action' => 'addType'));
    
    echo $this->Html->tableHeaders(array(
        '考试类型',
        '考试方式',
        '通过后参加',
        '选择题数',
        '选择题分值',
        '判断题数',
        '判断题分值',
        '解答题数',
        '解答题分值',
        '通过分值',
        '练习时长',
        '备注',
        ' ',
        ' ',
        ' '
        ));
    foreach($test_types as $test_type)
    {
        echo $this->Html->tableCells(
            //array(
                array(
                    $name[$test_type['TestType']['id']],
                    $test_type['TestType']['style']==0?'抽取题库':'抽取试卷',
                    $name[$test_type['TestType']['grad_test_type_id']],
                    $test_type['TestType']['sel_num'],
                    $test_type['TestType']['sel_score'],
                    $test_type['TestType']['jud_num'],
                    $test_type['TestType']['jud_score'],
                    $test_type['TestType']['ans_num'],
                    $test_type['TestType']['ans_score'],
                    $test_type['TestType']['pass_score'],
                    $test_type['TestType']['exam_duration'],
                    $test_type['TestType']['comment'],
                    $this->Html->link('编辑', array('action' => 'editType', $test_type['TestType']['id']),
    array('target'=>'_self')),
                    $this->Html->link('删除', array('action' => 'delType', $test_type['TestType']['id']),
    array('target'=>'_self'), '确认删除？'),
                    $this->Html->link('考试资格设定', array('action' => 'editPromotion', $test_type['TestType']['id']),
    array('target'=>'_self'))
                )
           // )
        );
       // debug($test_type);
    }
?>
</table>
