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
	
	$km->Add("root","file","File");
	
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
	
	$km->Add("root","edit","Edit");
	$km->Add("edit","cut","Cut");
	$km->Add("edit","copy","Copy");
	$km->Add("edit","paste","Paste");

	$km->Add("root","view","View");
	$km->Add("view","normal","Normal");
	$km->Add("view","print","Print");
	$km->Add("view","weblayout","Web Layout");
	
	$item = $km->Add("root","help","Help");
	$item->Enabled = false;
	
	$style_select = "default";	
	if(isset($_POST["style_select"]))
	{
		$style_select = $_POST["style_select"];
	}
	$km->styleFolder=$style_select;
?>

<form id="form1" method="post">

	Select style:
	<select id="style_select" name="style_select" onchange="submit();">
		<option value="default"			<?php if ($style_select=="default") echo "selected" ?> >Default</option>
	</select>
	
	<div style="padding-top:20px;padding-bottom:40px;width:650px;<?php if ($style_select=="black") echo "background:#333"; ?>">
		<?php echo $km->Render();?>
	</div>
</form>
