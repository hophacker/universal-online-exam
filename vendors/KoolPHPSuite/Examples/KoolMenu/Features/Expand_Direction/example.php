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
	
	$item = $km->Add("root","file","File");
	$item->GroupSettings->ExpandDirection = "Down";
	
	$km->Add("file","new","New...");
	$km->Add("new","newfile","File");
	$km->Add("new","newfolder","Folder");
	$km->AddSeparator("file");
	$km->Add("file","open","Open");
	$km->Add("file","close","Close");
	$km->Add("file","save","Save");
	$item = $km->Add("file","saveas","Save as ...");
	$item->Enabled = false;

	$km->Add("file","permission","Permission");

	$km->Add("permission","unrestrict","Unrestricted Access");
	$km->Add("permission","donotattribute","Do not attribute");
	
	$item = $km->Add("root","edit","Edit");
	$item->GroupSettings->ExpandDirection = "Up";
	
	$km->Add("edit","cut","Cut");
	$km->Add("edit","copy","Copy");
	$km->Add("edit","paste","Paste");

	$item = $km->Add("root","view","View");
	$item->GroupSettings->ExpandDirection = "Right";

	$km->Add("view","normal","Normal");
	$km->Add("view","print","Print");
	$km->Add("view","weblayout","Web Layout");
	
	$item = $km->Add("root","help","Help");
	$item->Enabled = false;
	
	$flow_select = "Horizontal";	
	if(isset($_POST["flow_select"]))
	{
		$flow_select = $_POST["flow_select"];
	}
	$km->Flow = $flow_select;
	
?>

<form id="form1" method="post">

	<div style="padding-top:20px;padding-bottom:100px;width:650px;">
		<?php echo $km->Render();?>
	</div>
	
</form>
