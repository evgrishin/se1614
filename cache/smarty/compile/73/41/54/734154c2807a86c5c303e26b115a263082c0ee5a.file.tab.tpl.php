<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:12
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\modules\productcomments\\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1085156c9f85c27fe53-92413480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '734154c2807a86c5c303e26b115a263082c0ee5a' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\modules\\productcomments\\\\tab.tpl',
      1 => 1456073981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1085156c9f85c27fe53-92413480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85c2bc6f1_71868392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85c2bc6f1_71868392')) {function content_56c9f85c2bc6f1_71868392($_smarty_tpl) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>
<li><a href="#reviewsTab" data-toggle="tab" id="tab_reviews_link"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
	<?php }?>
<?php }} ?>
