<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTreeView/kooltreeview.php";
		
	$treeview = new KoolTreeView("treeview");
	$treeview->scriptFolder = $KoolControlsFolder."/KoolTreeView";
	$treeview->imageFolder="Images";
	$treeview->styleFolder="default";
	$treeview->showLines = true;
	
	//Create TreeView 1
	$root = $treeview->getRootNode();
	$root->text = "Personal Folders";
	$root->expand=true;
	$root->image="1PersonalFolders.gif";
	$treeview->Add("root","deleteditem","Deleted Items (6)",false,"2DeletedItems.gif");
	$treeview->Add("root","draft","Drafts",false,"3Drafts.gif");
	$treeview->Add("root","inbox","<b>Inbox (14)</b>",true,"4Inbox.gif");
	$treeview->Add("inbox","invoice","Invoices",false,"folder.gif");
	
	$treeview->Add("root","junkemail","Junk E-mail",false,"folder.gif");
	$treeview->Add("root","outbox","Outbox",false,"outbox.gif");
	$treeview->Add("root","sentitem","Sent Items",false,"sent.gif");
	$treeview->Add("root","searchfolder","Search Folder",true,"searchFolder.gif");
	$treeview->Add("searchfolder","followup","From Follow Up",false,"searchFolder.gif");
	$treeview->Add("searchfolder","largeemail","Large E-mail",false,"searchFolder.gif");
	$treeview->Add("searchfolder","unreademail","Unread E-mail",false,"searchFolder.gif");

	$treeview->multipleSelectEnable = true;

?>


<table style="width:400px;">
	<tr>
		<td style="border-right:solid 1px gray;padding-left:20px;">KoolTreeView</td>
		<td style="padding-left:20px;">Control Panel</td>
	</tr>
	<tr>
		<td valign="top" style="border-right:solid 1px gray;">
			<div style="padding:10px;padding-left:30px;width:170px;">
				<?php echo $treeview->Render();?>
			</div>			
		</td>
		<td valign="top">
			<div style="padding:10px;padding-left:30px;width:200px;">
				<div style="padding-bottom:10px;">
					<input type="button"  style="width:155px;" value="Toggle Selected Nodes" onclick="toggle_selected_nodes()"/>
				</div>
				<div style="padding-bottom:10px;">
					<input type="button" style="width:155px;"  value="Remove Selected Nodes"  onclick="remove_selected_nodes()"/>
				</div>
				<div style="padding-bottom:10px;">
					<input id="nodename" type="text" style="width:70px;"/>
					<input type="button" value="Add Node" onclick="add_node()" />
				</div>
				<div style="padding-bottom:10px;">
					<input type="button"  style="width:155px;" value="Unselect All Nodes" onclick="unselect_all_nodes()" />
				</div>
			</div>			
		</td>
	</tr>
</table>

<script type="text/javascript">
	var _count = 0;	
	function toggle_selected_nodes()
	{
		//Get list of selected nodes
		var _selected_ids = treeview.getSelectedIds();
		
		//List all the selected nodes and toggle the node
		for(var i=0;i<_selected_ids.length;i++)
		{
			var _tree_node = treeview.getNode(_selected_ids[i]);
			if (_tree_node.isExpanded())
			{
				_tree_node.collapse();
			}
			else
			{
				_tree_node.expand();
			}
		}
		
	}
	function remove_selected_nodes()
	{
		//Get list of selected nodes
		var _selected_ids = treeview.getSelectedIds();
		
		//Remove all selected node
		for(var i=0;i<_selected_ids.length;i++)
		{
			treeview.removeNode(_selected_ids[i]);
		}		
	}
	function add_node()
	{
		var _node_name  = document.getElementById("nodename").value;
		
		if (_node_name!="")
		{
			//Get list of selected nodes
			var _selected_ids = treeview.getSelectedIds();
			
			//If no node is selected, add to treeview.root
			if (_selected_ids.length==0)
			{
				_count++;
				treeview.getNode("treeview.root").addChildNode("newnode"+_count,_node_name,"Images/folder.gif");				
			}
			else
			{
				//If there are selected nodes, add new nodes to selected nodes
				for(var i=0;i<_selected_ids.length;i++)
				{
					_count++;
					treeview.getNode(_selected_ids[i]).addChildNode("newnode"+_count,_node_name,"Images/folder.gif");				
				}				
			}

		}		
	}
	function unselect_all_nodes()
	{
		//Unselect all
		treeview.unselectAll();
	}
</script>


