<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 18:04:59
         compiled from "T:\home\stamp-expert.ru\www\themes\theme948\modules\blockcmsinfo\blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1918256e17f0a59e0d0-56092242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38525e020d04229a86e5faa4ac27f79531554f75' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\theme948\\modules\\blockcmsinfo\\blockcmsinfo.tpl',
      1 => 1457301366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1918256e17f0a59e0d0-56092242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e17f0a60d839_92488196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e17f0a60d839_92488196')) {function content_56e17f0a60d839_92488196($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>

<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block" class="col-xs-8" >
<div class="clearfix row">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><div class="cmsinfo_block_inset"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div></div>
		<?php } ?>
</div>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>
