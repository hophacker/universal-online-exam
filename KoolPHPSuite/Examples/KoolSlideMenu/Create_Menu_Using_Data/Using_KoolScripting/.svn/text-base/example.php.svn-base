<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolSlideMenu/koolslidemenu.php";	
?>
<div style="height:200px;width:650px;">
	<?php echo KoolScripting::Start();?>
		<koolslidemenu id="ksm" width="200px" singleExpand="true" styleFolder="bluearrow">
			<parent id="company" text="Company" expand="true">
				<child id="about" text="About us"/>
				<child id="news" text="Company News" />
				<child id="contact" text="Contact us" link="mailto:contact@koolphp.net" />				
			</parent>
			<parent id="products" text="Products">
				<child id="koolajax" text="KoolAjax" />
				<child id="kooltreeview" text="KoolTreeView" />
				<child id="koolslidemenu" text="KoolSlideMenu" />				
			</parent>
			<parent id="services" text="Services">
				<child id="outsourcing" text="Out-sourcing" />
				<child id="freelancer" text="Free-lancer" />			
			</parent>			
		</koolslidemenu>
	<?php echo KoolScripting::End();?>
</div>
