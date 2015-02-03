<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/modules/agilemultipleshop/views/templates/hook/hookbreadcrumb-shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170349357254d0d7af51e8d4-71108283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae9fc3431298e487e70b80abc59fde0493284d6b' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agilemultipleshop/views/templates/hook/hookbreadcrumb-shops.tpl',
      1 => 1422889395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170349357254d0d7af51e8d4-71108283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_default' => 0,
    'seller_shop' => 0,
    'isat_seller_home' => 0,
    'navigationPipe' => 0,
    'seller_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7af547cb6_98519300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7af547cb6_98519300')) {function content_54d0d7af547cb6_98519300($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_default']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Main Shop','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Main Shop','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a>
<?php if (isset($_smarty_tpl->tpl_vars['seller_shop']->value)&&$_smarty_tpl->tpl_vars['seller_shop']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['isat_seller_home']->value)&&$_smarty_tpl->tpl_vars['isat_seller_home']->value==0) {?>
		<span class="navigation-pipe"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<a href="<?php echo $_smarty_tpl->tpl_vars['seller_shop']->value->getBaseURL();?>
"><?php echo $_smarty_tpl->tpl_vars['seller_name']->value;?>
</a>
	<?php }?>
<?php }?>
<?php }} ?>
