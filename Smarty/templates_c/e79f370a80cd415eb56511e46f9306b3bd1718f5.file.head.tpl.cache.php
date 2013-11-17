<?php /* Smarty version Smarty-3.1.12, created on 2013-01-27 20:24:31
         compiled from "/home/j/NetBeansProjects/yangda/view/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130379832651051c7fce5a78-63162322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e79f370a80cd415eb56511e46f9306b3bd1718f5' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/head.tpl',
      1 => 1359132757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130379832651051c7fce5a78-63162322',
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
  'unifunc' => 'content_51051c7fe7a798_23712142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51051c7fe7a798_23712142')) {function content_51051c7fe7a798_23712142($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)dirname($_smarty_tpl->source->filepath))."/CONFIGS", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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