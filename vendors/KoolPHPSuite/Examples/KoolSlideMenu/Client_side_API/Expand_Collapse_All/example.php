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
	$ksm->styleFolder = $KoolControlsFolder."KoolSlideMenu/styles/apple";
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
	$ksm->singleExpand = false;	
?>
<form id="form1" method="post">
	<style type="text/css">
		.box
		{
			float:left;
			width:280px;
			min-height:180px;
			margin:10px;
			padding:10px;
		}
		.focus
		{
			background:#DFF3FF;
			border:solid 1px #C6E1F2;
			text-align:center;		
		}
		.clear
		{
			clear:both;
		}
		#eventlog
		{
			overflow:auto;
			overflow-X:hidden;
			height : 150px;
		}	
	</style>
	
	<div class="box">
		<?php echo $ksm->Render();?>		
	</div>
	<div class="box focus">
		<input type="button" value="Expand all" onclick="ksm.expandAll();" />
		<input type="button" value="Collapse all" onclick="ksm.collapseAll();" />	
	</div>
	<div class="clear"></div>
</form>

