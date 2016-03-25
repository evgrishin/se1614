<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:32
         compiled from "T:\home\stamp-expert.ru\www\modules\footercontent\footercontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1374256c9f7f9763726-85401300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb5ec19d771d81daab4ddbbe9a29a93853dff6b4' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\footercontent\\footercontent.tpl',
      1 => 1456073990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1374256c9f7f9763726-85401300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footercontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f97e81d3_98594778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f97e81d3_98594778')) {function content_56c9f7f97e81d3_98594778($_smarty_tpl) {?><!-- Module footercontent-->
<section id="footer_html_content" class="footer-block col-xs-12 col-sm-<?php echo $_smarty_tpl->tpl_vars['footercontent']->value->width;?>
">
	<div>
		<?php if ($_smarty_tpl->tpl_vars['footercontent']->value->body_title) {?><h4><?php echo stripslashes($_smarty_tpl->tpl_vars['footercontent']->value->body_title);?>
</h4><?php }?>
		
		<div class="<?php if ($_smarty_tpl->tpl_vars['footercontent']->value->body_title) {?>toggle-footer<?php }?> clearfix">
			<?php if ($_smarty_tpl->tpl_vars['footercontent']->value->body_paragraph) {?><article class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['footercontent']->value->body_paragraph);?>
</article><?php }?>
		</div>	</div>
	</section>
<!-- /Module footer content-->
<?php }} ?>
