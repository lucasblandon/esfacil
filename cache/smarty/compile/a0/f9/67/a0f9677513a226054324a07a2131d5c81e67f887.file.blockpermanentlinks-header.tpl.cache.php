<?php /* Smarty version Smarty-3.1.19, created on 2015-02-02 09:58:48
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142604222654cf90a89005d0-70900198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0f9677513a226054324a07a2131d5c81e67f887' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1422888356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142604222654cf90a89005d0-70900198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'context' => 0,
    'logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cf90a896a088_56480793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf90a896a088_56480793')) {function content_54cf90a896a088_56480793($_smarty_tpl) {?>

<!-- Block permanent links module HEADER -->

<div id="account-header" class="wishlist_block">
	<ul class="account-header-inner">
		<li class="select-account">
			<a class="select-accoun-login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"  rel="nofollow"><?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>

			<ul id="header_links">
			<?php $_smarty_tpl->tpl_vars['context'] = new Smarty_variable(Context::getContext(), null, 0);?>
			<li><a class="link-wishlist" href="<?php echo $_smarty_tpl->tpl_vars['context']->value->link->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
				<li><a class="link-myaccount" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
				<li><a class="link-mycart" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My cart','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My cart','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
						<!--<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>-->
						<li class="last"><a class="link-out" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"  rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
					<?php } else { ?>
						<li class="last"><a class="link-login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"  rel="nofollow"><?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
				<?php }?>
			</ul>
		</li>	
	</ul>
</div>
<script type="text/javascript">
$(document).ready(function () {
	$("#countries").mouseover(function(){
		$(this).addClass("countries_hover");
		$(".countries_ul").addClass("countries_ul_hover");
	});
	$("#countries").mouseout(function(){
		$(this).removeClass("countries_hover");
		$(".countries_ul").removeClass("countries_ul_hover");
	});
});
</script>
<!-- /Block permanent links module HEADER -->
<?php }} ?>
