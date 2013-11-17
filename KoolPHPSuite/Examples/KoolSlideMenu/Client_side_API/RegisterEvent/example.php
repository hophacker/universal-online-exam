<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolSlideMenu/koolslidemenu.php";	
	$ksm = new KoolSlideMenu("ksm");
	$ksm->scriptFolder =  $KoolControlsFolder."/KoolSlideMenu";	
	$ksm->styleFolder = $KoolControlsFolder."KoolSlideMenu/styles/redgray";
	$ksm->addParent("root","company","Company");
	$ksm->addChild("company","about","About Us");
	$ksm->addChild("company","news","Company News");
	$ksm->addChild("company","contact","Contact us");

	$ksm->addParent("root","products","Products");
	$ksm->addChild("products","koolajax","KoolAjax");
	$ksm->addChild("products","kooltreeview","KoolTreeView");
	$ksm->addChild("products","koolslidemenu","KoolSlideMenu");	
	
	$ksm->addParent("root","services","Services");
	$ksm->addChild("services","outsourcing","Out-sourcing");
	$ksm->addChild("services","freelancer","Free-lancer");	
	
	$ksm->width="200px";
	$ksm->singleExpand = true;	
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
		<?php echo $ksm->Render();?>		
	</div>
	<div class="box focus">
		<b>Client-side events:  </b><hr/>
		<div id="eventlog"></div>		
	</div>
	<div class="clear"></div>
		
	<script type="text/javascript">
		ksm.registerEvent("OnBeforeSelect",function(sender,arg){
			
			if (confirm("Select ["+arg.ItemId+"] item?"))
			{
				writelog("Selecting " + arg.ItemId + " was approved");	
				return true;
			}
			else
			{
				writelog("Selecting " + arg.ItemId + " was cancelled");	
				return false;
				
			}						
		});

		ksm.registerEvent("OnSelect",function(sender,arg){
			writelog("You selected " + arg.ItemId);
		});
		
		ksm.registerEvent("OnExpand",function(sender,arg){
			writelog("You expanded " + arg.ItemId);
		});
		ksm.registerEvent("OnCollapse",function(sender,arg){
			writelog("You collapsed " + arg.ItemId);
		});
		function writelog(_text)
		{
			var _eventlog = document.getElementById("eventlog");
			_eventlog.innerHTML +="<div style='white-space:nowrap;'>"+_text+"</div>";
			_eventlog.scrollTop = 9999;
		}		
	</script>
</form>