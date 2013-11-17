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
	$kul->styleFolder=$KoolControlsFolder."/KoolUploader/styles/default";
	$kul->handlePage = "handle.php";
	$kul->allowedExtension = "txt,jpg,gif,doc,pdf";
	$kul->maxFileSize = 512*1024; //500KB
	$kul->progressTracking = true;
	
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<style type="text/css">
		.defaultKUL .kulClearAll
		{
			display:none;
		}
		.defaultKUL .kulUploadAll
		{
			display:none;
		}		
	</style>
	
	<div style="padding:10px;">
		<?php echo $kul->Render();?>
	</div>
</form>
