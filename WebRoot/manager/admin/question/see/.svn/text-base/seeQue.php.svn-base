<?php

require_once '../../../../../class/autoload.inc';
require_once '../../../../../class/postGet.php';
error_reporting(E_ALL);
ini_set('display_errors',1);

$q_type = intval($_POST['q_type']);
$test_type_id = intval($_POST['test_type_id']);
$q_text = trim($_POST['q_text']);

$que = new question();

if ($q_type == 0){
    $data = $que->getSel($test_type_id, $q_text);
}elseif ($q_type == 1){
    $data = $que->getJud($test_type_id, $q_text);
}elseif ($q_type == 2){
    $data = $que->getAns($test_type_id, $q_text);
} 
$count = 0;
$red = "style='color:red'";
foreach ($data as $row){
    $count++;
    $record =  "<li>
        <input type='checkbox' name='1' id='1' value='{$row['q_id']}' class='queBox' >
        <label id='q_text'>$count.{$row['q_text']}</label>
            <ul class='queul'>";
        
    if ($q_type == 0){
        $styles = array("A"=>"", "B"=>"", "C"=>"", "D"=>"");
        if (array_key_exists($row['q_cho'], $styles)){
            $ans = $row['q_cho'];
            $styles[$ans] = $red;
        }else $ans = "该题答案错误";
        
        $record .= "<li id='q_a' {$styles['A']}>A.{$row['q_a']}</li>
            <li id='q_b' {$styles['B']}>B.{$row['q_b']}</li> 
            <li id='q_c' {$styles['C']}>C.{$row['q_c']}</li> 
            <li id='q_c' {$styles['D']}>D.{$row['q_d']}</li>
            <li id='q_cho'>答案:$ans</li>";
            
            
    }elseif ($q_type == 1){
        if ($row['q_cho'] == 'Y') $ans = "正确";
        elseif ($row['q_cho'] == 'N') $ans = "错误";
        else {
            $ans = "该题答案错误";
        }
        $record .= "<li>答案:$ans</li>";
        
    }elseif ($q_type == 2){
        $record .= "<li>参考答案:{$row['q_a']}</li>";
    }
        
    $record .= "</ul></li>";
    echo $record;
}
?>
