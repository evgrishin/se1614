<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:28:29
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_exist\layout\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:734356c9f3bd66a9a3-95489527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d81b08b3b1a5f0294a6fb850732e266329c06c4' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_exist\\layout\\default\\footer.tpl',
      1 => 1456074043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '734356c9f3bd66a9a3-95489527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f3bd6f97b3_17803781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f3bd6f97b3_17803781')) {function content_56c9f3bd6f97b3_17803781($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="no-border clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
