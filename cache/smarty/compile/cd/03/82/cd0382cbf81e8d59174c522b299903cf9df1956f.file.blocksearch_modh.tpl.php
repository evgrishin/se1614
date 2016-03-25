<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:17
         compiled from "T:\home\stamp-expert.ru\www\modules\blocksearch_mod\blocksearch_modh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3154456c9f7e97641b4-86343839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd0382cbf81e8d59174c522b299903cf9df1956f' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\blocksearch_mod\\blocksearch_modh.tpl',
      1 => 1456073987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3154456c9f7e97641b4-86343839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7e97c2666_33032038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7e97c2666_33032038')) {function content_56c9f7e97c2666_33032038($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'more_products_search')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'More products »','mod'=>'blocksearch_mod','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_products_search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
