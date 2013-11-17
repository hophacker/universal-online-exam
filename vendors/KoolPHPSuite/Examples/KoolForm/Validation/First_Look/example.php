<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	require $KoolControlsFolder."/KoolForm/koolform.php";
	
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	
	$myform_manager = new KoolForm("myform");
	$myform_manager->scriptFolder = $KoolControlsFolder."/KoolForm";	
	$myform_manager->DecorationEnabled = true;
	$myform_manager->styleFolder = "sunset";

	//Use the numeric textbox for Age
	$txtAge = $myform_manager->AddControl(new KoolNumericTextBox("txtAge"));
	//Use the masked textbox for phone
	$txtPhone = $myform_manager->AddControl(new KoolMaskedTextBox("txtPhone"));
	$txtPhone->Mask = "(###)-######";
	$txtPhone->SelectionOnFocus = "CaretToBeginning";

	//Create the required field validator for txtName
	$txtName_RequiredFieldValidator = $myform_manager->AddControl(new KoolRequiredFieldValidator("txtName_RequiredFieldValidator"));
	$txtName_RequiredFieldValidator->TargetId = "txtName";
	$txtName_RequiredFieldValidator->ErrorMessage = "The textbox can not be empty!";
	
	
	//Create the required field validator and range validator for txtName
	$txtAge_RequiredFieldValidator = $myform_manager->AddControl(new KoolRequiredFieldValidator("txtAge_RequiredFieldValidator"));
	$txtAge_RequiredFieldValidator->TargetId = "txtAge";
	$txtAge_RequiredFieldValidator->ErrorMessage = "Please, select an year number!";
	
	$txtAge_RangeValidator = $myform_manager->AddControl(new KoolRangeValidator("txtAge_RangeValidator"));
	$txtAge_RangeValidator->TargetId = "txtAge";
	$txtAge_RangeValidator->ErrorMessage = "Year number should be a non negative less than 50.";
	$txtAge_RangeValidator->MinValue=0;
	$txtAge_RangeValidator->MaxValue=49;
	
	//Create the required field validator and regular expression validator for txtPhone
	$txtPhone_RequiredFieldValidator = $myform_manager->AddControl(new KoolRequiredFieldValidator("txtPhone_RequiredFieldValidator"));
	$txtPhone_RequiredFieldValidator->TargetId = "txtPhone";
	$txtPhone_RequiredFieldValidator->ErrorMessage = "Please enter phone number!";
	
	$txtPhone_RegularExpressionValidator = $myform_manager->AddControl(new KoolRegularExpressionValidator("txtPhone_RegularExpressionValidator"));
	$txtPhone_RegularExpressionValidator->TargetId = "txtPhone";
	$txtPhone_RegularExpressionValidator->Expression = "/\d{9}/";
	$txtPhone_RegularExpressionValidator->ErrorMessage = "Format is (###)-######";

	
	
	//Create the required field validator and regular expression validator for txtEmail
	$txtEmail_RequiredFieldValidator = $myform_manager->AddControl(new KoolRequiredFieldValidator("txtEmail_RequiredFieldValidator"));
	$txtEmail_RequiredFieldValidator->TargetId = "txtEmail";
	$txtEmail_RequiredFieldValidator->ErrorMessage = "Please, enter an e-mail!";		

	$txtEmail_RegularExpressionValidator = $myform_manager->AddControl(new KoolRegularExpressionValidator("txtEmail_RegularExpressionValidator"));
	$txtEmail_RegularExpressionValidator->TargetId = "txtEmail";
	$txtEmail_RegularExpressionValidator->Expression = "/^[\w\.\-]+@[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]{1,})*(\.[a-zA-Z]{2,3}){1,2}$/";
	$txtEmail_RegularExpressionValidator->ErrorMessage = "Please, enter valid e-mail address.";

	
	$myform_manager->Validate = true; //Validate form before post
	$myform_manager->RenderWithExistingMarkup = true; //Use existing page layout
	$myform_manager->StatePersistent = false;//Don't keep state persistent after postback.
	$myform_manager->Init();
?>

<form id="myform" method="post">
	
	<fieldset style="width:600px;padding-left:5px;padding-bottom:5px;" class="decoration">
		<legend>Please enter information</legend>
			<table style="margin-top:5px;">
				<tr>
					<td style="height:25px;width:75px;">
						Name:
					</td>
					<td>
						<input id="txtName" name="txtName" type="text" />
						<span id="txtName_RequiredFieldValidator"></span>
						
					</td>
				</tr>
	
				<tr>
					<td style="height:25px;">
						Age:
					</td>
					<td>
						<input id="txtAge" name="txtAge" type="text" />
						<span id="txtAge_RequiredFieldValidator"></span>
						<span id="txtAge_RangeValidator"></span>
					</td>
				</tr>
	
				<tr>
					<td style="height:25px;">
						Phone:
					</td>
					<td>
						<input id="txtPhone" name="txtPhone" type="text" />
						<span id="txtPhone_RequiredFieldValidator"></span>
						<span id="txtPhone_RegularExpressionValidator"></span>
					</td>
				</tr>
				
				<tr>
					<td style="height:25px;">
						Email:
					</td>
					<td>
						<input id="txtEmail" name="txtEmail" type="text" />
						<span id="txtEmail_RequiredFieldValidator"></span>
						<span id="txtEmail_RegularExpressionValidator"></span>
					</td>
				</tr>
			</table>
			<div style="margin-bottom:5px;margin-top:5px;">
				<input type="submit" value="Submit">
			</div>
			
			<?php
				if($myform_manager->IsPostBack)
				{
					echo "<div style='margin-bottom:5px;font-size:bold;'>Form is posted sucessfully!</div>";
				}
			?>
	</fieldset>
	

	<?php echo $myform_manager->Render();?>
</form>