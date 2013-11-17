<?php 
ob_start();
session_start();
	//Global var
	$rootFolder			= "../../../..";
	$KoolControlsFolder = "../../../../KoolControls";	
	$rootURL			= "../../../../index.php";
	$xmlControls 		= "../../../../controls.xml";
	$controlsURL 		= "../../../..";
	$cssURL 			= "../../../../Resources/css";
	$imgURL 			= "../../../../Resources/images";
	$resourcesURL 		= "../../../../Resources";
	$installURL 		= "../../../../Install";
	$xmlNav 			= "../../navigation.xml";
	$navURL				= "../..";
	$controlImgUrl		= "../../Images";
	
	$xmlExample 		= "example.xml";
	$example 			= array();
	
	
	
	$xmlOverview	= "../../overview.xml";
	
	//Check PHP version
	if(phpversion() < 5)
		header("Location: $resourcesURL/err.html");
		
	//load database infomation
	include($resourcesURL.'/config.php');

	//load Overview.xml
	$ex_html = "";
	$xml = simplexml_load_file($xmlOverview);
	$control["name"]				= $xml->name;


	echo $xml->version;

	//load Example.xml
	$xml = simplexml_load_file($xmlExample);
	$example["id"]					= $xml["id"];
	$example["usedb"]				= ($xml["usedb"]=="true")?true:false;
	$example["title"]				= $xml->title;
	$example["meta-description"] 	= $xml->metadescription;
	$example["meta-keywords"] 		= $xml->metakeywords;
	$example["description"] 		= $xml->description;
	
	$navid = $example["id"];//Use to mark the selected id for navigation

	
	$totalCode = count($xml->samplecodes->code);
	for($i = 0; $i < $totalCode; $i++) {
		$example["samplecodes"]["header"][$i] = trim($xml->samplecodes->code[$i]["header"]);
		$example["samplecodes"]["code"][$i] = trim($xml->samplecodes->code[$i]);
	}
	$example["samplecodes"]["total"] = $i;
	
	$docs_html = "";
	$totalDocs = count($xml->docs->doc);
	for($i = 0; $i < $totalDocs; $i++) {
		$docs_html .= "<li class='list-docs'>";
		$docs_html .= "&bull; <a href='".$xml->docs->doc[$i]["link"]."' target='_blank'>".$xml->docs->doc[$i]."</a>";
		$docs_html .= "</li>";
	}
	//load Code Highighter
	include($resourcesURL."/geshi.php");
	$id = isset($_GET['id']) ? $_GET['id'] : 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $example["meta-description"]?>" />
<meta name="keywords" content="<?php echo $example["meta-keywords"]?>" />
<meta name="author" content="KoolPHP.NET" />
<meta name="ResourceType" content="Demo" />
<meta name="classification" content="PHP, User Interface, PHP UI, Computer, Software, Internet, Web Design" />
<link rel="stylesheet" href="<?php echo $cssURL?>/main.css" />
<!--[if IE 6]><link rel="stylesheet" href="<?php echo "$resourcesURL/ie6.css.php?imgURL=$imgURL";?>" /><![endif]-->
<link rel="stylesheet" href="<?php echo $cssURL?>/tab-view.css" />
<link rel="stylesheet" href="<?php echo $cssURL?>/example.css" />

<title>{example_title}</title>

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
                    	<div class="component-title fix-float"><h1><span class="left"><img src="<?php echo $controlImgUrl; ?>/icon.png" class="absbottom" alt="<?php echo $control["name"];?>" /><?php echo $control["name"];?></span><span class="version right"><?php echo $control["version_type"]." ".$control["version"]." released on ".$control["releasedate"];?></span></h1></div>
                        	<div class="example">
                        	<div class="title"><h4><?php echo $example_category." - ".$example["title"]?></h4></div>
                            <div class="show-it show-example">
                            	<div style="font-size:0pt;height:1px;"></div>
								<?php
									if($example["usedb"])
									{
										if(!defined('INSTALLED'))
										{
											include($installURL."/install.php");
										}
										else
										{
											//Connect database here
											$db_con = mysql_connect($dbhost,$dbuser,$dbpass);
											if(mysql_select_db($dbname))
											{
												include("example.php");	
												mysql_close($db_con);
											}
											else
											{
												?>
													<div class="install-err">
													    <table style="width:500px;">
													    	<tr>
													    		<td><img src="<?php echo $imgURL?>/attention.png" class="absbottom" alt="" /></td>
													    		<td>Could not connect to database! <a href="<?php echo $installURL?>/index.php?step=1">Click here to re-install</a> </td>
													    	</tr>
														</table>
													</div>											
												<?php
											}
										}										
									}
									else
									{
										include("example.php");
									}
								?>
							</div>
                        </div>
                        <div class="detail">
                        	<div class="title"><h4>Description &amp; Sample code</h4></div>
                            <div class="show-it">
                                <div class="TabView" id="TabView">
                                    <!-- ***** Tabs ************************************************************ -->
                                    <div class="Tabs" style="width: 600px;">
                                        <a <?php echo ($id == 0) ? 'class="Current"' : 'href="?id=0"';?>>Description</a>
                                        <?php for($i=1; $i <= $example["samplecodes"]["total"]; $i++){
                                            if(!empty($example["samplecodes"]["code"][$i-1])){
                                        ?>
                                                <a <?php echo ($id == $i) ? 'class="Current"' : 'href="?id=$i"';?>>
                                                <?php echo $example["samplecodes"]["header"][$i-1]?>
                                                </a>
                                        <?php }}?>
                                      <a <?php echo ($id == 100) ? 'class="Current"' : 'href="?id=4"';?>>Documentation</a>
                                    </div>
                                    <!-- ***** Pages *********************************************************** -->
                                    <div class="Pages" style="width: 650px; height: 300px;">
	                                    <div class="Page" style="width: 650px;height: 300px;display: <?php echo ($id == 0) ? 'block' : 'none';?>">
	                                        <div class="Pad"><?php echo $example["description"]?></div>
	                                    </div>
	                                    <?php for($i=1; $i <= $example["samplecodes"]["total"]; $i++){
	                                    	if(!empty($example["samplecodes"]["code"][$i-1])){
										?>
	                                    <div class="Page" style="width: 650px;height: 300px;display: <?php echo ($id == 2) ? 'block' : 'none';?>">
	                                        <div class="Pad">
	                                        <?php 
	                                            $geshi = new GeSHi($example["samplecodes"]["code"][$i-1]);
	                                            echo $geshi->parse_code();
	                                        ?>
	                                        </div>
	                                    </div>
	                                    <?php }}?>
	                                    <div class="Page" style="width: 650px;height: 300px;display: <?php echo ($id == 4) ? 'block' : 'none';?>">
	                                        <div class="Pad"><ul><?php echo $docs_html?></ul></div>
	                                    </div>
                                	</div>
                                </div>
                                <script type="text/javascript" src="<?php echo $resourcesURL?>/js/tab-view.js"></script>
                                <script type="text/javascript">
                                tabview_initialize('TabView');
                                </script>
							</div>
                        </div>
                        <div class="clear-this"></div>
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
<?php 
$all_html = ob_get_contents();
ob_end_clean();
$example_title.= " - ".$example["title"];
$all_html = str_replace("{example_title}",$example_title,$all_html);
echo $all_html;
?>