<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:30
         compiled from "T:\home\stamp-expert.ru\www\modules\facebookslide\facebookslide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:498756c9f7f7aaee60-79476830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba04e7dbdaab61aba88aa5b78a13359172c69efd' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\facebookslide\\facebookslide.tpl',
      1 => 1456073990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498756c9f7f7aaee60-79476830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'fbmod_position' => 0,
    'fbmod_link' => 0,
    'fbmod_faces' => 0,
    'fbmod_stream' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f7b43117_82136928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f7b43117_82136928')) {function content_56c9f7f7b43117_82136928($_smarty_tpl) {?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
_<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
/all.js#xfbml=1&appId=345551085518968";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fblike-box" <?php if ($_smarty_tpl->tpl_vars['fbmod_position']->value==1) {?>class="left_fb"<?php } else { ?>class="right_fb"<?php }?>>
  <div class="belt"><i class="icon-facebook"></i></div>
  <div id="fblike_inner">
  	<div class="fb-like-box-inner">
    <div class="fb-like-box" data-href="<?php echo $_smarty_tpl->tpl_vars['fbmod_link']->value;?>
" data-width="292" data-show-faces="<?php if ($_smarty_tpl->tpl_vars['fbmod_faces']->value==1) {?>true<?php } else { ?>false<?php }?>" data-stream="<?php if ($_smarty_tpl->tpl_vars['fbmod_stream']->value==1) {?>true<?php } else { ?>false<?php }?>" data-show-border="false" data-header="false"></div>
  </div></div>
</div><?php }} ?>
