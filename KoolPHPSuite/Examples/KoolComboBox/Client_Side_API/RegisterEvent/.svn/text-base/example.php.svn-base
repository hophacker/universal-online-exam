<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";

	$kcb = new KoolComboBox("kcb");
	$kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";

	$kcb->addItem("Asia","asia",null,true);//Init with Asia selected.
	$kcb->addItem("Europe","europe");
	$kcb->addItem("Africa","afica");
	$kcb->addItem("America","america");
	$kcb->addItem("Australia","australia");
	$kcb->width = "180px";
	$kcb->styleFolder="inox";
?>

<form id="form1" method="post">
	<style type="text/css">
		.box
		{
			float:left;
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

	<div class="box">
			Select your region:
			<?php echo $kcb->Render();?>
	</div>
	<div class="box focus">
		<b>Client-side events:  </b><hr/>
		<div id="eventlog"></div>	
	</div>
	<div class="clear"></div>

	<script type="text/javascript">
		kcb.registerEvent("OnBeforeSelect",function(sender,arg){
			var _item_data = arg.Item.getData();
			if(confirm("Select item '"+_item_data["text"]+"' ?"))
			{
				writelog("<b>OnBeforeSelect</b>: Approve selection.");
				return true; //Approve selection
			}
			else
			{
				writelog("<b>OnBeforeSelect</b>: Cancel selection.");
				return false;//Cancel selection
			}
		});
		kcb.registerEvent("OnSelect",function(sender,arg){
			var _item = arg.Item;
			writelog("<b>OnSelect</b>: '"+_item.getData()["text"] + "' was selected.");
		});
				
		kcb.registerEvent("OnOpen",function(sender,arg){
			var _item = arg.Item;
			writelog("<b>OnOpen</b>: ComboBox was opened. ");
		});
		kcb.registerEvent("OnClose",function(sender,arg){
			var _item = arg.Item;
			writelog("<b>OnClose</b>: ComboBox was closed. ");
		});
		function writelog(_text)
		{
			var _eventlog = document.getElementById("eventlog");
			_eventlog.innerHTML +="<div style='white-space:nowrap;'>"+_text+"</div>";
			_eventlog.scrollTop = 9999;
		}
	</script>
</form>
