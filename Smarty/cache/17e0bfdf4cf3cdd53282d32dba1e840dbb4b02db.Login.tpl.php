<?php /*%%SmartyHeaderCode:16715101441372d5b3-26913166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e0bfdf4cf3cdd53282d32dba1e840dbb4b02db' => 
    array (
      0 => 'I:\\fedchenlin\\yangda\\view\\Login.tpl',
      1 => 1358688357,
      2 => 'file',
    ),
    'b59a0469aaa37fc6e79198cc54a49b4f47adb8a6' => 
    array (
      0 => 'I:\\fedchenlin\\yangda\\view\\head.tpl',
      1 => 1359033369,
      2 => 'file',
    ),
    '75bf1ba495760bebde31c96b01bc93a6876ba2f8' => 
    array (
      0 => 'I:\\fedchenlin\\yangda\\view\\CONFIGS',
      1 => 1358598100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16715101441372d5b3-26913166',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510144139737c8_80197007',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510144139737c8_80197007')) {function content_510144139737c8_80197007($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <link href="css/common.css" rel="stylesheet" type="text/css" />
        <link href="css/Login.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />

        <script type="text/javascript" src="script/jquery-1.9.0.js"></script>
        <script type="text/javascript" src="script/Login.js"></script>
        <script type="text/javascript" src="script/common.js"></script>
        
        <title>扬州大学党校网上测试平台</title>
        
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
                                <h2>
                                    <a>欢迎来到扬州大学党校测试平台</a>
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
                                <font size="+1"><span>学员</span> </font>
                                <input type="radio" name="logtype" value="2" />
                                <span class="STYLE2"><font size="+1">院管理员 </font></span>
                                <input type="radio" name="logtype" value="3" />
                                <font size="+1"><span>校管理员</span> </font>

                            </div>
                            <div>
                                <span id="conf"> <img name=bt src=images/bt_off.gif id=bt>&nbsp;</img> </span>

                                <span id="reg"><a href="StuReg.jsp">注册</a> </span>
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
    </body>
</html>
<?php }} ?>