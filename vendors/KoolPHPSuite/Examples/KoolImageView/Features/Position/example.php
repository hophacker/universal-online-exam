<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolImageView/koolimageview.php";
	
	$kiv_screen_center = new KoolImageView("kiv_screen_center");
	$kiv_screen_center->scriptFolder =  $KoolControlsFolder."/KoolImageView";
	$kiv_screen_center->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/simple";
	$kiv_screen_center->imageUrl = "../../Images/nv.jpg";
	$kiv_screen_center->bigImageUrl = "../../Images/niceview.jpg";
	$kiv_screen_center->description = "Screen Center";
	$kiv_screen_center->position = "SCREEN_CENTER";

	$kiv_image_center = new KoolImageView("kiv_image_center");
	$kiv_image_center->scriptFolder =  $KoolControlsFolder."/KoolImageView";
	$kiv_image_center->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/simple";
	$kiv_image_center->imageUrl = "../../Images/nv.jpg";
	$kiv_image_center->bigImageUrl = "../../Images/niceview.jpg";
	$kiv_image_center->description = "Image Center";
	$kiv_image_center->position = "IMAGE_CENTER";
	
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
						<?php echo $kiv_screen_center->Render();?>
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
						<?php echo $kiv_image_center->Render();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</form>
