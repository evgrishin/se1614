<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:21
         compiled from "T:\home\stamp-expert.ru\www\modules\productpageadverts\productpageadverts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2911156c9f86594d8d5-44960746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1494a6b00dbfe8b5c4455e08f3c7cc901b81c2f4' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\productpageadverts\\productpageadverts.tpl',
      1 => 1456073995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2911156c9f86594d8d5-44960746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'climages' => 0,
    'image' => 0,
    'modules_dir' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f865a7dd72_25545114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f865a7dd72_25545114')) {function content_56c9f865a7dd72_25545114($_smarty_tpl) {?><section id="productpageadverts" class="flexslider loading_mainslider">
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['climages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
		<div>
			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
">
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']) {?>
				<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['modules_dir']->value)."productpageadverts/slides/".((string)$_smarty_tpl->tpl_vars['image']->value['name']), null, 0);?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" >
				<?php }?>	

				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?>
			</a>    
			<?php }?></div>
			<?php } ?>
</section><?php }} ?>
