<?php 
	$html = "<li class='first'>&nbsp;</li>";
	$xml = simplexml_load_file($xmlControls);
	$total = count($xml->control);
	if(!isset($nav)) $nav = null;
	for($i = 0; $i < $total; $i++) {
		$html .= "<li>";
		$html .= "<a href='".$controlsURL."/".$xml->control[$i]["link"]."'><span class='inner'>";
		
		$html .= "<img src='".$imgURL."/none.gif' class='small_logo absbottom ".$xml->control[$i]["name"]."' alt='".$xml->control[$i]["name"]."' /> ";
		$html .= "<span>".$xml->control[$i]["name"]."</span>";
		if($xml->control[$i]["new"]=="true")
			$html .= " <span class='new'>new</span>";
		
		$html .= "</span></a>";		
		$html .= "</li>";
		
		
		
		if(trim($xml->control[$i]["name"]) == trim($nav)){
			$control["version"]				= $xml->control[$i]["version"];
			$control["releasedate"] 		= $xml->control[$i]["releasedate"];
			$control["shortname"] = trim($xml->control[$i]["name"]);
			if ($control["shortname"]=="KoolPHPSuite")
			{
				$control["version_type"] = "Version";
			}
			else
			{
				$xmlControlInfo = $rootFolder."/KoolControls/".$control["shortname"]."/info.xml";
				$xmlinfo = simplexml_load_file($xmlControlInfo);
				$control["version_type"] = ($xmlinfo["fullversion"]=="true")?"FullVersion":"TrialVersion";
			}
		}
	}
	
?>
<ul>
    <?php echo $html?>
</ul>
<div style="height:70px;"></div>
