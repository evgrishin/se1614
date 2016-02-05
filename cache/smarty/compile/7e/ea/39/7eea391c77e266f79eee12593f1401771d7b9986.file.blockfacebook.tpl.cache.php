<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:44:41
         compiled from "T:\home\stamp-expert.ru\www\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1622956b460f9c2faf4-75466488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eea391c77e266f79eee12593f1401771d7b9986' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1454659109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1622956b460f9c2faf4-75466488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b460f9c87df5_68141992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b460f9c87df5_68141992')) {function content_56b460f9c87df5_68141992($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
