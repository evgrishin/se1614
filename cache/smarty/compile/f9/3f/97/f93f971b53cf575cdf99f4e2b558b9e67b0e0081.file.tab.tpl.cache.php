<?php /* Smarty version Smarty-3.1.19, created on 2016-03-15 02:26:20
         compiled from "T:\home\stamp-expert.ru\www\themes\lighting_theme\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:869556e73a8c147307-93528955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f93f971b53cf575cdf99f4e2b558b9e67b0e0081' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\lighting_theme\\modules\\homefeatured\\tab.tpl',
      1 => 1457994333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '869556e73a8c147307-93528955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e73a8c17e819_45079050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e73a8c17e819_45079050')) {function content_56e73a8c17e819_45079050($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
