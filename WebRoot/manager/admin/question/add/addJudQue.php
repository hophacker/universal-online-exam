<?php
require_once '../../../../../class/autoload.inc';
//error_reporting(E_ALL);

$test_type = new test_type();
$test_type_panel = $test_type->getTestTypePanel();

if (isset($_POST["quetext"])) {
    $question = new question();
    $result = $question->addMulJud($_POST["quetext"], $_POST["deg"]);
} elseif (isset($_POST["sinque"])) {
    $question = new question();
    $result = $question->addOneJud($_POST["sinque"], $_POST["chos"], $_POST["deg"]);
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="../../../../js/jquery-1.9.0.js" type='text/javascript'></script>
        <script src="../../../../jquery-ui/js/jquery-ui-1.10.1.custom.js" type='text/javascript'></script>
        <script src="../../../../js/common.js" type='text/javascript'></script>
        <script src="index.js" type='text/javascript'></script>
        <link rel="stylesheet" href="../../../../jquery-ui/development-bundle/themes/sunny/jquery-ui.css" />
        <link rel="stylesheet" href="common.css" />
        <script language="javascript">
            <?php
            if (isset($result)){
                echo "
                    $(function(){
                        $('#dialog').html('$result').dialog('open');
                    });";
            }
            ?>
            function alert(error){
                $('#dialog').html(error).dialog('open');
            }
            function trim(str) {
                posL = 0;
                posR = str.length - 1;
                while (str.charAt(posL) == ' ' && posL <= posR)
                    posL++;
                while (str.charAt(posR) == ' ' && posL <= posR)
                    posR--;
                if (posL > posR)
                    return "";
                return str.substring(posL, posR + 1);
            }
            function checkOneJud() {
                if (trim(document.getElementById("sinque").value) == "")
                {
                    alert("上传题目不能为空!");
                    document.getElementById("sinque").focus();
                    return false;
                }
                if (trim(document.getElementById("chos").value) == "")
                {
                    alert("上传题目答案未选择!");
                    document.getElementById("chos").focus();
                    return false;
                }
                return true;
            }
            function checkJud() {
                text = document.getElementById("quetext").value;
                if (trim(text) == "" || text.indexOf("#Q", 0) == -1)
                {
                    alert("上传题目不能为空!");
                    document.getElementById("quetext").focus();
                    return false;
                }
                pos1 = 0;
                pos = text.indexOf("#Q", 0);
                while (pos != -1) {
                    pos1 = text.indexOf("#", pos + 2);
                    if (pos1 == -1) {
                        alert("格式错误: #Q与#标志不匹配!");
                        return false;
                    }
                    if (pos1 == pos + 2) {
                        alert("格式错误: #Q与 #之间没有题目!");
                        return false;
                    }
                    if (pos1 == text.length - 1) {
                        alert("格式错误: #后面没有答案!");
                    }
                    if (text.charAt(pos1 + 1) != 'Y' && text.charAt(pos1 + 1) != 'N') {
                        alert("格式错误: #后面答案错误,应为Y或N!");
                        return false;
                    }
                    pos = text.indexOf("#Q", pos + 1);
                }
            }
        </script>
        
    </head>
    <body>
        <div id="bod">
            <div id="bodin">
                <div id="header">
                </div>
                <div>
                    <div>
                        <br />
                        <fieldset>
                            <legend class="m"> 添加单个判断题 </legend>

                            <form action="addJudQue.php"
                                  onsubmit="return checkOneJud();" method="post">
<?= $test_type_panel ?>

                                <br/>
                                <div>
                                    <span>题目:</span>
                                </div>
                                <textarea name="sinque" class="texarea" rows="3" cols="80" id="sinque" value=""></textarea>
                                <br />
                                <div class="d">
                                    <input type="radio" name="chos" id="chos" value="Y" />
                                    <span class="h">对</span>
                                    <input type="radio" name="chos" id="chos" value="N" />
                                    <span class="h">错</span>
                                </div>
                                <br />
                                <div>
                                    <input type="submit" name="conf1" id="conf1" value="确认单个上传" />
                                </div>
                            </form>
                        </fieldset>
                    </div>
                    <div>
                        <br />
                        <hr />
                        <br />

                        <fieldset>
                            <legend class="m">批量添加</legend>
                            <form action="addJudQue.php"
                                  onsubmit="return checkJud();" method="post">
<?= $test_type_panel ?>
                                <br />
                                <span>上传文本:</span>
                                <br />
                                <div>

                                    <div>
                                        <textarea tabindex="1" accesskey="1" name="quetext" class="texarea"
                                                  rows="25" cols="80" id="quetext" title="" value=""></textarea>
                                    </div>
                                    <div>
                                        <input type="submit" name="conf2" id="conf2" value="确认批量上传" />
                                    </div>
                                </div>
                            </form>
                            </legend>
                    </div>
                </div>
            </div>
        </div>
        <div id="dialog" title="message"> </div>
    </body>
</html>
