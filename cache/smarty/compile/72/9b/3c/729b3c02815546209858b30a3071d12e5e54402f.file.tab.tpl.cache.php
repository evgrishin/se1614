<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:48:12
         compiled from "T:\home\stamp-expert.ru\www\modules\videostab\views\templates\hook\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2620856c9f85c2f40c2-36885433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '729b3c02815546209858b30a3071d12e5e54402f' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\videostab\\views\\templates\\hook\\tab.tpl',
      1 => 1456074004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2620856c9f85c2f40c2-36885433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'videosNb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f85c34b6e5_15783670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f85c34b6e5_15783670')) {function content_56c9f85c34b6e5_15783670($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['product_tabs']) {?>	
<?php if ($_smarty_tpl->tpl_vars['videosNb']->value>0) {?>
<li><a href="#videosTab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Videos','mod'=>'videostab'),$_smarty_tpl);?>
(<?php echo $_smarty_tpl->tpl_vars['videosNb']->value;?>
)</a></li>
<?php }?>
<?php }?><?php }} ?>
