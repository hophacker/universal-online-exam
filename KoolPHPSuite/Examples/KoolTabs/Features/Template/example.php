<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolTabs/kooltabs.php";

	$kts = new KoolTabs("kts");
	$kts->scriptFolder = $KoolControlsFolder."/KoolTabs";
	$kts->styleFolder = "vista";
	
	$html = "<img class='btnclose' onmouseover='m_over(this)' onmouseout='m_out(this)' onclick=\"remove('home')\" src='Images/closenormal.gif' />Home";
	$kts->addTab("root","home",$html,null,true,true,"120px");
	
	$html = "<img class='btnclose' onmouseover='m_over(this)' onmouseout='m_out(this)' onclick=\"remove('products')\" src='Images/closenormal.gif' />Products";
	$kts->addTab("root","products",$html,null,null,true,"120px");

	$html = "<img class='btnclose' onmouseover='m_over(this)' onmouseout='m_out(this)' onclick=\"remove('services')\" src='Images/closenormal.gif' />Services";
	$kts->addTab("root","services",$html,null,null,true,"120px");

	$html = "<img class='btnclose' onmouseover='m_over(this)' onmouseout='m_out(this)' onclick=\"remove('company')\" src='Images/closenormal.gif' />Company";
	$kts->addTab("root","company",$html,null,null,true,"120px");

	$html = "<img class='btnclose' onmouseover='m_over(this)' onmouseout='m_out(this)' onclick=\"remove('contactus')\" src='Images/closenormal.gif' />Contact Us";
	$kts->addTab("root","contactus",$html,null,null,true,"120px");	
?>

<form id="form1" method="post">
	<style type="text/css">
		.vistaKTS .ktsIn
		{
			text-align:left;
			margin-right:-7px;
		}
				
		.btnclose
		{
			width:11px;
			height:11px;
			position:relative;
			top:2px;
			float:right;
		}
	</style>

	<div style="padding:10px;">
		<?php echo $kts->Render();?>
	</div>

	<script type="text/javascript">
		var _remove_id = null;
		kts.registerEvent("OnBeforeSelect",function(sender,arg){
			if (arg.TabId == _remove_id)
			{
				return false;
			}
			return true;
		});
		
		function doRemove()
		{
			kts.removeTab(_remove_id);
		}
		
		function remove(_id)
		{
			_remove_id = _id;
			setTimeout("doRemove()",10);
		}
		function m_over(_this)
		{
			_this.src='Images/closeover.gif';
		}
		function m_out(_this)
		{
			_this.src='Images/closenormal.gif';
		}		
	</script>
</form>
