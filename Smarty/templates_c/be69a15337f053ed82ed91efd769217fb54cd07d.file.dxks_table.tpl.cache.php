<?php /* Smarty version Smarty-3.1.12, created on 2013-01-27 01:24:49
         compiled from "/home/j/NetBeansProjects/yangda/view/dxks_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1418406724510411610b7fb8-17553083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be69a15337f053ed82ed91efd769217fb54cd07d' => 
    array (
      0 => '/home/j/NetBeansProjects/yangda/view/dxks_table.tpl',
      1 => 1359172056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1418406724510411610b7fb8-17553083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contents' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51041161152798_27201404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51041161152798_27201404')) {function content_51041161152798_27201404($_smarty_tpl) {?> 




<table>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['record'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['record']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['name'] = 'record';
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contents']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['record']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['record']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['record']['total']);
?> 
    <tr bgcolor='#B9DCFF'> 
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['entry'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['entry']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['name'] = 'entry';
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['entry']['total']);
?> 
            <td align='center'><?php echo $_smarty_tpl->tpl_vars['contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['record']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['entry']['index']];?>
</td> 
        <?php endfor; endif; ?> 
    </tr> 
<?php endfor; endif; ?> 
</table>
<?php }} ?>