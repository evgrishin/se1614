<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:32
         compiled from "T:\home\stamp-expert.ru\www\modules\iqitparallax\iqitparallax_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:362556c9f7f9631c22-67678538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c12ec3f8d89c3426cef0d7800d6ce4ddb4c702a' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\iqitparallax\\iqitparallax_footer.tpl',
      1 => 1456073992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '362556c9f7f9631c22-67678538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parallax' => 0,
    'image_path' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f97149b8_99812785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f97149b8_99812785')) {function content_56c9f7f97149b8_99812785($_smarty_tpl) {?><!-- Module PARALAX -->
<?php if (!$_smarty_tpl->tpl_vars['parallax']->value->width&&$_smarty_tpl->tpl_vars['parallax']->value->hook==2) {?> 
<div class="container iqitparallax-container">
<?php }?>
<section id="parallax_block_center" class="parallax_block">
<div class="parallax-outer" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['image_path']->value), ENT_QUOTES, 'UTF-8', true);?>
); <?php if ($_smarty_tpl->tpl_vars['parallax']->value->width&&$_smarty_tpl->tpl_vars['parallax']->value->hook==1) {?>   margin: 0 -500%; padding: 0.5em 500%; <?php }?>">
<div class="parallax-inner">

<?php if ($_smarty_tpl->tpl_vars['parallax']->value->body_paragraph) {?>
<div class="container"><article class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['parallax']->value->body_paragraph);?>
</article>
	</div><?php }?>
</div>
</div>
</section>
<?php if (!$_smarty_tpl->tpl_vars['parallax']->value->width&&$_smarty_tpl->tpl_vars['parallax']->value->hook==2) {?> 
</div>
<?php }?>
<!-- /Module PARALAX -->
<?php }} ?>
