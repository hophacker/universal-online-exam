<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTabs/kooltabs.php";

	$kts = new KoolTabs("kts");
	$kts->scriptFolder = $KoolControlsFolder."/KoolTabs";
	$kts->styleFolder="black";
		
	$kts->addTab("root","Cadillac","Cadillac");	
	$kts->addTab("root","Porsche","Porsche");
	$kts->addTab("root","Mercedes","Mercedes");
	
	$_select_tab = "Cadillac";
	if(isset($_POST["kts_selected"]))
	{
		$_select_tab = $_POST["kts_selected"];
	}
	$kts->getTab($_select_tab)->selected = true;
	
	$imagesrc = "Images/".$_select_tab.".JPG";
	
?>

<form id="form1" method="post">

	<div style="padding:10px;">
		<?php echo $kts->Render();?>
		<img src= "<?php echo $imagesrc;?>" alt="" />
	</div>
	
	<script type="text/javascript">
		kts.registerEvent("OnSelect",function(sender,arg){
			document.getElementById("form1").submit();
		});
	</script>
	
</form>
