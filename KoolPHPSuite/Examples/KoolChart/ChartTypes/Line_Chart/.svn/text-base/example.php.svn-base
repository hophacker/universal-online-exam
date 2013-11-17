<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolChart/koolchart.php";

    $chart = new KoolChart("chart");
	$chart->scriptFolder=$KoolControlsFolder."/KoolChart";	
	$chart->Width = 750;
	$chart->Height = 480;
	
    $chart->Title->Text = "Server CPU Load By Days";
    $chart->PlotArea->XAxis->Title = "Days";
    $chart->PlotArea->XAxis->Set(array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"));
    $chart->PlotArea->YAxis->Title = "CPU Load";
    $chart->PlotArea->YAxis->MaxValue = 100;
    $chart->PlotArea->YAxis->MinValue = 0;
    $chart->PlotArea->YAxis->MajorStep = 25;
    $chart->PlotArea->YAxis->MinorStep = 5;
    $chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "{0}%";
    
	$series = new LineSeries();
    $series->Name = "Week 1";
	$series->Appearance->BackgroundColor="#2D6B99";
	$series->TooltipsAppearance->DataFormatString = "{0}%";
    $series->LabelsAppearance->DataFormatString = "{0}%";
	$series->LabelsAppearance->Position = "Above";
    $series->MarkersAppearance->MarkersType = "Square";
    $series->ArrayData(array(20,30,15,70,50,40,55));
    $chart->PlotArea->AddSeries($series);
    
	$series = new LineSeries();
    $series->Name = "Week 2";
	$series->Appearance->BackgroundColor="#5AB7DE";
    $series->TooltipsAppearance->DataFormatString = "{0}%";
    $series->LabelsAppearance->DataFormatString = "{0}%";
	$series->LabelsAppearance->Position = "Above";
    $series->ArrayData(array(35,52,30,45,null,15,11));
    $chart->PlotArea->AddSeries($series);
?>

<form id="form1" method="post">

	<?php echo $chart->Render();?>					
	
	<div><i>* <u>Note</u>:</i>Generate your own chart with <a style="color:#B8305E;" target="_blank" href="http://codegen.koolphp.net/generate_koolchart.php">Code Generator</a></div>

</form>