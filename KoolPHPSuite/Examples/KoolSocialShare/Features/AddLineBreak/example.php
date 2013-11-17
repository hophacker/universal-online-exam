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
	
		$socialshare->Add(new SocialButton("Facebook"));
		$socialshare->Add(new SocialButton("Twitter"));
		$socialshare->Add(new SocialLineBreak());
		$socialshare->Add(new SocialButton("Blogger"));
		$socialshare->Add(new SocialButton("Delicious"));
		$socialshare->Add(new SocialLineBreak());
		$socialshare->Add(new SocialButton("LinkedIn"));
		$socialshare->Add(new SocialButton("MySpace"));
		$socialshare->Add(new SocialLineBreak());
		$socialshare->Add(new SocialButton("Reddit"));
		$socialshare->Add(new SocialButton("StumbleUpon"));
		$socialshare->Add(new SocialLineBreak());
		$socialshare->Add(new SocialButton("Tumblr"));
		$socialshare->Add(new SocialButton("MailTo"));

?>

<form id="myform" method="post" class="decoration">
	Make line break:
	<br/><br/>
	<?php echo $socialshare->Render();?>
</form>