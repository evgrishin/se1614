<?php /* Smarty version Smarty-3.1.19, created on 2016-03-09 23:41:03
         compiled from "T:\home\stamp-expert.ru\www\modules\onepagecheckout\views\templates\front\info-block-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1739256e07c4f3ac3b2-64072360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dea135ec3c815ea2521a7c42d978234be6a8275' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\onepagecheckout\\views\\templates\\front\\info-block-content.tpl',
      1 => 1456080232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739256e07c4f3ac3b2-64072360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e07c4f5aea18_04217850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e07c4f5aea18_04217850')) {function content_56e07c4f5aea18_04217850($_smarty_tpl) {?><!-- Sample texts, inspired by matrice theme, please change to your needs -->
<h4><a id="toggle_link" href="#" onclick="toggle_info_block('[-]', '[+]'); return false;"
       title="Expand / Collapse Info block">[-]</a><?php echo smartyTranslate(array('s'=>'Info block','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</h4>
<div class="block_content">
    <img align="right" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
onepagecheckout/views/img/info_block_success.png"/>
    <h5><?php echo smartyTranslate(array('s'=>'Secure payments','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</h5>

    <p><?php echo smartyTranslate(array('s'=>'we do not store any of your credit card details and have no access to your credit card information at any time','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</p>
    <img align="right" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
onepagecheckout/views/img/info_block_success.png"/>
    <h5><?php echo smartyTranslate(array('s'=>'Quick delivery','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</h5>

    <p><?php echo smartyTranslate(array('s'=>'we deliver within 48h with Colissimo','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</p>
    <img align="right" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
onepagecheckout/views/img/info_block_success.png"/>
    <h5><?php echo smartyTranslate(array('s'=>'Respect privacy','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</h5>

    <p><?php echo smartyTranslate(array('s'=>'we do not sell or rent your personal information to anyone','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</p>
    <img align="right" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
onepagecheckout/views/img/info_block_phone.png"/>
    <h5><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</h5>

    <p><?php echo smartyTranslate(array('s'=>'contact@myeshop.com','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</p>

    <p><?php echo smartyTranslate(array('s'=>'Phone: +33 12.34.56.78','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</p>
    
</div>
<?php }} ?>
