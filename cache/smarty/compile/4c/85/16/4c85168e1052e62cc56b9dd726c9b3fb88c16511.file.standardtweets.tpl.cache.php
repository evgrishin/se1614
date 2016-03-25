<?php /* Smarty version Smarty-3.1.19, created on 2016-03-02 01:21:44
         compiled from "T:\home\stamp-expert.ru\www\modules\standardtweets\standardtweets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:712256d607e8b46254-93266521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c85168e1052e62cc56b9dd726c9b3fb88c16511' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\standardtweets\\standardtweets.tpl',
      1 => 1456074003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712256d607e8b46254-93266521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'widgetid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d607e8b7ba25_11275697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d607e8b7ba25_11275697')) {function content_56d607e8b7ba25_11275697($_smarty_tpl) {?><section id="standardtweets_module" class="block clearfix">
<a class="twitter-timeline" href="https://twitter.com/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" data-widget-id="<?php echo $_smarty_tpl->tpl_vars['widgetid']->value;?>
">Tweets by @<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</section>
<?php }} ?>
