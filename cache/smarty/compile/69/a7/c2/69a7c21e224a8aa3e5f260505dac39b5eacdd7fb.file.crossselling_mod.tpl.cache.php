<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:11
         compiled from "T:\home\stamp-expert.ru\www\modules\crossselling_mod\views\templates\hook\crossselling_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1863156c9f85b3aedf3-78306322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a7c21e224a8aa3e5f260505dac39b5eacdd7fb' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\crossselling_mod\\views\\templates\\hook\\crossselling_mod.tpl',
      1 => 1456073990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1863156c9f85b3aedf3-78306322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85b4814f1_48746851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85b4814f1_48746851')) {function content_56c9f85b4814f1_48746851($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
    <section id="crossselling" class="page-product-box flexslider_carousel_block">
    	<h3 class="productscategory_h2 page-product-heading">
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
                <?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling_mod'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'We recommend','mod'=>'crossselling_mod'),$_smarty_tpl);?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['orderProducts']->value,'id'=>'crossseling_products_slider'), 0);?>

    </section>
<?php }?><?php }} ?>
