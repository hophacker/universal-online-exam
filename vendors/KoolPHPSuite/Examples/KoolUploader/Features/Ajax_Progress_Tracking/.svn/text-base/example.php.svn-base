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
	$kul->styleFolder=$KoolControlsFolder."/KoolUploader/styles/default";
	$kul->allowedExtension = "txt,jpg,gif,doc,pdf";
	$kul->maxFileSize = 512*1024; //500KB

	$kul_with_progress = new KoolUploader("kul_with_progress");
	$kul_with_progress->scriptFolder = $KoolControlsFolder."/KoolUploader";
	$kul_with_progress->handlePage = "handle.php";	
	$kul_with_progress->styleFolder=$KoolControlsFolder."/KoolUploader/styles/default";
	$kul_with_progress->allowedExtension = "txt,jpg,gif,doc,pdf";
	$kul_with_progress->maxFileSize = 512*1024; //500KB
	$kul_with_progress->progressTracking = true;
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	
	<table style="width:650px;">
		<tr>
			<td style="color:gray">No Progress Tracking</td>
			<td style="color:green">With Progress Tracking</td>
		</tr>
		<tr>
			<td>
				<?php echo $kul->Render();?>		
			</td>
			<td>
				<?php echo $kul_with_progress->Render();?>
			</td>
		</tr>
	</table>	
	<div style="padding-top:20px;">
		<i>*Note:</i> Please test uploading with *.txt, *.doc, *.pdf, *.jpg, *.gif ( size &lt; 500KB )
	</div>	

</form>
