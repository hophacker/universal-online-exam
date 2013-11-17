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
	$kul->allowedExtension = "gif,jpg,txt,doc,pdf";
	$kul->styleFolder=$KoolControlsFolder."/KoolUploader/styles/default";
	$kul->progressTracking = true;
	$kul->maxFileSize = 512*1024; //500KB
	
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<?php echo $kul->Render();?>
	<script type="text/javascript">
		kul.registerEvent("OnBeforeUpload",function(sender,arg){
			var _item = kul.getItem(arg.ItemId);
			var _short_desc = prompt("Enter short description:","contain good information");
			if(_short_desc!=null)
			{
				_item.attachData("short_desc",_short_desc);
				return true;	
			}	
			else
			{
				return false;
			}
			
		});
		kul.registerEvent("OnUploadDone",function(sender,arg){
			var _item = kul.getItem(arg.ItemId);
			alert(_item.getFileName());			
		});
	</script>
	
	<div style="padding-top:20px;">
		<i>*Note:</i> Please test uploading with *.txt, *.doc, *.pdf, *.jpg, *.gif ( size &lt; 500KB )
	</div>	

</form>
