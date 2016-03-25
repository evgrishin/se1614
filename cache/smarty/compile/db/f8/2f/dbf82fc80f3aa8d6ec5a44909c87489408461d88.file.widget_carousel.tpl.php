<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:26:04
         compiled from "T:\home\stamp-expert.ru\www\modules\leomanagewidgets\views\widgets\widget_carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1904256c9f32cc7ef48-84368705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbf82fc80f3aa8d6ec5a44909c87489408461d88' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\leomanagewidgets\\views\\widgets\\widget_carousel.tpl',
      1 => 1456075459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1904256c9f32cc7ef48-84368705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
    'widget_heading' => 0,
    'products' => 0,
    'tabname' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f32cd41d21_23040394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f32cd41d21_23040394')) {function content_56c9f32cd41d21_23040394($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tab']->value), null, 0);?>
<div class="block products_block exclusive leomanagerwidgets">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
   			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>	
		<?php }?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
});
</script>
<?php }} ?>
