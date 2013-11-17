<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTreeView/kooltreeview.php";
	require $KoolControlsFolder."/KoolSlideMenu/koolslidemenu.php";
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$ksm = new KoolSlideMenu("ksm");
	$ksm->scriptFolder =  $KoolControlsFolder."/KoolSlideMenu";	
	$ksm->styleFolder = $KoolControlsFolder."KoolSlideMenu/styles/bluearrow";
	$ksm->singleExpand = true;
	$ksm->width="270px";
	$ksm->slidingSpeed = 6;
	$ksm->addParent("root","favoritesites","Favorite Websites");
	$ksm->addChild("favoritesites","google","Google.Com","#");
	$ksm->addChild("favoritesites","MySpace","MySpace.Com","#");
	$ksm->addChild("favoritesites","FaceBook","FaceBook.Com","#");
	
	$ksm->addParent("root","treeview","TreeView");
		$ktv = new KoolTreeView("ktv");
		$ktv->scriptFolder = $KoolControlsFolder."/KoolTreeView";
		$ktv->imageFolder="Images";
		$ktv->styleFolder="default";
		$ktv->showLines = true;
		//Create TreeView 1
		$root = $ktv->getRootNode();
		$root->text = "Personal Folders";
		$root->expand=true;
		$root->image="1PersonalFolders.gif";
		$ktv->Add("root","deleteditem","Deleted Items (6)",false,"2DeletedItems.gif");
		$ktv->Add("root","draft","Drafts",false,"3Drafts.gif");
		$ktv->Add("root","inbox","<b>Inbox (14)</b>",true,"4Inbox.gif");
		$ktv->Add("inbox","invoice","Invoices",false,"folder.gif");
		$ktv->Add("root","junkemail","Junk E-mail",false,"folder.gif");
		$ktv->Add("root","outbox","Outbox",false,"outbox.gif");
		$ktv->Add("root","sentitem","Sent Items",false,"sent.gif");
		$ktv->Add("root","searchfolder","Search Folder",true,"searchFolder.gif");
		$ktv->Add("searchfolder","followup","From Follow Up",false,"searchFolder.gif");
		$ktv->Add("searchfolder","largeemail","Large E-mail",false,"searchFolder.gif");
		$ktv->Add("searchfolder","unreademail","Unread E-mail",false,"searchFolder.gif");
		$ksm->addPanel("treeview","treeview_panel",$ktv->Render());

	
	$resolution = "640x480";
	$form_expand = false;
	if(isset($_POST["resolution"]))
	{
		$resolution = $_POST["resolution"];
		$form_expand=true;
	}
	$ksm->addParent("root","theform","Form",null,$form_expand);	
		$form = "<div style='padding:10px;'>";
		$form .= "<div style='padding-bottom:5px;'>Enter your preferred resolution:</div>";
		$form .= "<div style='padding-left:5px;'>";
		$form .= "<input id='640x480' name='resolution' type='radio' value='640x480' ".(($resolution=="640x480")?"checked":"")." /> <label for='640x480'>640 x 480</label> <br/>";
		$form .= "<input id='800x600' name='resolution' type='radio' value='800x600' ".(($resolution=="800x600")?"checked":"")." /> <label for='800x600'>800 x 600</label> <br/>";
		$form .= "<input id='1024x768' name='resolution' type='radio' value='1024x768' ".(($resolution=="1024x768")?"checked":"")." /> <label for='1024x768'>1024 x 768</label> <br/>";
		$form .= "</div>";
		$form .= "<div style='padding-top:5px;'><input type='submit' value='Submit' /></div>";
		$form .= "</div>";	
		$ksm->addPanel("theform","theform_panel",$form);


	$ksm->addParent("root","album","My Photo Album");
		$album = "<div style='height:150px;overflow:auto;'>";
		for($i=1;$i<13;$i++)
		{
			$album .= "<div style='float:left;width:80px;height:80px;'><img src='Images/$i.jpg' alt=''/></div>";		
		}
		$album.="<div style='clear:both'></div>";
		$album.="</div>";
		$ksm->addPanel("album","album_panel",$album);
	$ksm->addParent("root","flash","Flash");
		$flash = "<div style='height:162px;'>";
		$flash .= "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='260' height='160'>";
		$flash .= "<param name='movie' value='http://www.youtube.com/v/AxKzTowWxko&hl=en&fs=1' />";
		$flash .= "<param name='wmode' value='transparent' />";
		$flash .= "<object type='application/x-shockwave-flash' data='http://www.youtube.com/v/AxKzTowWxko&hl=en&fs=1'  width='260' height='160'>";
		$flash .= "<param name='wmode' value='transparent' />";
		$flash .= "<p>Flash inside KoolSlideMenu</p>";
		$flash .= "</object></object>";
		$flash .= "</div>";
		$ksm->addPanel("flash","flash_panel",$flash);
		
	$ksm->addParent("root","whatever","Whatever");	
		$anything = "<div>Put any html or javascript here.</div>";
		$anything .= "<div>Put any html or javascript here.</div>";
		$anything .= "<div>Put any html or javascript here.</div>";
		$ksm->addPanel("whatever","whatever_panel",$anything);
?>
<form id="form1" method="post">
	<?php echo $ksm->Render();?>
</form>
