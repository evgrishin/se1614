<?php /* Smarty version Smarty-3.1.19, created on 2016-03-11 00:26:14
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\modules\cashondelivery\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216656e1d86666b3d0-54264130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '697a44c3ff00a8db5f2f86e990d475b76fc68a1b' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\modules\\cashondelivery\\views\\templates\\hook\\payment.tpl',
      1 => 1456073981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216656e1d86666b3d0-54264130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e1d8666edfa4_58499017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e1d8666edfa4_58499017')) {function content_56e1d8666edfa4_58499017($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cash" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" rel="nofollow">
            	<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>

            	<span>(<?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>
)</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
