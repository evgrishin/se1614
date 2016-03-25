<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:10
         compiled from "T:\home\stamp-expert.ru\www\modules\productsmanufacturer\views\templates\hook\productsmanufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256656c9f85b13cc85-32876615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '340c75cf8317d8338af8b954dd3be4c24cd4141f' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\productsmanufacturer\\views\\templates\\hook\\productsmanufacturer.tpl',
      1 => 1456073995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256656c9f85b13cc85-32876615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturer_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85b18d247_06548170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85b18d247_06548170')) {function content_56c9f85b18d247_06548170($_smarty_tpl) {?>	<!-- MODULE manufacturer Products -->
		<?php if (isset($_smarty_tpl->tpl_vars['manufacturer_products']->value)&&$_smarty_tpl->tpl_vars['manufacturer_products']->value) {?>
		<section class="page-product-box flexslider_carousel_block blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading"><?php echo smartyTranslate(array('s'=>'Products from the same manufacturer','mod'=>'productsmanufacturer'),$_smarty_tpl);?>
</h3>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['manufacturer_products']->value,'id'=>'manufacturer_products_slider'), 0);?>

			</section>
		<?php }?>
	<!-- /MODULE manufacturer Products --><?php }} ?>
