<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 14:18:39
         compiled from "T:\home\stamp-expert.ru\www\admin80697wf7i\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:360156e149ff59ab96-13385521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f24b5e4c79ab6841b852789285d15d13d31d948f' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\admin80697wf7i\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1454659046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '360156e149ff59ab96-13385521',
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
  'unifunc' => 'content_56e149ff5f3791_13121892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e149ff5f3791_13121892')) {function content_56e149ff5f3791_13121892($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
