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
	$kul->allowedExtension = "gif,jpg,txt,doc,pdf";
	$kul->progressTracking = true;
	$kul->maxFileSize = 512*1024;
	
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<style type="text/css">
		.defaultKUL .kulUploadAll
		{
			display:none;
		}
		
	</style>
	<?php echo $kul->Render();?>
	<script type="text/javascript">
		kul.registerEvent("OnUploadDone",function(sender,arg){
			var _items = kul.getItems(); //Get all items
			for(var i in _items)
			{
				if(_items[i].getStatus()=="ready")
				{
					_items[i].upload();
					return;
				}
			}				
			
		});
		kul.registerEvent("OnBeforeUpload",function(sender,arg){
			//Make sure that only one file is uploaded at a time.
			//Cancel user click button to upload the file when there is file uploading.
			var _items = kul.getItems(); //Get all items
			for(var i in _items)
			{
				if(_items[i].getStatus()=="uploading")
				{
					return false;
				}
			}				
			return true;
		});	

	</script>
	
	<div style="padding-top:20px;">
		<i>*Note:</i> Please test uploading with *.txt, *.doc, *.pdf, *.jpg, *.gif ( size &lt; 500KB )
	</div>	
</form>
