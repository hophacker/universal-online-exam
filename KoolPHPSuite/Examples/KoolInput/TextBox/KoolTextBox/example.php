<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolForm/koolform.php";	
	$myform_manager = new KoolForm("myform");
	$myform_manager->scriptFolder = $KoolControlsFolder."/KoolForm";	
	$myform_manager->styleFolder = "sunset";
	$myform_manager->DecorationEnabled = true;
	
	
	$txtName = $myform_manager->AddControl(new KoolTextBox("txtName"));
	$txtName->MaxLength = 10;
	$txtName->EmptyMessage = "John Smith";
	$txtName->ToolTip = "What is your name?";
	
	$txtDescription = $myform_manager->AddControl(new KoolTextBox("txtDescription"));
	$txtDescription->Mode = "multiline";
	$txtDescription->EmptyMessage = "I am engineer!";
	$txtDescription->ToolTip = "Tell us more about you!";
	$txtDescription->Width = "200px";
	$txtDescription->Height = "100px";


	//Init form
	$myform_manager->Init();
?>

<form id="myform" method="post" class="decoration">
	

	<fieldset style="width:250px;padding-left:10px;padding-bottom:10px;">
		<legend><b>Introduction</b></legend>
		
		Name (maxlength=10): <br/>
		<?php echo $txtName->Render();?> <br /><br />
	
		Description: <br />
		<?php echo $txtDescription->Render();?>
		<br /><br />
		<input id="btnSubmit" type="submit" value="Submit" /> 
				
	</fieldset>	
	
	<br/>
	<?php if($txtName->Value!="") echo "<b>Your name: </b>".$txtName->Value; ?><br/>
	<?php if($txtDescription->Value!="") echo "<b>Description: </b>\"".$txtDescription->Value."\""; ?>

	<?php echo $myform_manager->Render();?>
</form>