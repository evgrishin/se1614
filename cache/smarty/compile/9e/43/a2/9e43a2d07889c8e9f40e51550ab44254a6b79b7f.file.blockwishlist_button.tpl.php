<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:29:02
         compiled from "T:\home\stamp-expert.ru\www\themes\leo_exist\modules\blockwishlist\blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2172456c9f3de370cc4-91946007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e43a2d07889c8e9f40e51550ab44254a6b79b7f' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\leo_exist\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1456074047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2172456c9f3de370cc4-91946007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f3de3ae466_87122465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f3de3ae466_87122465')) {function content_56c9f3de3ae466_87122465($_smarty_tpl) {?>


<a class="btn-tooltip btn addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart"></i> 
</a><?php }} ?>
