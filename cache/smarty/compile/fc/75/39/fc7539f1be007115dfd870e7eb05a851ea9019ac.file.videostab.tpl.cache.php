<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:13
         compiled from "T:\home\stamp-expert.ru\www\modules\videostab\views\templates\hook\videostab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218856c9f85d5916d0-97688475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7539f1be007115dfd870e7eb05a851ea9019ac' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\videostab\\views\\templates\\hook\\videostab.tpl',
      1 => 1456074004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218856c9f85d5916d0-97688475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
    'warehouse_vars' => 0,
    'yotpoWidgetTabName' => 0,
    'video' => 0,
    'this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85d746af1_01717881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85d746af1_01717881')) {function content_56c9f85d746af1_01717881($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>

<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>
    <section class="page-product-box tab-pane fade" id="videosTab">
    <?php } else { ?>
    <section class="page-product-box" id="videosTab">
    <h3 class="page-product-heading"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yotpoWidgetTabName']->value, ENT_QUOTES, 'UTF-8', true);?>
</h3>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['video']->value['type']==0) {?>
        <div class="videoWrapper videotab_video"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video']->value['video']);?>
</div>
        <?php } else { ?>
        <div class="mp4content videotab_video">
        <video style="width:100%;height:100%;" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
uploads/<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video']->value['video']);?>
" type="video/mp4" 
	id="player1" 
	controls="controls" preload="none"></video>
    </div>
        <?php }?>
    <?php } ?>
</section>
<?php }?><?php }} ?>
