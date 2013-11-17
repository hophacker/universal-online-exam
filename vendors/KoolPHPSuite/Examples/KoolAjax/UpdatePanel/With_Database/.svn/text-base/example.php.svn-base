<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	
	if($koolajax->isCallback)
	{
		sleep(1); //Slow down 1s to see loading effect
	}
	
	echo $koolajax->Render();
?>
<form id="form1" method="post">
	<div style="padding-bottom:10px;">
		Select customer to view order details:
	</div>
	<select id="cbbCustomer" onchange="select_customer()">
		<option value="">--</option>
		<?php
			$result = mysql_query("select customerNumber,customerName from customers limit 0,10");
			while($row= mysql_fetch_assoc($result))
			{
				echo "<option value='".$row["customerNumber"]."'>".$row["customerName"]."</option>";
			}	
		?>
	</select>
	
	<div style="width:300px;min-height:100px;padding-top:10px;">
	<?php echo KoolScripting::Start();?>
		<updatepanel id="order_updatepanel">
			<content>
				<![CDATA[
					<?php
						echo "<table border='1'>";
						echo "<tr><th>Order Number</th><th>Order Date</th><th>Status</th></tr>";

						if(isset($_POST["customerNumber"]))
						{
							$customerNumber = $_POST["customerNumber"];
							$result = mysql_query("select orderNumber,orderDate, status from orders where customerNumber=$customerNumber");
							while($row=mysql_fetch_assoc($result))
							{
								echo "<tr>";
								echo "<td>".$row["orderNumber"]."</td>";
								echo "<td>".$row["orderDate"]."</td>";
								echo "<td>".$row["status"]."</td>";
								echo "</tr>";				
							}
						}
						echo "</table>";					
					?>		
				]]>												
			</content>
			<loading image="<?php echo $KoolControlsFolder; ?>/KoolAjax/loading/5.gif" />
		</updatepanel>
	<?php echo KoolScripting::End();?>
	</div>

	<script type="text/javascript">
		function select_customer()
		{
			var _customerNumner = document.getElementById("cbbCustomer").value;			
			if(_customerNumner!="")
			{
				order_updatepanel.attachData("customerNumber",_customerNumner);
				order_updatepanel.update();
			}
		}
	</script>	
</form>	