<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	require $KoolControlsFolder."/KoolListBox/koollistbox.php";
	
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


	$listbox->ButtonSettings->ShowDelete = true;
	$listbox->ButtonSettings->ShowReorder = true;
	

	//Get position and alignment
	$listbox->ButtonSettings->Position = (isset($_POST["select_position"]))?$_POST["select_position"]:"Right";
	$listbox->ButtonSettings->HorizontalAlign = (isset($_POST["select_horizontal_align"]))?$_POST["select_horizontal_align"]:"Left";
	$listbox->ButtonSettings->VerticalAlign = (isset($_POST["select_vertical_align"]))?$_POST["select_vertical_align"]:"Top";



		
	$listbox->Init();

?>

<form id="form1" method="post">

	<div style="width:650px;">
		<div style="padding-top:10px;padding-bottom:30px;float:left">
			<?php echo $listbox->Render();?>
			
		</div>
		<div style="float:right;padding-top:10px;padding-left:30px;text-align:right;">
			<b>Buttons Configuration</b>
			<br/><hr/>
			Position:
			<select name="select_position" style="margin-bottom:5px;" onchange="form1.submit()">
				<option value="Top" <?php if($listbox->ButtonSettings->Position=="Top") echo "selected";?> >Top</option>
				<option value="Left" <?php if($listbox->ButtonSettings->Position=="Left") echo "selected";?> >Left</option>
				<option value="Right" <?php if($listbox->ButtonSettings->Position=="Right") echo "selected";?> >Right</option>
				<option value="Bottom" <?php if($listbox->ButtonSettings->Position=="Bottom") echo "selected";?> >Bottom</option>
			</select>
			<br/>

			<?php
				if($listbox->ButtonSettings->Position=="Left"||$listbox->ButtonSettings->Position=="Right")
				{
					//If position is left or right, use the vertical align
			?>
					Vertical Align:
					<select name="select_vertical_align" style="margin-bottom:5px;" onchange="form1.submit()">
						<option value="Top" <?php if($listbox->ButtonSettings->VerticalAlign=="Top") echo "selected";?> >Top</option>
						<option value="Middle" <?php if($listbox->ButtonSettings->VerticalAlign=="Middle") echo "selected";?> >Middle</option>
						<option value="Bottom" <?php if($listbox->ButtonSettings->VerticalAlign=="Bottom") echo "selected";?> >Bottom</option>
					</select>
			
			<?php		
				}
				else
				{
					//If position is top or bottom, use the horizontal align
			?>
					
					Horizontal Align:
					<select name="select_horizontal_align" style="margin-bottom:5px;"  onchange="form1.submit()">
						<option value="Left" <?php if($listbox->ButtonSettings->HorizontalAlign=="Left") echo "selected";?> >Left</option>
						<option value="Center" <?php if($listbox->ButtonSettings->HorizontalAlign=="Center") echo "selected";?> >Center</option>
						<option value="Right" <?php if($listbox->ButtonSettings->HorizontalAlign=="Right") echo "selected";?> >Right</option>
					</select>
			<?php		
				}
			?>
			
		</div>
		
		<div style="clear:both;"></div>	
	</div>
	
</form>