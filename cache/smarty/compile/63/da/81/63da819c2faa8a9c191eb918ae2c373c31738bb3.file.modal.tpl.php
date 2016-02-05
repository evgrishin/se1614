<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 12:44:46
         compiled from "T:\home\stamp-expert.ru\www\admin80697wf7i\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681556b460ffa1ddc7-76751451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63da819c2faa8a9c191eb918ae2c373c31738bb3' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\admin80697wf7i\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1454659046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681556b460ffa1ddc7-76751451',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b460ffa3d5b9_41952895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b460ffa3d5b9_41952895')) {function content_56b460ffa3d5b9_41952895($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
