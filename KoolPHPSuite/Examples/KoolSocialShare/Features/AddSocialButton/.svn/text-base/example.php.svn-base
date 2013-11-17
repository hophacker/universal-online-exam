<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolSocialShare/koolsocialshare.php";

	$socialshare = new KoolSocialShare("socialshare");
	$socialshare->styleFolder = "default";
	$socialshare->scriptFolder = $KoolControlsFolder."/KoolSocialShare";
	
	$socialshare->Add(new SocialButton("Twitter"));
	$socialshare->Add(new SocialButton("Delicious"));
	$socialshare->Add(new SocialButton("Facebook"));
	$socialshare->Add(new SocialButton("LinkedIn"));

?>

<form id="myform" method="post" class="decoration">
	You can customize to have any social buttons that you like:
	<br/><br/>
	<?php echo $socialshare->Render();?>
</form>