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
	$kts->styleFolder="black";
	
	$kts->addTab("root","details","Details","javascript:showPage(\"details_page\")",true);//Make node selection	
	$kts->addTab("root","education","Education","javascript:showPage(\"education_page\")");
	$kts->addTab("root","skills","Skills","javascript:showPage(\"skills_page\")");	
?>

<form id="form1" method="post">

	<style type="text/css">
		.container
		{
			width:739px;
			height:404px;
			background-image:url(Images/background.gif);
		}
		.container .tabs
		{
			position:relative;
			top:52px;
			left:150px;
		}
		.container .multipages
		{
			position:relative;
			top:90px;
			left:120px;
		}
		.multipages ul
		{
			padding-left:40px;
			list-style:none;
			list-style-position:outside;
			width:520px;
			color:white;
			border-bottom:1px solid #8D9396;
		}
		.multipages li
		{
			border-top:1px solid #8D9396;
			line-height:23px;
		}
		.multipages label
		{
			float:left;
			padding-left:16px;
			width:120px;
		}
		.multipages .pageEducation label
		{
			width:220px;
		}

		.multipages p
		{
			margin-left:40px;
			color:white;
		}
	</style>

	<div class="container">
		<div class="tabs">
			<?php echo $kts->Render();?>
		</div>
		<div class="multipages">
			<div id="details_page" class="pageDetails"  style="display:block;">
				<ul>
					<li>
						<label>Name:</label>
						 John Smith
					</li>
					<li>
						<label>Birthday:</label>
						  October 20th 1976
					</li>
					<li>
						<label>Marital Status:</label>
						  Single
					</li>
				</ul>
			</div>
			<div id="education_page" class="pageEducation" style="display:none;">
				<p>
					BSc (Hons) Computer Science MIT, Boston MA September 1994 - July 1998 
				</p>
				<p>Courses taken: </p>
				<ul>
					<li>
						<label>Computer Architecture:</label>
						  [A+]
					</li>
					<li>
						<label>Programming:</label>
						   [A]
					</li>
					<li>
						<label>Mathematics for Computing:</label>
						   [A]
					</li>
					<li>
						<label>Database Specification:</label>
						   [A]
					</li>
					<li>
						<label>Software Development:</label>
						   [B+]
					</li>
					<li>
						<label>OO Software Development Project:</label>
						   [B-]
					</li>
					<li>
						<label>Four Advanced OO Software Systems:</label>
						   [A*]
					</li>
					<li>
						<label>Systems and Simulation:</label>
						   [A-]
					</li>
					<li>
						<label>Computer Graphics:</label>
						   [B+]
					</li>				
				</ul>				
			</div>
			<div id="skills_page" class="pageSkills" style="display:none;">
				<ul>
					<li>
						<label>Programming:</label>
						  C#, JavaScript, C++, PHP
					</li>
					<li>
						<label>Web Technologies:</label>
						  HTML, CSS, DHTML
					</li>
					<li>
						<label>Databases:</label>
						   SQL Server 2005, MySQL, Access, Oracle
					</li>
					<li>
						<label>Operating Systems:</label>
						  Windows, Linux, DOS
					</li>					
				</ul>				
			</div>			
		</div>
	</div>
	<script type="text/javascript">
		function showPage(_pageid)
		{
			document.getElementById("details_page").style.display = "none";
			document.getElementById("education_page").style.display = "none";
			document.getElementById("skills_page").style.display = "none";

			document.getElementById(_pageid).style.display = "block";
		}		

	</script>
</form>
