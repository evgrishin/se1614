<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:26:39
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_hitechgame\modules\leomanagewidgets\views\widgets\widget_carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:553856c9f34fc288b7-10572559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '633e9a571619848d038449f83fc249a15078df14' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_hitechgame\\modules\\leomanagewidgets\\views\\widgets\\widget_carousel.tpl',
      1 => 1456075453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '553856c9f34fc288b7-10572559',
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
  'unifunc' => 'content_56c9f34fcdfce3_78519256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f34fcdfce3_78519256')) {function content_56c9f34fcdfce3_78519256($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tab']->value), null, 0);?>
<div class="products_block exclusive leomanagerwidgets  block" >
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
   			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.'),$_smarty_tpl);?>
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
