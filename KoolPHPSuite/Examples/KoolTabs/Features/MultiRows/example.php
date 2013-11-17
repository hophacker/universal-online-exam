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
	$kts->addTab("root","home","Home",null,null,true,"33%");	
	$kts->addTab("root","products","Products",null,null,true,"33.3%");
	$kts->addTab("root","services","Services",null,null,true,"33.3%");
	$kts->addBreak("root");
	$kts->addTab("root","company","Company",null,null,true,"50%");
	$kts->addTab("root","contactus","Contact us",null,null,true,"50%");
	$kts->width = "350px";
	
?>

<form id="form1" method="post">
	
	<div style="padding:10px;">
		<?php echo $kts->Render();?>
	</div>
</form>
