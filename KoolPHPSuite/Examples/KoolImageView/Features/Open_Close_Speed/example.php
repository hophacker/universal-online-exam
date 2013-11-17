<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolImageView/koolimageview.php";
	
	$kiv_fast = new KoolImageView("kiv_fast");
	$kiv_fast->scriptFolder =  $KoolControlsFolder."/KoolImageView";
	$kiv_fast->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/simple";
	$kiv_fast->imageUrl = "../../Images/nv.jpg";
	$kiv_fast->bigImageUrl = "../../Images/niceview.jpg";
	$kiv_fast->openTime = 200;
	$kiv_fast->frameNumber = 15;
	$kiv_fast->description = "Fast Opening";
	
	$kiv_slow = new KoolImageView("kiv_slow");
	$kiv_slow->scriptFolder =  $KoolControlsFolder."/KoolImageView";
	$kiv_slow->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/simple";
	$kiv_slow->imageUrl = "../../Images/nv.jpg";
	$kiv_slow->bigImageUrl = "../../Images/niceview.jpg";
	$kiv_slow->openTime = 500;
	$kiv_slow->frameNumber = 20;
	$kiv_slow->description = "Slow and Smooth Opening";
	
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
						<?php echo $kiv_fast->Render();?>
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
						<?php echo $kiv_slow->Render();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</form>
