<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 04:08:14
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/prices-drop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192964354154d08ffeaf8545-28439712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8773f6c6370d95da61f1b1a13e93df9544fe54e' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/prices-drop.tpl',
      1 => 1422887826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192964354154d08ffeaf8545-28439712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d08ffeb1b9b0_95792375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d08ffeb1b9b0_95792375')) {function content_54d08ffeb1b9b0_95792375($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-title"><?php echo smartyTranslate(array('s'=>'Price drop'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
	<div class="content_sortPagiBar">
		<div class="sortPagiBar clearfix">
			<div class="mode-view visible-desktop"></div>
			<div class="product-compare">
				<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

	
	<div class="content_sortPagiBar content_sortPagiBar_bottom">
		<div class="sortPagiBar clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

		</div>
		
	</div>
	<?php } else { ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No price drop'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>
