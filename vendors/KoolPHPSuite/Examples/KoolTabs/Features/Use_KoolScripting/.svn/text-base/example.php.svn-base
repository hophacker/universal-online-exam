<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTabs/kooltabs.php";
?>

<form id="form1" method="post">
	<?php echo KoolScripting::Start();?>
		<kooltabs id="kts" styleFolder="silver" scriptFolder="<?php echo $KoolControlsFolder."/KoolTabs"; ?>">
			<tab id="home" text="Home" selected="true"/>
			<tab id="products" text="Products" />
			<tab id="services" text="Services" />
			<tab id="company" text="Company" />
			<tab id="contactus" text="Contact us" />				
		</kooltabs>
	<?php echo KoolScripting::End();?>

</form>