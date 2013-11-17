<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolComboBox/koolcombobox.php";
	require $KoolControlsFolder."/KoolTreeView/kooltreeview.php";

	$kcb = new KoolComboBox("kcb");
	$kcb->scriptFolder = $KoolControlsFolder."/KoolComboBox";
	$kcb->styleFolder= "default";
	$kcb->width = "200px";
	$kcb->inputValidate = false;
	$kcb->addItem("<div id='content'></div>","");

	$treeview = new KoolTreeView("treeview");
	$treeview->scriptFolder = $KoolControlsFolder."/KoolTreeView";
	$treeview->imageFolder="Images";
	$treeview->styleFolder="default";
	$treeview->showLines = true;
	
	//Create TreeView
	$root = $treeview->getRootNode();
	$root->text = "Personal Folders";
	$root->expand=true;
	$root->showPlusMinus=false;
	$root->image="1PersonalFolders.gif";
	$treeview->Add("root","deleteditem","Deleted Items",false,"2DeletedItems.gif");
	$treeview->Add("root","draft","Drafts",false,"3Drafts.gif");
	$treeview->Add("root","inbox","Inbox",true,"4Inbox.gif");
	$treeview->Add("inbox","invoice","Invoices",false,"folder.gif");
	
	$treeview->Add("root","junkemail","Junk E-mail",false,"folder.gif");
	$treeview->Add("root","outbox","Outbox",false,"outbox.gif");
	$treeview->Add("root","sentitem","Sent Items",false,"sent.gif");
	$treeview->Add("root","searchfolder","Search Folder",true,"searchFolder.gif");
	$treeview->Add("searchfolder","followup","From Follow Up",false,"searchFolder.gif");
	$treeview->Add("searchfolder","largeemail","Large E-mail",false,"searchFolder.gif");
	$treeview->Add("searchfolder","unreademail","Unread E-mail",false,"searchFolder.gif");


	$selectedText = "";
	if(isset($_POST["kcb_selectedText"]))
	{
		$selectedText = $_POST["kcb_selectedText"];
	}	
	
?>


<form id="form1" method="post" name="form1">
	<style type="text/css">			
		.defaultKCB .kcbSelectFocus .kcbA .kcbIn
		{
			background:none;
			color:black;
		}
		#tree
		{
			display:none;
		}
		#content
		{
			padding-bottom:5px;
		}
		#content #tree
		{
			display:block;
		}
	</style>
	
	<table style="margin-left:10px;width:280px;">
		<tr>
			<td colspan="2">Select a folder:</td>
		</tr>					
		<tr>
			<td>
				<?php echo $kcb->Render();?>
				<div id="tree">
					<?php echo $treeview->Render();?>
				</div>
			</td>
			<td>
				<input type="submit" value="Select" />
			</td>
		</tr>
	</table>	
	<div style="margin-left:10px;padding-top:10px;width:350px;min-height:50px;">
		<?php
			if($selectedText!="")
			{
				echo "You selected folder: <b>$selectedText</b>";
			}
		?>
	</div>	
	
	<script language="javascript">
		//Move the tree to panel of combobox
		var _content_div = document.getElementById("content");
		var _tree_div = document.getElementById("tree");		
		_content_div.appendChild(_tree_div);
		
		var _item_select = false;
		kcb.registerEvent("OnBeforeSelect",function(sender,arg)
		{
			_item_select = true;
			return false;
		});
		kcb.registerEvent("OnBeforeClose",function(sender,arg)
		{
			if(_item_select)
			{
				_item_select = false;
				return false;
			}
			else
			{
				return true;	
			}
		});
		treeview.registerEvent("OnSelect",function(sender,arg){
			var _node = treeview.getNode(arg.NodeId);
			document.getElementById("kcb_selectedText").value = _node.getText();
		});	
	</script>	
</form>
