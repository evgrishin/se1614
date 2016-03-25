<?php /* Smarty version Smarty-3.1.19, created on 2016-03-15 02:35:49
         compiled from "T:\home\stamp-expert.ru\www\themes\minimal_16_theme\modules\blockbestsellers\blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2869456e73cc575cde1-28737737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7d689920f97c61aafb93d4ab145f2c471a688a' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\minimal_16_theme\\modules\\blockbestsellers\\blockbestsellers-home.tpl',
      1 => 1457994503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2869456e73cc575cde1-28737737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e73cc57f91f5_42459280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e73cc57f91f5_42459280')) {function content_56e73cc57f91f5_42459280($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1) {?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
