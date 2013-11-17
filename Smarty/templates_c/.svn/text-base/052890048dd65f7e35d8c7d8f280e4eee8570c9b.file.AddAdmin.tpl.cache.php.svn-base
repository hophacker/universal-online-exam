<?php /* Smarty version Smarty-3.1.12, created on 2013-01-27 01:24:48
         compiled from "/home/j/NetBeansProjects/yangda/view/manager/AddAdmin.tpl" */ ?>
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
  ),
  'nocache_hash' => '95504304251041160b0d300-53039130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dept_managers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51041160cf6b58_40856023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51041160cf6b58_40856023')) {function content_51041160cf6b58_40856023($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("manager/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
        <?php echo $_smarty_tpl->getSubTemplate ("../dxks_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('contents'=>$_smarty_tpl->tpl_vars['dept_managers']->value), 0);?>

    </div>
    <div>
        <input type="submit" id="conf" value="提交" />
    </div>
</form>
    
    
<div id="atten" style="color:red"><h2></h2> </div>

<?php echo $_smarty_tpl->getSubTemplate ("../foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>