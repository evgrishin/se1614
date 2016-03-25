<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 18:04:59
         compiled from "T:\home\stamp-expert.ru\www\themes\theme948\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:705556e17f0a74c033-03316316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd084538bd6586d404922f4a3cf1325f7e27b12ac' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\theme948\\modules\\homefeatured\\tab.tpl',
      1 => 1457301367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '705556e17f0a74c033-03316316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e17f0a7aa1f6_07225926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e17f0a7aa1f6_07225926')) {function content_56e17f0a7aa1f6_07225926($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
