<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:28:29
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_exist\layout\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754556c9f3bd365d31-96737800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5f7454d65da0eb5d64859a702049a9e43a7428e' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_exist\\layout\\default\\header.tpl',
      1 => 1456074043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754556c9f3bd365d31-96737800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
    'cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f3bd420495_51521024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f3bd420495_51521024')) {function content_56c9f3bd420495_51521024($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
<!-- Left -->
<section id="left_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
" role="navigation">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

</section>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)) {?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable((12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value), null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12, null, 0);?><?php }?>
<!-- Center -->
<section id="center_column" class="col-md-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
">
<?php }} ?>
