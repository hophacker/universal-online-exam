<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";

	$kcb = new KoolComboBox("kcb");
	$kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$kcb->styleFolder= "default";
	$kcb->width = "180px";
	
	$select_value = null;
	$select_text = null;
	if (isset($_POST["kcb_selectedText"]))
	{
		$select_value = $_POST["kcb_selectedValue"];
		$select_text = $_POST["kcb_selectedText"];
	}
	$kcb->addItem("Asia","asia",null,($select_value=="asia"));
	$kcb->addItem("Europe","europe",null,($select_value=="europe"));
	$kcb->addItem("Africa","afica",null,($select_value=="afica"));
	$kcb->addItem("America","america",null,($select_value=="america"));
	$kcb->addItem("Australia","australia",null,($select_value=="australia"));
	
	
?>

<form id="form1" method="post">

	<div style="padding-left:10px;">
		Choose your region : 
	<?php echo $kcb->Render();?>
	</div>
	<div style="padding-left:10px;padding-top:10px;">
		<input type="submit" value="Submit" />
	</div>
	<div style="padding-left:10px;padding-top:10px;">
		<?php 
			if($select_text!=null)
			{
				echo "<b>".$select_text."</b> is selected.";	
			}
		?>
	</div>
	
</form>
