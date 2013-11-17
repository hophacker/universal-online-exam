<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	require $KoolControlsFolder."/KoolListBox/koollistbox.php";
	require $KoolControlsFolder."/KoolForm/koolform.php";


	$myform_manager = new KoolForm("myform");
	$myform_manager->scriptFolder = $KoolControlsFolder."/KoolForm";	
	$myform_manager->styleFolder = "sunset";
	//$myform_manager->DecorationEnabled = true;
	$myform_manager->RenderWithExistingMarkup=true;
	
	$listbox = new KoolListBox("listbox");
	$listbox->styleFolder = "vista";
	$listbox->Width="270px";
	$listbox->Height="260px";
	
	$item = $listbox->AddItem(new ListBoxItem("Apple Iphone 5 - Black","iphone5_black"));
	$item->Data = array("Capacity"=>"16GB","Price"=>"USD 639");
	$item = $listbox->AddItem(new ListBoxItem("Apple Iphone 5 - White","iphone5_white"));
	$item->Data = array("Capacity"=>"16GB","Price"=>"USD 639");
	$item = $listbox->AddItem(new ListBoxItem("Apple The New Ipad - Black","ipad_black"));
	$item->Data = array("Capacity"=>"32GB","Price"=>"USD 599");
	$item = $listbox->AddItem(new ListBoxItem("Apple The New Ipad - White","ipad_white"));
	$item->Data = array("Capacity"=>"32GB","Price"=>"USD 599");
	$item = $listbox->AddItem(new ListBoxItem("Apple Ipod shuffle - Black","ipod_black"));
	$item->Data = array("Capacity"=>"2GB","Price"=>"USD 49");
	$item = $listbox->AddItem(new ListBoxItem("Apple Ipod shuffle - White","ipod_white"));
	$item->Data = array("Capacity"=>"2GB","Price"=>"USD 49");
	
	$listbox->ItemTemplate = "<div> <div class='cssImage'><img src='images/{Value}.jpg'/></div> <div class='cssText'>{Text}</div><div class='cssCapacity'>{Capacity}</div><div style='clear:both'></div> </div>";
	$listbox->TransferToId = "second_listbox";
	$listbox->ButtonSettings->ShowTransfer = true;
	$listbox->ButtonSettings->Position = "Right";
	$listbox->ButtonSettings->VerticalAlign = "Middle";
	$listbox->AutoPostBackOnTransfer =true;
	$listbox->Init();
	
	$second_listbox = new KoolListBox("second_listbox");
	$second_listbox->styleFolder = "office2010silver";
	$second_listbox->Width="350px";
	$second_listbox->Height="260px";
	
	$second_listbox->ItemTemplate = "<div> <div class='cssImage2'><img src='images/{Value}.jpg'/></div> <div class='cssText2'>{Text}</div><div class='cssCapacity2'>{Capacity}</div> <div class='cssPrice'>Price: <span>{Price}</span></div> <div class='cssQuantity'><div>Quantity:</div> <input id='{Value}_Quantity' type='text' value='1' style='width:30px;' /></div> <div style='clear:both'></div> </div>";
	$second_listbox->Init();


	for($i=0;$i<count($second_listbox->Items);$i++)
	{
		$numeric_textbox =  $myform_manager->AddControl(new KoolNumericTextBox($second_listbox->Items[$i]->Value."_Quantity"));
		$numeric_textbox->MinValue = 1;
		$numeric_textbox->Value = 1;
		$numeric_textbox->ShowSpinButton = true;
	}


	$myform_manager->Init();
?>

<form id="myform" method="post">

	<div style="width:650px;margin-left:10px;">	
		<?php echo $listbox->Render();?>
		<?php echo $second_listbox->Render();?>
	</div>
	



	<style type="text/css">
		.cssText
		{
			font: 11px 'Segoe UI',Arial,sans-serif;
			color: #3D84CA;
			margin-top:1px;
			
		}
		.cssCapacity
		{
		    color: #606060;
		    display: block;
		    font: 10px 'Segoe UI',Arial,sans-serif;
		}
		.klbSelected .cssText,
		.klbHovered .cssText	
		{
			color: #FFFFFF;
		}
		.klbSelected .cssCapacity,
		.klbHovered .cssCapacity
		{
			color: #FFFFFF;
		}
		.cssImage
		{
			text-align:center;
			padding-top:2px;
			width:52px;
			height:52px;
			float:left;
			border:solid 1px #C3DCFC;
			background-color:white;  
			margin:1px 10px 2px 1px;
		}
		.cssImage img
		{
			height:50px;
		}
		


		.cssText2
		{
			font: 14px 'Segoe UI',Arial,sans-serif;
			color: #3D84CA;
			padding-top:2px;
		}
		.cssCapacity2
		{
		    color: #606060;
		    display: block;
		    font: 12px 'Segoe UI',Arial,sans-serif;
			
		}
		.klbSelected .cssText2,
		.klbHovered .cssText2	
		{
			
		}
		.klbSelected .cssCapacity2,
		.klbHovered .cssCapacity2
		{
			
		}
		.cssImage2
		{
			text-align:center;
			padding-top:5px;
			width:105px;
			height:105px;
			float:left;
			border:solid 1px #C3DCFC;
			background-color:white;  
			margin: 3px 10px 3px 1px;
		}
		.cssImage2 img
		{
			height:100px;
		}

		.cssPrice
		{
			margin-top:5px;
		    color: black;
		    font: 14px 'Segoe UI',Arial,sans-serif;
		}
		.cssPrice span
		{
			color:red;
		}
		
		.cssQuantity
		{
			margin-top:5px;
		    color: black;
		    font: 14px 'Segoe UI',Arial,sans-serif;
		}
		.cssQuantity div
		{
			float:left;
			padding-top:2px;
			padding-right:2px;
		}
		
	</style>

	<?php echo $myform_manager->Render();?>
</form>