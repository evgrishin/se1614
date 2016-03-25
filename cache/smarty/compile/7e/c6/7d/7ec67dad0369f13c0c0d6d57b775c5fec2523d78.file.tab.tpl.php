<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:27:57
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_hitechgame\modules\productcomments\\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2328456c9f39d8673b1-07410663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec67dad0369f13c0c0d6d57b775c5fec2523d78' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_hitechgame\\modules\\productcomments\\\\tab.tpl',
      1 => 1456075454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2328456c9f39d8673b1-07410663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f39d8ac304_08054802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f39d8ac304_08054802')) {function content_56c9f39d8ac304_08054802($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
    <h3 id="#idTab5" class="idTabHrefShort page-subheading"><span class="title"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</span></h3>
<?php }?><?php }} ?>
