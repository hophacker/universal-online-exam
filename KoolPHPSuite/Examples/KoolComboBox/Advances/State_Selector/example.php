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
	$kcb->width = "198px";
	$kcb->boxWidth="196px";
	$kcb->boxHeight="224px";
	$kcb->itemTemplate = "{value}";
	
	$result = mysql_query("select ID,StateName from kcb_tbstates");
	while($row=mysql_fetch_assoc($result))
	{
		$kcb->addItem("State of ".$row["StateName"],$row["ID"]);
	}
?>

<form id="form1" method="post">
	
	<div style="padding-left:10px;padding-bottom:10px;">
		<table style="width:350px;">
			<tr>
				<td>Choose US state:</td>
				<td><?php echo $kcb->Render();?></td>			
			</tr>			
		</table>
	</div>
	<style type="text/css">
		.defaultKCB .kcbItem .kcbIn
		{
			line-height:23px;
			padding:1px;
			height : 25px;
			width: 25px;
			border-right : 1px dotted gray;
			border-bottom : 1px dotted gray;
			margin : 0; 
			cursor:pointer;
			text-align:center;
		}
		.kcbItem { float : left ;  }
	</style>			
</form>
