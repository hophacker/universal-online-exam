<?php
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	// always modified
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	// HTTP/1.1
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	// HTTP/1.0
	header("Pragma: no-cache");	
	
	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	require  $KoolControlsFolder."/KoolUploader/kooluploader.php";
	
	//Create handle object and edit upload settings.
	$kulhandle = new KoolUploadHandler();
	$kulhandle->allowedExtension = "gif,jpg,doc,pdf,txt";

	function custom_upload_handle(&$file)
	{
		//Process saving file with $file information
		//$file["name"] : Name of file
		//$file["tmp_name"] : Temporary name(path)
		//$file["size"] : Size of file
		//$file["type"] : Type of file
		//$file["error"] : Error if any		
		if (move_uploaded_file($file["tmp_name"], "../../Temp/".$file["name"]))
		{
			// success, return true
			return true;
		}
		else
		{
			//Fail to save file, return false
			return false;
		}     
	} 
	$kulhandle->funcFileHandle = custom_upload_handle;

	//Call the handle function to handle the request from client	
	echo $kulhandle->handleUpload();
?>