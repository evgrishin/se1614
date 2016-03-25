<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:12
         compiled from "T:\home\stamp-expert.ru\www\modules\manufacturertab\views\templates\hook\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2147056c9f85c447f82-88453779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a42c94376e3f7b5e94bd342137b9365f9a6337' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\manufacturertab\\views\\templates\\hook\\tab.tpl',
      1 => 1456073993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2147056c9f85c447f82-88453779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showTab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85c4782c5_50396141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85c4782c5_50396141')) {function content_56c9f85c4782c5_50396141($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['showTab']->value)) {?>
<li><a href="#manufacturerTab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Brand','mod'=>'manufacturertab'),$_smarty_tpl);?>
</a></li>
<?php }?><?php }} ?>
