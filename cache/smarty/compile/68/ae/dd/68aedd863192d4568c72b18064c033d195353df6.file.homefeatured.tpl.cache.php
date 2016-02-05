<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:44:44
         compiled from "T:\home\stamp-expert.ru\www\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062656b460fd475c01-70516390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68aedd863192d4568c72b18064c033d195353df6' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1454659131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062656b460fd475c01-70516390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b460fd4f6a17_96271456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b460fd4f6a17_96271456')) {function content_56b460fd4f6a17_96271456($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
