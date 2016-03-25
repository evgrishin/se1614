<?php /* Smarty version Smarty-3.1.19, created on 2016-03-15 02:26:20
         compiled from "T:\home\stamp-expert.ru\www\themes\lighting_theme\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2672456e73a8c28aa42-22003717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb2deb28cfe43868044d829b1834a8c23966e1fc' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\lighting_theme\\modules\\blockbestsellers\\tab.tpl',
      1 => 1457994333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2672456e73a8c28aa42-22003717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e73a8c2cc853_10797719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e73a8c2cc853_10797719')) {function content_56e73a8c2cc853_10797719($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>
