<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTreeView/kooltreeview.php";
		
	$treeview = new KoolTreeView("treeview");
	$treeview->scriptFolder = $KoolControlsFolder."/KoolTreeView";
	$treeview->imageFolder=$KoolControlsFolder."/KoolTreeView/icons";
	$treeview->styleFolder="default";
	$treeview->showLines = true;
	
	
	$root = $treeview->getRootNode();
	$root->text = "Hello, I'm root ;)";
	$root->expand=true;
	$root->image="tree.gif";	
	//Multiple Select
	$treeview->Add("root","multiple","Select Multiple Nodes",true,"oTasks.gif","");
	$treeview->Add("multiple","multi1","Press Ctrl",true,"ball_glass_blueS.gif","");	
	$treeview->Add("multiple","multi2","And Press Left Mouse",true,"ball_glass_redS.gif","");
	$treeview->Add("multiple","multi3","To Select Us :)",true,"ball_glass_greenS.gif","");
	
	//Select Disable
	$treeview->Add("root","disable","Select Disable Node",true,"memobook.gif","");
	$treeview->Add("disable","dis1","<span style='color:#888'><i>You can't select me :|</i></span>",true,"person.gif","");
	$treeview->Add("disable","dis2","<span style='color:#888'><i>Me, too :(</i></span>",true,"person.gif","");
	$treeview->Add("disable","dis3","You can select me :)",true,"workerS.gif","");
	
	$treeview->selectEnable = true;
	$treeview->multipleSelectEnable = true;
	$treeview->selectDisableIds = "dis1,dis2";
		
	
?>

	
<div style="padding:10px;">
	<?php echo $treeview->Render();?>
</div>
