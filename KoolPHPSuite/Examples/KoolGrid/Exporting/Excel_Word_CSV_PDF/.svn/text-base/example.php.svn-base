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
	
	if(isset($_POST["IgnorePaging"]))
	{
		$grid->ExportSettings->IgnorePaging = true;
	}
	
	if(isset($_POST["ExportToExcel"]))
	{
		ob_end_clean();
		$grid->GetInstanceMasterTable()->ExportToExcel();
	}	
	if(isset($_POST["ExportToWord"]))
	{
		ob_end_clean();
		$grid->GetInstanceMasterTable()->ExportToWord();
	}	
	if(isset($_POST["ExportToCSV"]))
	{
		ob_end_clean();
		$grid->GetInstanceMasterTable()->ExportToCSV();
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
		<input type="checkbox" id="IgnorePaging" name="IgnorePaging"/> <label for="IgnorePaging">Ignore Paging</label>
		<br/><br/>
		<input type="submit" name="ExportToCSV" value = "Export to CSV" />
		<input type="submit" name="ExportToExcel" value = "Export to Excel" />
		<input type="submit" name="ExportToWord" value = "Export to Word" />
		<input type="submit" name="ExportToPDF" value = "Export to PDF" />
	</div>
	<?php echo $grid->Render();?>
	
</form>
