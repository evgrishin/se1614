<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 18:04:56
         compiled from "T:\home\stamp-expert.ru\www\modules\homeslider\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2843856e17f08512505-05378378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '855fbe94ff45b39c1cab69cc265f0effe8dbf1cd' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\homeslider\\views\\templates\\hook\\header.tpl',
      1 => 1454659117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2843856e17f08512505-05378378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e17f085b6224_63687685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e17f085b6224_63687685')) {function content_56e17f085b6224_63687685($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
<script type="text/javascript">
     var homeslider_loop=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['loop']);?>
;
     var homeslider_width=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
;
     var homeslider_speed=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['speed']);?>
;
     var homeslider_pause=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['pause']);?>
;
</script>
<?php }?><?php }} ?>
