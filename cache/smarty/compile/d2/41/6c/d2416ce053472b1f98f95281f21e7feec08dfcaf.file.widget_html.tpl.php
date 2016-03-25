<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:26:42
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_hitechgame\modules\leomanagewidgets\views\widgets\displayfooter\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1863056c9f35233a097-96024799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2416ce053472b1f98f95281f21e7feec08dfcaf' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_hitechgame\\modules\\leomanagewidgets\\views\\widgets\\displayfooter\\widget_html.tpl',
      1 => 1456075453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1863056c9f35233a097-96024799',
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
  'unifunc' => 'content_56c9f3523a59e3_77925368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f3523a59e3_77925368')) {function content_56c9f3523a59e3_77925368($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block footer-block block nobackground">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content toggle-footer">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
