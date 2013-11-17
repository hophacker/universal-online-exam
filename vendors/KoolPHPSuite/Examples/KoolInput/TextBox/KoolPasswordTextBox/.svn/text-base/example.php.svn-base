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

	$txtPassword = new KoolPasswordTextBox("txtPassword");
	$txtPassword->ShowIndicator = true;
	$myform_manager->AddControl($txtPassword);

	$txtPassword_Confirm = new KoolPasswordTextBox("txtPassword_Confirm");
	$myform_manager->AddControl($txtPassword_Confirm);

	$valCheckPass = new KoolCustomValidator("valCheckPass");
	$valCheckPass->TargetId = "txtPassword_Confirm";
	$valCheckPass->ClientValidationFunction = "check_password_consistence";
	$valCheckPass->ErrorMessage="Passwords are not the the same!";
	$myform_manager->AddControl($valCheckPass);


	$password_required_validator = new KoolRequiredFieldValidator("txtPassword_val"); 
	$password_required_validator->TargetId = "txtPassword";
	$password_required_validator->ErrorMessage = "Please, enter a password!";
	$myform_manager->AddControl($password_required_validator);

	//Init form
	$myform_manager->Init();

?>

<form id="myform" method="post" class="decoration">
	<script type="text/javascript">
		function check_password_consistence()
		{
			//Check if password and confirm password are the same.
			var _txtPassword = myform_manager.get_control("txtPassword");
			var _txtPassword_Confirm = myform_manager.get_control("txtPassword_Confirm");
			return (_txtPassword.get_value()==_txtPassword_Confirm.get_value());						
		}
	</script>
	
	<fieldset style="width:350px;padding-left:5px;padding-bottom:5px;">
		<legend>Enter new password:</legend>

		<table>
			<tr>
				<td>
					Password:<br /> 
					<?php echo $txtPassword->Render();?>
					<?php echo $password_required_validator->Render();?>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td style="padding-top:5px;" colspan="2">
					Confirm Password:<br/>
					<?php echo $txtPassword_Confirm->Render();?> 
					<?php echo $valCheckPass->Render();?>
				</td>
			</tr>
			
			<tr>
				<td style="padding-top:10px;padding-bottom:5px;" colspan="2">
					<input type="submit" value="Submit" />
				</td>
			</tr>
			
		</table>


	</fieldset>
	<?php
		if($txtPassword->Value!=null) echo "Password Updated";
	?>
	<?php echo $myform_manager->Render();?>
</form>