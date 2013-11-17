<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAutoComplete/koolautocomplete.php";

	$kac = new KoolAutoComplete("kac");
	$kac->scriptFolder = $KoolControlsFolder."/KoolAutoComplete";
	$kac->width = "160px";
	$kac->attachTo = "txtRegion";
	$kac->styleFolder="default";


	$result = mysql_query("select CountryName,FlagImage from kcb_tbcountries");
	while($row = mysql_fetch_assoc($result))
	{
		$kac->addItem($row["CountryName"],array("image"=>$row["FlagImage"]));	
	}
	
	$kac->itemTemplate ="<table><tr><td valign='middle' style='width:22px;height:20px;'><img src='../../../KoolComboBox/Resources/Flags/{image}' alt='{text}' title='{text}' /></td><td valign='middle'>{text}</td></tr></table>";
?>

<form id="form1" method="post">

	<div style="padding-left:10px;padding-bottom:10px;">
		Enter your country name:
		<input type="text" id="txtRegion" autocomplete='off' />
		<?php echo $kac->Render();?>
	</div>
	
</form>
