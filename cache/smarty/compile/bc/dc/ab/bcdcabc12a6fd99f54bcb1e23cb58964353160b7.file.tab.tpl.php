<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 18:00:24
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_exist\modules\productcomments\\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2199556e17df82712e4-23185021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcdcabc12a6fd99f54bcb1e23cb58964353160b7' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_exist\\modules\\productcomments\\\\tab.tpl',
      1 => 1456074058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2199556e17df82712e4-23185021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e17df82c32d2_95521984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e17df82c32d2_95521984')) {function content_56e17df82c32d2_95521984($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
    <h3 id="#idTab5" class="idTabHrefShort page-subheading"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</h3>
<?php }?><?php }} ?>
