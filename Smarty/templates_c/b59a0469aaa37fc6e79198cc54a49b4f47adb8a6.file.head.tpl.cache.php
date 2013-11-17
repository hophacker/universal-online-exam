<?php /* Smarty version Smarty-3.1.12, created on 2013-01-24 14:51:38
         compiled from "I:\fedchenlin\yangda\view\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1098751014a7a5e5d09-01174255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b59a0469aaa37fc6e79198cc54a49b4f47adb8a6' => 
    array (
      0 => 'I:\\fedchenlin\\yangda\\view\\head.tpl',
      1 => 1359033369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1098751014a7a5e5d09-01174255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51014a7a65b4b6_87213168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51014a7a65b4b6_87213168')) {function content_51014a7a65b4b6_87213168($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)dirname($_smarty_tpl->source->filepath))."/CONFIGS", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <link href="css/common.css" rel="stylesheet" type="text/css" />
        <link href="css/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />

        <script type="text/javascript" src="script/jquery-1.9.0.js"></script>
        <script type="text/javascript" src="script/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.js"></script>
        <script type="text/javascript" src="script/common.js"></script>
        
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '扬州大学党校网上测试平台' : $tmp);?>
</title><?php }} ?>