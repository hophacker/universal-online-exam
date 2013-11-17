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
	$kul->progressTracking = true;
	
	$size_select = "300x200";	
	if(isset($_POST["size_select"]))
	{
		$size_select = $_POST["size_select"];
	}
	
	switch($size_select)
	{
		case "300x200":
			$kul->width = "300px";
			$kul->height = "200px";
			break;
		case "320x240":
			$kul->width = "320px";
			$kul->height = "240px";
			break;
		case "640x480":
			$kul->width = "640px";
			$kul->height = "480px";
			break;
		case "50%x300":
			$kul->width = "50%";
			$kul->height = "300px";
			break;
	}
	
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<div style="padding-left:10px;">
		Select size:
		<select id="size_select" name="size_select" onchange="submit();">
			<option value="300x200"		<?php if ($size_select=="300x200") echo "selected" ?> >300 x 200</option>
			<option value="320x240" 	<?php if ($size_select=="320x240") echo "selected" ?> >320 x 240</option>
			<option value="640x480"		<?php if ($size_select=="640x480") echo "selected" ?> >640 x 480</option>
			<option value="50%x300"		<?php if ($size_select=="50%x300") echo "selected" ?> >50% x 300</option>
		</select>
	</div>
	
	<div style="padding:10px;">
		<?php echo $kul->Render();?>
	</div>
</form>
