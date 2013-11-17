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
	$ds_customer = new MySQLDataSource($db_con);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
	$ds_customer->SelectCommand = "select customerNumber,customerName,phone,city from customers";

	$ds_order = new MySQLDataSource($db_con);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
	$ds_order->SelectCommand = "select orderNumber,orderDate,status,customerNumber from orders";


	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->styleFolder="sunset";
	$grid->Width = "655px";
	$grid->RowAlternative = true;

	$grid->AjaxEnabled = true;

	$grid->MasterTable->AllowHovering = true;
	$grid->MasterTable->AllowSelecting = true;
		
	$grid->MasterTable->AutoGenerateColumns = true;
	$grid->MasterTable->AutoGenerateExpandColumn = true;
		
	$grid->MasterTable->DataSource = $ds_customer;		
	$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();	

	$order_table = new GridTableView();
	$order_table->DataSource = $ds_order;
	$order_table->AutoGenerateColumns = true;
	$order_table->Width = "100%";
	$order_table->Pager = new GridPrevNextPager();
	$order_table->AddRelationField("customerNumber","customerNumber");
	
	$grid->MasterTable->AddDetailTable($order_table,"Details order of {customerName}:");

	//Register Client-side event handler
	$grid->ClientSettings->ClientEvents["OnRowMouseOver"] = "Handle_OnRowMouseOver";
	$grid->ClientSettings->ClientEvents["OnRowSelect"] = "Handle_OnRowSelect";
	$grid->ClientSettings->ClientEvents["OnBeforeDetailTablesExpand"] = "Handle_OnBeforeDetailTablesExpand";
	$grid->ClientSettings->ClientEvents["OnDetailTablesExpand"] = "Handle_OnDetailTablesExpand";

	$grid->Process();
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>

	<div id="res" style="padding-top:10px;padding-bottom:10px;">
		Latest event:
	</div>
	
	<script type="text/javascript">
		//These event handles function must be put before $grid->Render() function
		function Handle_OnRowMouseOver(sender,args)
		{
			var _row = args["Row"];
			var _res =document.getElementById("res");
			_res.innerHTML = "Latest event: Mouse is over row with [customerNumber = "+ _row.getDataItem()["customerNumber"]+"]";
		}
		function Handle_OnRowSelect(sender,args)
		{
			var _row = args["Row"];
			var _res =document.getElementById("res");
			_res.innerHTML = "Latest event: Row with [customerNumber = "+ _row.getDataItem()["customerNumber"]+"] was selected";			
		}
		function Handle_OnBeforeDetailTablesExpand(sender,args)
		{
			var _row = args["Row"];
			if(confirm("Show order details of "+_row.getDataItem()["customerName"]+"?"))
			{
				return true;	
			}
			else
			{
				return false;
			}
		}
		function Handle_OnDetailTablesExpand(sender,args)
		{
			var _row = args["Row"];
			alert("Table of order details of "+_row.getDataItem()["customerName"]+" has been opened.");
		}
	</script>
	
	<?php echo $grid->Render();?>
</form>