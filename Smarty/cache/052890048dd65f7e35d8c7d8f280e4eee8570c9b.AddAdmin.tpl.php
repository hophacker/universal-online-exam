<?php /*%%SmartyHeaderCode:95504304251041160b0d300-53039130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052890048dd65f7e35d8c7d8f280e4eee8570c9b' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/manager/AddAdmin.tpl',
      1 => 1359171998,
      2 => 'file',
    ),
    'f50fab0d1fe5e445ef1597723213cecb33936d1a' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/manager/menu.tpl',
      1 => 1359120530,
      2 => 'file',
    ),
    'e79f370a80cd415eb56511e46f9306b3bd1718f5' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/head.tpl',
      1 => 1359132757,
      2 => 'file',
    ),
    '78686fa2a0fe7a42155e70500fb2cee0762b3d9e' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/CONFIGS',
      1 => 1358561695,
      2 => 'file',
    ),
    'be69a15337f053ed82ed91efd769217fb54cd07d' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/dxks_table.tpl',
      1 => 1359172056,
      2 => 'file',
    ),
    '38a4fef3a0f12be60ecdac3e53cc037f999e80de' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/foot.tpl',
      1 => 1359113183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95504304251041160b0d300-53039130',
  'variables' => 
  array (
    'dept_managers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510411611d2317_78380643',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510411611d2317_78380643')) {function content_510411611d2317_78380643($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <link href="../css/common.css" rel="stylesheet" type="text/css" />
        <link href="../css/manager/AddAdmin.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/ico" />

        
        
        <script type="text/javascript" src="../script/jquery.js"></script> 
        <script type="text/javascript" src="../script/manager/AddAdmin.js"></script>
        <script type="text/javascript" src="../script/common.js"></script>
        
        <title>扬州大学党校网上测试平台</title>

        

Warning: session_start(): Cannot send session cache limiter - headers already sent (output started at /home/j/NetBeansProjects/yangda/KoolPHPSuite/KoolControls/KoolGrid/koolgrid.php:1) in /home/j/NetBeansProjects/yangda/logic/private/class/session.php on line 37

Call Stack:
    0.0006     337876   1. {main}() /home/j/NetBeansProjects/yangda/logic/public/manager/AddAdmin.php:0
    0.2629    4500068   2. SMT->render() /home/j/NetBeansProjects/yangda/logic/public/manager/AddAdmin.php:44
    0.2630    4503060   3. Smarty_Internal_TemplateBase->display() /home/j/NetBeansProjects/yangda/logic/private/class/SMT.php:34
    0.2630    4503236   4. Smarty_Internal_TemplateBase->fetch() /usr/local/lib/Smarty-3.1.12/libs/sysplugins/smarty_internal_templatebase.php:374
    0.3929    7145280   5. content_51041160cf6b58_40856023() /usr/local/lib/Smarty-3.1.12/libs/sysplugins/smarty_internal_templatebase.php:180
    0.3929    7145664   6. Smarty_Internal_Template->getSubTemplate() /home/j/NetBeansProjects/yangda/view/Smarty/templates_c/052890048dd65f7e35d8c7d8f280e4eee8570c9b.file.AddAdmin.tpl.cache.php:26
    0.3930    7149160   7. Smarty_Internal_TemplateBase->fetch() /usr/local/lib/Smarty-3.1.12/libs/sysplugins/smarty_internal_template.php:286
    0.4233    7293244   8. content_51041160d6d870_40328605() /usr/local/lib/Smarty-3.1.12/libs/sysplugins/smarty_internal_templatebase.php:180
    0.4876    8037288   9. smarty_php_tag() /home/j/NetBeansProjects/yangda/view/Smarty/templates_c/f50fab0d1fe5e445ef1597723213cecb33936d1a.file.menu.tpl.cache.php:36
    0.4876    8041060  10. eval('
    $isManager = true;
    $docRoot = getenv("DOCUMENT_ROOT");
    include_once($docRoot . "/logic/private/class/session.php");
    if (!session::check($isManager))
        header("Location: ". $docRoot . "/logic/public/Login.php");
    
') /usr/local/lib/Smarty-3.1.12/libs/SmartyBC.class.php:456
    0.5569    8051716  11. session::check() /usr/local/lib/Smarty-3.1.12/libs/SmartyBC.class.php(456) : eval()'d code:5
    0.5569    8051760  12. session_start() /home/j/NetBeansProjects/yangda/logic/private/class/session.php:37


<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../script/menu.js"></script>
</head>
<body>
    <style type="text/css">

    </style>
    <div class="menu_top">
        <div  class="log_info"><span>陈 同学，您好</span><img src="images/log_out.png" title="退出" class="log_out"></img></a>
        </div>
    </div>
    <div id="menu">
        <ul class="menu">
            <!-- 学生导航  
            <li><a href="" class="parent"><span >&nbsp;&nbsp;首页通知&nbsp;&nbsp;</span></a></li>
            <li><a href="" class="parent"><span >&nbsp;&nbsp;个人资料&nbsp;&nbsp;</span></a></li>
            <li><a href="" class="parent"><span>&nbsp;&nbsp;修改密码&nbsp;&nbsp;</span></a></li>
            <li><a href="" class="parent"><span >&nbsp;&nbsp;参加考试&nbsp;&nbsp;</span></a></li>
            <li><a href="" class="parent"><span >&nbsp;&nbsp;成绩查询&nbsp;&nbsp;</span></a></li>
           结束 -->


            <!-- 管理员导航 -->
            <li><a href="" class="parent"><span >&nbsp;&nbsp;首页通知&nbsp;&nbsp;</span></a>
            </li>
            <li><a href="javascript:void(0);" class="parent"><span >&nbsp;&nbsp;用户设定&nbsp;&nbsp;</span></a>
                <ul>
                    <li><a href="" ><span>添加管理员</span></a>
                    </li>
                    <li><a href=""><span>删除管理员</span></a>
                    </li>
                    <li><a href=""><span>查看管理员</span></a>
                    </li>          
                </ul>

            </li>
            <li><a href="javascript:void(0);" class="parent"><span >&nbsp;&nbsp;学员管理&nbsp;&nbsp;</span></a>
                <ul>
                    <li><a href="" ><span>考试分配</span></a>
                    </li>
                    <li><a href=""><span>查看修改</span></a>
                    </li>        
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="parent"><span >&nbsp;&nbsp;试题维护&nbsp;&nbsp;</span></a>
                <ul>
                    <li><a href="javascript:void(0);" class="parent" ><span>选择题维护</span></a>
                        <ul>
                            <li><a href="" ><span>添加选择题</span></a>
                            </li>
                            <li><a href=""><span>查询选择题</span></a>
                            </li>        
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="parent" ><span>判断题维护</span></a>
                        <ul>
                            <li><a href="" ><span>添加判断题</span></a>
                            </li>
                            <li><a href=""><span>查询判断题</span></a>
                            </li>        
                        </ul>
                    </li> 
                    <li><a href="javascript:void(0);" class="parent" ><span>解答题维护</span></a>
                        <ul>
                            <li><a href=""><span>添加解答题</span></a>
                            </li>
                            <li><a href=""><span>查看解答题</span></a>
                            </li>        
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="" ><span>添加下载中级试卷</span></a>
                    </li>           
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="parent"><span >&nbsp;&nbsp;考试管理&nbsp;&nbsp;</span></a>
                <ul>
                    <li><a href="" ><span>考试设定</span></a>
                    </li>
                    <li><a href=""><span>考试查看</span></a>
                    </li>
                    <li><a href="" ><span>试卷批阅</span></a>
                    </li>
                    <li><a href=""><span>成绩统计</span></a>
                    </li>             
                </ul>
            </li>
            <li><a href="" class="" ><span>修改密码</span></a>
            </li>
            <li><a href="" class="" ><span>学院更改</span></a>
            </li> 
            <li><a href="" class="" ><span>通知发布</span></a>
            </li>  
            <li><a href=""><span>&nbsp;&nbsp;问题反馈&nbsp;&nbsp;</span></a></li>
            <!-- 结束 -->
        </ul>

    </div>
    <br/>
    <a  style="display:none" href="http://apycom.com/"></a>


<form action="Admin/add.jsp" method="post" onsubmit="return check();">
    <div id="count">
        <span>账号:</span>
        <input id="addadmin" name="addadmin" value="" />
    </div>
    <div id="pwd">
        <span>密码:</span>
        <input id="addpwd" name="addpwd" value="" />
    </div>
    <div id="name">
        <span>姓名:</span>
        <input id="adminame" name="adminame" value="" />
    </div>
    <div id="dept">
        <span> 所属院系：</span>
         




<table>
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>1</td> 
         
            <td align='center'>文学院</td> 
         
            <td align='center'>fengjie</td> 
         
            <td align='center'>fengjie</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>1</td> 
         
            <td align='center'>文学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>wxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>2</td> 
         
            <td align='center'>社会发展学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>shfzxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>3</td> 
         
            <td align='center'>马克思主义学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>mksxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>4</td> 
         
            <td align='center'>法学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>fxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>5</td> 
         
            <td align='center'>教育科学学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>jky</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>6</td> 
         
            <td align='center'>新闻与传媒学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>xcy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>7</td> 
         
            <td align='center'>外国语学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>wgyxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>8</td> 
         
            <td align='center'>数学科学学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>sxxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>9</td> 
         
            <td align='center'>物理科学与技术学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>wlxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>10</td> 
         
            <td align='center'>化学化工学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>hgxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>11</td> 
         
            <td align='center'>体育学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>tyxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>12</td> 
         
            <td align='center'>机械工程学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>jxxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>13</td> 
         
            <td align='center'>信息工程学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>xxxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>14</td> 
         
            <td align='center'>建筑科学与工程学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>jzxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>15</td> 
         
            <td align='center'>水利科学与工程学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>slxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>16</td> 
         
            <td align='center'>能源与动力工程学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>ndxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>17</td> 
         
            <td align='center'>环境科学与工程学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>hjxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>18</td> 
         
            <td align='center'>农学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>nxy1</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>19</td> 
         
            <td align='center'>园艺与植物保护学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>yyzbxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>20</td> 
         
            <td align='center'>动物科学与技术学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>dkxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>21</td> 
         
            <td align='center'>兽医学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>syxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>22</td> 
         
            <td align='center'>生物科学与技术学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>sjxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>23</td> 
         
            <td align='center'>医学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>yxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>24</td> 
         
            <td align='center'>商学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>sxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>25</td> 
         
            <td align='center'>旅游烹饪学院</td> 
         
            <td align='center'>??</td> 
         
            <td align='center'>lpxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>26</td> 
         
            <td align='center'>艺术学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>ysxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>27</td> 
         
            <td align='center'>广陵学院</td> 
         
            <td align='center'>???</td> 
         
            <td align='center'>glxy</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
    <tr bgcolor='#B9DCFF'> 
         
            <td align='center'>30</td> 
         
            <td align='center'>机关部门</td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
            <td align='center'></td> 
         
    </tr> 
 
</table>

    </div>
    <div>
        <input type="submit" id="conf" value="提交" />
    </div>
</form>
    
    
<div id="atten" style="color:red"><h2></h2> </div>

    </body>
</html>
<?php }} ?>