<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:27:56
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_hitechgame\modules\blockwishlist\blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125956c9f39ce58538-99159027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b37c82dc01446dca4b0e863986817df350ac13' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_hitechgame\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1456075451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125956c9f39ce58538-99159027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f39ce97b18_36512435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f39ce97b18_36512435')) {function content_56c9f39ce97b18_36512435($_smarty_tpl) {?>


<a class="btn-tooltip WhiteRounded addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-star-o"></i> 
</a><?php }} ?>
