<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:11
         compiled from "T:\home\stamp-expert.ru\www\modules\iqitproducttags\views\templates\front\iqitproducttags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1653056c9f85c1a98e2-07923341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edff4539dcd6de36ea7052fadf3144ba8ed87471' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\iqitproducttags\\views\\templates\\front\\iqitproducttags.tpl',
      1 => 1456073993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1653056c9f85c1a98e2-07923341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85c23b079_52614726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85c23b079_52614726')) {function content_56c9f85c23b079_52614726($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['tags']->value)) {?>
<ul class="iqitproducttags">
<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['tag']->key;
?>
<li><a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,"tag=".$_tmp1);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php } ?>
</ul>
<?php }?><?php }} ?>
