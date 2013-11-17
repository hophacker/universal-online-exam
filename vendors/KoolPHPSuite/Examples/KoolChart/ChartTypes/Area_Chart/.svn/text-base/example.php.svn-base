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
	$chart->Width = 770;
	$chart->Height = 480;	
    $chart->Title->Text = "Revenues vs Expenses";
    $chart->PlotArea->XAxis->Title = "Quarter";
    $chart->PlotArea->XAxis->Set(array("Q1","Q2","Q3","Q4","Q5"));
    $chart->PlotArea->YAxis->Title = "Finance (millions)";
    $chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "$ {0}";
    
	$series = new AreaSeries();
    $series->Name = "Revenues";
    $series->Appearance->BackgroundColor = "green";
    $series->LabelsAppearance->DataFormatString = "$ {0}";
    $series->TooltipsAppearance->DataFormatString = "$ {0} millions";
    $series->ArrayData(array(20,30,40,70,50));
    $chart->PlotArea->AddSeries($series);
    
	$series = new AreaSeries();
    $series->Name = "Expenses";
    $series->Appearance->BackgroundColor = "red";
    $series->LabelsAppearance->DataFormatString = "$ {0}";
    $series->TooltipsAppearance->DataFormatString = "$ {0} millions";
    $series->ArrayData(array(30,20,65,40,30));
    $chart->PlotArea->AddSeries($series);
?>

<form id="form1" method="post">

	<?php echo $chart->Render();?>					
	
	<div><i>* <u>Note</u>:</i>Generate your own chart with <a style="color:#B8305E;" target="_blank" href="http://codegen.koolphp.net/generate_koolchart.php">Code Generator</a></div>
</form>