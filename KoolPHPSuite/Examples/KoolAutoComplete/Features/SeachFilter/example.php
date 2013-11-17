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
	$kac->styleFolder="office2007";


	$result = mysql_query("select CountryName from kcb_tbcountries");
	while($row = mysql_fetch_assoc($result))
	{
		$kac->addItem($row["CountryName"]);	
	}	
	
	$filter_select = "startwith";
	if(isset($_POST["filter_select"]))
	{
		$filter_select = $_POST["filter_select"];
	}
	$kac->searchFilter=$filter_select;	
	
?>

<form id="form1" method="post">

	<div style="float:left;width:300px;margin-bottom:30px;">
		<input type="text" id="txtRegion" autocomplete='off' />
		<?php echo $kac->Render();?>
	</div>

	Select filter:
	<select id="filter_select" name="filter_select" onchange="submit();">
		<option value="startwith"		<?php if ($filter_select=="startwith") echo "selected" ?> >StartWith</option>
		<option value="contain"		<?php if ($filter_select=="contain") echo "selected" ?> >Contain</option>
	</select>
	<br style="clear:both;"/>
	
</form>
