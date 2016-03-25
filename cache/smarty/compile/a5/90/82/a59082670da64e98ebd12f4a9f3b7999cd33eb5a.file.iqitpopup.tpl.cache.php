<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:30
         compiled from "T:\home\stamp-expert.ru\www\modules\iqitpopup\views\templates\hook\iqitpopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:459356c9f7f7e22252-44181161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a59082670da64e98ebd12f4a9f3b7999cd33eb5a' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\modules\\iqitpopup\\views\\templates\\hook\\iqitpopup.tpl',
      1 => 1456073992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459356c9f7f7e22252-44181161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'txt' => 0,
    'newsletter' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f7ed6962_77482045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f7ed6962_77482045')) {function content_56c9f7f7ed6962_77482045($_smarty_tpl) {?>

<div id="iqitpopup">
<span class="cross" title="<?php echo smartyTranslate(array('s'=>'Close window','mod'=>'iqitpopup'),$_smarty_tpl);?>
"></span>
<div class="iqitpopup-content"><?php echo stripslashes($_smarty_tpl->tpl_vars['txt']->value);?>
</div>
<?php if ($_smarty_tpl->tpl_vars['newsletter']->value) {?>
<div class="iqitpopup-newsletter-form">
	<div class="row">
		<div class="col-xs-6">
		<span class="promo-text"><?php echo smartyTranslate(array('s'=>'Sign up to receive latest news and updates direct to your inbox','mod'=>'iqitpopup'),$_smarty_tpl);?>
</span>
	</div>
	<div class="col-xs-6">
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="form-inline">
			<div >
				<input class="inputNew form-control grey newsletter-input" type="text" name="email" size="18" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your e-mail','mod'=>'iqitpopup'),$_smarty_tpl);?>
" value="" />
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-medium iqit-btn-newsletter">
                    <span><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'iqitpopup'),$_smarty_tpl);?>
</span>
                </button>
				<input type="hidden" name="action" value="0" />
			</div>
		</form>
	</div>		</div></div>
	<?php }?>

<div class="iqitpopup-notshow">
<span><input type="checkbox" class="checkbox" name="iqitpopup-checkbox" id="iqitpopup-checkbox" /></span>  <label for="iqitpopup-checkbox"><?php echo smartyTranslate(array('s'=>'Do not show again.','mod'=>'iqitpopup'),$_smarty_tpl);?>
</label>
</div>
</div> <!-- #layer_cart -->
<div id="iqitpopup-overlay"></div>
<?php }} ?>
