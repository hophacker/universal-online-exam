<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolCalendar/koolcalendar.php";
	
	
	$cal = new KoolCalendar("cal"); //Create calendar object
	$cal->scriptFolder = $KoolControlsFolder."/KoolCalendar";//Set scriptFolder
	$cal->styleFolder="default";
	
	//Enabled client mode
	$cal->ClientMode = true;	

	//Register Client Event
	$cal->ClientEvents["OnSelect"] = "OnSelect_Handle";
	$cal->ClientEvents["OnBeforeSelect"] = "OnBeforeSelect_Handle";

	//Init calendar before render
	$cal->Init();
?>

<form id="form1" method="post">
	<style type="text/css">
		.box
		{
			float:left;
			width:280px;
			height:180px;
			margin:10px;
			padding:10px;
		}
		.focus
		{
			background:#DFF3FF;
			border:solid 1px #C6E1F2;			
		}
		.clear
		{
			clear:both;
		}
		#eventlog
		{
			overflow:auto;
			overflow-x:hidden;
			height : 150px;
			width : 280px;
		}	
	</style>
	<script type="text/javascript">
		function OnBeforeSelect_Handle(sender,arg)
		{
			var _selected_date = arg.Date.toGMTString();
				
			if (confirm("Select ["+_selected_date+"] date?"))
			{
				writelog("- Selecting [" + _selected_date + "] date was approved.");	
				return true;
			}
			else
			{
				writelog("- Selecting [" + _selected_date + "] date was cancelled.");
				return false;
				
			}						
		}
		function OnSelect_Handle(sender,arg){
			var _selected_date = arg.Date.toGMTString();
			writelog("- Date [" + _selected_date + "] was selected.");
		}
		
		function writelog(_text)
		{
			var _eventlog = document.getElementById("eventlog");
			_eventlog.innerHTML +="<div style='white-space:normal;'>"+_text+"</div>";
			_eventlog.scrollTop = 9999;
		}		
	</script>

	<div class="box">
		<?php echo $cal->Render();?>
	</div>
	<div class="box focus">
		<b>Client-side events:  </b><hr/>
		<div id="eventlog"></div>		
	</div>
	<div class="clear"></div>
		
</form>