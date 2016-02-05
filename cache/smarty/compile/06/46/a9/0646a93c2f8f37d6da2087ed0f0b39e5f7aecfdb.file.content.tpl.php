<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:31:54
         compiled from "T:\home\stamp-expert.ru\www\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2762356b45df8ba0064-98600759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0646a93c2f8f37d6da2087ed0f0b39e5f7aecfdb' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1454659045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2762356b45df8ba0064-98600759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b45df8bc25b8_44433338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b45df8bc25b8_44433338')) {function content_56b45df8bc25b8_44433338($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
