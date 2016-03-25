<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:18
         compiled from "T:\home\stamp-expert.ru\www\modules\blocksearch_mod\category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2623156c9f7ea11ca35-65264925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc5a8e8b0c3a382ff32c055252c215916d4928b' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\blocksearch_mod\\category-tree-branch.tpl',
      1 => 1456073987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2623156c9f7ea11ca35-65264925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'main' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7ea1d9ca7_88078199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7ea1d9ca7_88078199')) {function content_56c9f7ea1d9ca7_88078199($_smarty_tpl) {?>

<option value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
">
	<?php if (!$_smarty_tpl->tpl_vars['main']->value) {?><?php echo str_repeat('- ',(2*$_smarty_tpl->tpl_vars['node']->value['currentDepth']));?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

	<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ("./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>false), 0);?>

			<?php } ?>
	<?php }?>
</option>
<?php }} ?>
