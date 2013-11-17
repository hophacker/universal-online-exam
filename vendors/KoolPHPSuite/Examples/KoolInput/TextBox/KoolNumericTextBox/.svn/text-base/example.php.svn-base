<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	require $KoolControlsFolder."/KoolForm/koolform.php";	
	$myform_manager = new KoolForm("myform");
	$myform_manager->scriptFolder = $KoolControlsFolder."/KoolForm";	
	$myform_manager->styleFolder = "sunset";
	$myform_manager->DecorationEnabled = true;
	
	
	$txtNum1 = $myform_manager->AddControl(new KoolNumericTextBox("txtNum1"));
	$txtNum1->NumberFormat->PositivePattern = "n %";
	$txtNum1->NumberFormat->NegativePattern = "(n %)";
	
	
	$txtNum1->EmptyMessage = (isset($_POST["txtEmptyMessage"]))?$_POST["txtEmptyMessage"]:"Percentage";
	$txtNum1->IncrementSettings->InterceptArrowKeys = (isset($_POST["checkKeyboard"]))?(($_POST["checkKeyboard"]=="false")?false:true):true;
	$txtNum1->IncrementSettings->InterceptMouseWheel = (isset($_POST["checkMouseWheel"]))?(($_POST["checkMouseWheel"]=="false")?false:true):true;
	$txtNum1->ShowSpinButton = (isset($_POST["checkShowSpin"]))?(($_POST["checkShowSpin"]=="false")?false:true):true;
	$txtNum1->SpinButtonPosition = (isset($_POST["selectSpinButtonPosition"]))?$_POST["selectSpinButtonPosition"]:"Right";


	$txtNum2 = $myform_manager->AddControl(new KoolNumericTextBox("txtNum2"));
	$txtNum2->Value = 1000000;
	$txtNum2->ShowSpinButton = true;
	$txtNum2->IncrementSettings->InterceptArrowKeys = true;
	$txtNum2->IncrementSettings->InterceptMouseWheel = true;

	$txtNum2->NumberFormat->DecimalDigits = (isset($_POST["selectDecimalDigits"]))?$_POST["selectDecimalDigits"]:1;
	$txtNum2->NumberFormat->DecimalSeparator = (isset($_POST["selectDecimalSeparator"]))?$_POST["selectDecimalSeparator"]:".";
	$txtNum2->NumberFormat->GroupSeparator = (isset($_POST["selectGroupSeparator"]))?$_POST["selectGroupSeparator"]:" ";
	$txtNum2->NumberFormat->GroupSize = (isset($_POST["selectGroupSize"]))?$_POST["selectGroupSize"]:3;
	$txtNum2->NumberFormat->NegativePattern = (isset($_POST["selectNegativePattern"]))?$_POST["selectNegativePattern"]:"$ -n";
	$txtNum2->NumberFormat->PositivePattern = (isset($_POST["selectPositivePattern"]))?$_POST["selectPositivePattern"]:"$ n";

	//Init form
	$myform_manager->Init();
?>

<form id="myform" method="post" class="decoration">
	<?php echo $koolajax->Render();?>

	<fieldset style="width:350px;padding-left:10px;padding-bottom:10px;">
		<legend><b>General Settings</b></legend>
		
		<?php echo KoolScripting::Start()?>
			<updatepanel id="updatepanel_general_setting">
				<content>
				<![CDATA[
					<?php echo $txtNum1->Render();?>
				]]>	
				</content>
			</updatepanel>
		<?php echo KoolScripting::End()?>
					
		<hr />
		<table>
			<tr>
				<td>Empty Message:</td>
				<td style="height:25px;">
					<input id="txtEmptyMessage" type="text" value="Percentage"/>
					<input id"btnSet" type="button" value="Set" onclick="update_general_setting()" />
				</td>
			</tr>
			<tr>
				<td style="height:25px;">Keyboard increment:</td>
				<td>
					<input id="checkKeyboard" type="checkbox" checked onclick="update_general_setting()"/>
				</td>
			</tr>
			<tr>
				<td style="height:25px;">Mousewheel increment:</td>
				<td>
					<input id="checkMouseWheel" type="checkbox" checked onclick="update_general_setting()"/>
				</td>
			</tr>
			<tr>
				<td style="height:25px;width:150px;">Show SpinButton:</td>
				<td>
					<input id="checkShowSpin" type="checkbox" checked onchange="update_general_setting()"/>
				</td>
			</tr>
			<tr>
				<td style="height:25px;">Spin Button Position:</td>
				<td>
					<select id="selectSpinButtonPosition" onchange="update_general_setting()">
						<option value="Left">Left</option>
						<option value="Right" selected>Right</option>
					</select>
				</td>
			</tr>						
		</table>
	</fieldset>	
	
	
	<br/>
	
	<fieldset style="width:350px;padding-left:10px;padding-bottom:10px;margin-top:10px;">
		<legend><b>Numeric Settings</b></legend>
		
		<?php echo KoolScripting::Start()?>
			<updatepanel id="updatepanel_numeric_setting">
				<content>
				<![CDATA[
					<?php echo $txtNum2->Render();?>
				]]>	
				</content>
			</updatepanel>
		<?php echo KoolScripting::End()?>
					
		<hr />
		<table>
			<tr>
				<td style="height:25px;width:150px;">DecimalDigits:</td>
				<td>
					<select id="selectDecimalDigits" style="width:100px;" onchange="update_numeric_setting()">
						<option value="0">0</option>
						<option value="1" selected>1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="height:25px;width:150px;">DecimalSeparator:</td>
				<td>
					<select id="selectDecimalSeparator" style="width:100px;" onchange="update_numeric_setting()">
						<option value=".">.</option>
						<option value=",">,</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="height:25px;width:150px;">GroupSeparator:</td>
				<td>
					<select id="selectGroupSeparator" style="width:100px;" onchange="update_numeric_setting()">
						<option value=" ">' '</option>
						<option value=",">,</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="height:25px;width:150px;">GroupSize:</td>
				<td>
					<select id="selectGroupSize" style="width:100px;" onchange="update_numeric_setting()">
						<option value="2">2</option>
						<option value="3" selected>3</option>
						<option value="4">4</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="height:25px;width:150px;">NegativePattern:</td>
				<td>
					<select id="selectNegativePattern" style="width:100px;" onchange="update_numeric_setting()">
						<option value="$ -n">$ -n</option>
						<option value="BGN -n">BGN -n</option>
						<option value="-n JPY">-n JPY</option>
						<option value="-n km">-n km</option>
						<option value="n- kg">n- kg</option>
						<option value="-n %">-n %</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="height:25px;width:150px;">PositivePattern:</td>
				<td>
					<select id="selectPositivePattern" style="width:100px;" onchange="update_numeric_setting()">
						<option value="$ n">$ n</option>
						<option value="BGN n">BGN n</option>
						<option value="n JPY">n JPY</option>
						<option value="n km">n km</option>
						<option value="n kg">n kg</option>
						<option value="n %">n %</option>
					</select>
				</td>
			</tr>	
		</table>
	</fieldset>		
	
	
	<script type="text/javascript">
		updatepanel_general_setting.registerEvent("OnUpdatePanel",function(sender,args){
			myform_manager.refresh();
		});
		function update_general_setting()
		{
			updatepanel_general_setting.attachData("txtEmptyMessage",document.getElementById("txtEmptyMessage").value);			
			updatepanel_general_setting.attachData("checkKeyboard",document.getElementById("checkKeyboard").checked);
			updatepanel_general_setting.attachData("checkMouseWheel",document.getElementById("checkMouseWheel").checked);
			updatepanel_general_setting.attachData("checkShowSpin",document.getElementById("checkShowSpin").checked);
			updatepanel_general_setting.attachData("selectSpinButtonPosition",document.getElementById("selectSpinButtonPosition").options[document.getElementById("selectSpinButtonPosition").selectedIndex].value);			
			updatepanel_general_setting.update();
		}

		updatepanel_numeric_setting.registerEvent("OnUpdatePanel",function(sender,args){
			myform_manager.refresh();
		});
		function update_numeric_setting()
		{

			updatepanel_numeric_setting.attachData("selectDecimalDigits",document.getElementById("selectDecimalDigits").options[document.getElementById("selectDecimalDigits").selectedIndex].value);			
			updatepanel_numeric_setting.attachData("selectDecimalSeparator",document.getElementById("selectDecimalSeparator").options[document.getElementById("selectDecimalSeparator").selectedIndex].value);			
			updatepanel_numeric_setting.attachData("selectGroupSeparator",document.getElementById("selectGroupSeparator").options[document.getElementById("selectGroupSeparator").selectedIndex].value);			
			updatepanel_numeric_setting.attachData("selectGroupSize",document.getElementById("selectGroupSize").options[document.getElementById("selectGroupSize").selectedIndex].value);			
			updatepanel_numeric_setting.attachData("selectNegativePattern",document.getElementById("selectNegativePattern").options[document.getElementById("selectNegativePattern").selectedIndex].value);			
			updatepanel_numeric_setting.attachData("selectPositivePattern",document.getElementById("selectPositivePattern").options[document.getElementById("selectPositivePattern").selectedIndex].value);			
			updatepanel_numeric_setting.update();
		}


	</script>	
	<?php echo $myform_manager->Render();?>
</form>