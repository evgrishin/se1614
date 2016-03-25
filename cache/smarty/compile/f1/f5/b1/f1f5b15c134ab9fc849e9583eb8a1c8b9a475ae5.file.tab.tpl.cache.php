<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:12
         compiled from "T:\home\stamp-expert.ru\www\modules\additionalproductstabs\views\templates\hook\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181756c9f85c39c153-46665050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f5b15c134ab9fc849e9583eb8a1c8b9a475ae5' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\additionalproductstabs\\views\\templates\\hook\\tab.tpl',
      1 => 1456073985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181756c9f85c39c153-46665050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabName' => 0,
    'tabNameGlobal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85c3e9c88_37842127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85c3e9c88_37842127')) {function content_56c9f85c3e9c88_37842127($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabName']->value)) {?>
<li><a href="#additionalTab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tabName']->value;?>
</a></li>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['tabNameGlobal']->value)) {?>
<li><a href="#additionalTabGlobal" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tabNameGlobal']->value;?>
</a></li>
<?php }?>
<?php }} ?>
