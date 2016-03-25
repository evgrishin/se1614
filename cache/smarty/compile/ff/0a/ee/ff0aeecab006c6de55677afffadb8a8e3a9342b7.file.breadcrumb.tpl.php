<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:21
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062156c9f865d233f9-07043677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff0aeecab006c6de55677afffadb8a8e3a9342b7' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\breadcrumb.tpl',
      1 => 1456073973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062156c9f865d233f9-07043677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f866093fe7_83273196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f866093fe7_83273196')) {function content_56c9f866093fe7_83273196($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb clearfix <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width']==0) {?>fullwidth-breadcrumb<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width']==0) {?><div class="container"><?php }?>
		<a class="home" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
"><i class="icon-home"></i></a>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>
		<span class="navigation-pipe"<?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==(int)Configuration::get('PS_ROOT_CATEGORY')) {?> style="display:none;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<?php if (strpos($_smarty_tpl->tpl_vars['path']->value,'span')!==false) {?>
			<span class="navigation_page"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['path']->value,'<a ','<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" '),'data-gg="">','><span itemprop="title">'),'</a>','</span></a></span>');?>
</span>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'productnavs'),$_smarty_tpl);?>

		<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width']==0) {?></div><?php }?>
</div>

<!-- /Breadcrumb --><?php }} ?>
