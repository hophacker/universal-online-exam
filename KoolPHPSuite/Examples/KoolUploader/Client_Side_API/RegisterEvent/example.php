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
				Client-Side Events:
				<div id="eventlog" style="width:300px;height:200px;overflow:auto;background:#EEEEEE"></div>
			</td>
		</tr>		
	</table>
	
	<script type="text/javascript">
		
		var _removeFileName;
		
		kul.registerEvent("OnAddItem",function(sender,arg){
			var _item = kul.getItem(arg.ItemId);
			writelog("<b>OnAddItem</b>: "+_item.getFileName());
		});
		
		kul.registerEvent("OnBeforeRemove",function(sender,arg){
			var _item = kul.getItem(arg.ItemId);
			_removeFileName = _item.getFileName();
			return true;
		});
		
		kul.registerEvent("OnRemove",function(sender,arg){
			//Since on the moment this event happen, the item is already remove,
			//We will not able to access the filename so we need to OnBeforeRemove to get the filename.
			writelog("<b>OnRemove</b>: "+_removeFileName);
		});
		
		
		kul.registerEvent("OnBeforeUpload",function(sender,arg){
			var _item = kul.getItem(arg.ItemId);
			if(confirm("Upload the file "+_item.getFileName()+" ?"))
			{
				writelog("<b>OnBeforeUpload</b>: Approve uploading "+_item.getFileName());
				return true;// Approve upload
			}
			else
			{
				writelog("<b>OnBeforeUpload</b>: Disapprove uploading "+_item.getFileName());
				return false;//Disapprove the upload
			}
		});
		kul.registerEvent("OnUploadDone",function(sender,arg){
			var _item = kul.getItem(arg.ItemId);
			writelog("<b>OnUploadDone</b>: "+_item.getFileName());
		});		
		
		function writelog(_text)
		{
			var _eventlog = document.getElementById("eventlog");
			_eventlog.innerHTML +="<div style='white-space:nowrap;'>"+_text+"</div>";
			_eventlog.scrollTop = 9999;
		}
	</script>
	
	
	<div style="padding-top:20px;">
		<i>*Note:</i> Please test uploading with *.txt, *.doc, *.pdf, *.jpg, *.gif ( size &lt; 500KB )
	</div>	

</form>
