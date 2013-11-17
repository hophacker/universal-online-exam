<?php 
//Resigter Global var	
	$rootFolder		= "../../";
	$rootURL		= "../../index.php";
	$xmlControls 	= "../../controls.xml";
	$controlsURL = "../..";
	$cssURL 		= "../../Resources/css";
	$imgURL 		= "../../Resources/images";
	$resourcesURL 	= "../../Resources";
	$xmlNav 		= "navigation.xml";
	$navURL			= ".";
	$xmlOverview	= "overview.xml";
	
	//Check PHP version
	if(phpversion() < 5)
		header("Location: $resourcesURL/err.html");

	$navid = "Overview"; //Set navigation id to "overview";
	
	//load Overview.xml
	$ex_html = "";
	$xml = simplexml_load_file($xmlOverview);
	$control["name"]				= $xml->name;
	$control["description"] 		= $xml->description;
	$control["meta-description"] 		= $xml->metadescription;
	$control["meta-keywords"] 		= $xml->metakeywords;
	
	
	$totalExp = count($xml->examples->example);
	for($i = 0; $i < $totalExp; $i++) {

		$x_name = trim($xml->examples->example[$i]["name"]);
		$_title = "";
		if(strlen($x_name) > 24){
			$_title = $x_name;
			$x_name = substr($x_name,0,24)."...";
		}
		$ex_html .= "<li>";
		$ex_html .= "<a href='".$xml->examples->example[$i]["link"]."' >";
		$ex_html .= "<span title='$_title'>$x_name</span>";
		$ex_html .= "<img src='".$xml->examples->example[$i]["image"]."' alt='".$xml->examples->example[$i]["name"]."' />";		
		$ex_html .= "</a>";
		$ex_html .= "</li>";
	}
	
	$navxml = simplexml_load_file($xmlNav);
	$title = $navxml["title"]
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $control["meta-description"]?>" />
<meta name="keywords" content="<?php echo $control["meta-keywords"]?>" />
<meta name="author" content="KoolPHP.NET" />
<meta name="ResourceType" content="Demo" />
<meta content="PHP, User Interface, PHP UI, Computer, Software, Internet, Web Design," name="classification" /> 
<link rel="stylesheet" href="<?php echo $cssURL?>/main.css" />
<!--[if IE 6]><link rel="stylesheet" href="<?php echo "$resourcesURL/ie6.css.php?imgURL=$imgURL";?>" /><![endif]-->
<title><?php echo $title;?> - Overview</title>
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
    	<div class="ie6hack">
    	<table class="hack-ie"><tr valign="top">
        	<td class="content-L hack-ie">
            	<div id="nav">
                	<?php include($resourcesURL."/nav.php");?>
                </div>
                <div class="break10px"></div>
                <div id="controls">
                    <?php include($resourcesURL."/controls.php");?>
                </div>
        	</td>
            <td class="content-R">
             <div id="main-content">
             	<table class="maintop"><tr><td class="tl"><img src="<?php echo $imgURL?>/none.gif" alt="" /></td><td class="tc"><div>&nbsp;</div></td><td class="tr"><img src="<?php echo $imgURL?>/none.gif" alt="" /></td></tr></table>
				<div id="middle">
                	<div id="main">
                    	<div class="component-title fix-float"><h1><span class="left"><img src="./Images/icon.png" class="absbottom" alt="<?php echo $control["name"];?>" /><?php echo $control["name"];?></span><span class="version right"><?php echo $control["version_type"]." ".$control["version"]." released on ".$control["releasedate"];?></span></h1></div>
						<div class="example">
                        	<div class="show-control-example"><?php echo $control["description"];?></div>
                        	<div class="title"><h4>Highlighted Examples</h4></div>
							<div class="show-control-example">
                            	<ul class="highlight-exp">
                                <?php echo $ex_html;?>
                                </ul>
                                <div class="clearer"></div>								
                            </div>
                        </div>
					</div>
                </div>
                
				<table class="mainbottom"><tr><td class="bl"><img src="<?php echo $imgURL?>/none.gif" alt="" /></td><td class="tc"><div>&nbsp;</div></td><td class="br"><img src="<?php echo $imgURL?>/none.gif" alt="" /></td></tr></table>
             </div>
		<div class="break20px"></div>
		<div id="footer"><?php include($resourcesURL."/footer.php");?></div>
        </td>
    </tr></table>
	</div>
    </div><!-- end Body -->
</div><!-- end Wrap all -->
</body>
</html>
