<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
    require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	if ($koolajax->isCallback)
	{
		//If it is callback request, Slow down processing to see loading effect
		// The normal is 1s, but this was increased into 3s for better look
		sleep(3);
	}
	
	function content($img,$bgcolor,$opacity,$numb,$color)
	{	
			
		$content =  "<h4 style='color:$color'>This style is : </h4>"
					."<div>Image = <i>$img</i></div>"
					."<div>BackColor = <i>$bgcolor</i></div>"
					."<div>Opacity = <i>$opacity%</i></div>"
					."<div align='center' >"
					."<input type='button' id='btn$numb' value='View the effect' /></div>";
		return $content;
	}
	
	// UpdatePannel declare
	$StyleUpdate1 = new UpdatePanel( "StyleUpdate1" );
	$StyleUpdate2 = new UpdatePanel( "StyleUpdate2" );
	$StyleUpdate3 = new UpdatePanel( "StyleUpdate3" );
	$StyleUpdate4 = new UpdatePanel( "StyleUpdate4" );	
	// each panel has its own style to describe in its content .				
	$StyleUpdate1->content = content( "picture #1" , "white"   , 50 , 1 , "green"  );
	$StyleUpdate2->content = content( "picture #4" , "#f4f4f4" , 70 , 2 , "orange" );
	$StyleUpdate3->content = content( "picture #3" , "#f4f599" , 55 , 3 , "blue"   );
	$StyleUpdate4->content = content( "picture #9" , "(blank)" , 25 , 4 , "brown"  );	
	// Add the event update for the button  to 4 updatepanel
	$StyleUpdate1->addTrigger( "btn1" , 'onclick' );
	$StyleUpdate2->addTrigger( "btn2" , 'onclick' );
	$StyleUpdate3->addTrigger( "btn3" , 'onclick' );	
	$StyleUpdate4->addTrigger( "btn4" , 'onclick' );
	// 4 UpdatePanel have the same css style
	$StyleUpdate1->cssclass = $StyleUpdate2->cssclass = $StyleUpdate3->cssclass = $StyleUpdate4->cssclass = "cssStyle";	
	// each loading 
	$StyleUpdate1->setLoading("$KoolControlsFolder/KoolAjax/loading/1.gif" , "white"   , 50 );	
	$StyleUpdate2->setLoading("$KoolControlsFolder/KoolAjax/loading/4.gif" , "#f4f4f4" , 70 );	
	$StyleUpdate3->setLoading("$KoolControlsFolder/KoolAjax/loading/3.gif" , "#fff4f5" , 55 );
	$StyleUpdate4->setLoading("$KoolControlsFolder/KoolAjax/loading/9.gif" , ""        , 75 );
?>
	<?php echo $koolajax->Render();?>
		<style>
			.cssStyle
			{
				border:solid 1px gray;
				width:190px;
				float:left;
				height:150px;
				padding : 10px;
				margin : 10px;				
			}
		</style>		
	<div style="width:650px;">			
			<?php					
				echo $StyleUpdate1->Render();
				echo $StyleUpdate2->Render();
				echo $StyleUpdate3->Render();
				echo $StyleUpdate4->Render();
			?>	
	</div>		
	<div style="clear:both"></div>
