<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 18:05:27
         compiled from "T:\home\stamp-expert.ru\www\themes\theme948\modules\blockwishlist\blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3182656e17f273af1b9-86471936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909ca447fd312a6bc0e5ee6bab491b1b0970576b' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\theme948\\modules\\blockwishlist\\blockwishlist-extra.tpl',
      1 => 1457301367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3182656e17f273af1b9-86471936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e17f273fbe37_36131136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e17f273fbe37_36131136')) {function content_56e17f273fbe37_36131136($_smarty_tpl) {?>

<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>
