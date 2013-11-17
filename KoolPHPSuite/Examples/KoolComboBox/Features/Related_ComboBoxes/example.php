<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";
	require $KoolControlsFolder."/KoolAjax/koolajax.php";

	if($koolajax->isCallback)
	{
		sleep(1);
	}

	$selected_continent_id = null;
	if(isset($_POST["kcb_continent_selectedValue"]))
	{
		$selected_continent_id = $_POST["kcb_continent_selectedValue"];
	}

	$kcb_continent = new KoolComboBox("kcb_continent");
	$kcb_continent->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$kcb_continent->styleFolder="default";
	$kcb_continent->width = "185px";
	$result = mysql_query("select ContinentID,ContinentName from kcb_tbcontinents");
	while($row= mysql_fetch_assoc($result))
	{
		$kcb_continent->addItem($row["ContinentName"],$row["ContinentID"],null,($selected_continent_id==$row["ContinentID"]));
	}
	
	
	$selected_country_id = null;
	if(isset($_POST["kcb_country_selectedValue"]))
	{
		$selected_country_id = $_POST["kcb_country_selectedValue"];
	}	
	
	
	$kcb_country = new KoolComboBox("kcb_country");
	$kcb_country->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$kcb_country->styleFolder="default";
	$kcb_country->width = "185px";

	if($selected_continent_id!=null)
	{
		$result = mysql_query("select CountryID,CountryName from kcb_tbcountries where ContinentID=$selected_continent_id");
		while($row= mysql_fetch_assoc($result))
		{
			$kcb_country->addItem($row["CountryName"],$row["CountryID"],null,($selected_country_id==$row["CountryID"]));
		}		
	}


	$kcb_city = new KoolComboBox("kcb_city");
	$kcb_city->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$kcb_city->styleFolder="default";
	$kcb_city->width = "185px";

	if($selected_country_id!=null)
	{
		$result = mysql_query("select CityID,CityName from kcb_tbcities where CountryID=$selected_country_id");
		while($row= mysql_fetch_assoc($result))
		{
			$kcb_city->addItem($row["CityName"],$row["CityID"]);
		}		
	}
	
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	
	<style type="text/css">
		.background
		{
			width:745px;
			height:257px;
			background:url(Images/background.png);
		}
		.break
		{
			height:140px;
		}
	</style>

	<?php echo KoolScripting::Start();?>
		<updatepanel id="combobox_updatepanel" class="background">
			<content>
			<![CDATA[			
				<table style="width:745px;height:257px;">
					<tr>
						<td align="right" style="width:247px;">
							<div class="break"></div>
							<?php echo $kcb_continent->Render();?>
						</td>
						<td align="right" style="width:217px;">
							<div class="break"></div>
							<?php echo $kcb_country->Render();?>
						</td>
						<td align="right" style="width:218px;">
							<div class="break"></div>
							<?php echo $kcb_city->Render();?>
						</td>
						<td style="width:62px;">&nbsp;</td>						
					</tr>
				</table>
					
				<script type="text/javascript">
					kcb_continent.registerEvent("OnSelect",function(sender,arg){
						combobox_updatepanel.update();
					});
					kcb_country.registerEvent("OnSelect",function(sender,arg){
						combobox_updatepanel.update();
					});					
				</script>
			]]>
			</content>
			<loading opacity="50%" image="<?php echo $KoolControlsFolder; ?>/KoolAjax/loading/5.gif" />
		</updatepanel>
	<?php echo KoolScripting::End();?>
</form>
