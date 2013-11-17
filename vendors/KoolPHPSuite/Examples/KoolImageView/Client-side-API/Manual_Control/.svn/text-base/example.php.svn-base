<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolImageView/koolimageview.php";
	
	$kiv = new KoolImageView("kiv");
	$kiv->scriptFolder =  $KoolControlsFolder."/KoolImageView";
	$kiv->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/simple";
	$kiv->imageUrl = "../../Images/nv.jpg";
	$kiv->bigImageUrl = "../../Images/niceview.jpg";
	$kiv->description = "Beautiful Beach";
	
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
			background:#EEEEEE;
			border:solid 1px #CCCCCC;			
		}
		.focus
		{
			background:#DFF3FF;
			border:solid 1px #C6E1F2;
			height:150px;
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
		<?php echo $kiv->Render();?>
		</div></div></div></div>
	</div>
	<div class="box" style="text-align:center;">
		<div style="height:50px;"></div>
		<input type="button" value="Open image" onclick="openImge();" />
	</div>
	<div class="clear"></div>
	
	<script type="text/javascript">
		function openImge(){
			kiv.open();
		}
	</script>
</form>
