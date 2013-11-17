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
	$kcb->width = "290px";
	$kcb->inputValidate = false;
	$kcb->itemTemplate = "<div><input id='{text}' name='mstate' type='checkbox' onclick='on_checkbox_click()' value='{text}' /><label for='{text}' class='desc'>{text}</label></div>";
	
	$result = mysql_query("select StateName from kcb_tbstates");
	while($row = mysql_fetch_assoc($result))
	{
		$value = $row["StateName"];
		$text = $row["StateName"];
		$kcb->addItem($text,$value);
	}
	
	$selectedText = "";
	if(isset($_POST["kcb_selectedText"]))
	{
		$selectedText = $_POST["kcb_selectedText"];
	}	
	
?>


<form id="form1" method="post" name="form1">
	<style type="text/css">			
		.desc
		{
			padding-left:5px;
		}
		.kcbItem .kcbIn
		{
			line-height:25px;
		}
		.defaultKCB .kcbSelectFocus .kcbA .kcbIn
		{
			background:none;
			color:black;
		}
	</style>
	
	<table style="width:350px;">
		<tr>
			<td colspan="2">Select States:</td>
		</tr>					
		<tr>
			<td>
				<?php echo $kcb->Render();?>
			</td>
			<td>
				<input type="submit" value="Select" />
			</td>
		</tr>
	</table>	
	<div style="padding-top:10px;width:350px;min-height:50px;">
		<?php
			if($selectedText!="")
			{
				echo "You selected: <b>$selectedText</b>";
			}
		?>
	</div>	
	
	<script language="javascript">
		var _item_select = false;

		kcb.registerEvent("OnBeforeSelect",function(sender,arg)
		{
			_item_select = true;
			return false;
		});
		kcb.registerEvent("OnBeforeClose",function(sender,arg)
		{
			if(_item_select)
			{
				_item_select = false;
				return false;
			}
			else
			{
				return true;	
			}
		});
		function on_checkbox_click()
		{
			var _selected_text = "";
			var _mstate = document.getElementsByName("mstate");
			for(var i=0;i<_mstate.length;i++)
			{
				if(_mstate[i].checked)
				{
					_selected_text+=", "+_mstate[i].id;
				}
			}
			_selected_text = _selected_text.substr(2);
			document.getElementById("kcb_selectedText").value = _selected_text;
		}		
	</script>	
</form>

