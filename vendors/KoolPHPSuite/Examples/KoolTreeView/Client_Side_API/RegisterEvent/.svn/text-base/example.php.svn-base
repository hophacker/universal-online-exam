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
	$treeview->styleFolder="default";
	$treeview->multipleSelectEnable = true;
	
	$root = $treeview->getRootNode();
	$root->text = "My Properties";
	$root->expand=true;
	$root->image="woman2S.gif";	
	
	$treeview->Add("root","hardware","Hardware ",false,"xpNetwork.gif","");		
	$treeview->Add("hardware","laptop","HP dv2500 Laptop ",false,"square_blueS.gif","");			
	$treeview->Add("hardware","desktop","Lenovo desktop ",false,"square_greenS.gif","");		
	$treeview->Add("hardware","lcd","Asus 19\" LCD ",false,"square_redS.gif","");		
	
	$treeview->Add("root","software","Software",false,"ie.gif","");		
	$treeview->Add("software","os","Operating System",false,"bfly.gif","");		
	$treeview->Add("software","office","Office",false,"doc.gif","");	
		
		
	$treeview->Add("root","book","Books",false,"book.gif","");		
	$treeview->Add("book","ajax","Ajax For Dummies",false,"BookY.gif","");		
	$treeview->Add("book","csharp","Mastering C#",false,"BookY.gif","");		
	$treeview->Add("book","flash","Flash 8 Bible",false,"BookY.gif","");	
	
?>

<form id="form1" method="post">
	
	<style type="text/css">
		.box
		{
			float:left;
			width:280px;
			height:180px;
			margin:10px;
			padding:10px;
		}
		.focus
		{
			background:#DFF3FF;
			border:solid 1px #C6E1F2;			
		}
		.clear
		{
			clear:both;
		}
		#eventlog
		{
			overflow:auto;
			overflow-x:hidden;
			height : 150px;
			width : 280px;
		}	
	</style>
	
	
	<div class="box">
		<?php echo $treeview->Render();?>
	</div>
	<div class="box focus">
		<b>Client-side events:  </b><hr/>
		<div id="eventlog"></div>	
	</div>
	<div class="clear"></div>
	
	<script type="text/javascript">
		
	    function nodeSelect_handle(sender,arg)
		{			
			writelog("- Node <b>" + arg.NodeId + "</b> was <b>Selected</b>");
		}	
		function nodeUnSelect_handle(sender,arg)
		{			
			writelog("- Node <b>" + arg.NodeId + "</b> was <b>UnSelected</b>") ;    
		}	
		function nodeExpand_handle(sender,arg)
		{			
			writelog("- Node <b>" + arg.NodeId + "</b> was <b>Expanded</b>") ;         
		}
		function nodeCollapse_handle(sender,arg)
		{			
			writelog("- Node <b>" + arg.NodeId + "</b> was <b>Collapsed</b>");      
		}
		//Register event handle for treeview
		treeview.registerEvent("OnSelect",nodeSelect_handle);	
		treeview.registerEvent("OnUnselect",nodeUnSelect_handle);
		treeview.registerEvent("OnExpand",nodeExpand_handle);
		treeview.registerEvent("OnCollapse",nodeCollapse_handle);
		function writelog(_text)
		{
			var _eventlog = document.getElementById("eventlog");
			_eventlog.innerHTML +="<div style='white-space:nowrap;'>"+_text+"</div>";
			_eventlog.scrollTop = 9999;
		}			
	</script>
	
</form>



