<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:28:43
         compiled from "T:\home\stamp-expert.ru\www\modules\leoblog\views\templates\hook\categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222356c9f3cc0cf159-52494715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114db7de27c391503f6f053024bbbc78f6262f7e' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\leoblog\\views\\templates\\hook\\categories_menu.tpl',
      1 => 1456074066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222356c9f3cc0cf159-52494715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'currentCategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f3cc13c863_70077934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f3cc13c863_70077934')) {function content_56c9f3cc13c863_70077934($_smarty_tpl) {?>

<!-- Block categories module -->
    <?php if ($_smarty_tpl->tpl_vars['tree']->value) {?>
    <div id="categories_blog_menu" class="block blog-menu">
      <h4 class="title_block"><?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->title, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Blog Categories','mod'=>'leoblog'),$_smarty_tpl);?>
<?php }?></h4>
        <div class="block_content">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </div>
    </div>
    <?php }?>
    <!-- /Block categories module -->
<?php }} ?>
