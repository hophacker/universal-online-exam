<?php
	//Register KoolSlideMenu component to your page
    require $resourcesURL."/ksmenu/ksmenu.php";

	$example_title = "";
	$example_category = "";

    //Create slidemenu object.
    $navSM = new KoolSuiteMenu("navSM");

    //Set properties for slidemenu
	$navSM->singleExpand = true;

    //load Nav.xml
	$xml = simplexml_load_file($xmlNav);
	
	$nav = $xml["id"];
	
	$_id = $xml->category->link["id"];
	$_text = $xml->category->link["text"];
	$_link = $navURL."/".$xml->category->link["link"];
	
	//Building SlideMenu
    $navSM->AddChild("root","$_id","$_text","$_link",false);//add Parent
	$navSM->selectedId = $_id;
	
	$totalCat = count($xml->category->category);
	for($i = 0; $i < $totalCat; $i++) {
		$id = $xml->category->category[$i]["id"];
		$text = $xml->category->category[$i]["text"];	
		$navSM->addParent("root","$id","$text");//add Parent
		//Get total child
		$totalLink = count($xml->category->category[$i]->link);
		if($totalLink > 0)
		{
			for($j = 0; $j < $totalLink; $j++) {
				$childId 	= $xml->category->category[$i]->link[$j]["id"];
				$childText 	= $xml->category->category[$i]->link[$j]["text"];
				$childLink 	= $navURL."/".$xml->category->category[$i]->link[$j]["link"];
				$childNew = ($xml->category->category[$i]->link[$j]["new"]=="true")?"<span class='new'>new</span>":"";
				
				
				$child = $navSM->AddChild("$id","$childId","$childText $childNew","$childLink");//add Child
				if(strtolower($navid) == strtolower($childId))
				{
					$child->parent->expand = true;	
					$navSM->selectedId = $childId;
					$example_title = $xml["title"]." - ".$child->parent->text;
					$example_category = $child->parent->text;
				}
			}
		}
	}
?>
<div class="control"><img src="<?php echo $imgURL;?>/none.gif" class="small_logo <?php echo $nav;?> absbottom" alt="<?php echo $nav?>" /> <?php echo $nav?></div>
<?php echo $navSM->Render();?>
