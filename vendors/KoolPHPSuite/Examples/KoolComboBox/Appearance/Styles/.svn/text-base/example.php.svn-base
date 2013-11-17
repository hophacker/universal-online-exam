<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";

	$kcb = new KoolComboBox("kcb");
	$kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";

	$kcb->addItem("Asia","asia",null,true);//Init with Asia selected.
	$kcb->addItem("Europe","europe");
	$kcb->addItem("Africa","afica");
	$kcb->addItem("America","america");
	$kcb->addItem("Australia","australia");
	$kcb->width = "180px";
	
	
	$style_select = "default";
	if(isset($_POST["style_select"]))
	{
		$style_select = $_POST["style_select"];
	}
	$kcb->styleFolder=$style_select;
?>

<form id="form1" method="post">

	<div style="float:left;width:300px;margin-bottom:30px;">
		<?php echo $kcb->Render();?>
	</div>

	Select style:
	<select id="style_select" name="style_select" onchange="submit();">
		<option value="default"		<?php if ($style_select=="default") echo "selected" ?> >Default</option>
		<option value="hay"			<?php if ($style_select=="hay") echo "selected" ?> >Hay</option>
		<option value="silver" 		<?php if ($style_select=="silver") echo "selected" ?> >Silver</option>
		<option value="black" 		<?php if ($style_select=="black") echo "selected" ?> >Black</option>
		<option value="inox" 		<?php if ($style_select=="inox") echo "selected" ?> >Inox</option>
		<option value="office2007" 	<?php if ($style_select=="office2007") echo "selected" ?> >Office2007</option>
		<option value="outlook" 	<?php if ($style_select=="outlook") echo "selected" ?> >Outlook</option>
		<option value="vista" 		<?php if ($style_select=="vista") echo "selected" ?> >Vista</option>
	</select>
	<br style="clear:both;"/>

</form>
