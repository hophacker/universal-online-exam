<?php
$root = "../../../../../";
require_once "$root/class/autoload.inc";
?>
<!Doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>学员考试分配</title> 
        <script src="../../../../js/jquery-1.9.0.js" type='text/javascript'></script>
        <script src="index.js" type='text/javascript'></script>
        <script src="../../../../jquery-ui/js/jquery-ui-1.10.1.custom.js"></script>
        <link rel="stylesheet" href="../../../../css/common.css" />
        <link rel="stylesheet" href="../../../../jquery-ui/development-bundle/themes/sunny/jquery-ui.css" />
        <link rel="stylesheet" href="index.css" />

    </head>
    <body>
        <?php echo department::select(true); ?>
        <br/>
        <span class="header" style='margin:4px;padding:4px;height:25px;border:solid 1px #C6E1F2;'>
            <?php
            echo student::role();
            echo student::gradeSelect();
            ?>
            <input id="st_button" type="button" value="确认" onClick="select_students();" />
        </span><br/>


        <iframe id="assignFrame" width="100%" height="500px" frameborder="0" scrolling="no">
        </iframe>
    </body>
</html>
