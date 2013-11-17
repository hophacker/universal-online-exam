<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTabs/kooltabs.php";

	$first_kts = new KoolTabs("first_kts");
	$first_kts->scriptFolder = $KoolControlsFolder."/KoolTabs";
	$first_kts->styleFolder="outlook";
	for($i=1;$i<5;$i++)
	{
		$first_kts->addTab("root","first_kts_tab".$i,"Root Tab ".$i);		
	}
	
	
	

	$second_kts = new KoolTabs("second_kts");
	$second_kts->scriptFolder = $KoolControlsFolder."/KoolTabs";
	$second_kts->styleFolder="outlook";
	for($i=1;$i<5;$i++)
	{
		$second_kts->addTab("root","second_kts_tab".$i,"Root Tab ".$i);		
	}


	$third_kts = new KoolTabs("third_kts");
	$third_kts->scriptFolder = $KoolControlsFolder."/KoolTabs";
	$third_kts->styleFolder="outlook";
	for($i=1;$i<5;$i++)
	{
		$third_kts->addTab("root","third_kts_tab".$i,"Root Tab ".$i);		
	}


	
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
	
	Adding tabs:
	<div style="float:right;">
		<input type="button" value="Add child to selected tab" onclick="add_child_tab()" class="button" />
	</div>	
	<?php echo $first_kts->Render();?>
	<div class="break"></div>

	Removing tabs:
	<div style="float:right;">
		<input type="button" value="Remove selected tab" onclick="remove_selected_tab()" class="button" />
		<input type="submit" value="Reset tabs" class="button" />
	</div>	
	<?php echo $second_kts->Render();?>
	<div class="break"></div>


	Disabling/Enabling tabs:
	<div style="float:right;">
		<input type="button" value="Disable selected tab" onclick="disable_selected_tab()" class="button" />
		<input type="button" value="Enable all tabs" onclick="enable_all_tabs()" class="button" />
	</div>	
	<?php echo $third_kts->Render();?>
	<div class="break"></div>
	
</div>

<script type="text/javascript">
	var _first_kts_selectedid = null;
	var _second_kts_selectedid = null;
	var _third_kts_selectedid = null;
	
	first_kts.registerEvent("OnSelect",function(sender,arg){
		if (first_kts.getTab(arg.TabId).getParentId()=="root")
		{
			_first_kts_selectedid = arg.TabId;
		}
	});

	second_kts.registerEvent("OnSelect",function(sender,arg){
		if (second_kts.getTab(arg.TabId).getParentId()=="root")
		{
			_second_kts_selectedid = arg.TabId;
		}
	});

	third_kts.registerEvent("OnSelect",function(sender,arg){
		if (third_kts.getTab(arg.TabId).getParentId()=="root")
		{
			_third_kts_selectedid = arg.TabId;
		}
	});

	
	
	function add_child_tab()
	{
		if(_first_kts_selectedid!=null)
		{
			var _tab = first_kts.getTab(_first_kts_selectedid);
			var _num = _tab.getChildIds().length + 1;
			first_kts.addTab(_first_kts_selectedid,_first_kts_selectedid+"_child"+(_num),"Child Tab "+_num);
			_tab.unselect();
			_tab.select();
		}
		else
		{
			alert("Select a tab first!");
		}
		
	}
	function remove_selected_tab()
	{
		if(_second_kts_selectedid!=null)
		{
			second_kts.removeTab(_second_kts_selectedid);
			_second_kts_selectedid = null;
		}
		else
		{
			alert("Select a tab first!");
		}	
	}
	function disable_selected_tab()
	{
		if(_third_kts_selectedid!=null)
		{
			var _tab = third_kts.getTab(_third_kts_selectedid);
			_tab.enable(false);
		}
		else
		{
			alert("Select a tab first!");
		}	
	}
	function enable_all_tabs()
	{
		for(var i=1;i<5;i++)
		{
			var _tab = third_kts.getTab("third_kts_tab"+i);
			_tab.enable(true);
		}

	}
</script>


</form>
