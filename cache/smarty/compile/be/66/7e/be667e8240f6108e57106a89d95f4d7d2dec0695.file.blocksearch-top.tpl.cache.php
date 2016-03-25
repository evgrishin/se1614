<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:28:26
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_exist\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3247556c9f3ba430645-79394696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be667e8240f6108e57106a89d95f4d7d2dec0695' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_exist\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1456074047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3247556c9f3ba430645-79394696',
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
  'unifunc' => 'content_56c9f3ba4d55b3_61933900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f3ba4d55b3_61933900')) {function content_56c9f3ba4d55b3_61933900($_smarty_tpl) {?>
<script type="text/javascript">
$(document).ready( function(){
//search 
		$("#search_block_top").each( function(){
		var content = $(".groupe");
		$(".groupe-btn", this ).click( function(){
				content.toggleClass("show");
			}) ;
		} );
	 
});
</script>
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<a  class="groupe-btn dropdown" title="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" href="#"><i class="fa fa-search"></i></a>
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" class="groupe">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Go','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
