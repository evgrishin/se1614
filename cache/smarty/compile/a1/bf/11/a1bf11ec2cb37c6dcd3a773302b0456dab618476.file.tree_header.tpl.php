<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:35:39
         compiled from "T:\home\stamp-expert.ru\www\admin\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3048956b45edb11f271-84830939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1bf11ec2cb37c6dcd3a773302b0456dab618476' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\admin\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1454659046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3048956b45edb11f271-84830939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b45edb308948_79691293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b45edb308948_79691293')) {function content_56b45edb308948_79691293($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
