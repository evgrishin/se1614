<?php /* Smarty version Smarty-3.1.19, created on 2016-03-11 00:26:14
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\modules\cheque\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2024156e1d8665b3983-80012706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fcf69b71cf28fb436b0a9c3051d814df4ac17cf' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\modules\\cheque\\views\\templates\\hook\\payment.tpl',
      1 => 1456073981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024156e1d8665b3983-80012706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e1d86664d5a9_00611332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e1d86664d5a9_00611332')) {function content_56e1d86664d5a9_00611332($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
