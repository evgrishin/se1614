<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:13
         compiled from "T:\home\stamp-expert.ru\www\modules\manufacturertab\views\templates\hook\manufacturertab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2045856c9f85d87ccf4-00841365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9deaf9eaaa56d8b0a33ec80db30148cb71ace815' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\manufacturertab\\views\\templates\\hook\\manufacturertab.tpl',
      1 => 1456073993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2045856c9f85d87ccf4-00841365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85d8a28d0_44063057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85d8a28d0_44063057')) {function content_56c9f85d8a28d0_44063057($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabContent']->value)) {?>
<section class="page-product-box tab-pane fade" id="manufacturerTab">
<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContent']->value;?>
</div>
</section>
<?php }?><?php }} ?>
