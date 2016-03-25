<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:17
         compiled from "T:\home\stamp-expert.ru\www\modules\blocksearch_mod\blocksearch-top_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2059856c9f7e9c3c601-32423682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da0adf46dd634c34b29d1327d46c68df86927e28' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\blocksearch_mod\\blocksearch-top_mod.tpl',
      1 => 1456073987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2059856c9f7e9c3c601-32423682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'blocksearch_type' => 0,
    'iqitsearch_text' => 0,
    'iqitsearch_shower' => 0,
    'link' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'search_query' => 0,
    'blocksearch_empty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7ea10e849_67727545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7ea10e849_67727545')) {function content_56c9f7ea10e849_67727545($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==2) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['blocksearch_type']->value)) {?>
		<div class="iqit-search-shower">
		<div class="iqit-search-shower-i"><i class="icon icon-search"></i><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</div>
		<div id="search_block_top" class="<?php if ($_smarty_tpl->tpl_vars['iqitsearch_text']->value!='') {?>issearchcontent<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['iqitsearch_shower']->value)&&$_smarty_tpl->tpl_vars['iqitsearch_shower']->value) {?>iqit-search-c<?php } else { ?>iqit-search<?php }?>" >
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />

			<div class="search_query_container <?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value)) {?>search-w-selector<?php }?>">
			<?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value)) {?>
				<div class="search-cat-selector">
					<select class="form-control search-cat-select" name="search_query_cat">
						<option value="0"><?php echo smartyTranslate(array('s'=>'All categories','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
								<?php echo $_smarty_tpl->getSubTemplate ("./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>true), 0);?>

							<?php } ?>
					</select>
				</div>
			<?php } else { ?>
				<input type="hidden" name="search-cat-select" value="0" class="search-cat-select" />
			<?php }?>
				<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			
			<button type="submit" name="submit_search" class="button-search">
				<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</span>
			</button>
			</div>
		</form>
		</div>
	</div>
	<?php }?>
<?php } else { ?>

	<!-- Block search module TOP -->
	<div id="search_block_top_content" class="col-xs-12 col-sm-<?php echo 4-$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width']/2;?>
 <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_position'])&&!$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_position']) {?> col-sm-pull-<?php echo 4+$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width'];?>
 disable_center<?php }?>">
	<div class="iqitsearch-inner">
	<?php echo $_smarty_tpl->tpl_vars['iqitsearch_text']->value;?>

	<?php if (!isset($_smarty_tpl->tpl_vars['blocksearch_empty']->value)) {?>

	<?php if (isset($_smarty_tpl->tpl_vars['iqitsearch_shower']->value)&&$_smarty_tpl->tpl_vars['iqitsearch_shower']->value) {?></div></div> <div class="iqit-search-shower">

	<div class="iqit-search-shower-i"><i class="icon icon-search"></i><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</div><?php }?>
	<div id="search_block_top" class="<?php if ($_smarty_tpl->tpl_vars['iqitsearch_text']->value!='') {?>issearchcontent<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['iqitsearch_shower']->value)&&$_smarty_tpl->tpl_vars['iqitsearch_shower']->value) {?>iqit-search-c<?php } else { ?>iqit-search<?php }?>" >
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />

			<div class="search_query_container <?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value)) {?>search-w-selector<?php }?>">
			<?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value)) {?>
			<div class="search-cat-selector"><select class="form-control search-cat-select" name="search_query_cat">
			<option value="0"><?php echo smartyTranslate(array('s'=>'All categories','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ("./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>true), 0);?>

			<?php } ?>
			</select></div>
			<?php } else { ?>
			<input type="hidden" name="search-cat-select" value="0" class="search-cat-select" />
			<?php }?>
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			
			<button type="submit" name="submit_search" class="button-search">
				<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</span>
			</button>
			</div>
		</form>

	</div>
		
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['iqitsearch_shower']->value)&&$_smarty_tpl->tpl_vars['iqitsearch_shower']->value) {?></div><?php } else { ?> </div></div><?php }?>

<?php }?>

	


	<!-- /Block search module TOP -->
<?php }} ?>
