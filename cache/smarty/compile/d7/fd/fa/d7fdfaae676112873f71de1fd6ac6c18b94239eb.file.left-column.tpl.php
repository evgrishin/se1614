<?php /* Smarty version Smarty-3.1.19, created on 2016-03-02 01:21:44
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\modules\ph_simpleblog\views\templates\hook\left-column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118756d607e8cbbdf7-38910527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7fdfaae676112873f71de1fd6ac6c18b94239eb' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\modules\\ph_simpleblog\\views\\templates\\hook\\left-column.tpl',
      1 => 1456073981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118756d607e8cbbdf7-38910527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'child_category' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d607e8e69fe0_38192124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d607e8e69fe0_38192124')) {function content_56d607e8e69fe0_38192124($_smarty_tpl) {?>
<div id="ph_simpleblog_categories" class="block informations_block_left">
	<p class="title_block"><a href="<?php echo htmlspecialchars(ph_simpleblog::getLink(), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</a></p>
	<div class="block_content list-block">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Link to','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					<?php if (isset($_smarty_tpl->tpl_vars['category']->value['childrens'])) {?>
					<ul class="child_categories">
						<?php  $_smarty_tpl->tpl_vars['child_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['childrens']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child_category']->key => $_smarty_tpl->tpl_vars['child_category']->value) {
$_smarty_tpl->tpl_vars['child_category']->_loop = true;
?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','category',array('sb_category'=>$_smarty_tpl->tpl_vars['child_category']->value['link_rewrite'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Link to','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child_category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child_category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						<?php } ?>
					</ul>
					<?php }?>
				</li>
			<?php } ?>
		</ul>
	</div>
</div><?php }} ?>
