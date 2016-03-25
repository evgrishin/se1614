<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:53:58
         compiled from "T:\home\stamp-expert.ru\www\modules\dateofdelivery\views\templates\hook\button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1005156b4632619ab46-26367047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d4c740988efb2106da216a5365cbf8120c83316' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\dateofdelivery\\views\\templates\\hook\\button.tpl',
      1 => 1454662433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1005156b4632619ab46-26367047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b46326233c55_46358318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b46326233c55_46358318')) {function content_56b46326233c55_46358318($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-9">
		<a href="<?php echo $_smarty_tpl->tpl_vars['add_url']->value;?>
" class="btn btn-primary button"><?php echo smartyTranslate(array('s'=>'Add a new carrier rule','mod'=>'dateofdelivery'),$_smarty_tpl);?>
</a>
	</div>
</div>
<br/>
<?php }} ?>
