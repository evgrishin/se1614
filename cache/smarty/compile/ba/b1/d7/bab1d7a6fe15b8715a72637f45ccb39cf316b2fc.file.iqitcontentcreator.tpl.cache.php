<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:21
         compiled from "T:\home\stamp-expert.ru\www\modules\iqitcontentcreator\views\templates\hook\iqitcontentcreator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1163156c9f7ed26f202-08127483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab1d7a6fe15b8715a72637f45ccb39cf316b2fc' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\iqitcontentcreator\\views\\templates\\hook\\iqitcontentcreator.tpl',
      1 => 1456073991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1163156c9f7ed26f202-08127483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7ed2d4390_39127893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7ed2d4390_39127893')) {function content_56c9f7ed2d4390_39127893($_smarty_tpl) {?>


	<div id="iqitcontentcreator" class="block">
	<?php if (!empty($_smarty_tpl->tpl_vars['content']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("./front_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['element']->value,'frontEditor'=>0), 0);?>
               
		<?php } ?>
	<?php }?>
</div>

							<?php }} ?>
