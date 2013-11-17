<?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../../../../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
	
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	
?>
		<style type="text/css">
            div.dataXml{ position:static; padding :0;margin:0;}
			div .cl1, .cl2, .cl3, .cl4, .cl5 { float : left;  height :15px;}
			div.cl1{ color:blue; width: 125px;} div.cl2{ color:red; width: 55px;}
			div.cl3{ color:green; width: 95px;} div.cl4{ color:brown ;width: 55px;;}
			div.cl5{ width: 130px;}             div.color2 {  height:10px;background: #f4f4f4;}
			div.color1 { height:10px;}
			#wrapper{ width : 500px;height:170px;}
        </style>
	<?php echo $koolajax->Render();?>
		<div class="indent indent_right topspacing bottomspacing" id = "wrapper" >
          <div id="info" class="  " >
			<input type="button" id="btn1" onclick="loadXMLnow();" value="Load XML data" />
			<input type="button" id="btn2" onclick="reload();" value="Unload" disabled />
		  </div>
		  <div id="dataXml" >	
			Data will appear benath here :	  
          </div>
		</div>		
        <script type="text/javascript">
         	function loadXMLnow()
			{
				  var z = koolajax.load("Employees.xml");	
				  var xmlDoc = koolajax.parseXml(z);	
				  document.getElementById('dataXml').innerHTML = "";
				  x = xmlDoc.getElementsByTagName("employee");
				  var s = "<H3>Here is the result</H3><b><u><div class='cl1 '>Name</div><div class='cl2'>IDEm</div><div class='cl3'>Gender</div><div class='cl4'>Age</div><div class='cl5'>Dept.</div></u></b>";
				  for(i = 0; i < x.length; i++)
				  {
					s +=  "<div class='cl1'>"  + x[i].childNodes[0].nodeValue + "</div>";
					s += "<div class='cl2'>"  + x[i].attributes.getNamedItem("id").nodeValue + "</div>";
					s += "<div class='cl3'> "  + x[i].attributes.getNamedItem("gender").nodeValue + "</div>";
					s += "<div class='cl4'> "  + x[i].attributes.getNamedItem("age").nodeValue + "</div>";
					s += "<div class='cl5'> "  + x[i].attributes.getNamedItem("dept").nodeValue + "</div></div>";
				  
				  }
				  document.getElementById('dataXml').innerHTML += s ;
				  document.getElementById('btn2').disabled = false;
				  document.getElementById('btn1').disabled = true;
			}
			
			function reload()
			{
				location.reload(true);
			}
        </script>
		<div style="clear:both"></div>