<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:20
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\product-list-colors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3079856c9f7ec9bc301-87419708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4766fd56848de698aa661a53aeb2b86be4171cb' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\product-list-colors.tpl',
      1 => 1456073982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3079856c9f7ec9bc301-87419708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colors_list' => 0,
    'col_img_dir' => 0,
    'color' => 0,
    'link' => 0,
    'img_color_exists' => 0,
    'img_col_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7ecb32c87_65073940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7ecb32c87_65073940')) {function content_56c9f7ecb32c87_65073940($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['colors_list']->value)) {?>
<ul class="color_to_pick_list clearfix">
<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['img_color_exists'] = new Smarty_variable(file_exists((($_smarty_tpl->tpl_vars['col_img_dir']->value).($_smarty_tpl->tpl_vars['color']->value['id_attribute'])).('.jpg')), null, 0);?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['color']->value['id_product'],null,null,null,null,null,$_smarty_tpl->tpl_vars['color']->value['id_product_attribute'],Configuration::get('PS_REWRITING_SETTINGS'),false,true), ENT_QUOTES, 'UTF-8', true);?>
"
			id="color_<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_product_attribute']);?>
"
			class="color_pick"
			<?php if (!$_smarty_tpl->tpl_vars['img_color_exists']->value&&isset($_smarty_tpl->tpl_vars['color']->value['color'])&&$_smarty_tpl->tpl_vars['color']->value['color']) {?> style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
;"<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['img_color_exists']->value) {?>style="background: url(<?php echo $_smarty_tpl->tpl_vars['img_col_dir']->value;?>
<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_attribute']);?>
.jpg) repeat;" <?php }?>
			></a></li><?php } ?>
</ul>
<?php }?><?php }} ?>
