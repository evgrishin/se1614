<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:29
         compiled from "T:\home\stamp-expert.ru\www\modules\blocksocial_mod\blocksocial_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:435056c9f7f625e822-81383182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed84b049454accd6874cfed527bc0535ccde761' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\blocksocial_mod\\blocksocial_mod.tpl',
      1 => 1456073988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '435056c9f7f625e822-81383182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'google_url' => 0,
    'youtube_url' => 0,
    'vimeo_url' => 0,
    'pinterest_url' => 0,
    'instagram_url' => 0,
    'tumblr_url' => 0,
    'flickr_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f647f849_79636928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f647f849_79636928')) {function content_56c9f7f647f849_79636928($_smarty_tpl) {?><section id="social_block_mod" class="social_block_mod footer-block col-xs-12 col-sm-3">
	<div>
		<h4><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
</h4>
		<ul class="toggle-footer clearfix">
			<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?><li class="facebook"><a href="<?php echo $_smarty_tpl->tpl_vars['facebook_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?><li class="twitter"><a href="<?php echo $_smarty_tpl->tpl_vars['twitter_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['google_url']->value!='') {?><li class="google"><a href="<?php echo $_smarty_tpl->tpl_vars['google_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Google +','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?><li class="youtube"><a href="<?php echo $_smarty_tpl->tpl_vars['youtube_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?><li class="vimeo"><a href="<?php echo $_smarty_tpl->tpl_vars['vimeo_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?><li class="pinterest"><a href="<?php echo $_smarty_tpl->tpl_vars['pinterest_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!='') {?><li class="instagram"><a href="<?php echo $_smarty_tpl->tpl_vars['instagram_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tumblr_url']->value!='') {?><li class="tumblr"><a href="<?php echo $_smarty_tpl->tpl_vars['tumblr_url']->value;?>
" target="_blank" class="transition-300" title="<?php echo smartyTranslate(array('s'=>'Tumblr','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['flickr_url']->value!='') {?><li class="flickr"><a href="<?php echo $_smarty_tpl->tpl_vars['flickr_url']->value;?>
" target="_blank" class="transition-300" title="<?php echo smartyTranslate(array('s'=>'Flickr','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!='') {?><li class="rss"><a href="<?php echo $_smarty_tpl->tpl_vars['rss_url']->value;?>
" target="_blank" class="transition-300" title="<?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
		</ul></div>
</section>
<?php }} ?>
