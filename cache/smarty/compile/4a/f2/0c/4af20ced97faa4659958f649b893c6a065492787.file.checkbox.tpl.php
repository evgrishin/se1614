<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:30:57
         compiled from "T:\home\stamp-expert.ru\www\admin\themes\default\template\controllers\products\multishop\checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:820656b45dc16c5d93-95965919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af20ced97faa4659958f649b893c6a065492787' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\admin\\themes\\default\\template\\controllers\\products\\multishop\\checkbox.tpl',
      1 => 1454659044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '820656b45dc16c5d93-95965919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'multilang' => 0,
    'only_checkbox' => 0,
    'languages' => 0,
    'field' => 0,
    'language' => 0,
    'type' => 0,
    'multishop_check' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b45dc35e86a6_57048198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b45dc35e86a6_57048198')) {function content_56b45dc35e86a6_57048198($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['multilang']->value)&&$_smarty_tpl->tpl_vars['multilang']->value) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['only_checkbox']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
				<input type="checkbox" name="multishop_check[<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]" value="1" onclick="ProductMultishop.checkField(this.checked, '<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
', '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')" <?php if (!empty($_smarty_tpl->tpl_vars['multishop_check']->value[$_smarty_tpl->tpl_vars['field']->value][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?>checked="checked"<?php }?> />
			<?php } ?>
		<?php } else { ?>
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
				<input style="<?php if (!$_smarty_tpl->tpl_vars['language']->value['is_default']) {?>display: none;<?php }?>" class="multishop_lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 translatable-field" type="checkbox" name="multishop_check[<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]" value="1" onclick="ProductMultishop.checkField(this.checked, '<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"
				<?php if (!empty($_smarty_tpl->tpl_vars['multishop_check']->value[$_smarty_tpl->tpl_vars['field']->value][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?>checked="checked"<?php }?> />
			<?php } ?>
		<?php }?>
	<?php } else { ?>
		<input type="checkbox" name="multishop_check[<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
]" value="1" onclick="ProductMultishop.checkField(this.checked, '<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')" <?php if (!empty($_smarty_tpl->tpl_vars['multishop_check']->value[$_smarty_tpl->tpl_vars['field']->value])) {?>checked="checked"<?php }?> />
	<?php }?>
<?php }?><?php }} ?>
