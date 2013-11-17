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
	$ds->SelectCommand = "select customerNumber as pk, customerNumber,customerName,phone,city from customers";
	$ds->UpdateCommand = "update customers set customerNumber=@customerNumber, customerName='@customerName', phone='@phone', city='@city' where customerNumber=@pk";
	$ds->DeleteCommand = "delete from customers where customerNumber=@pk";
	$ds->InsertCommand = "insert into customers (customerNumber,customerName,phone,city) values (@customerNumber,'@customerName','@phone','@city');";

	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->styleFolder="sunset";

	$grid->AjaxEnabled = true;
	$grid->AjaxLoadingImage =  $KoolControlsFolder."/KoolAjax/loading/5.gif";	
	$grid->DataSource = $ds;
	$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();
	$grid->Width = "655px";
	$grid->ColumnWrap = true;
	$grid->AllowEditing = true;
	$grid->AllowDeleting = true;

	$grid->MasterTable->ShowFunctionPanel = true;	
	$grid->MasterTable->InsertSettings->ColumnNumber = 2;	

	$column = new GridBoundColumn();
	$column->HeaderText = "CustomerNumber";
	$column->DataField = "customerNumber";
	//Create regular expression validator to make sure the input is an integer.
	$validator = new RegularExpressionValidator();
	$validator->ValidationExpression = "/^([0-9])+$/";
	$validator->ErrorMessage = "Please input an integer";
	$column->AddValidator($validator);
	$grid->MasterTable->AddColumn($column);

	$column = new GridBoundColumn();
	$column->HeaderText = "CustomerName";
	$column->DataField = "customerName";
	//Add required field validator to make sure the input is not empty.
	$validator = new RequiredFieldValidator();
	$column->AddValidator($validator);
	$grid->MasterTable->AddColumn($column);

	$column = new GridBoundColumn();
	$column->HeaderText = "Phone";
	$column->DataField = "phone";
	//Add required field validator to make sure the input is not empty.
	$validator = new RequiredFieldValidator();
	$column->AddValidator($validator);
	$grid->MasterTable->AddColumn($column);

	$column = new GridBoundColumn();
	$column->HeaderText = "City";
	$column->DataField = "city";
	//Add required field validator to make sure the input is not empty.
	$validator = new RequiredFieldValidator();
	$column->AddValidator($validator);
	$grid->MasterTable->AddColumn($column);
	$column = new GridEditDeleteColumn();
	$grid->MasterTable->AddColumn($column);
	
	$grid->Process();
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>

	<div style='padding-bottom:5px;width:655px;'>	
		<i>*Note:</i> When editing or inserting row, you may test putting non-integer to CustomerNumber field or leave other input fields empty.
	</div>
	<?php echo $grid->Render();?>
</form>
