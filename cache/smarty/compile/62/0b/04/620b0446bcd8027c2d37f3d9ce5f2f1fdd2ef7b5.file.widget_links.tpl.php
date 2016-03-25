<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:26:08
         compiled from "T:\home\stamp-expert.ru\www\modules\leomanagewidgets\views\widgets\widget_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2496656c9f330587da0-16214482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '620b0446bcd8027c2d37f3d9ce5f2f1fdd2ef7b5' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\leomanagewidgets\\views\\widgets\\widget_links.tpl',
      1 => 1456075459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2496656c9f330587da0-16214482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'widget_heading' => 0,
    'id' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f33064ac99_24601486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f33064ac99_24601486')) {function content_56c9f33064ac99_24601486($_smarty_tpl) {?>
 
<?php if (isset($_smarty_tpl->tpl_vars['links']->value)&&$_smarty_tpl->tpl_vars['links']->value) {?>
<div class="widget-links block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">	
		<div id="tabs<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-group">
			<ul class="nav-links">
			  <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>  
			  <li ><a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
</a></li>
			  <?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php }?>


<?php }} ?>
