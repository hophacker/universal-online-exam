<?php
require_once '../../../../../class/autoload.inc';

$test_type = new test_type();
$test_type_panel = $test_type->getTestTypePanel();

if (isset($_POST["quetext"])) {
    $question = new question();
    $result = $question->addMulAns($_POST["quetext"], $_POST["deg"]);
} elseif (isset($_POST["sinque"])) {
    $question = new question();
    $result = $question->addOneAns($_POST["sinque"], $_POST["sinqueAns"], $_POST["deg"]);
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
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
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
            function checkOne() {
                if (trim(document.getElementById("sinque").value) == "")
                {
                    alert("上传题目不能为空!");
                    document.getElementById("sinque").focus();
                    return false;
                }
                if (trim(document.getElementById("sinqueAns").value) == "")
                {
                    alert("上传题目答案未选择!");
                    document.getElementById("sinqueAns").focus();
                    return false;
                }
                return true;
            }
            function checkMul() {
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
                    pos = text.indexOf("#Q", pos + 1);
                }
                return false;
            }
        </script>
        <div id="bod">
            <div id="bodin">
                <div id="header">
                </div>
                <div>
                    <div>
                        <br />
                        <fieldset>
                            <legend class="m"> 添加单个简答题 </legend>
                            <form action="addAnsQue.php" method="post"
                                  onsubmit="return checkOne();">
                                    <?=$test_type_panel?>
                                <br />
                                <span>题目:</span>
                                <br />
                                <textarea cols="80" name="sinque"  rows="3" id="sinque"></textarea>
                                <br />
                                <span>参考答案:</span>
                                <br />
                                <textarea cols="80" name="sinqueAns"  rows="5" id="sinqueAns"></textarea>
                                <br />
                                <input type="submit" id="conf1" value="确定单个上传" />
                            </form>
                        </fieldset>

                    </div>

                    <br />
                    <hr/>

                    <br />

                    <div>
                        <fieldset>
                            <legend class="m"> 批量添加简答题 </legend>
                            <form action="addAnsQue.php" method="post"
                                  onsubmit="return checkMul();">
                                    <?=$test_type_panel?>
                                <br />
                                <span>上传文本:</span>
                                <br />
                                <div>
                                    <div>
                                        <textarea tabindex="1" accesskey="1" name="quetext" cols="80"
                                                  rows="25" id="quetext" title=""></textarea>
                                    </div>
                                    <div>
                                        <input type="submit" id="conf2" value="确认批量上传" />
                                    </div>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <div id="dialog" title="message"> </div>
    </body>
</html>
