<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:26:39
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_hitechgame\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1179856c9f34f50c047-36078653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e8057afadf4ab74a3a92fe7fb4514b47db4d23a' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_hitechgame\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1456075451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179856c9f34f50c047-36078653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f34f555f98_45405405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f34f555f98_45405405')) {function content_56c9f34f555f98_45405405($_smarty_tpl) {?>

 
<!-- Block search module TOP -->
<div id="search_block_top" class="popup-over pull-right e-translate-down">
	<div class="popup-title"><span class="fa fa-search"></span></div>
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" class="popup-content"> 
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn fa fa-search"></button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
