<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	
	if($koolajax->isCallback)
	{
		sleep(1);
	}
	
	function returnString()
	{
		$result = "This is string from server!";
		return $result;
	}
	function returnInteger()
	{
		$result = 1234;
		return $result;
	}
	function returnBoolean()
	{
		$result = true;
		return $result;
	}

	function returnArray()
	{
		$result = array("name"=>"John Smith","age"=>54);
		return $result;
	}		
	//Enable check string function to be called at client-side
	$koolajax->enableFunction("returnString");
	$koolajax->enableFunction("returnInteger");
	$koolajax->enableFunction("returnBoolean");
	$koolajax->enableFunction("returnArray");
?>
<form id="form1" method="post">
	
	<?php echo $koolajax->Render();?>
	
	<style type="text/css">
		.button
		{
			width:150px;
		}
		.loading
		{
			visibility:hidden;
		}
		.block
		{
			padding-left:10px;
			padding-bottom:10px;
		}
		.result
		{
			padding-left:10px;
		}
	</style>	
	
	<div class="block">
		<input type="button" class="button" value="Get String from server" onclick="get_string()" />
		<span id="string_result" class="result"></span>
		<img id="string_loading" src="Images/loading.gif" class="loading" alt="Loading..."/>
	</div>
	<div class="block">
		<input type="button" class="button" value="Get Integer from server" onclick="get_integer()" />
		<span id="integer_result" class="result"></span>
		<img id="integer_loading" src="Images/loading.gif" class="loading" alt="Loading..."/>
	</div>
	<div class="block">
		<input type="button" class="button" value="Get Boolean from server" onclick="get_boolean()" />
		<span id="boolean_result" class="result"></span>
		<img id="boolean_loading" src="Images/loading.gif" class="loading" alt="Loading..."/>
	</div>
	<div class="block">
		<input type="button" class="button" value="Get Array from server" onclick="get_array()" />
		<span id="array_result" class="result"></span>
		<img id="array_loading" src="Images/loading.gif" class="loading" alt="Loading..."/>
	</div>	
	
	<script type="text/javascript">
		//String
		function get_string()
		{
			document.getElementById("string_result").innerHTML = "Server responses:";
			koolajax.callback(returnString(),get_string_ondone);
			document.getElementById("string_loading").style.visibility = "visible";
		}
		function get_string_ondone(result)
		{
			document.getElementById("string_result").innerHTML += "<i>\""+ result+"\"</i>";
			document.getElementById("string_loading").style.visibility = "hidden";
		}
		//Integer
		function get_integer()
		{
			document.getElementById("integer_result").innerHTML = "Server responses:";
			koolajax.callback(returnInteger(),get_integer_ondone);
			document.getElementById("integer_loading").style.visibility = "visible";
		}
		function get_integer_ondone(result)
		{
			document.getElementById("integer_result").innerHTML += result;
			document.getElementById("integer_loading").style.visibility = "hidden";
		}

		//Boolean
		function get_boolean()
		{
			document.getElementById("boolean_result").innerHTML = "Server responses: ";
			koolajax.callback(returnBoolean(),get_boolean_ondone);
			document.getElementById("boolean_loading").style.visibility = "visible";
		}
		function get_boolean_ondone(result)
		{
			document.getElementById("boolean_result").innerHTML += result;
			document.getElementById("boolean_loading").style.visibility = "hidden";
		}

		//Array
		function get_array()
		{
			document.getElementById("array_result").innerHTML = "Server responses:";
			koolajax.callback(returnArray(),get_array_ondone);
			document.getElementById("array_loading").style.visibility = "visible";
		}
		function get_array_ondone(result)
		{
			document.getElementById("array_result").innerHTML += " {\"name\":\""+result["name"]+"\",\"age\":"+result["age"]+"}";
			document.getElementById("array_loading").style.visibility = "hidden";
		}
				
	</script>
</form>