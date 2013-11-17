<?php 
//Resigter Global var	
	$rootURL		= "../?";
	$cssURL 		= "./css";
	$imgURL 		= "./images";
	$resourcesURL 	= ".";
	$xmlControls	= "../controls.xml";
	
	$option = "";
	$xml = simplexml_load_file($xmlControls);
	$total = count($xml->control);
	for($i = 0; $i < $total; $i++) {
		$option .= "<option ";
		$option .= "value='".$xml->control[$i]["name"]."'>";
		$option .= $xml->control[$i]["name"];
		$option .= "</option> \n";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo $cssURL?>/main.css" />
<title>KoolPHP Suite Demo</title>
<script language="javascript" type="text/javascript">
//Kiem tra xoa bo checkAll
function CheckNull() {
	var returnValue = true;
	var name 		= document.frm_send.name;
	var email 		= document.frm_send.email;
	var content 	= document.frm_send.content;
	
	var isname 		= document.getElementById("isname");
	var isemail 	= document.getElementById("isemail");
	var iscontent 	= document.getElementById("iscontent");
	
	isemail.style.display = "none";
	isname.style.display = "none";
	iscontent.style.display = "none";
	
	if( name.value == ""){
		isname.style.display = "inline";
		returnValue = false;
	}
	if( email.value == ""){
		isemail.style.display = "inline";
		returnValue = false;
	}
	if( content.value == ""){
		iscontent.style.display = "inline";
		returnValue = false;
	}
	return returnValue;
}//-->
</script>
</head>
<body>
<!-- Wrap all -->
<div id="wrap-all" class="fix-float">
	<div id="top-examples">
    	<div id="banner">
        	<div id="logo">
            	<?php include($resourcesURL."/header.php");?>
            </div>
        </div><!-- end banner -->
    </div><!-- end top-home -->
    <!-- Body -->
    <div id="body" class="fix-float">
    	<table class="hack-ie"><tr valign="top">
            <td class="content-C">
             <div id="main-content">
             	<table><tr><td class="tl"><img src="<?php echo $imgURL?>/content_top_left.png" /></td><td class="tc"><div>&nbsp;</div></td><td class="tr"><img src="<?php echo $imgURL?>/content_top_right.png" /></td></tr></table>
                <div id="middle">
                	<div id="main">
                    	<div class="component-title fix-float"><span class="left"><img src="./images/report.png" />Send Error Report</span><span class="text_em right"><a href="javascript:history.back()">Back to example</a></span></div>
                    	<?php if($_GET["act"] == "done"){?>
                        <div class="example">
                        	<div class="title">Done</div>
                            <div class="show-it">
                           	  	<span class="text_emX">Thank you !!! Error report sent.</span>
                            </div>
                        </div>
                        <?php }else{?>
                    	
                        <div class="example">
                        	<div class="show-control-example"></div>
                        	<div class="title">Infomation</div>
                            <div class="show-control-example">
                                  <div class="send-err-form">
                                    <form name="frm_send" action="#" method="post">
                                    <table border="0">
                                      <tr>
                                        <td width="100">Your name</td>
                                        <td width="500">
                                        	<input class="txt" type="text" name="name" id="name" />
                                        	<div id="isname" class="red" style="display:none">*</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            Your email
                                         </td>
                                        <td><input class="txt" type="text" name="email" id="email" />
                                        	<div id="isemail" class="red" style="display:none">*</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Control</td>
                                        <td><select name="control" id="control">
                                          <?php echo $option; ?>
                                        </select></td>
                                      </tr>
                                      <tr valign="top">
                                        <td>Content</td>
                                        <td><textarea class="txt left" name="content" id="content" cols="45" rows="5"></textarea>
                                        	<div id="iscontent" class="red" style="display:none">*</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                          <input class="btn" type="submit" name="submit" id="button" value="Send error" onClick="return CheckNull();" />
                                        </td>
                                      </tr>
                                    </table>
                                    <input name="scriptname" type="hidden" value="<?php echo $_SERVER["SCRIPT_NAME"];?>" />
                                    <input name="readpath" type="hidden" value="<?php echo realpath(".");?>" />
                                    <input name="demourl" type="hidden" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>" />
                                </form>
                                <div class="clearer"></div>
                          </div>
                        </div>
                	</div>
        			<?php }?>
                </div>
                <table><tr><td class="tl"><img src="<?php echo $imgURL?>/content_bottom_left.png" /></td><td class="tc"><div>&nbsp;</div></td><td class="tr"><img src="<?php echo $imgURL?>/content_bottom_right.png" /></td></tr></table>
             </div>
		<div class="break20px"></div>
		<div id="footer">Copyright 2008-2009 © KoolPHP. All right reserved</div>
        </td>
    </tr></table>
    </div><!-- end Body -->
</div><!-- end Wrap all -->
</body>
</html>
