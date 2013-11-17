<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	require $KoolControlsFolder."/KoolGrid/koolgrid.php";
	require $KoolControlsFolder."/KoolForm/koolform.php";
	
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	
	$myform_manager = new KoolForm("myform");
	$myform_manager->scriptFolder = $KoolControlsFolder."/KoolForm";	
	$myform_manager->DecorationEnabled = true;
		

	$myform_manager->styleFolder = "sunset";
	$myform_manager->Init();
?>

<form id="myform" method="post">
	<style type="text/css">
		.panel_class
		{
			width:230px;
		}
	</style>
	<?php echo $koolajax->Render();?>
		<?php echo KoolScripting::Start()?>
			<updatepanel id="myupdatepanel" class="panel_class">
				<content>
				<![CDATA[
				<fieldset style="width:200px;padding-bottom:10px;padding-left:5px;" class="decoration">
					<legend>UpdatePanel</legend>
					<div style="height:5px;"></div>
					<input id="chk1" name="chk1" type="checkbox" /><label for="chk1">Football</label>
					<br />
					<input id="chk2" name="chk1" type="checkbox" /><label for="chk2">Basketball</label>
					<br />
					<input id="chk3" name="chk1" type="checkbox" /><label for="chk3">Volleyball</label>
					<br /><br/>
					<input id="btnSubmit" type="submit" value="Submit" />
				</fieldset>
				]]>	
				</content>
				<loading image="<?php echo $KoolControlsFolder;?>/KoolAjax/loading/5.gif"/>
			</updatepanel>
		<?php echo KoolScripting::End()?>		
	<?php echo $myform_manager->Render();?>
	<script type="text/javascript">
				myupdatepanel.registerEvent("OnUpdatePanel",function(sender,args){
					myform_manager.refresh();
				});
	</script>
</form>