<?php /* Smarty version Smarty-3.1.19, created on 2016-03-15 02:35:48
         compiled from "T:\home\stamp-expert.ru\www\themes\minimal_16_theme\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1247556e73cc40d7f61-06034767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b32f79beeb4f26dca349056f6736535e4f9bdc38' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\minimal_16_theme\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1457994503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1247556e73cc40d7f61-06034767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e73cc418dad3_04418789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e73cc418dad3_04418789')) {function content_56e73cc418dad3_04418789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1) {?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
