<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolSlideMenu/koolslidemenu.php";
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	if ($koolajax->isCallback)	{		sleep(1);	}	
	
	include_once "functions.php" ;
	$ksm = new KoolSlideMenu("ksm");
	$ksm->scriptFolder =  $KoolControlsFolder."/KoolSlideMenu";	
	$ksm->styleFolder = $KoolControlsFolder."KoolSlideMenu/styles/darkgray";
	$ksm_expand = $ksm->addParent("root","step1","Step1 : Account information");	
	$ksm->addPanel( "step1", "Pstep1" , echoStep1() ) ;
	$ksm_expand->expand = true ;
	
	$ksm->addParent("root","step2","<span class='hid' id='wstep2' >Step2 : Newsletter options </span>");
	$ksm->addPanel( "step2", "Pstep2" , echoStep2() ) ;
	
	$ksm->addParent("root","step3","<span class='hid' id='wstep3' >Step3 : Terms of use </span>");
	$ksm->addPanel( "step3", "Pstep3" , echoStep3() ) ;
	
	$ksm->singleExpand = true;
	$ksm->width="500px";
	
	$regisForm = new UpdatePanel( "regisForm" ) ;
	$regisForm->setLoading("$KoolControlsFolder/koolajax/loading/1.gif" , "white"   , 50 );	
	$stepDone = ( isset( $_POST["task"] ) && $_POST[ "task" ] == "done" ) ? true : false  ;
	
	if( $stepDone ) {
		$return = '<div style="height:auto;width:500px;" id="registration-form">		
						<div id="my-tit" >Registration form</div><br/>
						<div >';						
		$return .= echoResult( $_POST[ "data" ]) ;
		$return .= '</div>';
	}else{		
		$return = '	<script type="text/javascript" src="functions.js"></script>
					<div style="height:auto;width:500px;" id="registration-form">		
						<div id="my-tit" >Registration form</div><br/>
						<div >'. $ksm->Render().
						'</div>						
						<input type="hidden" name="data" value="" />
						<input type="hidden" name="task" value="" />
						<script language="javascript">
							ksm.registerEvent("OnBeforeExpand",OnBeforeExpand_handle);
						</script>
					</div>';
	}
	
	$regisForm->cssclass = "cssRegisForm" ;
	$regisForm->content= $return ;
	
?>
<?php echo $koolajax->Render();?>
<?php echo $regisForm->Render();?>
<link rel="stylesheet" href="example.css" />
<script type="text/javascript" >
	var step1ok = "0000" ;
	var step2ok = false ;
	var step3ok = false ;
	function dostep1(){
		if ( step1ok == "1111" ){
			ksm.getItem( "step2" ).expand() ;
		}else{
			alert( "You must finish step 1 before continuousing with step 2" );
		}
	}
	function dostep2(){
		checkList = document.getElementsByName( "list" ) ;
		for (i = 0; i < checkList.length; i++){
			if (checkList[i].checked ) {
				step2ok = true ;
			} 
		}
		if ( step2ok ){
			ksm.getItem( "step3" ).expand() ;
		}else{
			alert( "You must check at least one option before continuousing with step 3" );
		}
	}
	function dostep3(){
		checkList = document.getElementsByName( "agree" ) ;		
		if (checkList[0].checked ) {
			step3ok = true ;
		} 		
		if ( step3ok ){
			checkList = document.getElementsByName( "list" ) ;
			finalList = new Array(); 
			for (i = 0; i < checkList.length; i++){
				if (checkList[i].checked ) {
					finalList[i] = " checked=\"checked\" " ;
				}else{
					finalList[i] = "" ;
				}
			}
			dataX = document.getElementById( "txtName" ).value + ".::." 
					+ document.getElementById( "txtMail" ).value + ".::." 
					+ finalList[0] + ".::." + finalList[1] + ".::." + finalList[2] ;
			regisForm.attachData( "data" , dataX );
			regisForm.attachData( "task" , "done" );
			regisForm.update() ;			
		}else{
			alert( "You must agree with our Terms & Conditions !" );
		}
	}
	function Back(){
		regisForm.attachData( "task" , "restart" );
		regisForm.update() ;		
		step1ok = "0000" ;
		step2ok = false ;
		step3ok = false ;					
	}
   
</script>