<?php

$label = "[参考学院:{$test['Department']['dept_name']}]--[考试场次:{$test['Test']['id']}]--[考试开始时间:{$test['Test']['begin_time']}]";
$fields = array("学院", "专业", "班级", "姓名", "学号", "选择题", "判断题", "解答题", "总分");


$data = array();
foreach ($tryHistories as $tryHistory) {
    $row = array();
    $row[] = $tryHistory['Department']['dept_name'];
    $row[] = $tryHistory['Major']['major_name'];
    $row[] = $tryHistory['Class']['class_name'];
    $row[] = $tryHistory['Student']['s_name'];
    $row[] = $tryHistory['Student']['s_num'];
    $row[] = $tryHistory['TryHistory']['sel_score'];
    $row[] = $tryHistory['TryHistory']['jud_score'];
    $row[] = $tryHistory['TryHistory']['ans_score'];
    $row[] = $tryHistory['TryHistory']['sel_score'] + $tryHistory['TryHistory']['jud_score'] + $tryHistory['TryHistory']['ans_score'];
    $data[] = $row;
}
$this->Excel->generate($data, $fields, $label, '考试成绩下载');
?>