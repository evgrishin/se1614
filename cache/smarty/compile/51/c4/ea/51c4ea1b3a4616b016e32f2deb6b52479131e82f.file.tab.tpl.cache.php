<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 18:04:59
         compiled from "T:\home\stamp-expert.ru\www\themes\theme948\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3228456e17f0a8073c6-60685559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51c4ea1b3a4616b016e32f2deb6b52479131e82f' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\theme948\\modules\\blockbestsellers\\tab.tpl',
      1 => 1457301366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3228456e17f0a8073c6-60685559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e17f0a869255_40522315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e17f0a869255_40522315')) {function content_56e17f0a869255_40522315($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>
