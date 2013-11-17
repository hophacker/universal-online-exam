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
<div style="height:250px;width:650px;">
	<style type="text/css">	
		div.fl {	float:left; }
	</style>	
	<div style="background-color:#f0f0f0;  width:600px; height:200px; ">	
		<div class="fl" >
			<?php echo $ksm->Render();?></div>
		<div class="fl" style="background-color:#fff; height:250px;">&nbsp;</div>
		<div class="fl" style=" padding :15px; width : 350px" id="content">
			Just easily move mouse over	the catagory of menu, all the items of sub menu will appear for you. Nicely and friendly.
		</div>
	</div>	
</div>
<script type="text/javascript">
	function OnParentMouseOver_handle(sender,arg)
    {
		ksm.getItem(arg.ItemId).expand();
    }	
    // Register for OnParentMouseOver event
    ksm.registerEvent("OnParentMouseOver",OnParentMouseOver_handle);	
</script>
