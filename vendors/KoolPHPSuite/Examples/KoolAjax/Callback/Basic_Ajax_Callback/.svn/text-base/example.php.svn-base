<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
		
	function calculate($x,$y)
	{
		return $x+$y;
	}
	//Enable calculate function to be called at client-side
	$koolajax->enableFunction("calculate");	
	
?>
<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<style type="text/css">
		#loading
		{
			position:relative;
			left:-22px;
			top:3px;
			visibility:hidden;
		}
	</style>		
		
	<div>
		<input id="txtX" type="textbox" value="2" /> + 
		<input id="txtY" type="textbox" value="3" />
		<input id="btnCal" type="button" value="Calculate" onclick="btnCal_Click()" />
		<input id="txtZ" type="textbox" />
		<img id="loading" src="Images/loading.gif" alt="Loading..." />
	</div>	
	<script type="text/javascript">
		function btnCal_Click()
		{
			x = document.getElementById("txtX").value;
			y = document.getElementById("txtY").value;
			koolajax.callback(calculate(x,y),onDone);
			document.getElementById("loading").style.visibility ="visible";			
		}
		function onDone(s)
		{
			document.getElementById("txtZ").value = s;
			document.getElementById("loading").style.visibility ="hidden";
		}
	</script>
</form>
