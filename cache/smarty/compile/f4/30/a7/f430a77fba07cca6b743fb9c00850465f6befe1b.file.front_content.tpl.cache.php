<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:21
         compiled from "T:\home\stamp-expert.ru\www\modules\iqitcontentcreator\views\templates\hook\front_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2316456c9f7ed2ead64-08103710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f430a77fba07cca6b743fb9c00850465f6befe1b' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\iqitcontentcreator\\views\\templates\\hook\\front_content.tpl',
      1 => 1456073991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2316456c9f7ed2ead64-08103710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7ed9e50e0_70269397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7ed9e50e0_70269397')) {function content_56c9f7ed9e50e0_70269397($_smarty_tpl) {?>

	
	<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==1) {?>
	<div class="row iqitcontent_row iqitcontent-element <?php if ($_smarty_tpl->tpl_vars['node']->value['depth']==0) {?> first_rows<?php }?> iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['prlx'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['prlx']) {?>parallax-row<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']) {?><div class="iqit-fullwidth clearfix"><?php }?> 
	
	<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==2) {?>
		<div  class="<?php if ($_smarty_tpl->tpl_vars['node']->value['width_p']==13) {?>hidden-xs<?php } else { ?>col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_p'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_t']==13) {?>hidden-sm<?php } else { ?>col-sm-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_t'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_d']==13) {?>hidden-md hidden-lg<?php } else { ?>col-md-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_d'];?>
<?php }?> iqitcontent-column iqitcontent-element iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==0) {?>empty-column<?php }?>" >
			<div class="iqitcontent-column-inner <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'])) {?>iqitcolumn-have-title<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_bg'])) {?>iqitcolumn-title-bg<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==1) {?>alternative-slick-arrows<?php }?>">
	<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==4) {?>
		<div  class="<?php if ($_smarty_tpl->tpl_vars['node']->value['width_p']==13) {?>hidden-xs<?php } else { ?>col-xs-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_p'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_t']==13) {?>hidden-sm<?php } else { ?>col-sm-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_t'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value['width_d']==13) {?>hidden-md hidden-lg<?php } else { ?>col-md-<?php echo $_smarty_tpl->tpl_vars['node']->value['width_d'];?>
<?php }?> iqitcontent-column iqitcontent-tabs iqitcontent-element iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value['contentType']==0) {?>empty-column<?php }?>" >
			<div class="iqitcontent-column-inner <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title'])) {?>iqitcolumn-have-title<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content_s']['title_bg'])) {?>iqitcolumn-title-bg<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['node']->value['content']['ar'])&&$_smarty_tpl->tpl_vars['node']->value['content']['ar']==1) {?>alternative-slick-arrows<?php }?>">
	<?php }?>
		

		<?php echo $_smarty_tpl->getSubTemplate ("./front_content_inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['node']->value), 0);?>




			<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==2||$_smarty_tpl->tpl_vars['node']->value['type']==1||$_smarty_tpl->tpl_vars['node']->value['type']==4) {?>
			
				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php if ($_smarty_tpl->tpl_vars['child']->value['type']==3) {?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['first']) {?>  <ul class="nav nav-tabs"><?php }?> 
							<li><a href="#iqitcontent-tab-id-<?php echo $_smarty_tpl->tpl_vars['child']->value['elementId'];?>
"  <?php if (isset($_smarty_tpl->tpl_vars['child']->value['tabtitle'])) {?>title="<?php echo $_smarty_tpl->tpl_vars['child']->value['tabtitle'];?>
"<?php }?> data-toggle="tab"><?php if (isset($_smarty_tpl->tpl_vars['child']->value['tabtitle'])) {?><?php echo $_smarty_tpl->tpl_vars['child']->value['tabtitle'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Set tab title','mod'=>'iqitcontentcreator'),$_smarty_tpl);?>
<?php }?></a></li>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['last']) {?>  </ul> <?php }?> 
						<?php }?>
					<?php } ?>

					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php if ($_smarty_tpl->tpl_vars['child']->value['type']==3) {?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['first']) {?>  <div class="tab-content"><?php }?> 
							<?php echo $_smarty_tpl->getSubTemplate ("./front_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['last']) {?>  </div> <?php }?> 
						<?php } else { ?>
							<?php echo $_smarty_tpl->getSubTemplate ("./front_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

						<?php }?>
					<?php } ?>
				<?php }?>
			
			<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['type']==3) {?>
			
				<?php if (isset($_smarty_tpl->tpl_vars['node']->value['children'])&&count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
				<div id="iqitcontent-tab-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
"  class="tab-pane  iqitcontent-element-id-<?php echo $_smarty_tpl->tpl_vars['node']->value['elementId'];?>
 clearfix">
					<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['first'] = $_smarty_tpl->tpl_vars['child']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
						<?php echo $_smarty_tpl->getSubTemplate ("./front_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

					<?php } ?>
				</div>
				<?php }?>

			<?php }?>



		<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==2||$_smarty_tpl->tpl_vars['node']->value['type']==4) {?></div><?php }?>
		



		<?php if (isset($_smarty_tpl->tpl_vars['node']->value['row_s']['bgw'])&&$_smarty_tpl->tpl_vars['node']->value['row_s']['bgw']) {?></div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['node']->value['type']==1||$_smarty_tpl->tpl_vars['node']->value['type']==2||$_smarty_tpl->tpl_vars['node']->value['type']==4) {?></div><?php }?>
<?php }} ?>
