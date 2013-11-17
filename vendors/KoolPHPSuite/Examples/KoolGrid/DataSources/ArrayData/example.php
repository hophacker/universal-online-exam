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
	
	
	//Generate array
	$arr = array();
	for($i=0;$i<10;$i++)
	{
		$arr[] = array("ID"=>$i,"Text"=>"Text ".$i);
	}
	
	$ds = new ArrayDataSource($arr);
	
	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->styleFolder="sunset";

	$grid->AjaxEnabled = true;
	$grid->DataSource = $ds;
	$grid->Width = "655px";
	$grid->ShowStatus = false;
	$grid->PageSize = 5;
	
	
	$grid->MasterTable->Pager = new GridPrevNextPager();
	

	$column = new GridBoundColumn();
	$column->DataField = "ID";
	$column->HeaderText = "ID";
	$column->ReadOnly = true;
	$grid->MasterTable->AddColumn($column);

	$column = new GridBoundColumn();
	$column->DataField = "Text";
	$column->HeaderText = "Text";
	$column->ReadOnly = true;
	$grid->MasterTable->AddColumn($column);
	
	$grid->Process();
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<?php echo $grid->Render();?>
</form>
