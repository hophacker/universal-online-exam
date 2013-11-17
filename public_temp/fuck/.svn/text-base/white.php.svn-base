
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        

        
        
        <script type="text/javascript" src="{$pubDir}/script/jquery.js"></script> 
        <script type="text/javascript" src="{$pubDir}/script/{$name}.js"></script>
        <script type="text/javascript" src="{$pubDir}/script/common.js"></script>
        
        <title>{$title|default:'扬州大学党校网上测试平台'}</title>

    </head>
    <body>

<?php
	//Step 1: Register KoolGrid component to your page
//        require_once ("../private/class/autoload.inc");
        
//        require_once "../../KoolPHPSuite/KoolControls/KoolGrid/koolgrid.php";
    $KoolControlsFolder = getenv("DOCUMENT_ROOT") . "/KoolPHPSuite/KoolControls";
    
        require_once $KoolControlsFolder."/KoolAjax/koolajax.php";

        require_once $KoolControlsFolder."/KoolGrid/koolgrid.php";
        require_once "../private/class/DB_Connect.php";
        
        $db_con = DB_Connect::mysql_db();
	
	
        
        $grid = new koolgrid("grid");
        $grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
        $koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	$ds = new MySQLDataSource($db_con);
//	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$ds->SelectCommand = "select s_name, s_class from student";
 
	$grid->styleFolder="default";
	$grid->DataSource = $ds;
	$grid->Width = "655px";
 
	$grid->AjaxEnabled = true;
	$grid->AutoGenerateColumns = true;
        
	
//	$grid->AllowFiltering = true;//Enable filtering for all rows;
	$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();
        $grid->MasterTable->Pager->ShowPageSize = false;		

	
	$grid->Process();
?>
 
<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<?php echo $grid->Render();?>
</form>
    </body>
</html>
