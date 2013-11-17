<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../../../../../class/util.php";
$where_cla = "";
$dept_id = util::getInt('st_depart', -1);
$major_id = util::getInt('st_major', -1);
$class_id = util::getInt('st_class', -1);
if ($class_id != -1)
    $where_cla = " where class_id= $class_id";
else if ($major_id != -1)
    $where_cla = " where major_id= $major_id";
else if ($dept_id != -1)
    $where_cla = " where dept_id= $dept_id";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html> 
    <head> 
        <title>学生帐号查看</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <script src="../../../../js/jquery-1.9.0.js" type='text/javascript'></script>
        <script src="index.js" type='text/javascript'></script>
        <link rel="stylesheet" href="../../../../css/common.css" />
    </head> 
    <body> 
        <input id="hidden_depart" type="hidden" value="<?= $dept_id ?>"/>
        <input id="hidden_major" type="hidden" value="<?= $major_id ?>"/>
        <input id="hidden_class" type="hidden" value="<?= $class_id ?>"/>
        <form name="st_select" method='post' action='index.php' >
            <?php
            require_once "../../../../../class/department.php";
            echo department::select(true);
            ?>
            <input id='st_button' type='submit' value='确认' />
        </form>
        <div  id="studentGrid"></div>
        <div> 
            <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            ini_set('display_errors', 1);
            require_once "studentGrid.php";
            ?> 
        </div> 
    </body> 
</html> 
