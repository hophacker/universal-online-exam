<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolForm/koolform.php";	
	$myform_manager = new KoolForm("myform");
	$myform_manager->scriptFolder = $KoolControlsFolder."/KoolForm";	
	$myform_manager->styleFolder = "office2010silver";
	$myform_manager->DecorationEnabled = true;
	



	$play_stop = new KoolToggleButton("play_stop");

	/*Below are the full API of AddOption method. 
	 * 
	 $play_stop->AddOption(array(	"Text"=>"Play",
									"Value"=>"Play",
									"LeftImage"=>"/path/to/leftimage.png")
									"RightImage"=>"/path/to/rightimage.png")
									"LeftImageCss"=>"leftimage_css")
									"RightImageCss"=>"rightimage_css")
									"ButtonCss"=>"button_css")
									"ToolTip"=>"This is the button")
								);

	 */


	$play_stop->AddOption(array("Text"=>"Play",
								"Value"=>"Play",
								"LeftImage"=> $KoolControlsFolder."/KoolForm/icons/plain/media_play_green.png",
								"ToolTip"=>"Play radio"));
								
	$play_stop->AddOption(array("Text"=>"Stop",
								"Value"=>"Stop",
								"LeftImage"=> $KoolControlsFolder."/KoolForm/icons/plain/media_stop_red.png",
								"ToolTip"=>"Stop radio"));
								
	$play_stop->Width = "60px";
	$play_stop->OnClick = "play_stop_click";
	$myform_manager->AddControl($play_stop);



	$rewind = new KoolButton("rewind");
	$rewind->Text = "RR";
	$rewind->LeftImage = $KoolControlsFolder."/KoolForm/icons/plain/media_rewind.png";
	$rewind->ToolTip = "Rewind";
	$myform_manager->AddControl($rewind);
	
	$fast_forward = new KoolButton("fast_forward");
	$fast_forward->Text = "FF";
	$fast_forward->RightImage = $KoolControlsFolder."/KoolForm/icons/plain/media_fast_forward.png";
	$fast_forward->ToolTip = "Fast foward";
	$myform_manager->AddControl($fast_forward);
	
	//Init form
	$myform_manager->Init();
?>

<form id="myform" method="post" class="decoration">
	
		<fieldset style="width:190px;padding-bottom:10px;padding-left:10px;">
			<legend>My radio</legend>
			<?php echo $rewind->Render();?>
			<?php echo $play_stop->Render();?>
			<?php echo $fast_forward->Render();?>			
		</fieldset>

		<script type="text/javascript">
			function play_stop_click(sender,args)
			{
				if(sender.get_selected_text()=="Stop")
				{
					document.getElementById("status").innerHTML = "Playing..";
				}
				else
				{
					document.getElementById("status").innerHTML = "Stop";
				}
			}
		</script>
		
		<div style="margin-top:10px;">
			<b>Radio status:</b>
			<span id="status">Stop</span>
		</div>

	<?php echo $myform_manager->Render();?>
</form>