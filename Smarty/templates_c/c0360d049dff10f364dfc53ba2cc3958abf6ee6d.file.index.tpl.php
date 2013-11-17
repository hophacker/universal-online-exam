<?php /* Smarty version Smarty-3.1.12, created on 2012-12-31 20:55:38
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111867942350e18b4abe14a5-53057289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1356958440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111867942350e18b4abe14a5-53057289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e18b4ad21381_43866461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e18b4ad21381_43866461')) {function content_50e18b4ad21381_43866461($_smarty_tpl) {?>
Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, welcome to Smarty!
<?php }} ?>