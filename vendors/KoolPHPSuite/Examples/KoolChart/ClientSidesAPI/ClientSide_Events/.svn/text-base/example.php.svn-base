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
	$chart->Title->Text = "Sales report for 2012";
	$chart->Width = 670;
	$chart->Height = 450;
	//$chart->BackgroundColor = "#ffffee";
	$chart->PlotArea->XAxis->Title = "Quarters";
	$chart->PlotArea->XAxis->Set(array("Q1","Q2","Q3","Q4"));
	$chart->PlotArea->YAxis->Title = "Sales ( .millions)";
	$chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "$ {0}";
   
	$series = new ColumnSeries();
	$series->Name = "TVs";
	$series->TooltipsAppearance->DataFormatString = "$ {0} millions";
	$series->ArrayData(array(20,30,40,70));
	$chart->PlotArea->AddSeries($series);
    
	$series = new ColumnSeries();
	$series->Name = "Computers";
	$series->TooltipsAppearance->DataFormatString = "$ {0} millions";
	$series->ArrayData(array(34,55,10,40));
	$chart->PlotArea->AddSeries($series);
    
	$series = new ColumnSeries();
	$series->Name = "Tablets & e-readers";
	$series->TooltipsAppearance->DataFormatString = "$ {0} millions";
	$series->ArrayData(array(56,23,56,80));
	$chart->PlotArea->AddSeries($series);
	
	$chart->ClientEvents["OnItemOver"] = "Handle_OnItemOver";
	$chart->ClientEvents["OnItemClick"] = "Handle_OnItemClick";
	$chart->ClientEvents["OnItemDblClick"] = "Handle_OnItemDblClick";	
?>

<form id="form1" method="post">

	<style>
		#log
		{
			width:670px;
			height:100px;
			overflow-y:scroll;
			background:#ffffee;
			border:solid 1px gray;
			font-family:Courier;
			padding-bottom:10px;
		}
		#log div
		{
			font-family:Courier;
			border-top:dotted 1px gray;
			padding-left:10px;
		}
	</style>

	<?php echo $chart->Render();?>
	
	<div id="log">
		
	</div>
	
	<script type="text/javascript">
		function _event_log(name,args)
		{
			var _log = document.getElementById("log");
			_log.innerHTML+="<div>"+name+": fired with args[\"Item\"][\"YValue\"] = "+args["Item"]["YValue"]+"; args[\"Category\"][\"Text\"] = "+args["Category"]["Text"]+"; All items data are in args[\"SeriesItems\"]</div>";
			//Beside the args["SeriesItem"] contains all series items data.
			_log.scrollTop = 999999;
		}
		function Handle_OnItemOver(sender, args)
		{
			_event_log("OnItemOver",args);
		}
		function Handle_OnItemClick(sender, args)
		{
			_event_log("OnItemClick",args);
			
		}
		function Handle_OnItemDblClick(sender, args)
		{
			_event_log("OnItemDblClick",args);
		}		
	</script>
	
	<div><i>* <u>Note</u>:</i>Generate your own chart with <a style="color:#B8305E;" target="_blank" href="http://codegen.koolphp.net/generate_koolchart.php">Code Generator</a></div>
	
</form>