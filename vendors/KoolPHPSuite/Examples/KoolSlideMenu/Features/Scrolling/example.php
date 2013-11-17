<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolSlideMenu/koolslidemenu.php";
	
	$ksm = new KoolSlideMenu("sm");
	$ksm->scriptFolder =  $KoolControlsFolder."/KoolSlideMenu";	
	$ksm->styleFolder = $KoolControlsFolder."KoolSlideMenu/styles/redgray";
	$ksm->addParent("root","company","Company",null,true);
	$ksm->addChild("company","about","About Us");
	$ksm->addChild("company","news","Company News");
	$ksm->addChild("company","contact","Contact us");	
	$ksm->addChild("company","koolajax","KoolAjax");
	$ksm->addChild("company","kooltreeview","KoolTreeView");
	$ksm->addChild("company","koolslidemenu","KoolSlideMenu");	
	$ksm->addChild("company","koolimageview","KoolImageView");
	$ksm->addChild("company","kooltabs","KoolTabs");
	$ksm->addChild("company","kooluploader","KoolUploader");	
	
	$ksm->addParent("root","services","Services");
	$ksm->addChild("services","outsourcing","Out-sourcing");
	$ksm->addChild("services","freelancer","Free-lancer");	
	
	$ksm->width="200px";
	$ksm->singleExpand = true;
	$ksm->boxHeight = 80;
	$ksm->scrollEnable = true;

?>
<form id="form1" method="post">
	<div style="padding-left:10px;">
		<?php echo $ksm->Render();?>	
	</div>
</form>
