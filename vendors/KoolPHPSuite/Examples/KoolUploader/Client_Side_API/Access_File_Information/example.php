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
	
	<table style="width:650px;">
		<tr>
			<td><?php echo $kul->Render();?></td>
			<td>
				Uploading information:
				<div id="log" style="width:300px;height:200px;overflow:auto;background:#EEEEEE"></div>
			</td>
		</tr>		
	</table>
	
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
		kul.registerEvent("OnUpdateProgress",function(sender,arg){
			var _item = kul.getItem(arg.ItemId); //Get all items
			clearlog();
			writelog("Filename: <i>"+_item.getFileName()+"</i>");
			writelog("Uploaded bytes: <i>"+_item.getUploadedBytes()+"/"+_item.getTotalBytes()+"</i>");			
			writelog("Elapsed time: <i>"+_item.getElapsedTime()+" seconds</i>");			
			writelog("Esimated time left: <i>"+_item.getEstimatedTimeLeft()+" seconds</i>");			
			writelog("Average speed: <i>"+_item.getAverageSpeed()+" bytes/second</i>");			
		});	
		function writelog(_text)
		{
			var _log = document.getElementById("log");
			_log.innerHTML +="<div style='white-space:nowrap;'>"+_text+"</div>";
			_log.scrollTop = 9999;
		}
		function clearlog()
		{
			var _log = document.getElementById("log");
			_log.innerHTML="";			
			_log.scrollTop = 0;
		}
	</script>
	
	<div style="padding-top:20px;">
		<i>*Note:</i> Please test uploading with *.txt, *.doc, *.pdf, *.jpg, *.gif ( size &lt; 500KB )
	</div>	

</form>
