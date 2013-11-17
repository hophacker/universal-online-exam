<!DOCTYPE html>
<html xmlns=http://www.w3.org/1999/xhtml>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
			Universal Online Exam
        </title>
        <?php
        //echo $this->Html->meta('icon');
        //echo $this->fetch('meta');
        echo $this->Html->css('jquery-ui-themes/sunny/jquery-ui');
        echo $this->Html->script('jquery-1.7.2.min');
        echo $this->Html->script('common');
        echo $this->Html->script('jquery-ui-1.10.1.custom');
        //AjaxForm Plugin
        echo $this->Html->script('jquery.form.js');
        //mask层
        echo $this->Html->script('plugin/jquery.loadmask.min.js');
        echo $this->Html->css('plugin/loadmask/jquery.loadmask.css');
        //弹出层插件
        echo $this->Html->script('plugin/artDialog/artDialog.min.js');
        echo $this->Html->css('plugin/artDialog/skins/default.css');
        echo $this->Html->script('common.js');
        echo $this->Html->css('common');
        ?>
    </head>
    <body>
        <?php echo $this->Html->css('Login') ?>

        <style type="text/css">
            <!--
            .STYLE2 {font-family: Geneva, Arial, Helvetica, sans-serif}
            -->
        </style>
        </head>
        <div id="outer">
            <div id="header">
                <?php //echo $this->Html->image("https://www.google.com/images/srpr/logo11w.png"); ?>
            </div>
            <center>
                <div id="main">
                    <div>
                        <form name="form1" action="Login.jsp" id="form1" method="post">
                            <marquee scrollamount="=8" style="width:300">
                                <h2>
                                    <a>Welcome to Universal Online Exam</a>
                                </h2>
                            </marquee>
                            <br />
                            <br />

                            <div id="loga">
                                &nbsp;
                            </div>
                            <div id="logb">
                                &nbsp;
                            </div>
                            <div id="name">
                                <span>&nbsp;帐&nbsp;号:</span>
                                <input type="text" id="uname" name="uname" value="" />
                            </div>
                            <div id="pwd">
                                <span>&nbsp;密&nbsp;码:</span>
                                <input type="password" id="upwd" name="upwd" value=""   />
                            </div>
                            <br />
                            <br />
                            <div id="chos">
                                <input type="radio" name="logtype" value="1" checked="checked" />
                                <font size="+1"><span>Tester</span> </font>
                                <input type="radio" name="logtype" value="2" />
                                <span class="STYLE2"><font size="+1">Manager</font></span>
                                <input type="radio" name="logtype" value="3" />
                                <font size="+1"><span>Admin</span> </font>

                            </div>
                            <div>
                                <span id="conf"> 
                                    <?php echo $this->Html->image("Login/bt_off.gif", array('id' => 'bt')); ?>
                                </span>

                                <span id="reg">
                                    <?php echo $this->Html->link("注册", "../WebRoot/student/manage/account/register") ?>

                                    <!-- 
            <div id="conf"><input type="submit" value="提交"   onclick="Check();"/></div>
            <input type="button" id="reg" value="注册" onclick="window.open('StuReg.jsp');"></input>
                                    -->

                            </div>

                        </form>
                    </div>
                </div>
            </center>
        </div>

        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    async: false
                });
                $("#bt").hover(function() {
                    $(this).attr('src', '/img/Login/bt_on.gif');
                }, function() {
                    $(this).attr('src', '/img/Login/bt_off.gif');
                });

                $("#uname").focus(function() {
                    $("#logerr").empty();
                });

                $('#bt').click(function() {
                    $(this).attr('src', '/img/Login/bt_click.gif');

                    var logtype = $('#chos').find('input:checked').val();

                    if ($("#uname").val() == "") {
                        artWarning("帐号不能为空。如无帐号，请先注册。");
                        $("#uname").focus();
                        return false;
                    }
                    if ($("#upwd").val() == "") {
                        artWarning("密码不能为空。");
                        $("#upwd").focus();
                        return false;
                    } else {
                        $.post('../../Logins/LoginCheck', {
                            uname: $("#uname").val(),
                            upass: $('#upwd').val(),
                            logtype: logtype
                        },
                        function(data) {
                            if (data.ret == 0) {
                                switch (logtype) {
                                    case '1':
                                        window.location = "../menus/Student";
                                        break;
                                    case '2':
                                        window.location = "../menus/DepartmentManager";
                                        break;
                                    case '3':
                                        window.location = "../menus/SchoolManager";
                                        break;
                                }
                            } else
                                artWarning(data.mes);

                        }, 'json');
                    }
                });

            });
        </script>

    </body>
