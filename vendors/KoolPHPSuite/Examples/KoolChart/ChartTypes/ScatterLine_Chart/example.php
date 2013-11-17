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
	$chart->Width = 740;
	$chart->Height = 480;	
	$chart->Title->Text = "Charge Current vs. Charge Time";
	$chart->Title->Appearance->Position = "top";
    $chart->PlotArea->XAxis->Title = "Time";
    $chart->PlotArea->XAxis->MaxValue = 90;
    $chart->PlotArea->XAxis->MinValue = 0;
    $chart->PlotArea->XAxis->MajorStep = 10;
    $chart->PlotArea->XAxis->MinorStep = 2;
    $chart->PlotArea->XAxis->LabelsAppearance->DataFormatString = "{0}m";
    $chart->PlotArea->YAxis->Title = "Charge";
    $chart->PlotArea->YAxis->MaxValue = 100;
    $chart->PlotArea->YAxis->MinValue = 0;
    $chart->PlotArea->YAxis->MajorStep = 20;
    $chart->PlotArea->YAxis->MinorStep = 4;
    $chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "{0}%";
 
    $series = new ScatterLineSeries();
    $series->Name = "0.8C";
    $series->Appearance->BackgroundColor = "#EB6D17";
    $series->LabelsAppearance->DataFormatString = "{1}% in {0} minutes";
    $series->LabelsAppearance->Position = "below";
    $series->MarkersAppearance->MarkersType = "Square";
    $series->TooltipsAppearance->DataFormatString = "{1}% in {0} minutes";
    $series->TooltipsAppearance->BackgroundColor = "#EB6D17";
    $series->AddItem(new ScatterItem(10,70));
    $series->AddItem(new ScatterItem(13,90));
    $series->AddItem(new ScatterItem(25,100));
    $chart->PlotArea->AddSeries($series);
 
    $series = new ScatterLineSeries();
    $series->Name = "1.6C";
    $series->Appearance->BackgroundColor = "#90B720";
    $series->LabelsAppearance->DataFormatString = "{1}% in {0} minutes";
	$series->LabelsAppearance->Position = "below";
    $series->MarkersAppearance->MarkersType = "Square";
    $series->TooltipsAppearance->DataFormatString = "{1}% in {0} minutes";
    $series->TooltipsAppearance->BackgroundColor = "#90B720";
    $series->AddItem(new ScatterItem(10,40));
    $series->AddItem(new ScatterItem(17,50));
    $series->AddItem(new ScatterItem(18,70));
    $series->AddItem(new ScatterItem(35,90));
    $series->AddItem(new ScatterItem(47,95));
    $series->AddItem(new ScatterItem(60,100));
    $chart->PlotArea->AddSeries($series);
 
    $series = new ScatterLineSeries();
    $series->Name = "3.1C";
    $series->Appearance->BackgroundColor = "#5CB8E3";
    $series->LabelsAppearance->DataFormatString = "{1}% in {0} minutes";
	$series->LabelsAppearance->Position = "below";
    $series->TooltipsAppearance->DataFormatString = "{1}% in {0} minutes";
    $series->TooltipsAppearance->BackgroundColor = "#5CB8E3";
    $series->AddItem(new ScatterItem(10,10));
    $series->AddItem(new ScatterItem(15,20));
    $series->AddItem(new ScatterItem(null,null));
    $series->AddItem(new ScatterItem(32,40));
    $series->AddItem(new ScatterItem(43,50));
    $series->AddItem(new ScatterItem(55,60));
    $series->AddItem(new ScatterItem(60,70));
    $chart->PlotArea->AddSeries($series);
?>

<form id="form1" method="post">

	<?php echo $chart->Render();?>					
	
	<div><i>* <u>Note</u>:</i>Generate your own chart with <a style="color:#B8305E;" target="_blank" href="http://codegen.koolphp.net/generate_koolchart.php">Code Generator</a></div>

</form>