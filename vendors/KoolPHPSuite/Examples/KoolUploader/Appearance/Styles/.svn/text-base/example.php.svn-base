<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolUploader/kooluploader.php";
	require $KoolControlsFolder."/KoolAjax/koolajax.php";

	$kul = new KoolUploader("kul");
	$kul->scriptFolder = $KoolControlsFolder."/KoolUploader";
	$kul->handlePage = "handle.php";
	$kul->allowedExtension = "txt,jpg,gif,doc,pdf";
	$kul->maxFileSize = 512*1024; //500KB
	$kul->progressTracking = true;
		
	$style_select = "default";
	
	if(isset($_POST["style_select"]))
	{
		$style_select = $_POST["style_select"];
	}
	$kul->styleFolder=$KoolControlsFolder."/KoolUploader/styles/$style_select";
	
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<div style="padding-left:10px;">
		Select style:
		<select id="style_select" name="style_select" onchange="submit();">
			<option value="default"		<?php if ($style_select=="default") echo "selected" ?> >Default</option>
			<option value="black" 		<?php if ($style_select=="black") echo "selected" ?> >Black</option>
			<option value="hay"			<?php if ($style_select=="hay") echo "selected" ?> >Hay</option>
			<option value="silver" 		<?php if ($style_select=="silver") echo "selected" ?> >Silver</option>
			<option value="inox" 		<?php if ($style_select=="inox") echo "selected" ?> >Inox</option>
			<option value="office2007" 	<?php if ($style_select=="office2007") echo "selected" ?> >Office2007</option>
			<option value="outlook" 	<?php if ($style_select=="outlook") echo "selected" ?> >Outlook</option>
			<option value="vista" 		<?php if ($style_select=="vista") echo "selected" ?> >Vista</option>
		</select>
	</div>
	
	<div style="padding:10px;">
		<?php echo $kul->Render();?>
	</div>
	<div style="padding-top:20px;">
		<i>*Note:</i> Please test uploading with *.txt, *.doc, *.pdf, *.jpg, *.gif ( size &lt; 500KB )
	</div>	
	
</form>
