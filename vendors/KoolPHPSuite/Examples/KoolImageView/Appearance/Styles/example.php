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
	$kiv->imageUrl = "../../Images/nv.jpg";
	$kiv->bigImageUrl = "../../Images/niceview.jpg";
	
	$style_select = ( isset($_POST['style_select']) ) ? $_POST['style_select'] : "simple";

	$kiv->description = "Beautiful Beach with $style_select style";	
	$kiv->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/$style_select";
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
			width:200px;
			padding-top:40px;
			padding-left:80px;			
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box">
		Select style:
		<select id="style_select" name="style_select" onchange="submit();">
			<option value="dark"   <?php echo ( $style_select =='dark') ? 'selected' : '' ;?> >Dark</option>
			<option value="hay"   <?php echo ( $style_select =='hay') ? 'selected' : '' ;?> >Hay</option>
			<option value="inox"   <?php echo ( $style_select =='inox') ? 'selected' : '' ;?> >Inox</option>
			<option value="office2007"   <?php echo ( $style_select =='office2007') ? 'selected' : '' ;?> >Office2007</option>
			<option value="outlook"   <?php echo ( $style_select =='outlook') ? 'selected' : '' ;?> >Outlook</option>
			<option value="silver"   <?php echo ( $style_select =='silver') ? 'selected' : '' ;?> >Silver</option>
			<option value="vista"   <?php echo ( $style_select =='vista') ? 'selected' : '' ;?> >Vista</option>
			<option value="simple" <?php echo ( $style_select =='simple') ? 'selected' : '' ;?> >Simple</option>
		</select>
	</div>
	<div class="clear"></div>
</form>
