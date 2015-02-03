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
  'variables' => 
  array (
    'link' => 0,
    'context' => 0,
    'logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cf90a896efc0_51104735',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf90a896efc0_51104735')) {function content_54cf90a896efc0_51104735($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->

<div id="account-header" class="wishlist_block">
	<ul class="account-header-inner">
		<li class="select-account">
			<a class="select-accoun-login" href="http://cooltivo.info/index.php?controller=my-account" title="Login"  rel="nofollow">Login</a>

			<ul id="header_links">
						<li><a class="link-wishlist" href="http://cooltivo.info/index.php?fc=module&module=blockwishlist&controller=mywishlist&id_lang=2" title="My wishlist">My wishlist</a></li>
				<li><a class="link-myaccount" href="http://cooltivo.info/index.php?controller=my-account" title="My account">My account</a></li>
				<li><a class="link-mycart" href="http://cooltivo.info/index.php?controller=order" title="My cart">My cart</a></li>
										<li class="last"><a class="link-login" href="http://cooltivo.info/index.php?controller=my-account" title="Login"  rel="nofollow">Login</a></li>
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
