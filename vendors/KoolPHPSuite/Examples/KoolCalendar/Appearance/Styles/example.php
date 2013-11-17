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

	$style_select = "default";	
	if(isset($_POST["style_select"]))
	{
		$style_select = $_POST["style_select"];
	}
	$cal->styleFolder=$style_select;

	//Init calendar before render
	$cal->Init();
?>

<form id="form1" method="post">

	Select style:
	<select id="style_select" name="style_select" onchange="submit();">
		<option value="default"			<?php if ($style_select=="default") echo "selected" ?> >Default</option>
	</select>
	
	<div style="padding-top:20px;padding-bottom:40px;width:650px;<?php if ($style_select=="black") echo "background:#333"; ?>">
		<?php echo $cal->Render();//Render calendar ?>
	</div>
</form>
