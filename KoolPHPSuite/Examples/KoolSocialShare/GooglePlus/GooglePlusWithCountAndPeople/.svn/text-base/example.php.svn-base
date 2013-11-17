<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolSocialShare/koolsocialshare.php";

	$socialshare = new KoolSocialShare("socialshare");
	$socialshare->styleFolder = "none";
	$socialshare->scriptFolder = $KoolControlsFolder."/KoolSocialShare";
	
	$socialshare->UrlToShare = "http://www.koolphp.net"; 

	$socialshare->Add(new GooglePlusWithCountAndPeople());

?>

<form id="myform" method="post" class="decoration">
	Share on Google+:
	<?php echo $socialshare->Render();?>
</form>