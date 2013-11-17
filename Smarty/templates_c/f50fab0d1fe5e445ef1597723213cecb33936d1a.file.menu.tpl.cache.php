<?php /* Smarty version Smarty-3.1.12, created on 2013-01-27 01:24:48
         compiled from "/home/j/NetBeansProjects/yangda/view/manager/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205455056151041160cfc593-34038100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f50fab0d1fe5e445ef1597723213cecb33936d1a' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/manager/menu.tpl',
      1 => 1359120530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205455056151041160cfc593-34038100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pubDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51041160d6d870_40328605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51041160d6d870_40328605')) {function content_51041160d6d870_40328605($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    $isManager = true;
    $docRoot = getenv("DOCUMENT_ROOT");
    include_once($docRoot . "/logic/private/class/session.php");
    if (!session::check($isManager))
        header("Location: ". $docRoot . "/logic/public/Login.php");
    
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['pubDir']->value;?>
/css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pubDir']->value;?>
/script/menu.js"></script>
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
<?php }} ?>