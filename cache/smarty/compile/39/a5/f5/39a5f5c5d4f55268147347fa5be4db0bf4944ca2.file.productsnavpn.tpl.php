<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:21
         compiled from "T:\home\stamp-expert.ru\www\modules\productsnavpn\productsnavpn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2925056c9f8660cea18-46385615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a5f5c5d4f55268147347fa5be4db0bf4944ca2' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\productsnavpn\\productsnavpn.tpl',
      1 => 1456073995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2925056c9f8660cea18-46385615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prevLink' => 0,
    'nextLink' => 0,
    'prevName' => 0,
    'nextName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f8661bab29_29255866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f8661bab29_29255866')) {function content_56c9f8661bab29_29255866($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prevLink']->value!=null||$_smarty_tpl->tpl_vars['nextLink']->value!=null) {?>
<div id="productsnavpn" class="pull-right"> 
<?php if ($_smarty_tpl->tpl_vars['prevLink']->value!=null) {?><a href="<?php echo $_smarty_tpl->tpl_vars['prevLink']->value;?>
" class="p_prev_link transition-300" title="<?php echo smartyTranslate(array('s'=>'Previous product','mod'=>'productsnavpn'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['prevName']->value;?>
"><i class="icon-angle-left"></i></a><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['nextLink']->value!=null) {?><a href="<?php echo $_smarty_tpl->tpl_vars['nextLink']->value;?>
" class="p_next_link transition-300" title="<?php echo smartyTranslate(array('s'=>'Next product','mod'=>'productsnavpn'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['nextName']->value;?>
"><i class="icon-angle-right"></i></a><?php }?>
</div>
<?php }?><?php }} ?>
