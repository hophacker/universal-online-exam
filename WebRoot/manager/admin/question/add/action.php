<?php

require_once '../../../../../class/autoload.inc';
$q_text = $_POST['q_text'];
$q_cho = $_POST['q_cho'];
$question = new question();
$question->addOneJud($q_text, $q_cho, $test_type_id);
?>
