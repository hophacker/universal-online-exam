<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../../../../../class/DB_Connect.php';
$KoolControlsFolder = "../../../../../KoolPHPSuite/KoolControls";
require $KoolControlsFolder."/KoolChart/koolchart.php";

if( !isset($_GET['max']) || !isset($_GET['min']) )
    exit();

$db = new DB_Connect;
/*
$query = 'select department.dept_name as name,count(*) as count from
 score inner join student on (student.s_id = score.s_id)
 inner join class on (student.class_id = class.class_id)
 inner join major on (class.major_id = major.major_id)
 inner join department on (major.dept_id = department.dept_id)'
.'where score.s_score >= '.$_GET['min'].'and score.s_score <='.$_GET['max'].
 'group by department.dept_name';
 * */
 $query = 'select department.dept_name as name,count(*) as count from
 student inner join class on (student.class_id = class.class_id)
 inner join major on (class.major_id = major.major_id)
 inner join department on (major.dept_id = department.dept_id)'
.'where student.s_score_1 >= '.$_GET['min'].'and student.s_score_1 <='.$_GET['max'].
 'group by department.dept_name';

if ($stmt = $db->prepare($query)) {
    $stmt-> execute();
    $dept = $stmt->fetchAll(PDO::FETCH_NUM|PDO::FETCH_COLUMN, 0);
    $count = $stmt->fetchAll(PDO::FETCH_NUM|PDO::FETCH_COLUMN, 1);
    var_dump($dept);
    var_dump($count);
    
    $chart = new KoolChart("chart");
	$chart->scriptFolder=$KoolControlsFolder."/KoolChart";	
	$chart->Title->Text = "成绩统计";
	$chart->Width = 680;
	$chart->Height = 480;
	$chart->Legend->Appearance->Position = "top";
	$chart->PlotArea->XAxis->Title = "Quarters";
	$chart->PlotArea->XAxis->Set($dept);
	$chart->PlotArea->YAxis->Title = "Sales (millions)";
	$chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "$ {0}";
   
	$series = new BarSeries();
	$series->Name = $_GET['min']."-".$_GET['max'];
	$series->TooltipsAppearance->DataFormatString = "$ {0} 人";
	$series->ArrayData($count);
	$chart->PlotArea->AddSeries($series);
}
?>
