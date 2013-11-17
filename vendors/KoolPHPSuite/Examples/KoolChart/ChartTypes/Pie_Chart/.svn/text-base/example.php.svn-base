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
	$chart->Width = 700;
	$chart->Height = 470;
	$chart->Title->Text = "Browser Statistics 2012";
	
	$_series = new PieSeries("Browsers");	
	$_series->LabelsAppearance->DataFormatString="{0}%";

	$_item = new PieItem(31.8,"Firefox");
	$_item->BackgroundColor = "#ff9900";
	$_item->Exploded = true;
	$_series->AddItem($_item);
	
	$_item = new PieItem(16.1,"Internet Explorer");
	$_item->BackgroundColor = "#cccccc";
	$_series->AddItem($_item);
	
	$_item = new PieItem(44.9,"Chrome");
	$_item->BackgroundColor = "#999999";
	$_series->AddItem($_item);
	
	$_item = new PieItem(4.3,"Safari");
	$_item->BackgroundColor = "#666666";
	$_series->AddItem($_item);
	
	$_item = new PieItem(2.9,"Opera & Others");	
	$_item->BackgroundColor = "#333333";
	$_series->AddItem($_item);
	
	$chart->PlotArea->AddSeries($_series);

?>

<form id="form1" method="post">

	<?php echo $chart->Render();?>					
	
	<div><i>* <u>Note</u>:</i>Generate your own chart with <a style="color:#B8305E;" target="_blank" href="http://codegen.koolphp.net/generate_koolchart.php">Code Generator</a></div>

</form>