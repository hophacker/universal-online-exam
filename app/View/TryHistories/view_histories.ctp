<?php
//debug($exam_histories);
//debug($excercise_histories);
echo "<div class='postLinks'>";
foreach($test_types as $id=>$name)
    echo $this->Form->postLink($name, array($id, 'div'=>false));
echo "</div>";
//debug($test_types);
if (isset($list_it)){
    
echo $this->Form->label('', '您的'. $test_type_name. '记录', array('class' => 'very_larger_label'));

echo "<br/><br/>";
//debug($exam_histories);
//debug($excercise_histories);

echo $this->element('TryHistory/viewHistories', array(
    "tryHistories" => $exam_histories,
    "try_type_name" => '考试成绩',
    ));

echo $this->element('TryHistory/viewHistories', array(
    "tryHistories" => $excercise_histories,
    "try_type_name" => '练习成绩',
    ));
}
?>