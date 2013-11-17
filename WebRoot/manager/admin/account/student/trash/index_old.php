<?php
$root = "../../../../../";
$jqRoot = "$root/jqSuitePHP";
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html> 
    <head> 
        <title>学生帐号查看</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <link rel="stylesheet" type="text/css" media="screen" href="../../../../../jqSuitePHP/themes/redmond/jquery-ui-custom.css" />
        <script src="../../../../../jqSuitePHP/js/jquery.js" type="text/javascript"></script>
        <script src="index.js" type='text/javascript'></script>
        <link rel="stylesheet" href="../../../../css/common.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../../../../../jqSuitePHP/themes/ui.jqgrid.css" /> 
        <link rel="stylesheet" type="text/css" media="screen" href="../../../../../jqSuitePHP/themes/ui.multiselect.css" />

        <style type="text"> 
            html, body { 
                margin: 0;            /* Remove body margin/padding */ 
                padding: 0; 
                overflow: hidden;    /* Remove scroll bars on browser window */ 
                font-size: 75%; 
            } 
        </style> 
         
        <script src="../../../../../jqSuitePHP/js/i18n/grid.locale-en.js" type="text/javascript"></script> 
        <script type="text/javascript"> 
            $.jgrid.no_legacy_api = true; 
            $.jgrid.useJSON = true; 
        </script> 
        <script src="../../../../../jqSuitePHP/js/jquery.jqGrid.min.js" type="text/javascript"></script> 
        <script src="../../../../../jqSuitePHP/js/jquery-ui-custom.min.js" type="text/javascript"></script> 

    </head> 
    <body> 
        
        <span>
            <?php
            include "$root/class/autoload.inc";
            echo department::select(true);
            ?>
            <input id="st_button" type="button" value="确认" />
        </span>
        <div  id="studentGrid"></div>
        <div> 
            <?php include "studentGrid.php"; ?> 
        </div> 
        <div id="user_tutorial">
            <div class="tutorial"></div>
            <div class="tutorial"></div>
            <div class="tutorial"></div>
            <div class="tutorial"></div>
            <div class="tutorial"></div>
            <div class="tutorial"></div>
        </div>
    </body> 
</html> 
