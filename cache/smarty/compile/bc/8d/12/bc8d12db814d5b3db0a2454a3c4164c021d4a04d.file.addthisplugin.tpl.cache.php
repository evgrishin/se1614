<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:11
         compiled from "T:\home\stamp-expert.ru\www\modules\addthisplugin\addthisplugin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:975756c9f85b9bfd76-27485553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc8d12db814d5b3db0a2454a3c4164c021d4a04d' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\addthisplugin\\addthisplugin.tpl',
      1 => 1456073985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '975756c9f85b9bfd76-27485553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addthisplugin_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85ba05862_49825030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85ba05862_49825030')) {function content_56c9f85ba05862_49825030($_smarty_tpl) {?><div class="additional_button">
<div class="addthis_sharing_toolbox"></div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['addthisplugin_id']->value)&&($_smarty_tpl->tpl_vars['addthisplugin_id']->value=="0")) {?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d44b832bee7204"></script>
<?php } else { ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $_smarty_tpl->tpl_vars['addthisplugin_id']->value;?>
"></script>
<?php }?>

<?php }} ?>
