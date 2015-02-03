<?php /*%%SmartyHeaderCode:145740044454cf90a995dd55-82331668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e017e764781d2547f5ea4634970287dfc850c2c' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1422888353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145740044454cf90a995dd55-82331668',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cfa67bc40a54_74327562',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cfa67bc40a54_74327562')) {function content_54cfa67bc40a54_74327562($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="myaccount f-col col-sm-3 col-md-3 col-sms-12 col-smb-12">
	<div class="account-inner">
		<p class="title_block">My Account</p>
		<div class="block_content">
			<ul class="bullet">
				<li class="first"><a href="http://cooltivo.info/index.php?controller=my-account" title="Your Account" rel="nofollow">Your Account</a></li>
				<li><a href="http://cooltivo.info/index.php?controller=history" title="List of my orders" rel="nofollow">Mis pedidos</a></li>
								<li><a href="http://cooltivo.info/index.php?controller=order-slip" title="List of my credit slips" rel="nofollow">Mis notas crédito</a></li>
				<li><a href="http://cooltivo.info/index.php?controller=addresses" title="List of my addresses" rel="nofollow">Mis direcciones</a></li>
				<li><a href="http://cooltivo.info/index.php?controller=identity" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
				<li class="last"><a href="http://cooltivo.info/index.php?controller=authentication" title="Login" rel="nofollow">Login</a></li>
				
								
			</ul>
			<p class="logout"><a href="http://cooltivo.info/index.php?mylogout" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></p>
		</div>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
