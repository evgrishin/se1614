<?php /* Smarty version Smarty-3.1.19, created on 2016-03-02 01:21:47
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1960156d607ed12e278-34842613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9b1a6b4be67b5d0cb9d60979670c74d7b4a450' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\product-list.tpl',
      1 => 1456073982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1960156d607ed12e278-34842613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'nbLi' => 0,
    'yotpo_stars_pl' => 0,
    'warehouse_vars' => 0,
    'yotpoAppkey' => 0,
    'id' => 0,
    'class' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'totModuloMobile' => 0,
    'generatorGrid' => 0,
    'product' => 0,
    'productimg' => 0,
    'iqit_lazy_load' => 0,
    'link' => 0,
    'homeSize' => 0,
    'PS_CATALOG_MODE' => 0,
    'quick_view' => 0,
    'comparator_max_item' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
    'yotpoDomain' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d607ef3f2306_55843687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d607ef3f2306_55843687')) {function content_56d607ef3f2306_55843687($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\function.math.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	






	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLineLarge", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'calculateGrid','size'=>'large'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLine", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'calculateGrid','size'=>'medium'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLineTablet", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'calculateGrid','size'=>'small'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLineMobile", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'calculateGrid','size'=>'mediumsmall'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLineMobileS", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'calculateGrid','size'=>'xtrasmall'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	

	
	<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>Smarty::$_smarty_vars['capture']['nbItemsPerLine'],'assign'=>'nbLines'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet'],'assign'=>'nbLinesTablet'),$_smarty_tpl);?>


	<?php if ((isset($_smarty_tpl->tpl_vars['yotpo_stars_pl']->value)&&$_smarty_tpl->tpl_vars['yotpo_stars_pl']->value==1)||(isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['yotpo_stars'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['yotpo_stars']==1)) {?>
	<script src="http://staticw2.yotpo.com/<?php echo $_smarty_tpl->tpl_vars['yotpoAppkey']->value;?>
/widget.js"></script>
	<script type="text/javascript">
	
	var yotpo = new Yotpo(yotpoAppkey, {"reviews":false,"testimonials":{"settings":{"default_tab":"product_tab","show_tab":"both"}},"testimonials_tab":false,"questions_and_answers":false,"questions_and_answers_standalone":false,"vendor_review_creation":false,"language":"en","comments":false,"host":"static","direction":"ltr"});
	Yotpo.ready(function() {
		yotpo.init();
	});
	
	</script>
	<?php }?>
	<!-- Products list -->
	<ul<?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="product_list grid row<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
		<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLine'=>Smarty::$_smarty_vars['capture']['nbItemsPerLine'],'assign'=>'totModulo'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLineT'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet'],'assign'=>'totModuloTablet'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLineT'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile'],'assign'=>'totModuloMobile'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['nbItemsPerLine'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloMobile'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile'], null, 0);?><?php }?>
		<li class="ajax_block_product <?php if (isset($_smarty_tpl->tpl_vars['generatorGrid']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['generatorGrid']->value;?>
 <?php } else { ?>col-xs-<?php echo Smarty::$_smarty_vars['capture']['nbItemsPerLineMobileS'];?>
 col-ms-<?php echo Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile'];?>
 col-sm-<?php echo Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet'];?>
 col-md-<?php echo Smarty::$_smarty_vars['capture']['nbItemsPerLine'];?>
 col-lg-<?php echo Smarty::$_smarty_vars['capture']['nbItemsPerLineLarge'];?>
 <?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLine']==0) {?> last-in-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLine']==1) {?> first-in-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?> last-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet']==0) {?> last-item-of-tablet-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet']==1) {?> first-item-of-tablet-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile']==0) {?> last-item-of-mobile-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile']==1) {?> first-item-of-mobile-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModuloMobile']->value)) {?> last-mobile-line<?php }?>">
			<div class="product-container" itemscope>
				<div class="left-block">
					<div class="product-image-container">
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['quantity'])&&$_smarty_tpl->tpl_vars['product']->value['quantity']>0)||(isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAttributesPL','productid'=>$_smarty_tpl->tpl_vars['product']->value['id_product']),$_smarty_tpl);?>

						<?php }?>
						<a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']])&&!empty($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']])) {?>
							<img class="replace-2x img-responsive img_0 lazy <?php if (isset($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1])&&!empty($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1])) {?> img_1e<?php }?>" 
							<?php if ((isset($_smarty_tpl->tpl_vars['iqit_lazy_load']->value)&&$_smarty_tpl->tpl_vars['iqit_lazy_load']->value==1)||(isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['iqit_lazy_load'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['iqit_lazy_load']==1)) {?>
							data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],(($_smarty_tpl->tpl_vars['product']->value['id_product']).("-")).($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][0]['id_image']),'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" 
							<?php } else { ?>
							src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],(($_smarty_tpl->tpl_vars['product']->value['id_product']).("-")).($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][0]['id_image']),'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" 
							<?php }?>
							alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?>  />	
							<?php if (isset($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1])&&!empty($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1])) {?>
							<img class="replace-2x img-responsive img_1 lazy"
							<?php if ((isset($_smarty_tpl->tpl_vars['iqit_lazy_load']->value)&&$_smarty_tpl->tpl_vars['iqit_lazy_load']->value==1)||(isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['iqit_lazy_load'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['iqit_lazy_load']==1)) {?>
							data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],(($_smarty_tpl->tpl_vars['product']->value['id_product']).("-")).($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1]['id_image']),'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" 
							<?php } else { ?>
							src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],(($_smarty_tpl->tpl_vars['product']->value['id_product']).("-")).($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1]['id_image']),'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" 
							<?php }?> 
							alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?>  />	
							<?php }?> <?php } else { ?>
							<img class="replace-2x img-responsive img_0 lazy"
							<?php if ((isset($_smarty_tpl->tpl_vars['iqit_lazy_load']->value)&&$_smarty_tpl->tpl_vars['iqit_lazy_load']->value==1)||(isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['iqit_lazy_load'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['iqit_lazy_load']==1)) {?>
							data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
							<?php } else { ?>
							src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
							<?php }?> 
							 title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?>  />
						<?php }?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCountDown','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

						</a>
						
						<?php if ((isset($_smarty_tpl->tpl_vars['iqit_lazy_load']->value)&&$_smarty_tpl->tpl_vars['iqit_lazy_load']->value==1)||(isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['iqit_lazy_load'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['iqit_lazy_load']==1)) {?>

						<?php } else { ?>
						
						<?php }?>

						<div class="product-flags">
						<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']) {?>
								<span class="online-label <?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>online-label2<?php }?>"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span>
							<?php }?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
								<span class="sale-label"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
							<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
								<span class="new-label"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
								<span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span>
						<?php }?>
					</div>
					<div class="functional-buttons functional-buttons-grid clearfix">
						<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
						<div class="quickview col-xs-6">
							<a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
">
								<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>

							</a>
							</div>
						<?php }?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

						<?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
							<div class="compare col-xs-3">
								<a class="add_to_compare" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" title="<?php echo smartyTranslate(array('s'=>'Add to Compare'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to Compare'),$_smarty_tpl);?>
</a>
							</div>
						<?php }?>	
					</div>
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
							<span class="availability availability-slidein">
								<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
										<link  href="http://schema.org/InStock" />
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
									<span class="available-dif">
										<link href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="out-of-stock">
										<link  href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>

									</span>
								<?php }?>
								
							</span>
						<?php }?>
					<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['color_list'])) {?>
						<div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['product']->value['color_list'];?>
 </div>
					<?php }?>

					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_virtual'])&&!$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl);?>

				</div>
				<div class="right-block">
					<h5  class="product-name-container">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?>
						<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],60,'...'), ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</h5>
					<span class="product-reference"><?php if (isset($_smarty_tpl->tpl_vars['product']->value['reference'])) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
<?php } else { ?>&nbsp;<?php }?></span>
					<p class="product-desc" >
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>

					</p>
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
					<div  itemscope class="content_price">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
							<span  class="price product-price">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
							</span>
							<meta  content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

								<span class="old-price product-price">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

								</span>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
									<span class="price-percent-reduction small">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='amount') {?>
									<span class="price-percent-reduction small">-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['product']->value['price_without_reduction'])-floatval($_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl);?>
</span>
								<?php }?>
							<?php }?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>


						<?php }?>
					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
					<?php } else { ?><div class="content_price">&nbsp;</div>
					<?php }?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>


					<?php if ((isset($_smarty_tpl->tpl_vars['yotpo_stars_pl']->value)&&$_smarty_tpl->tpl_vars['yotpo_stars_pl']->value==1)||(isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['yotpo_stars'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['yotpo_stars']==1)) {?>
					<div class="yotpo bottomLine" 
					data-appkey="<?php echo $_smarty_tpl->tpl_vars['yotpoAppkey']->value;?>
"
					data-domain="<?php echo $_smarty_tpl->tpl_vars['yotpoDomain']->value;?>
"
					data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"
					data-product-models=""
					data-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-url="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
					data-image-url="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'');?>
" 
					data-bread-crumbs="">
				</div> 
				<?php }?>	
							<div class="button-container">
						<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<?php if ((!isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])||!$_smarty_tpl->tpl_vars['product']->value['customization_required'])&&($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?>add=1&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,Smarty::$_smarty_vars['capture']['default'],false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product-attribute="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-minimal_quantity="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']>=1) {?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
<?php }?>">
									<span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
								</a>
								<div class="pl-quantity-input-wrapper">
									<input type="text" name="qty" class="form-control qtyfield quantity_to_cart_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']>1) {?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])) {?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
<?php } else { ?>1<?php }?><?php }?>"/>
									<div class="quantity-input-b-wrapper">
										<a href="#" data-field-qty="quantity_to_cart_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" class="transition-300 pl_product_quantity_down">
											<span><i class="icon-caret-down"></i></span>
										</a>
										<a href="#" data-field-qty="quantity_to_cart_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" class="transition-300 pl_product_quantity_up ">
											<span><i class="icon-caret-up"></i></span>
										</a>
									</div>
								</div>						
							<?php } else { ?>
								<a  class="button lnk_view btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
">
							<span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])&&$_smarty_tpl->tpl_vars['product']->value['customization_required'])) {?><?php echo smartyTranslate(array('s'=>'Customize'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
<?php }?></span>
						</a>
							<?php }?>
							<?php } else { ?>
								<a class="button lnk_view btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
">
							<span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])&&$_smarty_tpl->tpl_vars['product']->value['customization_required'])) {?><?php echo smartyTranslate(array('s'=>'Customize'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
<?php }?></span>
						</a>
						<?php }?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'after_price'),$_smarty_tpl);?>

					</div>
				
				</div>

			</div><!-- .product-container> -->
		
		</li>
	<?php } ?>
	</ul>

<?php }?><?php }} ?>
