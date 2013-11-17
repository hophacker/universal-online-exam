<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolCalendar/koolcalendar.php";	
	
	$datepicker = new KoolDatePicker("datetimepicker"); //Create calendar object
	$datepicker->scriptFolder = $KoolControlsFolder."/KoolCalendar";//Set scriptFolder
	$datepicker->styleFolder="default";
	
	//Change date and time format
	$datepicker->DateFormat = "M jS, Y";
	
	$datepicker->Init();
?>

<form id="form1" method="post">	
	<div style="padding-top:20px;padding-bottom:40px;width:650px;">
		Pick a time:
		<br/>
		<?php echo $datepicker->Render();?>
		<div style="padding-top:10px;">
			<input type="submit" value="Submit" />
		</div>
		<div style="padding-top:10px;">
			<?php
				if($datepicker->Value!=null)
				{
					echo "<b>Choosed time:</b> ".$datepicker->Value;
				}
			?>
		</div>		
	</div>
</form>
