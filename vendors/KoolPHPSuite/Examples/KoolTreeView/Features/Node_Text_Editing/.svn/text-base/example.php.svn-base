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
	$treeview->styleFolder="vista";
	$treeview->showLines = true;
	
	
	$root = $treeview->getRootNode();
	$root->expand=true;
	$root->visible = false;
	
	$treeview->Add("root","books","Books");
	$treeview->Add("books","arts","Arts");
	$treeview->Add("books","biographies","Biographies");
	$treeview->Add("books","cooking","Cooking");
	$treeview->Add("books","history","History");
	$treeview->Add("books","travel","Travel");
	
	
	$treeview->Add("root","music","Music");
	$treeview->Add("music","alternative","Alternative");
	$treeview->Add("music","blue","Blue");
	$treeview->Add("music","classical","Classical");
	$treeview->Add("music","hardrock","Hard Rock");
	$treeview->Add("music","jazz","Jazz");
	$treeview->Add("music","folk","Folk");

	$treeview->Add("root","movies","Movies");
	$treeview->Add("movies","action","Action");
	$treeview->Add("movies","horror","Horror");
	$treeview->Add("movies","drama","Drama");
	
	$treeview->Add("root","softwares","Softwares");
	$treeview->Add("softwares","database","Database");
	$treeview->Add("softwares","networking","Networking");
	$treeview->Add("softwares","presentation","Presentation");
	$treeview->Add("softwares","report","Report");
	$treeview->Add("softwares","wordprocessing","Word Processing");
	$treeview->Add("softwares","spreadsheet","Spreadsheet");
	
	$treeview->EditNodeEnable = true;
		

?>

<div style="padding:10px;">
	Select a node and click an already selected node.
</div>
	
<div style="padding:10px;">
	<?php echo $treeview->Render();?>
</div>
