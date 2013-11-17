<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolCalendar/koolcalendar.php";
	$timepicker = new KoolTimePicker("timepicker"); //Create calendar object
	$timepicker->scriptFolder = $KoolControlsFolder."/KoolCalendar";//Set scriptFolder
	$timepicker->styleFolder="default";

	$timepicker->TimeViewSettings->StartTime = mktime(8,0,0); // Start at 8:00
	$timepicker->TimeViewSettings->EndTime = mktime(17,0,0); // End at 17:00
	$timepicker->TimeViewSettings->Interval = mktime(1,0,0); // Every 1 hour

	$timepicker->Init();
?>

<form id="form1" method="post">	
	<div style="padding-top:20px;padding-bottom:40px;width:650px;">
		Pick a time:
		<br/>
		<?php echo $timepicker->Render();?>
		<div style="padding-top:10px;">
			<input type="submit" value="Submit" />
		</div>
		<div style="padding-top:10px;">
			<?php
				if($timepicker->Value!=null)
				{
					echo "<b>Choosed time:</b> ".$timepicker->Value;
				}
			?>
		</div>		
	</div>
</form>
