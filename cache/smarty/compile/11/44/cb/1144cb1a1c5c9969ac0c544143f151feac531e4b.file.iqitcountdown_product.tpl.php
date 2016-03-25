<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:21
         compiled from "T:\home\stamp-expert.ru\www\modules\iqitcountdown\iqitcountdown_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18256c9f865875cf6-78573621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1144cb1a1c5c9969ac0c544143f151feac531e4b' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\iqitcountdown\\iqitcountdown_product.tpl',
      1 => 1456073992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18256c9f865875cf6-78573621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specific_prices' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f865905be1_16882979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f865905be1_16882979')) {function content_56c9f865905be1_16882979($_smarty_tpl) {?><div class="price-countdown price-countdown-product" <?php if (!isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])||(isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])&&$_smarty_tpl->tpl_vars['specific_prices']->value['to']=='0000-00-00 00:00:00')) {?> style="display: none;"<?php }?> >
<strong class="price-countdown-title"><?php echo smartyTranslate(array('s'=>'Special price ends on','mod'=>'iqitcountdown'),$_smarty_tpl);?>
:</strong>
<div class="count-down-timer" data-countdown="<?php if (isset($_smarty_tpl->tpl_vars['specific_prices']->value['to'])) {?><?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['to'];?>
<?php }?>"> </div>
</div>




<?php }} ?>
