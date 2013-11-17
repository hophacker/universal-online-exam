<?php
include_once '../../../../../class/autoload.inc';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$test_type = new test_type();
$links = $test_type->getPromotion();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>晋级规则</title>
        <script src="../../../../jquery-ui/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="index.js"></script>
        <script src="../../../../jquery-ui/js/jquery-ui-1.10.1.custom.js"></script>
        <link rel="stylesheet" href="../../../../jquery-ui/development-bundle/themes/sunny/jquery-ui.css" />
        <link rel="stylesheet" href="../../../../css/common.css" />
        <link rel="stylesheet" href="index.css" />
        <script>
            $(function() {
                $("#dialog").dialog({
                    autoOpen: false,
                    show: {
                        effect: "blind",
                        duration: 300
                    },
                    hide: {
                        effect: "explode",
                        duration: 300
                    }
                });
            });
        </script>
    </head>
    <body>
        <?php
        //$data = parent::query("select test_type_id, avg_score, test_times, grad_test_type_id
        foreach ($links as $link) {

            echo "
                <fieldset class='link'>
                <legend align=left>
                <label for=''>{$link['test_type_id_name']}</label>
                =>
                <label for=''> {$link['grad_test_type_id_name']} </label>
                </legend>

                <input type='hidden' id='test_type_id' value='{$link['test_type_id']}' />
                <input type='hidden' id='grad_test_type_id' value='{$link['grad_test_type_id']}' />

                <div>

                <div class='record'>
                    <label for='test_times1'>最少参加次数:</label>
                    <input type='text' id='test_times1' value='{$link['test_times1']}' />

                    <label for='highest1' class='highest'>最高分:</label>
                    <input type='text' id='highest1' value='{$link['highest1']}' />
                </div>

                <label for='' id='or'>或者</label>
                <div class='record'>
                    <label for='test_times2'>最少参加次数:</label>
                    <input type='text' id='test_times2' value='{$link['test_times2']}' />
                    <label for='highest2' class='highest'>最高分:</label>
                    <input type='text' id='highest2' value='{$link['highest2']}' />
                </div>

                </div>
                <input type='button' value='设置' />

                </fieldset>

                ";
        }
        ?>

        <div id="dialog" title="message"> </div>
    </body>
</html>
