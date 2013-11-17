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
	$ds->SelectCommand = "select orderNumber,orderDate,status,comments from orders";
	$ds->UpdateCommand = "update orders set orderDate='@orderDate', status='@status' where orderNumber=@orderNumber";

	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->styleFolder="sunset";

	$grid->AjaxEnabled = true;
	$grid->DataSource = $ds;
	$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();
	$grid->Width = "655px";
	$grid->AllowResizing = true;

	$column = new GridBoundColumn();
	$column->DataField = "orderNumber";
	$column->HeaderText = "Order Number";
	$column->ReadOnly = true;
	$column->Align = "center";
	$grid->MasterTable->AddColumn($column);

	$column = new GridDateTimeColumn();
	$column->DataField = "orderDate";
	$column->HeaderText = "Date";
	$column->FormatString = "M d, Y";
	$column->Align = "center";
	$grid->MasterTable->AddColumn($column);

	$column = new GridDropDownColumn();
	$column->DataField = "status";
	$column->HeaderText = "Status";
	$column->Align = "center";
	$column->AddItem("In Process");
	$column->AddItem("On Hold");
	$column->AddItem("Disputed");
	$column->AddItem("Resolved");	
	$column->AddItem("Shipped");
	$grid->MasterTable->AddColumn($column);

	$column = new GridBoundColumn();
	$column->DataField = "comments";
	$column->HeaderText = "Comments";
	$column->HeaderStyle->Align = "center";
	$column->Wrap = true;
	$grid->MasterTable->AddColumn($column);

	$grid->Process();
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>

	<div style="padding-top:10px;">
		<?php echo $grid->Render();?>
	</div>
</form>
