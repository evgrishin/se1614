<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:26:37
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_hitechgame\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2644256c9f34d9423d3-70454406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc7fe481a12b6f43471e13512414e8e3dcd117b1' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_hitechgame\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1456075451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2644256c9f34d9423d3-70454406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f34da0bae1_66982809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f34da0bae1_66982809')) {function content_56c9f34da0bae1_66982809($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
		<div class="cat-title"><i class="fa fa-navicon"></i></div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

		</ul>
			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
			<div class="sf-search noBack">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
			</div>
			<?php }?>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
