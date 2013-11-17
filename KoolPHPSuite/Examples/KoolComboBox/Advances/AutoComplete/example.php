<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";
	require $KoolControlsFolder."/KoolAjax/koolajax.php";

	$kcb = new KoolComboBox("kcb");
	$kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$kcb->styleFolder= "default";
	$kcb->width = "630px";
	$kcb->inputValidate = false;
	$kcb->itemTemplate = "{html}";
	
	
	$result = mysql_query("select firstName, lastName, email from employees order by email;");
	while($row = mysql_fetch_assoc($result))
	{
		$value = $row["email"];
		$text = '"'.$row["firstName"]." ".$row["lastName"].'"'."<".$row["email"].">";
		$html = '"'.$row["firstName"]." ".$row["lastName"].'"'."&lt;".$row["email"]."&gt;";
		$kcb->addItem($text,$value,array("html"=>$html));
	}
	
	function service($text)
	{
		$text = str_replace("\\\"","\"",$text);
		$token = explode(";",$text);
		$last_token = $token[sizeof($token)-1];
		$last_token = trim($last_token);
		$items = array();		
		$result = mysql_query("select firstName, lastName, email from employees where CONCAT(firstName,' ',lastName,' ', email) like '%$last_token%' order by email;");
		
		while($row = mysql_fetch_assoc($result))
		{
			$value = $row["email"];

			$text = '"'.$row["firstName"]." ".$row["lastName"].'"'."<".$row["email"].">";
			$text_array = $token;
			$text_array[sizeof($text_array)-1] = $text;
			$text = join(";",$text_array);			
			
			$html = '"'.$row["firstName"]." ".$row["lastName"].'"'."[".$row["email"]."]";
			
			$html = preg_replace("/".$last_token."/i","<b>$last_token</b>",$html);
			$html = str_replace("[","&lt;",$html);
			$html = str_replace("]","&gt;",$html);
			
			$item = array("text"=>$text,"value"=>$value,"html"=>$html);
			array_push($items,$item);
		}
		return $items;
	}
	$kcb->serviceFunction = "service";
	$koolajax->enableFunction("service");
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<table>
		<tr>
			<td>To:</td>
			<td><?php echo $kcb->Render();?></td>
		</tr>			
	</table>		
	<div style="padding-top:10px;">
	<i>*Note:</i> You can add many emails seperated by semicolon (;)
	</div>
</form>
