<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:20
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\modules\blockuserinfo\blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1313356c9f7ec3d4327-92112937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03cd752ba82adc5d67e7484656a2b07249126fb3' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\modules\\blockuserinfo\\blockuserinfo.tpl',
      1 => 1456073980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1313356c9f7ec3d4327-92112937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouse_vars' => 0,
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7ec505396_92949608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7ec505396_92949608')) {function content_56c9f7ec505396_92949608($_smarty_tpl) {?><div class="header_user_info col-xs-12 col-sm-<?php echo 4-$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width']/2;?>
">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><i class="icon-user"></i> <span><?php echo substr($_smarty_tpl->tpl_vars['cookie']->value->customer_firstname,0,1);?>
. <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a> <span class="log-separator">/</span> 
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 <i class="icon-signout"></i>
		</a>
	<?php } else { ?>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="icon-signin"></i> <?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php }?>
</div><?php }} ?>
