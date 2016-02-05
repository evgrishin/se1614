<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:31:05
         compiled from "T:\home\stamp-expert.ru\www\themes\default-bootstrap\modules\loyalty\views\templates\hook\shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2128356b45dc93451c7-90193424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef9a600d2e0fe715dc9e18a6f8e40d5b3e385e20' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\default-bootstrap\\modules\\loyalty\\views\\templates\\hook\\shopping-cart.tpl',
      1 => 1454659131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2128356b45dc93451c7-90193424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'points' => 0,
    'voucher' => 0,
    'guest_checkout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b45dc9c64640_06258500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b45dc9c64640_06258500')) {function content_56b45dc9c64640_06258500($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<p id="loyalty">
	<i class="icon-flag"></i>
	<?php if ($_smarty_tpl->tpl_vars['points']->value>0) {?>
		<?php echo smartyTranslate(array('s'=>'By checking out this shopping cart you can collect up to','mod'=>'loyalty'),$_smarty_tpl);?>
 <b>
		<?php if ($_smarty_tpl->tpl_vars['points']->value>1) {?><?php echo smartyTranslate(array('s'=>'%d loyalty points','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d loyalty point','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b>
		<?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['guest_checkout']->value)&&$_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup><?php }?>.<br />
		<?php if (isset($_smarty_tpl->tpl_vars['guest_checkout']->value)&&$_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Not available for Instant checkout order','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?>
	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'Add some products to your shopping cart to collect some loyalty points.','mod'=>'loyalty'),$_smarty_tpl);?>

	<?php }?>
</p>
<!-- END : MODULE Loyalty --><?php }} ?>
