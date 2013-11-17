<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAutoComplete/koolautocomplete.php";
	require $KoolControlsFolder."/KoolAjax/koolajax.php";


	$kac = new KoolAutoComplete("kac");
	$kac->scriptFolder = $KoolControlsFolder."/KoolAutoComplete";
	$kac->width = "160px";
	$kac->attachTo = "txtTo";
	$kac->styleFolder="office2007";
	$kac->itemTemplate = "{html}";
	$kac->boxWidth = "400px";

	function service($text)
	{
		$text = str_replace("\\\"","\"",$text);
		$token = explode(",",$text);
		$last_token = $token[sizeof($token)-1];
		$last_token = trim($last_token);
		$items = array();		
		$result = mysql_query("select firstName, lastName, email from employees where CONCAT(firstName,' ',lastName,' ', email) like '%$last_token%' order by email;");
		
		while($row = mysql_fetch_assoc($result))
		{

			$text = '"'.$row["firstName"]." ".$row["lastName"].'"'."<".$row["email"].">";
			$text_array = $token;
			$text_array[sizeof($text_array)-1] = $text;
			$text = join(",",$text_array);			
			
			$html = '"'.$row["firstName"]." ".$row["lastName"].'"'."[".$row["email"]."]";
			$html = preg_replace("/".$last_token."/i","<b>$last_token</b>",$html);
			$html = str_replace("[","&lt;",$html);
			$html = str_replace("]","&gt;",$html);
			
			$item = array("text"=>$text,"html"=>$html);
			array_push($items,$item);
		}
		return $items;
	}
	$kac->serviceFunction = "service";
	$koolajax->enableFunction("service");
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<img src="gmail.gif" alt="Gmail" />
	<table>
		<tr>
			<td valign="top"><b>To:</b></td>
			<td>
					<textarea id="txtTo" style="width:620px;height:60px;font-family:Arial;"></textarea>	
					<?php echo $kac->Render();?>
			</td>			
		</tr>
	</table>
	<div style="padding-top:10px;padding-left:30px;">
	<i>*Note:</i> Use comma (,) to seperate the emails
	</div>
</form>
