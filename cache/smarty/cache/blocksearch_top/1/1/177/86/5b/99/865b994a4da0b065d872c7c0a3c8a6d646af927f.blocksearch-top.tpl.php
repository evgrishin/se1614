<?php /*%%SmartyHeaderCode:2110056e73cae7c0276-74607903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '865b994a4da0b065d872c7c0a3c8a6d646af927f' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\minimal_16_theme\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1457994503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110056e73cae7c0276-74607903',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e94361f30ed7_29427580',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e94361f30ed7_29427580')) {function content_56e94361f30ed7_29427580($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://stamp-expert.ru/search" >
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
