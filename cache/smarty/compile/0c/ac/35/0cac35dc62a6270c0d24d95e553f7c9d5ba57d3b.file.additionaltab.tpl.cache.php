<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:13
         compiled from "T:\home\stamp-expert.ru\www\modules\additionalproductstabs\views\templates\hook\additionaltab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3170156c9f85d7c15e5-69779249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cac35dc62a6270c0d24d95e553f7c9d5ba57d3b' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\additionalproductstabs\\views\\templates\\hook\\additionaltab.tpl',
      1 => 1456073985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3170156c9f85d7c15e5-69779249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabContent' => 0,
    'tabContentGlobal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85d80f402_63207761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85d80f402_63207761')) {function content_56c9f85d80f402_63207761($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabContent']->value)) {?>
<section class="page-product-box tab-pane fade" id="additionalTab">
<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContent']->value;?>
</div>
</section>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['tabContentGlobal']->value)) {?>
<section class="page-product-box tab-pane fade" id="additionalTabGlobal">
<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContentGlobal']->value;?>
</div>
</section>
<?php }?><?php }} ?>
