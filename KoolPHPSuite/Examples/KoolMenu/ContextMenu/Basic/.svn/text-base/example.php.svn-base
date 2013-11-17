<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolMenu/koolmenu.php";
	
	$km = new KoolMenu("km");
	$context = new KoolContextMenu("context");
	$context->scriptFolder = $KoolControlsFolder."/KoolMenu";
	$context->styleFolder = "default";
	$context->Add("root","blue","Blue","javascript:setColor(\"blue\")","images/star_blue.png");
	$context->Add("root","yellow","Yellow","javascript:setColor(\"yellow\")","images/star_yellow.png");
	$context->Add("root","green","Green","javascript:setColor(\"green\")","images/star_green.png");
	$context->Add("root","red","Red","javascript:setColor(\"red\")","images/star_red.png");
	$context->Add("root","grey","Grey","javascript:setColor(\"gray\")","images/star_grey.png");

	$context->AttachTo = "myPanel";
	
?>

<form id="form1" method="post">
	<div style="padding-top:20px;padding-bottom:100px;width:650px;">
		Right-click to open color menu:
		<div id="myPanel" style="width:100px;height:100px;background:green;margin-top:10px;"></div>
		<?php echo $context->Render();?>
		<script>
			function setColor(_color)
			{
				document.getElementById("myPanel").style.backgroundColor = _color;
			}			
		</script>
	</div>
</form>
