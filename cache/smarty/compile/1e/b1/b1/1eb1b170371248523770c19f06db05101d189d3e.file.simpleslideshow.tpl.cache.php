<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:20
         compiled from "T:\home\stamp-expert.ru\www\modules\simpleslideshow\simpleslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3105656c9f7ec5ff629-54276094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eb1b170371248523770c19f06db05101d189d3e' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\simpleslideshow\\simpleslideshow.tpl',
      1 => 1456074003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3105656c9f7ec5ff629-54276094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
    'modules_dir' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7ec714844_72570020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7ec714844_72570020')) {function content_56c9f7ec714844_72570020($_smarty_tpl) {?><section id="ei-slider" class="loading_mainslider col-xs-12">
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
		<div>
			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
"><?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']) {?>
				<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['modules_dir']->value)."simpleslideshow/slides/".((string)$_smarty_tpl->tpl_vars['image']->value['name']), null, 0);?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" class="img-responsive">
				<?php }?>	

				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?></a><?php }?>
			</div>
			<?php } ?>
</section><!-- ei-slider -->
<?php }} ?>
