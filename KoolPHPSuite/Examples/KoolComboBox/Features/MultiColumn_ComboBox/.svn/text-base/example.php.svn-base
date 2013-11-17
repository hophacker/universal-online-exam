<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";

	$result = mysql_query("select employeeNumber,lastName,firstName,jobTitle from employees");
	$total = mysql_num_rows($result);


	$kcb = new KoolComboBox("kcb");
	$kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$kcb->width = "347px";
	$kcb->styleFolder="default";
	$kcb->headerTemplate = "<div class='header'><div class='column'>Name</div><div class='column'>Title</div><div class='columnLast'>&nbsp;</div><div class='clear' /></div>";
	$kcb->itemTemplate = "<div class='column'>{text}</div><div class='column'>{jobTitle}</div>";	
	$kcb->footerTemplate ="<div class='footer'>A total of ".$total." items</div>";	


	$selectValue = "";
	$selectText = "";
	if(isset($_POST["kcb_selectedValue"]))
	{
		$selectValue = $_POST["kcb_selectedValue"];
		$selectText = $_POST["kcb_selectedText"];
	}	

	while($row = mysql_fetch_assoc($result))
	{
		$kcb->addItem($row["firstName"]." ".$row["lastName"],$row["employeeNumber"],array("jobTitle"=>$row["jobTitle"]),($selectValue==$row["employeeNumber"]));
	}	

?>

<form id="form1" method="post">
	<style type="text/css">
		
		
		
		.clear
		{
			clear:both;
		}
		.columnLast
		{
			width:16px;
			float:left;
		}
		
		.column
		{
			float:left;
			width:160px;
		}

		.header .column
		{
			padding-left:5px;
		}
		
		.header
		{
			border-bottom:solid 1px #BBBBBB;
			background:url(Images/background.png);
			height:20px;
			line-height:20px;
		}
				
		.footer
		{
			height:20px;
			border-top:solid 1px #BBBBBB;
			background:url(Images/background.png);
			line-height:20px;
			padding-left:5px;
		}
	</style>
	<div style="padding-left:10px;padding-bottom:10px;width:500px;">
		<table>
			<tr>
				<td>Employee:</td>
				<td><?php echo $kcb->Render();?></td>
				<td><input type="submit" value="Select" /></td>				
			</tr>
		</table>
	</div>
	
	<div style="padding-left:10px;padding-top:10px;width:430px;">
		<?php
			if($selectValue!="")
			{
				echo "You selected: <b>$selectText</b>, SelectedValue (employeeNumber) is <b>$selectValue</b>";
			}
		?>
	</div>	
</form>
