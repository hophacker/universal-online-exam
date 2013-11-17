<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require_once $KoolControlsFolder."/KoolGrid/library/tcpdf/config/lang/eng.php";
	require_once $KoolControlsFolder."/KoolGrid/library/tcpdf/tcpdf.php";

	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";

	require $KoolControlsFolder."/KoolGrid/koolgrid.php";
	$ds = new MySQLDataSource($db_con);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
	$ds->SelectCommand = "select customerNumber,customerName,phone,city from customers";

	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->styleFolder="sunset";
	$grid->DataSource = $ds;
	$grid->Width = "655px";

	//Enable Ajax Mode
	$grid->AjaxEnabled = true;
	//Add loading image
	$grid->AjaxLoadingImage =  $KoolControlsFolder."/KoolAjax/loading/5.gif";

	$grid->RowAlternative = true;
	$grid->AutoGenerateColumns = true;		
	$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();
	$grid->Process();
	
	if(isset($_POST["FileName"]))
	{
		$grid->ExportSettings->FileName = $_POST["FileName"];
	}	
	if(isset($_POST["ExportToPDF"]))
	{
		ob_end_clean();
		$grid->GetInstanceMasterTable()->ExportToPDF();
	}	
	
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<div style="margin-bottom:10px;padding:10px;width:635px;background:#DFF3FF;border:solid 1px #C6E1F2;">
		Enter filename: 
		<br/>
		<input type="textbox" id="FileName" name="FileName" value="<?php echo $grid->ExportSettings->FileName?>"/>
		<br/><br/>
		<input type="submit" name="ExportToPDF" value = "Export to PDF" />
	</div>	
	<?php echo $grid->Render();?>
	
</form>
