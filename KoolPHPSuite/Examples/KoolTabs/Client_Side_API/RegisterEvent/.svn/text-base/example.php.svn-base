<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTabs/kooltabs.php";

	$kts = new KoolTabs("kts");
	$kts->scriptFolder = $KoolControlsFolder."/KoolTabs";
	$kts->styleFolder="outlook";
	
	$kts->addTab("root","home","Home");	
	$kts->addTab("root","products","Products");
	$kts->addTab("root","services","Services");
	$kts->addTab("root","contactus","Contact us");	
	
	
?>

<form id="form1" method="post">
	<style type="text/css">
		.box
		{
			float:right;
			width:280px;
			height:180px;
			margin:10px;
			padding:10px;
		}		
		.focus
		{
			background:#DFF3FF;
			border:solid 1px #C6E1F2;			
		}
		.clear
		{
			clear:both;
		}
		#eventlog
		{
			overflow:auto;
			overflow-x:hidden;
			height : 150px;
			width : 280px;
		}	
				
	</style>
	
	
	<div style="width:650px;">

		<div class="box focus">
			<b>Client-side events:  </b><hr/>
			<div id="eventlog"></div>		
		</div>
		
		<div style="padding-top:15px;">
			<?php echo $kts->Render();?>
		</div>
		
		<div class="clear"></div>		
	</div>

	<script type="text/javascript">
		kts.registerEvent("OnBeforeSelect",function(sender,arg){
			if(confirm("Select ["+arg.TabId+"] tab?"))
			{
				writelog("Selecting " + arg.TabId + " was approved");				
				return true; //Approve selecting.
			}
			else
			{
				writelog("Selecting " + arg.TabId + " was cancelled");	
				return false;//Disapprove selecting.
			}
		});
		
		kts.registerEvent("OnSelect",function(sender,arg){
			writelog("The <b>"+arg.TabId+"</b> tab is selected!");
		});

				
		function writelog(_text)
		{
			var _eventlog = document.getElementById("eventlog");
			_eventlog.innerHTML +="<div style='white-space:nowrap;'>"+_text+"</div>";
			_eventlog.scrollTop = 9999;
		}		
		
	</script>
	
</form>
