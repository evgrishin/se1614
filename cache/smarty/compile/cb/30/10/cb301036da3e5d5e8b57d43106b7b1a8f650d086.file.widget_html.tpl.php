<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:26:06
         compiled from "T:\home\stamp-expert.ru\www\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324856c9f32e679dc4-11912537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb301036da3e5d5e8b57d43106b7b1a8f650d086' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1456075459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324856c9f32e679dc4-11912537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f32e6d8bf7_33442000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f32e6d8bf7_33442000')) {function content_56c9f32e6d8bf7_33442000($_smarty_tpl) {?>
 
 <?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
