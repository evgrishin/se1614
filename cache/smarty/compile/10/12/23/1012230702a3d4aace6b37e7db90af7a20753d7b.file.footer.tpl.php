<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 18:05:02
         compiled from "T:\home\stamp-expert.ru\www\themes\theme948\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166356e17f0d8515b4-23942033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1012230702a3d4aace6b37e7db90af7a20753d7b' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\theme948\\footer.tpl',
      1 => 1457301365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166356e17f0d8515b4-23942033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e17f0d916e70_42521841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e17f0d916e70_42521841')) {function content_56e17f0d916e70_42521841($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer"  class="container">
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
        </div><!-- #main-wrap -->
        </div><!-- #main-wrap-center -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
