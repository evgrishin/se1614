<?php /* Smarty version Smarty-3.1.19, created on 2016-03-15 02:35:31
         compiled from "T:\home\stamp-expert.ru\www\themes\minimal_16_theme\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:426156e73cb4974b92-97050604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2a9d385df82dedf57fb8f394b8c2812dca42d0b' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\minimal_16_theme\\category-count.tpl',
      1 => 1457994496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426156e73cb4974b92-97050604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e73cb4a28628_45778792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e73cb4a28628_45778792')) {function content_56e73cb4a28628_45778792($_smarty_tpl) {?>
<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>
