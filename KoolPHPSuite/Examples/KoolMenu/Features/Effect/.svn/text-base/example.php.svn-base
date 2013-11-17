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

	$km->ExpandDelay = 500;
	$km->CollapseDelay = 500;

	
	$effect_select = "EaseBoth";	
	if(isset($_POST["effect_select"]))
	{
		$effect_select = $_POST["effect_select"];
	}
	$km->ExpandAnimation->Type = $effect_select;
	$km->CollapseAnimation->Type = $effect_select;
	$km->ExpandAnimation->Duration = 500;
	$km->CollapseAnimation->Duration = 500;
	
?>

<form id="form1" method="post">

	Select collapse/expand effect:
	<select id="effect_select" name="effect_select" onchange="submit();">
		<option value="None"			<?php if ($effect_select=="None") echo "selected" ?> >None</option>
		<option value="Linear"			<?php if ($effect_select=="Linear") echo "selected" ?> >Linear</option>

		<option value="EaseIn"			<?php if ($effect_select=="EaseIn") echo "selected" ?> >EaseIn</option>
		<option value="EaseOut"			<?php if ($effect_select=="EaseOut") echo "selected" ?> >EaseOut</option>
		<option value="EaseBoth"			<?php if ($effect_select=="EaseBoth") echo "selected" ?> >EaseBoth</option>

		<option value="EaseInStrong"			<?php if ($effect_select=="EaseInStrong") echo "selected" ?> >EaseInStrong</option>
		<option value="EaseOutStrong"			<?php if ($effect_select=="EaseOutStrong") echo "selected" ?> >EaseOutStrong</option>
		<option value="EaseBothStrong"			<?php if ($effect_select=="EaseBothStrong") echo "selected" ?> >EaseBothStrong</option>

		<option value="BounceIn"			<?php if ($effect_select=="BounceIn") echo "selected" ?> >BounceIn</option>
		<option value="BounceOut"			<?php if ($effect_select=="BounceOut") echo "selected" ?> >BounceOut</option>
		<option value="BounceBoth"			<?php if ($effect_select=="BounceBoth") echo "selected" ?> >BounceBoth</option>

		<option value="ElasticIn"			<?php if ($effect_select=="ElasticIn") echo "selected" ?> >ElasticIn</option>
		<option value="ElasticOut"			<?php if ($effect_select=="ElasticOut") echo "selected" ?> >ElasticOut</option>
		<option value="ElasticBoth"			<?php if ($effect_select=="ElasticBoth") echo "selected" ?> >ElasticBoth</option>

		<option value="BackIn"			<?php if ($effect_select=="BackIn") echo "selected" ?> >BackIn</option>
		<option value="BackOut"			<?php if ($effect_select=="BackOut") echo "selected" ?> >BackOut</option>
		<option value="BackBoth"			<?php if ($effect_select=="BackBoth") echo "selected" ?> >BackBoth</option>

	</select>
	
	<div style="padding-top:20px;padding-bottom:100px;width:650px;">
		<?php echo $km->Render();?>
	</div>
	
</form>
