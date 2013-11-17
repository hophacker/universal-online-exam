<?php
$countss = array();
foreach($data as $record){
    $time = strtotime($record['Student']['reg_date']);
    $m = (intval(date('m', $time))-1) / $span;
    $y = intval(date('Y', $time));
    
    if (isset($countss[$y][$m])){
        $countss[$y][$m]++;
    }else{
        $countss[$y][$m] = 1;
    }
}
ksort($countss);
foreach($countss as $counts){
    ksort($counts);
}

$labels = array();
$dataChart = array();
$hasEle = false;
foreach($countss as $y => $counts)
    foreach($counts as $m => $count){
    $hasEle = true;
        $dataChart[] = $count;
        switch ($span){
            case 1: $labels[] = $y.'年'.($m+1).'月'; break;
            case 6: {
                switch($m){
                    case 0: $labels[] = $y.'上半年'; break;
                    case 1: $labels[] = $y.'下半年'; break;
                }
                break;
            }
            case 12: $labels[] = $y . '年' ;break;
        }
    }
$title = '注册人数统计';
switch ($span){
    case 1: $title = '注册人数按月统计'; break;
    case 6: $title = '注册人数按半年统计'; break;
    case 12: $title = '注册人数按年统计'; break;
}
//debug($labels);
//debug($dataChart);
echo $this->Chart->columnChart($title, $labels, $dataChart, '人');
?>