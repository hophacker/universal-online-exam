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
	
	
	
	$txtPhone = $myform_manager->AddControl(new KoolMaskedTextBox("txtPhone"));
	$txtPhone->Mask = "(###) ###-####";
	$txtPhone->PromptChar = "_";
	$txtPhone->SelectionOnFocus = "SelectAll"; 
	
	$txtIPAddress = $myform_manager->AddControl(new KoolMaskedTextBox("txtIPAddress"));
	$txtIPAddress->Mask = "<0..255>.<0..255>.<0..255>.<0..255>";
	$txtIPAddress->SelectionOnFocus = "CaretToBeginning"; 
	
	$txtVisaCreditCard= $myform_manager->AddControl(new KoolMaskedTextBox("txtVisaCreditCard"));
	$txtVisaCreditCard->Mask = "4### #### #### ####";
	$txtVisaCreditCard->PromptChar = "_";
	$txtVisaCreditCard->SelectionOnFocus = "SelectAll"; 
	
	$txtSSN= $myform_manager->AddControl(new KoolMaskedTextBox("txtSSN"));
	$txtSSN->Mask = "###-##-####";
	$txtSSN->PromptChar = "_";
	$txtSSN->SelectionOnFocus = "SelectAll"; 

	//Init form
	$myform_manager->Init();
?>

<form id="myform" method="post" class="decoration">
	

	<fieldset style="width:250px;padding-left:10px;padding-bottom:10px;">
		<legend><b>Enter following</b></legend>
		
		<div>
			Phone: <br/>
			<?php echo $txtPhone->Render();?>
		</div>
		<div style="margin-top:10px;">
			IP Address: <br/>
			<?php echo $txtIPAddress->Render();?>
		</div>
		<div style="margin-top:10px;">
			Visa Credit Card: <br/>
			<?php echo $txtVisaCreditCard->Render();?>
		</div>
		<div style="margin-top:10px;">
			SSN: <br/>
			<?php echo $txtSSN->Render();?>
		</div>
		<div style="margin-top:10px;">
			<input type="submit" value="Submit" />
		</div>		
	</fieldset>	
	
	<?php echo $myform_manager->Render();?>
</form>