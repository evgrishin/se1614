<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:32
         compiled from "T:\home\stamp-expert.ru\www\modules\homepageadvertise2\homepageadvertise2_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:391956c9f7f9830c75-85959268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6dbd2f6b713134c8faad57c6d8df718d10ab65e' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\homepageadvertise2\\homepageadvertise2_footer.tpl',
      1 => 1456073990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '391956c9f7f9830c75-85959268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'number_per_line' => 0,
    'images' => 0,
    'gridSize' => 0,
    'image' => 0,
    'modules_dir' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f9a009d5_06214335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f9a009d5_06214335')) {function content_56c9f7f9a009d5_06214335($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['number_per_line']->value==5) {?>
<?php $_smarty_tpl->tpl_vars['gridSize'] = new Smarty_variable(15, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['number_per_line']->value==7) {?>
<?php $_smarty_tpl->tpl_vars['gridSize'] = new Smarty_variable(17, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['number_per_line']->value==8) {?>
<?php $_smarty_tpl->tpl_vars['gridSize'] = new Smarty_variable(18, null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['gridSize'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['number_per_line']->value, null, 0);?>
<?php }?>
<section id="homepageadvertise2" class="col-xs-12 clearfix">
	<ul class="row">
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
		<li class="col-xs-6 col-sm-<?php echo $_smarty_tpl->tpl_vars['gridSize']->value;?>
">
			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
"><?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']) {?>
				<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['modules_dir']->value)."homepageadvertise2/slides/".((string)$_smarty_tpl->tpl_vars['image']->value['name']), null, 0);?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" >
				<?php }?>	

			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']) {?></a><?php }?>
		</li>
			<?php } ?>
		</ul>
</section><?php }} ?>
