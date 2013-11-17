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

	$ksm->addParent("root","products","Products");
	$ksm->addChild("products","koolajax","KoolAjax");
	$ksm->addChild("products","kooltreeview","KoolTreeView");
	$ksm->addChild("products","koolslidemenu","KoolSlideMenu");	
	
	$ksm->addParent("root","services","Services");
	$ksm->addChild("services","outsourcing","Out-sourcing");
	$ksm->addChild("services","freelancer","Free-lancer");	
	
	$ksm->width="200px";
	$ksm->singleExpand = true;
	// Box height Setting :
	$ksm->boxHeight = 100;

	
	$ksm2 = new KoolSlideMenu("sm2");	
	$ksm2->scriptFolder =  $KoolControlsFolder."/KoolSlideMenu";	
	$ksm2->styleFolder = $KoolControlsFolder."KoolSlideMenu/styles/redgray";
	$ksm2->addParent("root","company2","Company",null,true);
	$ksm2->addChild("company2","about2","About Us");

	$ksm2->addParent("root","products2","Products");
	$ksm2->addChild("products2","koolajax2","KoolAjax");
	$ksm2->addChild("products2","kooltreeview2","KoolTreeView");
	$ksm2->addChild("products2","koolslidemenu2","KoolSlideMenu");	
	
	$ksm2->addParent("root","services2","Services");
	$ksm2->addChild("services2","outsourcing2","Out-sourcing");
	$ksm2->addChild("services2","freelancer2","Free-lancer");	
	
	$ksm2->width="200px";
	$ksm2->singleExpand = true;
	$ksm2->boxHeight = -1;//Default value
?>
<form id="form1" method="post">
	<style type="text/css">
		.box
		{
			float:left;
			width:250px;
			height:220px;
			margin:10px;
			padding:10px;
		}
		.focus
		{
			padding-left:50px;
			background:#DFF3FF;
			border:solid 1px #C6E1F2;			
		}
		.clear
		{
			clear:both;
		}
		#style_select
		{
			width:100px;	
		}		
	</style>
	
	<div class="box focus">
		<div style="padding-bottom:10px;"><b>Fixed BoxHeight</b></div>
		<?php echo $ksm->Render();?>
	</div>
	<div class="box focus">
		<div style="padding-bottom:10px;"><b>Dynamic BoxHeight</b></div>
		<?php echo $ksm2->Render();?>
	</div>
	<div class="clear"></div>
</form>
