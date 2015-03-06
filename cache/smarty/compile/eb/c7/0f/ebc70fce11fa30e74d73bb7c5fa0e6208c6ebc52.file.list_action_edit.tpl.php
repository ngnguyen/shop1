<?php /* Smarty version Smarty-3.1.19, created on 2015-03-06 15:54:37
         compiled from "C:\wamp\www\shop1\admin297pj1ig8\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3017754f96b4d3587e7-34865344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc70fce11fa30e74d73bb7c5fa0e6208c6ebc52' => 
    array (
      0 => 'C:\\wamp\\www\\shop1\\admin297pj1ig8\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1424775222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3017754f96b4d3587e7-34865344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f96b4d3cdb07_43282053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f96b4d3cdb07_43282053')) {function content_54f96b4d3cdb07_43282053($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
