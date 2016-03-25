<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 14:39:04
         compiled from "T:\home\stamp-expert.ru\www\modules\onepagecheckout\views\templates\front\payment-methods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1396656e14ec8eb6239-90458692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c605e89fe5c332f38c5356e9f1a49c4d9ee8b732' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\onepagecheckout\\views\\templates\\front\\payment-methods.tpl',
      1 => 1456080232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1396656e14ec8eb6239-90458692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_methods' => 0,
    'payment_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e14ec9107714_87232801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e14ec9107714_87232801')) {function content_56e14ec9107714_87232801($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['payment_methods']->value)) {?>
<table id="paymentMethodsTable" class="std">
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['payment_method']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['payment_method']->iteration=0;
 $_smarty_tpl->tpl_vars['payment_method']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_method']->iteration++;
 $_smarty_tpl->tpl_vars['payment_method']->index++;
 $_smarty_tpl->tpl_vars['payment_method']->first = $_smarty_tpl->tpl_vars['payment_method']->index === 0;
 $_smarty_tpl->tpl_vars['payment_method']->last = $_smarty_tpl->tpl_vars['payment_method']->iteration === $_smarty_tpl->tpl_vars['payment_method']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['payment_method']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['payment_method']->last;
?>
        <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">
            <td class="payment_action radio">
                <input type="radio" name="id_payment_method" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value['link'];?>
"
                       id="payment_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value['link'];?>
" <?php if ((count($_smarty_tpl->tpl_vars['payment_methods']->value)==1)) {?>checked="checked"<?php }?> />
            </td>
            <td class="payment_name">
                <label for="payment_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value['link'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['payment_method']->value['img']) {?><img<?php if (isset($_smarty_tpl->tpl_vars['payment_method']->value['class'])) {?> class="cssback <?php echo $_smarty_tpl->tpl_vars['payment_method']->value['class'];?>
"<?php }?> src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['img'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/><?php }?>
                </label>
            </td>
            <td class="payment_description">
                <label for="payment_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value['link'];?>
">
	    	    <?php echo $_smarty_tpl->tpl_vars['payment_method']->value['desc'];?>

		</label>
	    </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php }?>
<?php }} ?>
