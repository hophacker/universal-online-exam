<?php
	$KoolControlsFolder = "../../../../KoolControls";
	require $KoolControlsFolder."/KoolTreeView/kooltreeview.php";
	$treeview = new KoolTreeView("treeview");
	$treeview->scriptFolder = $KoolControlsFolder."/KoolTreeView";
	$treeview->imageFolder=$KoolControlsFolder."/KoolTreeView/icons";
	$treeview->styleFolder="default";
		
	$i = time();
	$treeview->Add("root","hardware".$i,"Hardware",false,"xpNetwork.gif","");
	$treeview->Add("hardware".$i,"laptop".$i,"HP dv2500 Laptop",false,"square_blueS.gif","");	
	$treeview->Add("hardware".$i,"desktop".$i,"Lenovo desktop",false,"square_greenS.gif","");
	$treeview->Add("hardware".$i,"lcd".$i,"Asus 19\" LCD",false,"square_redS.gif","");
	
	$treeview->Add("root","software".$i,"Software",false,"ie.gif","");
	$treeview->Add("software".$i,"os".$i,"Operating System",false,"bfly.gif","");
	$treeview->Add("os".$i,"linux".$i,"Ubuntu 8.10",false,"ball_redS.gif","");
	$treeview->Add("os".$i,"windows".$i,"Vista Home Edition",false,"ball_blueS.gif","");
	$treeview->Add("software".$i,"office".$i,"Office",false,"doc.gif","");
	$treeview->Add("office".$i,"msoffice".$i,"Microsoft Office 2007",false,"square_redS.gif","");
	$treeview->Add("office".$i,"ooffice".$i,"Open Office 2.4",false,"square_greenS.gif","");
	$treeview->Add("software".$i,"burning".$i,"Burn CD/DVD",false,"xpShared.gif","");
	$treeview->Add("burning".$i,"nero".$i,"Nero 8",false,"triangle_yellowS.gif","");
	$treeview->Add("burning".$i,"k3b".$i,"K3B <i>(on Ubuntu)</i>",false,"triangle_blueS.gif","");
	$treeview->Add("software".$i,"imageeditor".$i,"Image editors",false,"goblet_bronzeS.gif","");
	$treeview->Add("imageeditor".$i,"photoshop".$i,"Photoshop 10",false,"ball_glass_blueS.gif","");
	$treeview->Add("imageeditor".$i,"gimp".$i,"GIMP 2.3.4",false,"ball_glass_greenS.gif","");
	
	$treeview->Add("root","dynload".$i,"Load the same tree using dynamic loading",false,"tree.gif","subnode.php");
	
	$treeview->Add("root","book".$i,"Books",false,"book.gif","");
	$treeview->Add("book".$i,"ajax".$i,"Ajax For Dummies",false,"BookY.gif","");
	$treeview->Add("book".$i,"csharp".$i,"Mastering C#",false,"BookY.gif","");
	$treeview->Add("book".$i,"flash".$i,"Flash 8 Bible",false,"BookY.gif","");
	
	sleep(1);//Slow down response	
	$treeview->isSubTree = true;
	$treeview->width="250px";
	echo $treeview->Render();
?>