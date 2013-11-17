<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder

	require $KoolControlsFolder."/KoolListBox/koollistbox.php";
	
	
	//First listbox
	$listbox = new KoolListBox("listbox");
	$listbox->styleFolder = "default";	
	$listbox->AddItem(new ListBoxItem("Agentina"));
	$listbox->AddItem(new ListBoxItem("Australia"));
	$listbox->AddItem(new ListBoxItem("Brazil"));
	$listbox->AddItem(new ListBoxItem("Canada"));
	$listbox->AddItem(new ListBoxItem("Chile"));
	$listbox->AddItem(new ListBoxItem("China"));
	$listbox->AddItem(new ListBoxItem("Egypt"));
	$listbox->AddItem(new ListBoxItem("England"));
	$listbox->AddItem(new ListBoxItem("France"));
	$listbox->AddItem(new ListBoxItem("Germany"));
	$listbox->AddItem(new ListBoxItem("India"));
	$listbox->AddItem(new ListBoxItem("Indonesia"));
	$listbox->AddItem(new ListBoxItem("Kenya"));
	$listbox->AddItem(new ListBoxItem("Mexico"));
	$listbox->AddItem(new ListBoxItem("New Zealand"));
	$listbox->AddItem(new ListBoxItem("South Africa"));
	$listbox->AddItem(new ListBoxItem("USA"));

	$listbox->TransferToId = "second_listbox";//Specify the id of second listbox that you wish to do transference.
	$listbox->ButtonSettings->ShowTransfer = true;//Show transfer buttons
	$listbox->ButtonSettings->ShowTransferAll = (isset($_POST["check_ShowTransferAll"]))?true:false;;//Show transfer all buttons	
	$listbox->AllowTransferOnDoubleClick = (isset($_POST["check_AllowTransferOnDoubleClick"]))?true:false;
	$listbox->AutoPostBackOnTransfer= (isset($_POST["check_AutoPostBackOnTransfer"]))?true:false;

	
	$listbox->ButtonSettings->Position = (isset($_POST["select_align"]))?$_POST["select_align"]:"Right";
	
	$listbox->Init();

	//Second listbox
	$second_listbox = new KoolListBox("second_listbox");
	$second_listbox->styleFolder = "default";
	$second_listbox->Init();

?>

<form id="form1" method="post">

	
	<div style="width:650px;">
		<div style="padding-top:10px;padding-bottom:30px;float:left">
			<?php echo $listbox->Render();?>
			
			<?php
				if($listbox->ButtonSettings->Position=="Bottom")
				{
					echo "<br />";
				}
			?>
			
			<?php echo $second_listbox->Render();?>
			
		</div>
		<div style="float:right;padding-top:10px;padding-left:30px;text-align:right;">
			<b>Transfer Configuration</b>
			<br/><hr/>
			<div style="margin-bottom:5px;">
				Align:
				<select name="select_align" onchange="form1.submit()">
					<option value="Right" <?php if($listbox->ButtonSettings->Position=="Right") echo "selected";?> >Horizontal</option>
					<option value="Bottom" <?php if($listbox->ButtonSettings->Position=="Bottom") echo "selected";?> >Vertical</option>
				</select>
			</div>
			<div style="margin-bottom:5px;vertical-align:middle;">
				<label for="check_AllowTransferOnDoubleClick">AllowTransferOnDoubleClick </label>
				<input type="checkbox" id="check_AllowTransferOnDoubleClick" name="check_AllowTransferOnDoubleClick" onchange="form1.submit()" <?php if($listbox->AllowTransferOnDoubleClick==true) echo "checked";?> />
			</div>
			<div style="margin-bottom:5px;vertical-align:middle;">
				<label for="check_ShowTransferAll">ShowTransferAll </label>
				<input type="checkbox" id="check_ShowTransferAll" name="check_ShowTransferAll" onchange="form1.submit()" <?php if($listbox->ButtonSettings->ShowTransferAll==true) echo "checked";?> />
			</div>
			<div style="margin-bottom:5px;vertical-align:middle;">
				<label for="check_AutoPostBackOnTransfer">AutoPostBackOnTransfer </label>
				<input type="checkbox" id="check_AutoPostBackOnTransfer" name="check_AutoPostBackOnTransfer" onchange="form1.submit()" <?php if($listbox->AutoPostBackOnTransfer==true) echo "checked";?> />
			</div>						
		</div>
		
		<div style="clear:both;"></div>	
	</div>	
	
</form>