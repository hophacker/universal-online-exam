<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolMenu/koolmenu.php";
	
	$km = new KoolMenu("km");
	$km->scriptFolder = $KoolControlsFolder."/KoolMenu";
	$km->styleFolder="default";
	
	//$km->Add(string $parent_id,string $id,string $text,[[string $href,[string $image_src]]]);
	
	$km->Add("root","file","File");
	$km->Add("file","new","New...",null,"images/scroll_add.png");
	$km->Add("new","newfile","File","javascript:alert(\"New File\")","images/document_new.png");
	$km->Add("new","newfolder","Folder","javascript:alert(\"New Folder\")","images/folder_add.png");
	$km->AddSeparator("file");
	$km->Add("file","open","Open","javascript:alert(\"Open\")","images/document.png");
	$km->Add("file","save","Save","javascript:alert(\"Save\")","images/disk_blue.png");
	$item = $km->Add("file","saveas","Save as ...",null,"images/save_as.png");
	$km->Add("file","close","Close","javascript:alert(\"Close\")","images/document_delete.png");
	$item->Enabled = false;
	$km->Add("file","permission","Permission",null,"images/window_edit.png");
	$km->Add("permission","unrestrict","Unrestricted Access","javascript:alert(\"Unrestricted Access\")");
	$km->Add("permission","donotattribute","Do not attribute","javascript:alert(\"Do not attribute\")");
	
	$km->Add("root","edit","Edit");
	$km->Add("edit","cut","Cut","javascript:alert(\"Cut\")","images/cut.png");
	$km->Add("edit","copy","Copy","javascript:alert(\"Copy\")","images/copy.png");
	$km->Add("edit","paste","Paste","javascript:alert(\"Paste\")","images/paste.png");

	$km->Add("root","view","View");
	$km->Add("view","normal","Normal","javascript:alert(\"Normal View\")","images/scroll.png");
	$km->Add("view","print","Print","javascript:alert(\"Print View\")","images/printer2.png");
	$km->Add("view","weblayout","Web Layout","javascript:alert(\"Web Layout View\")","images/document_dirty.png");
	
	$item = $km->Add("root","help","Help");
	$item->Enabled = false;	
?>

<form id="form1" method="post">
	<div style="padding-bottom:100px;width:650px;">
		<?php echo $km->Render();?>
	</div>
	
</form>
