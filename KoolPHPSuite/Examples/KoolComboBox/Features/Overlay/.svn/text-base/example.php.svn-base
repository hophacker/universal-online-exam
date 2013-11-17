<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";

	$kcb = new KoolComboBox("kcb");
	$kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$kcb->styleFolder= "inox";
	$kcb->width = "180px";
	$kcb->itemTemplate = "<table><tr><td valign='middle' style='width:22px;height:20px;'><img src='../../Resources/Flags/{image}' alt='{text}' title='{text}' /></td><td valign='middle'>{text}</td></tr></table>";
	
	$kcb->addItem("Canada","Canada",array("image"=>"flag_canada.png"),true);
	$kcb->addItem("Finland","Finland",array("image"=>"flag_finland.png"));
	$kcb->addItem("France","France",array("image"=>"flag_france.png"));
	$kcb->addItem("Germany","Germany",array("image"=>"flag_germany.png"));
	$kcb->addItem("Great Britain","Great Britain",array("image"=>"flag_great_britain.png"));
	$kcb->addItem("USA","USA",array("image"=>"flag_usa.png"));	
	$kcb->superAbove = true;
?>

<form id="form1" method="post">
	<div style="padding-left:10px;padding-bottom:10px;">	
		Choose a nation:
	</div>	
	<div style="padding-left:10px;padding-bottom:10px;">	
	<?php echo $kcb->Render();?>
	</div>
	<div style="padding-left:10px;padding-bottom:10px;">	
		<select>
			<option>KoolComboBox can be over this</option>
			
		</select>		
	</div>	
	<div style="padding:10px;">	
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="425" height="344">
			<param name="movie" value="http://www.youtube.com/v/AxKzTowWxko&hl=en&fs=1" />
			<param name="wmode" value="transparent" />
			<object type="application/x-shockwave-flash" data="http://www.youtube.com/v/AxKzTowWxko&hl=en&fs=1"
				width="425" height="344">
				<param name="wmode" value="transparent" />
					<p>KoolComboBox overlays flash files</p>
			</object>
		</object>	
	</div>

		
	
</form>