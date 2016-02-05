<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:29:09
         compiled from "T:\home\stamp-expert.ru\www\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105956b45d555d1254-24665574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3390aa87213bd56c0228ed6967ba208516fac37c' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\admin\\themes\\default\\template\\content.tpl',
      1 => 1454659047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105956b45d555d1254-24665574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b45d557cec53_68585694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b45d557cec53_68585694')) {function content_56b45d557cec53_68585694($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
