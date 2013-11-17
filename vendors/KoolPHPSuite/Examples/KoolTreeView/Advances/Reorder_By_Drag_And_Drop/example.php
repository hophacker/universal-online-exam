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
	$treeview->imageFolder=$KoolControlsFolder."/KoolTreeView/icons";
	$treeview->styleFolder = "default";
	
	$root = $treeview->getRootNode();
	$root->text = "Please order the node";
	$root->expand=true;
	$root->image="ada.gif";
	$treeview->selectEnable = false;
	$treeview->width="200px";
	$treeview->DragAndDropEnable=true;
	$treeview->showLines = true;
	
	$treeview->Add("root","node1","Node 1",false,"square_blueS.gif");
	$treeview->Add("root","node4","Node 4",false,"square_greenS.gif");
	$treeview->Add("root","node9","Node 9",false,"square_redS.gif");
	$treeview->Add("root","node8","Node 8",false,"square_redS.gif");
	$treeview->Add("root","node7","Node 7",false,"square_greenS.gif");
	$treeview->Add("root","node10","Node 10",false,"square_redS.gif");
	$treeview->Add("root","node3","Node 3",false,"square_blueS.gif");
	$treeview->Add("root","node2","Node 2",false,"square_blueS.gif");
	$treeview->Add("root","node6","Node 6",false,"square_greenS.gif");
	$treeview->Add("root","node5","Node 5",false,"square_greenS.gif");
?>

<form id="form1" method="post">
	
	<div style="padding:10px;">
		<?php echo $treeview->Render();?>
	</div>
	<script type="text/javascript">
		treeview.registerEvent("OnBeforeDrop",function(sender,arg){
			var parentid = treeview.getNode(arg.NodeId).getParentId();
			var childids = treeview.getNode(parentid).getChildIds();
			var posdrag=0;posdrop = 0;
			for(var i=0;i<childids.length;i++)
			{
				if (childids[i]==arg.NodeId)
				{
					posdrop = i;
				}
				if (childids[i]==arg.DragNodeId)
				{
					posdrag = i;
				}	
			}
			if (posdrag<posdrop)
			{
				//Drag from above node to below node
				treeview.getNode(arg.DragNodeId).moveToBelow(arg.NodeId);
			}
			else
			{
				//Drag from below node to node above
				treeview.getNode(arg.DragNodeId).moveToAbove(arg.NodeId);
			}

			return false;//Cancel default attaching node behavior
		});
	</script>	
</form>


