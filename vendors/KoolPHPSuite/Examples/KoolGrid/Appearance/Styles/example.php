<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";

	require $KoolControlsFolder."/KoolGrid/koolgrid.php";

	if(isset($_POST["style_select"]))
	{
		$_SESSION["style_select"] = $_POST["style_select"];
	}
	else
	{
		if (!$koolajax->isCallback)
		{
			//Page Init: show default style
			$_SESSION["style_select"] = "sunset";
		}
	}
		
	$ds = new MySQLDataSource($db_con);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
	$ds->SelectCommand = "select customerNumber,customerName,phone,city from customers";

	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->DataSource = $ds;
	$grid->AjaxEnabled = true;
	$grid->AutoGenerateColumns = true;
	$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();
	$grid->Width = "655px";
	
	$grid->styleFolder=$_SESSION["style_select"];
	$grid->Process();
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	Select style:
	<select id="style_select" name="style_select" onchange="submit();">
		<option value="default"		<?php if ($_SESSION["style_select"]=="default") echo "selected" ?> >Default</option>
		<option value="outlook"		<?php if ($_SESSION["style_select"]=="outlook") echo "selected" ?> >Outlook</option>		
		<option value="office2010blue"		<?php if ($_SESSION["style_select"]=="office2010blue") echo "selected" ?> >Office2010Blue</option>		
		<option value="sunset"		<?php if ($_SESSION["style_select"]=="sunset") echo "selected" ?> >Sunset</option>		
	</select>
	
	<div style="padding-top:10px;">
		<?php echo $grid->Render();?>
	</div>
</form>
