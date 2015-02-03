<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/modules/agilemultipleshop/views/templates/hook/hookheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106002886254d0d7af54b801-97866432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2374d129765d93bf4fb31fff731a2cd7ec1f7e71' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agilemultipleshop/views/templates/hook/hookheader.tpl',
      1 => 1422889395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106002886254d0d7af54b801-97866432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'agile_single_login' => 0,
    'base_dir_ssl' => 0,
    'session_id' => 0,
    'header_logo_mode' => 0,
    'base_dir_default' => 0,
    'base_dir' => 0,
    'HOOK_SELLER_HEADER_LOGO' => 0,
    'seller_logo_url' => 0,
    'id_shop_owner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7af56f338_10234271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7af56f338_10234271')) {function content_54d0d7af56f338_10234271($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['agile_single_login']->value)&&$_smarty_tpl->tpl_vars['agile_single_login']->value==1) {?>	<script src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agilemultipleshop/session_id.php"></script>	<script language="javascript" type="text/javascript">	$('document').ready(function(){		var session_id = "<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
";		if(main_sid != session_id)		{			/** _agile_ alert(session_id + "!=" + main_sid); _agile_ **/			/** _agile_ window.location.href = window.location.href + "?sid=" +  main_sid; _agile_ **/		}	});	</script>
<?php }?>

<script language="javascript" type="text/javascript">
var header_logo_mode = <?php echo $_smarty_tpl->tpl_vars['header_logo_mode']->value;?>
;
var base_dir_default = "<?php echo $_smarty_tpl->tpl_vars['base_dir_default']->value;?>
";
var base_dir = "<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
";
var HOOK_SELLER_HEADER_LOGO = '<?php echo $_smarty_tpl->tpl_vars['HOOK_SELLER_HEADER_LOGO']->value;?>
';
var seller_logo_url = "<?php echo $_smarty_tpl->tpl_vars['seller_logo_url']->value;?>
";
var id_shop_owner = <?php echo $_smarty_tpl->tpl_vars['id_shop_owner']->value;?>
;

$('document').ready(function() {
	var seller_header_logo_id = $("a#seller_header_logo").attr("id");
	/** _agile_ alert(seller_header_logo_id); _agile_ **/

	var tag = $("#header_logo");
	if(!tag || !tag.is("a"))tag = $("#header_logo a");

	/** _agile_ main store logo only _agile_ **/
	if(header_logo_mode ==0)
	{
		tag.attr("href", base_dir_default);
	}
	/** _agile_ seller logo only _agile_ **/
	if(header_logo_mode ==1)
	{
		if(id_shop_owner>0)
		{
			tag.html('<img src="' + seller_logo_url + '" height="60">');
			tag.attr("href", base_dir);
		}
	}

	/** _agile_ both main store logo and seller logo _agile_ **/
	if(header_logo_mode ==2)
	{
		tag.attr("href", base_dir_default);
		/** _agile_ if HOOK is not found _agile_ **/
		if(seller_header_logo_id != 'seller_header_logo')
			$(HOOK_SELLER_HEADER_LOGO).insertAfter(tag);
	}
});
</script>
<?php }} ?>
