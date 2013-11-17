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
	$kiv->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/dark";
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
		
		#events{ overflow:auto;	 overflow-X:hidden; height : 130px; }
	</style>
	
	
	
	<div class="box focus">
		<div class="framepic3">		
		<div class="framepic2">
		<div class="framepic1">					
		<div class="framepic">	
		<?php echo $kiv->Render();?>
		</div></div></div></div>
	</div>
	<div class="box">
		<b>Client-side events:  </b><hr/>
		<div id="events"></div>
	</div>
	<div class="clear"></div>
	
	<script type="text/javascript">
		var startTime ;
	    function OnImageClick_handle(sender,arg)
	    {
	        var currentTime = new Date();	
			startTime = currentTime.getTime() ;
			document.getElementById( "events" ).innerHTML += "Start request to get image... " + "<br/>";
			document.getElementById( "events" ).scrollTop = 9999;
	    }	
		function OnOpen_handle(sender,arg)
	    {
			var currentTime = new Date();
			var afterTime = currentTime.getTime() - startTime;
			document.getElementById( "events" ).innerHTML += "Image was opened after " + afterTime + " ms<br/>";
			document.getElementById( "events" ).scrollTop = 9999;
	    }	
		function OnClose_handle(sender,arg)
	    {
			var currentTime = new Date();
			var afterTime = currentTime.getTime() - startTime;
			document.getElementById( "events" ).innerHTML += "Image was closed after " + afterTime + " ms<br/>";
			document.getElementById( "events" ).scrollTop = 9999;
	    }	
	    // Register for Client event : OnImageClick , OnOpen , OnClose
	    kiv.registerEvent("OnImageClick",OnImageClick_handle);
	    kiv.registerEvent( "OnOpen" ,  OnOpen_handle );
		kiv.registerEvent( "OnClose" ,  OnClose_handle );
	</script>
</form>
