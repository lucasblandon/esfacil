<?php /* Smarty version Smarty-3.1.19, created on 2015-02-02 09:58:49
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211042812154cf90a912cd86-09904892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1c91b9d262743ab799c777e5333ae31d53a27b' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/homefeatured/homefeatured.tpl',
      1 => 1422888413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211042812154cf90a912cd86-09904892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbLines' => 0,
    'liHeight' => 0,
    'totModulo' => 0,
    'product' => 0,
    'link' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cf90a923da74_00086978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf90a923da74_00086978')) {function content_54cf90a923da74_00086978($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/cooltivoinfo/public_html/tools/smarty/plugins/function.math.php';
?>

<!-- MODULE Home Featured Products -->
<div id="featured-products_block_center" class="block products_block clearfix">
	<div class="row">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</p>
	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
		<div class="block_content">
			<?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(250, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
			<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

			<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->tpl_vars['nbLines']->value),'liHeight'=>$_smarty_tpl->tpl_vars['liHeight']->value,'assign'=>'ulHeight'),$_smarty_tpl);?>

			<ul>
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
				<li class="col-sm-6 col-md-4 col-sms-12 col-smb-12 ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['last']) {?>last_item<?php } else { ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?>last_item_of_line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> <?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last_line<?php }?>">
					<div class="col-md-5 col-sm-5 col-sms-6 col-smb-12 featured-img">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" id = "bigpic_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="bigpic_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_homefeaturedproduct product_image"><img id="bigpic" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'pos_product'), ENT_QUOTES, 'ISO-8859-1', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
					</div>
					<div class="col-md-7 col-sm-7 col-sms-6 col-smb-12 featured-content">
						<div class="featured-content-inner">
							<p class="s_title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></p>

							<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><p class="price_container"><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></p><?php } else { ?><div style="height:21px;"></div><?php }?>

							<div class="actions">
								<ul class="add-to-links">
									<li>
										<a onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', $('#idCombination').val(), 1,'homefeaturedproduct'); return false;" class="add-wishlist wishlist_button" title="<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'posnewproduct'),$_smarty_tpl);?>
" href="#"><?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'posnewproduct'),$_smarty_tpl);?>
</a>
									</li> 
									<li>
										<a class="lnk_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Detail','mod'=>'posnewproduct'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Detail','mod'=>'posnewproduct'),$_smarty_tpl);?>
</a>
									</li>
									
								</ul>
								<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
									<?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
									<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'ISO-8859-1', true);?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeatured'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeatured'),$_smarty_tpl);?>
</a>
									<?php } else { ?>
									<span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeatured'),$_smarty_tpl);?>
</span>
									<?php }?>
								<?php } else { ?>
									<div style="height:23px;"></div>
								<?php }?>
							</div>
						</div>
					
					</div>
				</li>
			<?php } ?>
			</ul>
		</div>
	<?php } else { ?>
		<p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</div>
<!-- /MODULE Home Featured Products -->
<?php }} ?>
