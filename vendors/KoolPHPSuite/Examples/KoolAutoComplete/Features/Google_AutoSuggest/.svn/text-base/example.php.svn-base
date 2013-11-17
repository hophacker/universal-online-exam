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
	$kac->attachTo = "txtSearch";
	$kac->styleFolder="default";


	function service($text)
	{
		$items = array();

		$result = mysql_query("select KeyWord,ResultNo from kac_tbkeywords where KeyWord like '$text%'");
		while($row = mysql_fetch_assoc($result))
		{
			$item = array("text"=>$row["KeyWord"],"ResultNo"=>number_format($row["ResultNo"]));
			array_push($items,$item);
		}
		return $items;
	}

	
	$kac->itemTemplate ="<table style='text-align:left'><tr><td class='keyword'>{text}</td><td class='resultno' align='right'>{ResultNo} results&nbsp;</td></tr></table>";
	$kac->footerTemplate = "<div class='footer'><a href='javascript:close_autocomplete()'>close</a></div>";
	$kac->serviceFunction = "service";
	$koolajax->enableFunction("service");
?>
<div>
	<?php echo $koolajax->Render();?>
	<style type="text/css">
		#txtSearch
		{
			width:350px;
		}
		.resultno
		{
			font-size:10px;
			color:green;
		}
		.kacSelectFocus .resultno
		{
			color:white;
		}
		.kacSelectFocus .keyword
		{
			color:white;
		}
		.footer
		{
			font-size:10px;
			text-align:right;
		}
		.footer a
		{
			color:blue;
			text-decoration:underline;
		}		
	</style>
	
	
	<table style="width:650px;">
		<tr>
			<td align="center">
				<img src="Images/logo_plain.png" alt="google" />
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="text" id="txtSearch" autocomplete="off"/>
				<br/>
				<input type="button" id="btnSearch" value="Google Search" onclick="doSearch()"/>
				<input type="button" id="btnLucky" value="I'm Feeling Lucky"/>
				<?php echo $kac->Render();?>				
			</td>
		</tr>		
	</table>
	<script type="text/javascript">
		function doSearch()
		{
			var _text = document.getElementById("txtSearch").value;
			window.open("http://www.google.com/search?hl=en&btnG=Google+Search&aq=f&oq=&aqi=g10&q="+_text);
		}
		function close_autocomplete()
		{
			kac.close();
			document.getElementById("txtSearch").focus();
		}		
	</script>
	
	<div style="height:50px;"></div>
</div>