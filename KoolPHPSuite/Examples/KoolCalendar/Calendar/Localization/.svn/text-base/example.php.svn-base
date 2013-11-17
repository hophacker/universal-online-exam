<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolCalendar/koolcalendar.php";
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	
	
	$cal = new KoolCalendar("cal"); //Create calendar object
	$cal->scriptFolder = $KoolControlsFolder."/KoolCalendar";//Set scriptFolder
	$cal->styleFolder="default";
	$cal->ShowDayCellToolTips = false;
	//Set localization
	$localization_select = "en";
	if(isset($_POST["localization_select"]))
	{
		$localization_select = $_POST["localization_select"];
	}
	$cal->Localization->Load($KoolControlsFolder."/KoolCalendar/localization/$localization_select.xml");
	//Init calendar before render
	$cal->Init();
?>

<form id="form1" method="post">	
	Select language:
	<select id="localization_select" name="localization_select" onchange="submit();">
		<option value="en"			<?php if ($localization_select=="en") echo "selected" ?> >English</option>
		<option value="vn"			<?php if ($localization_select=="vn") echo "selected" ?> >Vietnamese</option>
	</select>
	
	<div style="padding-top:20px;padding-bottom:40px;width:650px;<?php if ($style_select=="black") echo "background:#333"; ?>">
		<?php echo $koolajax->Render();?>
		<?php echo $cal->Render();?>
	</div>
	
</form>
