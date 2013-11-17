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
	$kcb->styleFolder= "inox";
	$kcb->width = "180px";
	
	$selected_value = null;
	$selected_text = null;
	if (isset($_POST["kcb_selectedText"]))
	{
		$selected_value = $_POST["kcb_selectedValue"];
		$selected_text = $_POST["kcb_selectedText"];
	}
	$kcb->addItem("Asia","asia",null,($selected_value=="asia"));
	$kcb->addItem("Europe","europe",null,($selected_value=="europe"));
	$kcb->addItem("Africa","afica",null,($selected_value=="afica"));
	$kcb->addItem("America","america",null,($selected_value=="america"));
	$kcb->addItem("Australia","australia",null,($selected_value=="australia"));
	
?>

<form id="form1" method="post">

	<div style="padding-left:10px;padding-bottom:10px;">
		Choose your region : 
	<?php echo $kcb->Render();?>
	</div>
	<div style="padding-left:10px;padding-bottom:10px;">
		<?php
			if($selected_value!=null)
			{
				echo "You selected <b>$selected_text</b>";
			}
		?>
	</div>
	<script type="text/javascript">
		kcb.registerEvent("OnSelect",function(sender,arg){
			document.getElementById("form1").submit();
		});
	</script>
	
</form>
