<?php /*%%SmartyHeaderCode:2129456b460f7e22457-24452202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7077c6b0f3e7684d450a4eefb2adbb0c4667780' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1454659130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2129456b460f7e22457-24452202',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b460f815c171_82263081',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b460f815c171_82263081')) {function content_56b460f815c171_82263081($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//stamp-expert.ru/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Поиск</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
