<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:24
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\product-list-small.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166556c9f7f0c3a096-87930853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2656d4b70fc4558b089a5b3a5748facfcf08ee9a' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\product-list-small.tpl',
      1 => 1456073982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166556c9f7f0c3a096-87930853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'ar' => 0,
    'warehouse_vars' => 0,
    'accesories' => 0,
    'generatorGrid' => 0,
    'iqitGenerator' => 0,
    'dt' => 0,
    'ap' => 0,
    'line_lg' => 0,
    'line_md' => 0,
    'line_sm' => 0,
    'line_ms' => 0,
    'line_xs' => 0,
    'colnb' => 0,
    'product' => 0,
    'productimg' => 0,
    'link' => 0,
    'homeSize' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f1d7be85_14518249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f1d7be85_14518249')) {function content_56c9f7f1d7be85_14518249($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
<div class="block_content <?php if (!isset($_smarty_tpl->tpl_vars['ar']->value)) {?> <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['carousel_style'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['carousel_style']==0) {?>alternative-slick-arrows <?php }?><?php }?>">
	<!-- Products list -->
	<div <?php if (isset($_smarty_tpl->tpl_vars['accesories']->value)) {?>id="accesories-slick-slider"<?php }?> class="product_list_small <?php if (isset($_smarty_tpl->tpl_vars['generatorGrid']->value)) {?>row  product_list_small_grid<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['iqitGenerator']->value)) {?> slick_carousel iqitcarousel<?php }?> slick_carousel_style"   
	<?php if (isset($_smarty_tpl->tpl_vars['iqitGenerator']->value)) {?>data-slick='{<?php if (isset($_smarty_tpl->tpl_vars['dt']->value)&&$_smarty_tpl->tpl_vars['dt']->value) {?>"dots": true,<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['ap']->value)&&$_smarty_tpl->tpl_vars['ap']->value) {?>"autoplay": true, <?php }?>"slidesToShow": <?php echo $_smarty_tpl->tpl_vars['line_lg']->value;?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['line_lg']->value;?>
, "responsive": [ 
					{ "breakpoint": 1320, "settings": { "slidesToShow": <?php echo $_smarty_tpl->tpl_vars['line_md']->value;?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['line_md']->value;?>
}}, { "breakpoint": 1000, "settings": { "slidesToShow": <?php echo $_smarty_tpl->tpl_vars['line_sm']->value;?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['line_sm']->value;?>
}}, { "breakpoint": 768, "settings": { "slidesToShow": <?php echo $_smarty_tpl->tpl_vars['line_ms']->value;?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['line_ms']->value;?>
}}, { "breakpoint": 480, "settings": { "slidesToShow": <?php echo $_smarty_tpl->tpl_vars['line_xs']->value;?>
, "slidesToScroll": <?php echo $_smarty_tpl->tpl_vars['line_xs']->value;?>
}} ]}'<?php }?> >
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['colnb']->value)) {?><?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first'])) {?><div class="iqitcarousel-product"><?php }?><?php }?>
		<div class="ajax_block_product <?php if (isset($_smarty_tpl->tpl_vars['generatorGrid']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['generatorGrid']->value;?>
 <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['colnb']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['colnb']->value;?>
<?php }?>">
			<div class="product-container clearfix">
				<div class="left-block">
					<div class="product-image-container">
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['quantity'])&&$_smarty_tpl->tpl_vars['product']->value['quantity']>0)||(isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAttributesPL','productid'=>$_smarty_tpl->tpl_vars['product']->value['id_product']),$_smarty_tpl);?>

						<?php }?>
						<a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']])&&!empty($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']])) {?>
							<img class="replace-2x img-responsive img_0 <?php if (isset($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1])&&!empty($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1])) {?> img_1e<?php }?>" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],(($_smarty_tpl->tpl_vars['product']->value['id_product']).("-")).($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][0]['id_image']),'medium_default'), ENT_QUOTES, 'UTF-8', true);?>

							" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?>  />	
							<?php if (isset($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1])&&!empty($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1])) {?>
							<img class="replace-2x img-responsive img_1" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],(($_smarty_tpl->tpl_vars['product']->value['id_product']).("-")).($_smarty_tpl->tpl_vars['productimg']->value[$_smarty_tpl->tpl_vars['product']->value['id_product']][1]['id_image']),'medium_default'), ENT_QUOTES, 'UTF-8', true);?>

							" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?>  />	
							<?php }?> <?php } else { ?>
							<img class="replace-2x img-responsive img_0" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> />
						<?php }?>
						</a>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_virtual'])&&!$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl);?>

				</div>
				<div class="right-block">
					<h5 class="product-name-container">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?>
						<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"  >
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],60,'...'), ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</h5>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
			
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
					<div  class="content_price">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
							<span class="price product-price">
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
							<?php }?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

						<?php }?>
					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
					<?php } else { ?><div class="content_price">&nbsp;</div>
					<?php }?>

					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
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
"  value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']>1) {?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']);?>
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
					<?php }?>
					
				
				</div>

			</div><!-- .product-container> -->
		
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['colnb']->value)) {?>
		<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['colnb']->value==0)&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?></div><div class="iqitcarousel-product"><?php }?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?></div><?php }?>
		<?php }?>
	<?php } ?>
	</div>
</div>
<?php }?><?php }} ?>
