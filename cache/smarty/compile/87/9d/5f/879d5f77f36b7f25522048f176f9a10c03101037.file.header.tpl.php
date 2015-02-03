<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:08
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212607515654d0d7b0c1f635-92119430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '879d5f77f36b7f25522048f176f9a10c03101037' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/header.tpl',
      1 => 1422887809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212607515654d0d7b0c1f635-92119430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'meta_language' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'css_files' => 0,
    'css_dir' => 0,
    'css_uri' => 0,
    'js_files' => 0,
    'js_dir' => 0,
    'js_uri' => 0,
    'HOOK_HEADER' => 0,
    'page_name' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'HOOK_TOP' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_LEFT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7b0d83ac0_44351403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7b0d83ac0_44351403')) {function content_54d0d7b0d83ac0_44351403($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo htmlentities($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<script type="text/javascript">
			var baseDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['content_dir']->value);?>
';
			var baseUri = '<?php echo addslashes($_smarty_tpl->tpl_vars['base_uri']->value);?>
';
			var static_token = '<?php echo addslashes($_smarty_tpl->tpl_vars['static_token']->value);?>
';
			var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;
		</script>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
global.css" rel="stylesheet" type="text/css" media="all"/>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
		<?php if (!strstr($_smarty_tpl->tpl_vars['css_uri']->value,"global.css")) {?> 
			<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css"/>
		<?php }?>
	<?php } ?>
	
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)) {?>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
bootstrap/html5shiv.js"  type="text/javascript" ></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
bootstrap/respond.min.js"  type="text/javascript" ></script>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php } ?>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
bootstrap/bootstrap.js"  type="text/javascript" ></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
bootstrap/bootstrap.min.js" type="text/javascript" ></script>
<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

	</head>
	
	<body <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?>id="<?php echo htmlentities($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?>hide-left-column <?php }?> <?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?>hide-right-column <?php }?> <?php if ($_smarty_tpl->tpl_vars['content_only']->value) {?> content_only <?php }?><?php echo htmlentities($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
		<div id="restricted-country">
			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
		</div>
		<?php }?>
		<div id="page" class="pos_page">

			<!-- Header -->
			<div id="header">
				<div class="header-inner">
					<div class="container">
						<div class="header-content">
							<div id="header_right" class="row-fluid">
								<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-menu">
				<div class="logo-menu-inner container">
					<div class="row">
						<div class="logo col-sm-3 col-md-3 col-sms-3 col-smb-12">
							<a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlentities($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
								<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlentities($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
" <?php }?>/>
							</a>
						</div>
						<div class="megamenu col-sm-9 col-md-9 col-sms-9 col-smb-12">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"megamenu"),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</div>
			

			<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"bannerSequence"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockPosition1"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"homeTabProducts"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockPosition2"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"newproductHome"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockPosition3"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"homeFeatured"),$_smarty_tpl);?>

				
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='product'||$_smarty_tpl->tpl_vars['page_name']->value=='products-comparison'||$_smarty_tpl->tpl_vars['page_name']->value=='search') {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>

			<div id="columns">
				<div class="container">
						<div class="main">
						<div class="row">	
							<!-- Left -->
							<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='product'&&$_smarty_tpl->tpl_vars['page_name']->value!='order'&&$_smarty_tpl->tpl_vars['page_name']->value!='authentication'&&$_smarty_tpl->tpl_vars['page_name']->value!='address'&&$_smarty_tpl->tpl_vars['page_name']->value!='my-account'&&$_smarty_tpl->tpl_vars['page_name']->value!='order-slip'&&$_smarty_tpl->tpl_vars['page_name']->value!='history'&&$_smarty_tpl->tpl_vars['page_name']->value!='addresses'&&$_smarty_tpl->tpl_vars['page_name']->value!='identity'&&$_smarty_tpl->tpl_vars['page_name']->value!='module-favoriteproducts-account'&&$_smarty_tpl->tpl_vars['page_name']->value!='stores'&&$_smarty_tpl->tpl_vars['page_name']->value!='contact'&&$_smarty_tpl->tpl_vars['page_name']->value!='cms'&&$_smarty_tpl->tpl_vars['page_name']->value!='sitemap') {?>
								<div id="left_column" class="col-xs-12 col-sm-3">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

								</div>
							<?php }?>
			
							<!-- Center -->
							<div id="center_column" class="<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='products-comparison'&&$_smarty_tpl->tpl_vars['page_name']->value!='search'&&$_smarty_tpl->tpl_vars['page_name']->value!='category'&&$_smarty_tpl->tpl_vars['page_name']->value!='product'&&$_smarty_tpl->tpl_vars['page_name']->value!='prices-drop') {?>col-xs-12 col-sm-12<?php } else { ?>col-xs-9<?php }?>">
				<?php }?>
<?php }} ?>
