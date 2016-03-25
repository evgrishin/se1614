<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:10
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\modules\productscategory\productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:739356c9f85abfaa90-19743066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b33588bcd4cfcf959f1c29a32105122d9a0fd047' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\modules\\productscategory\\productscategory.tpl',
      1 => 1456073981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739356c9f85abfaa90-19743066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85ae85085_76383338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85ae85085_76383338')) {function content_56c9f85ae85085_76383338($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>
<section class="page-product-box flexslider_carousel_block blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading">
		<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)==1) {?>
			<?php echo smartyTranslate(array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl);?>

		<?php }?>
	</h3>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['categoryProducts']->value,'id'=>'category_products_slider'), 0);?>

</section>
<?php }?><?php }} ?>
