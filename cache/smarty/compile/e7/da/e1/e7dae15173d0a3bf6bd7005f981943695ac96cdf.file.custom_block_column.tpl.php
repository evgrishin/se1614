<?php /* Smarty version Smarty-3.1.19, created on 2016-03-02 01:21:44
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\modules\ph_blog_column_custom\views\templates\hook\custom_block_column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2140856d607e8ea2840-31562553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7dae15173d0a3bf6bd7005f981943695ac96cdf' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\modules\\ph_blog_column_custom\\views\\templates\\hook\\custom_block_column.tpl',
      1 => 1456073981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140856d607e8ea2840-31562553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'custom_block_column_posts' => 0,
    'title' => 0,
    'layout' => 0,
    'post' => 0,
    'visit_blog' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d607e9202983_29042593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d607e9202983_29042593')) {function content_56d607e9202983_29042593($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['custom_block_column_posts']->value)&&count($_smarty_tpl->tpl_vars['custom_block_column_posts']->value)) {?>
<div id="blog_for_prestashop_column" class="block">
	<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
	
	<div class="block_content <?php if ($_smarty_tpl->tpl_vars['layout']->value=='list') {?>products-block<?php } elseif ($_smarty_tpl->tpl_vars['layout']->value=='simple_list') {?>list-block<?php } else { ?><?php }?>">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_block_column_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<li class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['layout']->value=='list') {?>
					<div class="product-content">
						<h5>
							<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Read','mod'=>'ph_blog_column_custom'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

							</a>
						</h5>
						<?php if (Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')) {?>
						<p class="product-description">
							<?php echo strip_tags($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['short_content'],120,'...'));?>

						</p>
						<?php }?>
					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['layout']->value=='simple_list') {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Read','mod'=>'ph_blog_column_custom'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

				</a>
				<?php } else { ?>
					
				<?php }?>
			</li>
			<?php } ?>
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['visit_blog']->value==true) {?>
		<p class="text-center">
			<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','list');?>
" title="<?php echo smartyTranslate(array('s'=>'Visit our blog','mod'=>'ph_blog_column_custom'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Visit our blog','mod'=>'ph_blog_column_custom'),$_smarty_tpl);?>
</a>
		</p>
		<?php }?>
	</div>
</div>	
<?php }?><?php }} ?>
