<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <link href="{$pubDir}/css/common.css" rel="stylesheet" type="text/css" />
        <link href="{$pubDir}/css/{$name}.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{$pubDir}/images/favicon.ico" type="image/ico" />

        
        
        <script type="text/javascript" src="{$pubDir}/script/jquery.js"></script> 
        <script type="text/javascript" src="{$pubDir}/script/{$name}.js"></script>
        <script type="text/javascript" src="{$pubDir}/script/common.js"></script>
        
        <title>{$title|default:'扬州大学党校网上测试平台'}</title>
    </head>
    <body>        
<?php

require_once('../../private/class/autoload.inc');

require $KoolControlsFolder . "/KoolAjax/koolajax.php";
$koolajax->scriptFolder = $KoolControlsFolder . "/KoolAjax";

require $KoolControlsFolder . "/KoolGrid/koolgrid.php";
$db_con = mysql_connect("localhost","root","123");

$ds = new MySQLDataSource($db_con); 
$ds->SelectCommand = "select customerNumber,customerName,phone,city from customers";

$grid = new KoolGrid("grid");
$grid->scriptFolder = $KoolControlsFolder . "/KoolGrid";
$grid->styleFolder = "default";
$grid->DataSource = $ds;
$grid->Width = "655px";

$grid->RowAlternative = true;

$grid->AjaxEnabled = true;
$grid->AutoGenerateColumns = true;

$grid->AllowSorting = true; //Enable sorting for all rows;

$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();

$grid->Process();

function other() {

    $dept = new department();
    $admindept = $dept->getAll();

    $man = new manager();
    $dept_managers = $man->getAllDept();

    while ($element = each($dept_managers)) {
        
    }
    $smt = new SMT('manager/AddAdmin', '..');

    $smt->render(array(
        'admindept' => $admindept,
        'admindept_sel' => key($admindept),
        'dept_managers' => $dept_managers
    ));
}

?>
    </body>
</html>