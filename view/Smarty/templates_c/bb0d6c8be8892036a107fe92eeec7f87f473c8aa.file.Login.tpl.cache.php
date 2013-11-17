<?php /* Smarty version Smarty-3.1.12, created on 2013-01-26 12:24:22
         compiled from "/home/ark/NetBeansProjects/yangda/view/Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151398760751035a766c9311-19022057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb0d6c8be8892036a107fe92eeec7f87f473c8aa' => 
    array (
      0 => '/home/ark/NetBeansProjects/yangda/view/Login.tpl',
      1 => 1359173265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151398760751035a766c9311-19022057',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51035a76715f99_90154565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51035a76715f99_90154565')) {function content_51035a76715f99_90154565($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        
        <style type="text/css">
            <!--
            .STYLE2 {font-family: Geneva, Arial, Helvetica, sans-serif}
            -->
        </style> 

    </head>
    <body onkeydown="enterKey();">
        <div id="outer">
            <div id="header">
                <img src="images/logo.jpg" />
            </div>
            <center>
                <div id="main">
                    <div>
                        <form name="form1" action="Login.jsp" id="form1" method="post">
                            <marquee scrollamount="=8" style="width:300">
                                <h2> <a>欢迎来到扬州大学党校测试平台</a> </h2>
                            </marquee>
                            <br />
                            <br />

                            <div id="loga"> &nbsp; </div>
                            <div id="logb"> &nbsp; </div> 
                            <div id="name">
                                <span>&nbsp;帐&nbsp;号:</span>
                                <input type="text" id="uname" name="uname" value="" />
                            </div>
                            <div id="pwd">
                                <span>&nbsp;密&nbsp;码:</span>
                                <input type="password" id="upwd" name="upwd" value=""   />
                            </div>
                            <br /> <br />
                            <div id="chos">
                                <input type="radio" name="logtype" value="1" checked="checked" />
                                <font size="+1"><span>学员</span> </font>
                                <input type="radio" name="logtype" value="2" />
                                <span class="STYLE2"><font size="+1">院管理员 </font></span>
                                <input type="radio" name="logtype" value="3" />
                                <font size="+1"><span>校管理员</span> </font>
                            </div>
                            <div>
                                <span id="conf"> <img name=bt id=bt src='images/bt_off.gif' id='bt'>&nbsp;</img> </span>
                                <span id="reg"><a href="StuReg.php">注册</a> </span>                                
                            </div>
                        </form>
                    </div>
                    <div id="logerr">fengjie</div>
                </div>
            </center>
        </div>
    </body>
</html>
<?php }} ?>