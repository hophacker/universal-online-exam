<?php 
	require "../../../../KoolControls/KoolAjax/koolajax.php";	
	if ($koolajax->isCallback)
	{
		//If it is callback request, Slow down processing to see loading effect
		sleep(1);
	}
	//	 This will show the data posted in the post method to this page
	if( isset( $_POST['Posted']))
		{
			echo "Order succesfull.<br/> Your OrderID is ".rand(0,9999);
		}	
?>