<?php 
ob_start();
session_start();
	$rootURL		= "../?";
	$xmlControls 	= "../controls.xml";
	$controlsURL = "..";
	$cssURL 		= "../Resources/css";
	$imgURL 		= "../Resources/images";
	$resourcesURL 	= "../Resources";

$act = isset($_GET["act"])?$_GET["act"]:null;
$step = isset($_GET["step"])?$_GET["step"]:null;

if($step==1)
	$stepTitle = "Database configuration";
elseif($step==2)
	$stepTitle = "Test connection";
elseif($step==3)
	$stepTitle = "Create database";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo $cssURL?>/main.css" />
<!--[if IE 6]><link rel="stylesheet" href="<?php echo "$resourcesURL/ie6.css.php?imgURL=$imgURL";?>" /><![endif]-->

<title>KoolPHPSuite Demo - Installing Database</title>
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
        	<td class="content-L hack-ie">
                <div id="controls">
                    <?php require($resourcesURL."/controls.php");?>
                </div>
        	</td>
            <td class="content-R">
             <div id="main-content">
             	<table><tr><td class="tl"><img src="<?php echo $imgURL?>/none.gif" /></td><td class="tc"><div>&nbsp;</div></td><td class="tr"><img src="<?php echo $imgURL?>/none.gif" /></td></tr></table>
                <div id="middle">
                	<div id="main">
                    	<div class="component-title fix-float">Install Database</div>
                        <div class="example">
                        	<div class="title"><?php echo $stepTitle;?></div>
                            <div class="show-control-example">
                            	<?php require("install.php");?>
                            </div>
                        </div>
                	</div>
                </div>
                <table><tr><td class="bl"><img src="<?php echo $imgURL?>/none.gif" /></td><td class="tc"><div>&nbsp;</div></td><td class="br"><img src="<?php echo $imgURL?>/none.gif" /></td></tr></table>
             </div>
		<div class="break20px"></div>
		<div id="footer"><?php include($resourcesURL."/footer.php");?></div>
        </td>
    </tr></table>
    </div><!-- end Body -->
</div><!-- end Wrap all -->
</body>
</html>
<?php ob_end_flush();?>