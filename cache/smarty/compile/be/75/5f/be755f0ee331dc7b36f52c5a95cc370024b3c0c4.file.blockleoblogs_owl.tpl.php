<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:53:16
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_exist\modules\blockleoblogs\views\templates\front\blockleoblogs_owl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:717756c9f98c44da43-60350076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be755f0ee331dc7b36f52c5a95cc370024b3c0c4' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_exist\\modules\\blockleoblogs\\views\\templates\\front\\blockleoblogs_owl.tpl',
      1 => 1456074046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '717756c9f98c44da43-60350076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mytab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f98c4acb66_34305678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f98c4acb66_34305678')) {function content_56c9f98c4acb66_34305678($_smarty_tpl) {?>

<!-- MODULE Block blockleoblogstabs -->
<?php echo $_smarty_tpl->getSubTemplate ("./library/exist_blog_owl.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('moduleCalling'=>"blockleoblogs"), 0);?>

<!-- /MODULE Block blockleoblogstabs -->

<?php $_smarty_tpl->tpl_vars["call_owl_carousel"] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['mytab']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('./owl_carousel_config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
