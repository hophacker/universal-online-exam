<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolSlideMenu/koolslidemenu.php";
			
	$xmlDoc = new DOMDocument();
	$xmlDoc->load("SlideMenu.xml");
	
	$ksm = new KoolSlideMenu("ksm");
	$ksm->loadXML($xmlDoc->saveXML());
	
?>
<div style="height:200px;width:650px;padding-left:10px;">
	<?php echo $ksm->Render();?>
</div>
