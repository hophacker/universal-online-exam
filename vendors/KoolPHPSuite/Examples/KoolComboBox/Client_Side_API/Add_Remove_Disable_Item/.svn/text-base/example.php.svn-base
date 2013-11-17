<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";

	$first_kcb = new KoolComboBox("first_kcb");
	$first_kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$first_kcb->styleFolder="inox";
	$first_kcb->width = "180px";
	$first_kcb->addItem("Item 1","item1",null,true);
	$first_kcb->addItem("Item 2","item2");
	$first_kcb->addItem("Item 3","item3");
	$first_kcb->addItem("Item 4","item4");
	$first_kcb->addItem("Item 5","item5");
	
	$second_kcb = new KoolComboBox("second_kcb");
	$second_kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$second_kcb->styleFolder="inox";
	$second_kcb->width = "180px";
	$second_kcb->addItem("Item 1","item1");
	$second_kcb->addItem("Item 2","item2");
	$second_kcb->addItem("Item 3","item3");
	$second_kcb->addItem("Item 4","item4");
	$second_kcb->addItem("Item 5","item5");

	$third_kcb = new KoolComboBox("third_kcb");
	$third_kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$third_kcb->styleFolder="inox";
	$third_kcb->width = "180px";
	$third_kcb->addItem("Item 1","item1");
	$third_kcb->addItem("Item 2","item2");
	$third_kcb->addItem("Item 3","item3");
	$third_kcb->addItem("Item 4","item4");
	$third_kcb->addItem("Item 5","item5");

?>

<form id="form1" method="post">

<style>
	div.break
	{
		clear:both;
		height:50px;
	}
	input.button
	{
		width:150px;
	}
</style>
<div style="width:650px;">
	
	Adding items:
	<div style="float:right;">
		<input type="button" value="Add new item" onclick="add_item()" class="button" />
	</div>	
	<?php echo $first_kcb->Render();?>
	<div class="break"></div>

	Removing items:
	<div style="float:right;">
		<input type="button" value="Remove selected item" onclick="remove_selected_item()" class="button" />
		<input type="submit" value="Reset ComboBox" class="button" />
	</div>	
	<?php echo $second_kcb->Render();?>
	<div class="break"></div>


	Disabling/Enabling items:
	<div style="float:right;">
		<input type="button" value="Disable selected item" onclick="disable_selected_item()" class="button" />
		<input type="button" value="Enable all items" onclick="enable_all_items()" class="button" />
	</div>	
	<?php echo $third_kcb->Render();?>
	<div class="break"></div>
	
</div>
<script type="text/javascript">

	function add_item()
	{
		var _next_id = first_kcb.getItemIds().length + 1;
		first_kcb.addItem("Item "+_next_id,"item"+_next_id);
		first_kcb.open();
	}
	
	var _second_kcb_selected_id = null;
	second_kcb.registerEvent("OnSelect",function(sender,arg){
		_second_kcb_selected_id = arg.Item.id;
	});
	function remove_selected_item()
	{
		if (_second_kcb_selected_id!=null)
		{
			second_kcb.removeItem(_second_kcb_selected_id);
			second_kcb.open();
		}
		else
		{
			alert("Select an item first");
		}
	}
	
	
	var _third_kcb_selected_id = null;
	third_kcb.registerEvent("OnSelect",function(sender,arg){
		_third_kcb_selected_id = arg.Item.id;
	});	
	function disable_selected_item()
	{
		if (_third_kcb_selected_id!=null)
		{
			var _item = third_kcb.getItem(_third_kcb_selected_id);
			_item.enable(false);
		}
		else
		{
			alert("Select an item first");
		}		
	}	
	function enable_all_items()
	{
		var _item_ids = third_kcb.getItemIds();
		for(var i=0;i<_item_ids.length;i++)
		{
			_item = third_kcb.getItem(_item_ids[i]);
			_item.enable(true);
		}
	}		
</script>
				
</form>
