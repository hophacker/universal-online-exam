<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolImageView/koolimageview.php";
	
	$kiv_background = new KoolImageView("kiv_background");
	$kiv_background->scriptFolder =  $KoolControlsFolder."/KoolImageView";
	$kiv_background->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/simple";
	$kiv_background->imageUrl = "../../Images/nv.jpg";
	$kiv_background->bigImageUrl = "../../Images/niceview.jpg";
	$kiv_background->description = "With Background";
	$kiv_no_background->backgroundOpacity = 40;
	
	$kiv_no_background = new KoolImageView("kiv_no_background");
	$kiv_no_background->scriptFolder =  $KoolControlsFolder."/koolimageview";
	$kiv_no_background->styleFolder =  $KoolControlsFolder."/koolimageview/styles/simple";
	$kiv_no_background->imageUrl = "../../Images/nv.jpg";
	$kiv_no_background->bigImageUrl = "../../Images/niceview.jpg";
	$kiv_no_background->description = "No Background";
	$kiv_no_background->backgroundOpacity = 0;
	
?>
<form id="form1" method="post">

	<style type="text/css">
		.box
		{
			float:left;
			width:280px;
			height:180px;
			margin:10px;
			padding:10px;
		}
		.focus
		{
			background:#DFF3FF;
			border:solid 1px #C6E1F2;
			height:140px;
			width:195px;
			padding-top:40px;
			padding-left:85px;			
		}
		.clear
		{
			clear:both;
		}
		#style_select
		{
			width:100px;	
		}				
		div.framepic { width:96px; height:69px; padding : 2px; vertical-align:middle;}
		div.framepic1 { border : 2px  dotted gray; width:100px; }
		div.framepic2 { border : 2px dotted black ;  width : 104px;}		
		div.framepic3 { border : 2px solid gray ; padding : 1px ; width : 108px;}
	</style>
	
	
	<div class="box focus">
		<div class="framepic3">		
			<div class="framepic2">
				<div class="framepic1">					
					<div class="framepic">	
						<?php echo $kiv_background->Render();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box focus">
		<div class="framepic3">		
			<div class="framepic2">
				<div class="framepic1">					
					<div class="framepic">	
						<?php echo $kiv_no_background->Render();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</form>
