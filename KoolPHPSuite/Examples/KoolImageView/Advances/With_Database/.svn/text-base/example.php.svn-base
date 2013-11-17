<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolImageView/koolimageview.php";


	$arr_kiv = array();
	$result = mysql_query("select ID,Small_Image,Big_Image,Description from tb_imageview");
	while($row=mysql_fetch_assoc($result))
	{
		$kiv = new KoolImageView("kiv".$row["ID"]);
		$kiv->scriptFolder =  $KoolControlsFolder."/KoolImageView";
		$kiv->styleFolder =  $KoolControlsFolder."/KoolImageView/styles/inox";
		$kiv->imageUrl = "Images/".$row["Small_Image"];
		$kiv->bigImageUrl = "Images/".$row["Big_Image"];
		$kiv->description = $row["Description"];
		array_push($arr_kiv,$kiv);
	}
	
?>
<form id="form1" method="post">
	<div style="width:400px;">
		<style type="text/css">
			.box
			{
				float:left;
				padding:5px;
				background:#DFF3FF;
				border:solid 1px #C6E1F2;
				min-height:80px;
				margin:5px;
			}
			.clear
			{
				clear:both;
			}			
		</style>
		<?php
			for($i=0;$i<sizeof($arr_kiv);$i++)
			{
				echo "<div class='box' title='".$arr_kiv[$i]->description."'>".$arr_kiv[$i]->Render()."</div>";
			}
		?>
		<div class="clear"></div>
	</div>
</form>
