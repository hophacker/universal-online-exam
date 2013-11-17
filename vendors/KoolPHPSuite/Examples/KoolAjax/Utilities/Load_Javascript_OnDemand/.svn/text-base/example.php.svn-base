<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
?>
<form id="form1" method="post">
	<?php echo $koolajax->Render();?>	
	<style type="text/css">
		div.box
		{
			float:left;
			margin:5px;
			padding:10px;
			width:290px;
			height:190px;
		}
		div.disable
		{
			padding-top:50px;
			height:140px;
			text-align:center;					
			background:#EEEEEE;
			border:solid 1px #CCCCCC;

		}
		div.enable
		{
			padding-top:50px;
			height:140px;			
			text-align:center;
			background:#DFF3FF;
			border:solid 1px #C6E1F2;	
		}
		.clear
		{
			clear:both;
		}
	</style>
	<script type="text/javascript">
		function loadjs()
		{
			koolajax.loadScript("sayhello.js",on_loadjs_done);
			document.getElementById("btnLoad").disabled = true;
		}
		function on_loadjs_done()
		{
			document.getElementById("divHello").className = "box enable";
			document.getElementById("btnHello").disabled = false;
		}
	</script>

	<div class="box">
		<input id="btnLoad" type="button" value="Load Javascript On-Demand" onclick="loadjs()" />
	</div>		
	<div id="divHello" class="box disable">
		<input id="btnHello" type="button" value="Say Hello" onclick="sayhello()" disabled="true" />
	</div>
	<div class="clear"></div>
</form>
