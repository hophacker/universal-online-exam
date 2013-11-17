<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTabs/kooltabs.php";
	$kts = new KoolTabs("kts");
	$kts->scriptFolder = $KoolControlsFolder."/KoolTabs";
	
	$kts->addTab("root","home","Home",null,true);	
	$kts->addTab("root","products","Products");
	$kts->addTab("root","services","Services");
	$kts->addTab("root","company","Company");
	$kts->addTab("root","contactus","Contact us");
	
	$style_select = "hay";
	
	if(isset($_POST["style_select"]))
	{
		$style_select = $_POST["style_select"];
	}
	$kts->styleFolder=$style_select;
?>

<form id="form1" method="post">

	Select style:
	<select id="style_select" name="style_select" onchange="submit();">
		<option value="hay"			<?php if ($style_select=="hay") echo "selected" ?> >Hay</option>
		<option value="silver" 		<?php if ($style_select=="silver") echo "selected" ?> >Silver</option>
		<option value="black" 		<?php if ($style_select=="black") echo "selected" ?> >Black</option>
		<option value="inox" 		<?php if ($style_select=="inox") echo "selected" ?> >Inox</option>
		<option value="office2007" 	<?php if ($style_select=="office2007") echo "selected" ?> >Office2007</option>
		<option value="outlook" 	<?php if ($style_select=="outlook") echo "selected" ?> >Outlook</option>
		<option value="vista" 		<?php if ($style_select=="vista") echo "selected" ?> >Vista</option>
	</select>
	
	<div style="padding-left:10px;padding-top:20px;padding-bottom:20px;width:650px;<?php if ($style_select=="black") echo "background:#333"; ?>">
		<?php echo $kts->Render();?>
	</div>
</form>
