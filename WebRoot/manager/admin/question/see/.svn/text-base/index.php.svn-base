<?php
require_once '../../../../../class/autoload.inc';
$test_type = new test_type();
$test_type_panel = $test_type->getTestTypePanel();
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="../../../../js/jquery-1.9.0.js" type='text/javascript'></script>
        <script src="../../../../jquery-ui/js/jquery-ui-1.10.1.custom.js" type='text/javascript'></script>
        <script src="../../../../js/common.js" type='text/javascript'></script>
        <script src="index.js" type='text/javascript'></script>
        <link rel="stylesheet" href="../../../../jquery-ui/development-bundle/themes/sunny/jquery-ui.css" />
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <div id="q_type_radio">
            <input type="radio" id="seeSel" name="radio" q_type="0" checked="checked" /><label for="seeSel">选择题</label>
            <input type="radio" id="seeJud" name="radio" q_type="1"/><label for="seeJud">判断题</label>
            <input type="radio" id="seeAns" name="radio" q_type="2"/><label for="seeAns">解答题</label>
        </div>
        <?=$test_type_panel?>
        <label>题目关键词:</label><input id="q_text"></input>
        <button id="look">查看</button>
        <div id="seePanel"/></div>    
        <script>
            $(function() {
                $("#q_type_radio").buttonset().css({'float': 'left'})
                        .find(".ui-button-text").css({"font-size": "1.2em",'padding': '.6em 1em'});
                $("#test_type_radio").buttonset().css({'vertical-align':'bottom'})
                        .find(".ui-button-text").css({'font-size': "0.8em"});

                $('button').button().css({'margin-left':'20px'})
                .find(".ui-button-text").css({'font-size': '0.8em'});
                $("#look").click(function() {
                    
                    $.post('seeQue.php', {
                        q_type: $('#q_type_radio input[type=radio]:checked').attr('q_type'),
                        test_type_id: $('#test_type_radio input[type=radio]:checked').attr('value'),
                        q_text: $('#q_text').val()
                    }).done(function(data) {
                        $('#seePanel').html(data);
                    });
                    
                });
            });
        </script>
        
    
</body>
</html>
