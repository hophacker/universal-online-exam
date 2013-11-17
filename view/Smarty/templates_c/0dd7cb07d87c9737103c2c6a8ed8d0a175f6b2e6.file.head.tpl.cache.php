<?php /* Smarty version Smarty-3.1.12, created on 2013-01-27 14:00:06
         compiled from "/home/ark/NetBeansProjects/yangda/view/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4316088435104c26689a6c8-89939488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd7cb07d87c9737103c2c6a8ed8d0a175f6b2e6' => 
    array (
      0 => '/home/ark/NetBeansProjects/yangda/view/head.tpl',
      1 => 1359172623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4316088435104c26689a6c8-89939488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pubDir' => 0,
    'name' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5104c266bedbb4_75307646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5104c266bedbb4_75307646')) {function content_5104c266bedbb4_75307646($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)dirname($_smarty_tpl->source->filepath))."/CONFIGS", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['pubDir']->value;?>
/css/common.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['pubDir']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['pubDir']->value;?>
/images/favicon.ico" type="image/ico" />

        
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pubDir']->value;?>
/script/jquery.js"></script> 
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pubDir']->value;?>
/script/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pubDir']->value;?>
/script/common.js"></script>
        
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '扬州大学党校网上测试平台' : $tmp);?>
</title>

        <?php }} ?>