<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:31
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2449656c9f7f92206e4-64663998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cdf6a98a6bd70febf9bd48fb090bf203679a916' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\footer.tpl',
      1 => 1456073975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2449656c9f7f92206e4-64663998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'warehouse_vars' => 0,
    'left_column_size' => 0,
    'right_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'link' => 0,
    'page_name' => 0,
    'base_dir_ssl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f96019c8_54951660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f96019c8_54951660')) {function content_56c9f7f96019c8_54951660($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
						<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['left_on_phones'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['left_on_phones']==1) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
					<div id="left_column" class="column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
 col-sm-pull-<?php echo 12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
					<?php }?>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'footerTopBanner'),$_smarty_tpl);?>
 

			<div class="footer-container <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['f_wrap_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['f_wrap_width']==0) {?> container <?php }?>">
				<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_width']==1) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer1_status'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer1_status']==1) {?>
				<div class="footer-container-inner1">
				<footer id="footer1"  class="container">
					<div class="row"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdditionalFooter'),$_smarty_tpl);?>
</div>
				</footer>
				</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<div class="footer-container-inner">
				<footer id="footer"  class="container">
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
				</footer>
				</div>
				<?php }?>
				<?php } elseif (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_width']==0) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer1_status'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer1_status']==1) {?>
				<footer id="footer1"  class="container footer-container-inner1">
						
					<div class="row"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdditionalFooter'),$_smarty_tpl);?>
</div>
					
				</footer>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<footer id="footer"  class="container footer-container-inner">
						
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					
				</footer>
				<?php }?>
				<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['second_footer'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['second_footer']==1&&isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style'])&&($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==0||$_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==2)) {?>
            <div class="footer_copyrights">
            <footer class="container clearfix">
            	<div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['copyright_text'])) {?><div class="col-sm-6"> <?php echo $_smarty_tpl->tpl_vars['warehouse_vars']->value['copyright_text'];?>
  </div><?php }?>

             <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_img_src'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_img_src']) {?><div class="paymants_logos col-sm-6"><img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['warehouse_vars']->value['image_path']), ENT_QUOTES, 'UTF-8', true);?>
" alt="footerlogo" /></div><?php }?>



            </div>
            </footer></div>
            <?php }?>

			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?><div id="toTop" class="transition-300"></div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'belowFooter'),$_smarty_tpl);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
<script type="application/ld+json">

{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
index.php?controller=search&search_query={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}

</script>
<?php }?>
	</body>
</html><?php }} ?>
