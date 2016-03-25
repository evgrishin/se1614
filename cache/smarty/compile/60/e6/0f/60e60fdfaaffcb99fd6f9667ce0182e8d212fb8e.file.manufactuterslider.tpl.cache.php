<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:28
         compiled from "T:\home\stamp-expert.ru\www\modules\manufactuterslider\manufactuterslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3202056c9f7f5178c09-32320654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60e60fdfaaffcb99fd6f9667ce0182e8d212fb8e' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\manufactuterslider\\manufactuterslider.tpl',
      1 => 1456073993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3202056c9f7f5178c09-32320654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturers' => 0,
    'link' => 0,
    'manufacturer' => 0,
    'myfile' => 0,
    'img_manu_dir' => 0,
    'manufacturerSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f54bd628_09991678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f54bd628_09991678')) {function content_56c9f7f54bd628_09991678($_smarty_tpl) {?><!-- Block manufacturers  slider module -->
<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>

<section id="manufacturers_slider" class="col-xs-12 block flexslider_carousel_block clearfix">
  <h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View a list of manufacturers','mod'=>'manufactuterslider'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'manufactuterslider'),$_smarty_tpl);?>
</a></h4>
  <ul id="manufacturers_logo_slider" class="slick_carousel_style">
   <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
   <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["myfile"] = new Smarty_variable("img/m/".$_tmp9."-mf_image.jpg", null, 0);?>
   <?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)) {?>
   <li>
     <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']);?>
">

      <img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-mf_image.jpg" class="img-responsive logo_manufacturer transition-300" <?php if (isset($_smarty_tpl->tpl_vars['manufacturerSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
" />

    </a>
  </li>
  <?php }?>
  <?php } ?>
</ul>
</section>
<?php }?>

<!-- /Block manufacturers slider module -->
<?php }} ?>
