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
	require $KoolControlsFolder."/KoolCalendar/koolcalendar.php";
	
		
	$ds = new MySQLDataSource($db_con);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
	$ds->SelectCommand = "select orderNumber,orderDate,status,comments from orders";
	$ds->UpdateCommand = "update orders set orderDate='@orderDate', status='@status', comments='@comments' where orderNumber=@orderNumber";
	$ds->DeleteCommand = "delete from orders where orderNumber=@orderNumber";

	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->styleFolder="sunset";

	$grid->AjaxEnabled = true;
	$grid->DataSource = $ds;
	$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();
	$grid->Width = "655px";
	$grid->ColumnWrap = true;
	$grid->AllowEditing = true;
	$grid->AllowDeleting = true;
	

	$column = new GridBoundColumn();
	$column->DataField = "orderNumber";
	$column->ReadOnly = true;
	$grid->MasterTable->AddColumn($column);

	
	$column = new GridDateTimeColumn();
	$column->DataField = "orderDate";
	$column->HeaderText = "GridDateTimeColumn";
	$column->FormatString = "M d, Y";
	//Assign datepicker for GridDateTimeColumn
	$column->Picker = new KoolDatePicker();
	$column->Picker->scriptFolder = $KoolControlsFolder."/KoolCalendar";
	$column->Picker->styleFolder = "sunset";	
	$column->Picker->DateFormat = "M d, Y";
	
	$grid->MasterTable->AddColumn($column);

	$column = new GridDropDownColumn();
	$column->DataField = "status";
	$column->HeaderText = "GridDropDownColumn";
	$column->AddItem("In Process");
	$column->AddItem("On Hold");
	$column->AddItem("Disputed");
	$column->AddItem("Cancelled");	
	$column->AddItem("Resolved");	
	$column->AddItem("Shipped");
	$grid->MasterTable->AddColumn($column);

	$column = new GridBoundColumn();
	$column->DataField = "comments";
	$column->HeaderText = "GridBoundColumn";
	$grid->MasterTable->AddColumn($column);

	$column = new GridEditDeleteColumn();
	$column->HeaderText = "GridEditDeleteColumn";
	$column->Align = "center";
	$grid->MasterTable->AddColumn($column);

	
	$grid->Process();
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<?php echo $grid->Render();?>
</form>
