<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
    require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	if ($koolajax->isCallback)
	{
		//If it is callback request, Slow down processing to see loading effect
		sleep(1);
	}	
?>
<div class="exampleContent" style="height:230px;width:650px;">
	<?php echo $koolajax->Render();?>
	<link rel="stylesheet" href="example.css" />	
	<table ><tr><td width="50%">
		<?php echo KoolScripting::Start();?>
			<updatepanel id="myUpdate" class ="cssOrder">
				<content>					
					<input type="button" id="btnOrder" class="btn" name="btnOrder" value="Submit Order" />
					<br/> <br/>
					<div id="result" class="result" >
						<?php
							if( isset( $_POST['p']))
							{
								echo "Order succesfull.<br/> Your OrderID is ".rand(0,9999);
							}							
						?>
					</div>
					<input type="hidden" name="p" value="post" />					
				</content>
				<triggers>
					<trigger elementid="btnOrder" event="onclick"/>				
				</triggers>
				<loading image="<?php echo $KoolControlsFolder;?>/KoolAjax/loading/5.gif"/>
			</updatepanel>
		<?php echo KoolScripting::End();?>	
	</td><td>
	<div class="block" >
		<b>Client-side events:  </b>
		<hr />
		<div id="eventClient" />
	</div>
	</td></tr></table>
	<br style="clear:both">
	<script language="javascript">		
		var startTime ;
		function handleSendingRequest(sender,args)
		{	
			var currentTime = new Date();	
			startTime = currentTime.getTime() ;
			document.getElementById( "eventClient" ).innerHTML += "Start update Order... " + "<br/>";
			document.getElementById( "eventClient" ).scrollTop = 9999;
		}
		function handleUpdate(sender,args)
		{
			var currentTime = new Date();
			var afterTime = currentTime.getTime() - startTime;
			document.getElementById( "eventClient" ).innerHTML += "Finish update Order after " + afterTime + " ms<br/>";
			document.getElementById( "eventClient" ).scrollTop = 9999;
		}
		myUpdate.registerEvent("OnSendingRequest",handleSendingRequest); 		
		myUpdate.registerEvent("OnUpdatePanel",handleUpdate); 		
	</script>
</div>
