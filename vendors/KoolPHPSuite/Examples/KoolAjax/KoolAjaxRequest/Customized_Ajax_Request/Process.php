<?php 
	require "../../../../Resources/config.php";	
	$db_con = mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($dbname);
	$customerNumber = $_POST["customerNumber"];

	$result = mysql_query("select orderNumber,orderDate, status from orders where customerNumber=$customerNumber");

	echo "<table border='1'>";
	echo "<tr><th>Order Number</th><th>Order Date</th><th>Status</th></tr>";

	while($row=mysql_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>".$row["orderNumber"]."</td>";
		echo "<td>".$row["orderDate"]."</td>";
		echo "<td>".$row["status"]."</td>";
		echo "</tr>";				
	}
	echo "</table>";
	mysql_close($db_con);
?>