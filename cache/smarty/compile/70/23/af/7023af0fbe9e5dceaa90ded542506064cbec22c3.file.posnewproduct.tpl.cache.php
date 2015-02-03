<?php /* Smarty version Smarty-3.1.19, created on 2015-02-02 09:58:49
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/modules/posnewproduct/posnewproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119071153954cf90a9721d26-39036042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7023af0fbe9e5dceaa90ded542506064cbec22c3' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/posnewproduct/posnewproduct.tpl',
      1 => 1422888426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119071153954cf90a9721d26-39036042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'add_prod_display' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'slideOptions' => 0,
    'static_token' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cf90a9891973_19323173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf90a9891973_19323173')) {function content_54cf90a9891973_19323173($_smarty_tpl) {?>
<div class="pos-new-product">
	<div class="container">
		<div class="row">
	<div class="pos-new-product-title"><h2><?php echo smartyTranslate(array('s'=>'New Products'),$_smarty_tpl);?>
</h2></div>
	<?php if (count($_smarty_tpl->tpl_vars['products']->value)>1) {?>
		<ul class="bxslider">			
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posNewProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posNewProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<li class="newproductslider-item ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posNewProducts']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posNewProducts']['last']) {?>last_item<?php } else { ?>item<?php }?>">
					<div class="item-inner">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="bigpic_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_newproduct product_image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'pos_product'), ENT_QUOTES, 'ISO-8859-1', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?><span class="new"><?php echo smartyTranslate(array('s'=>'New','mod'=>'posnewproduct'),$_smarty_tpl);?>
</span><?php }?></a>
						<div class="item-box-hover">
							<div class="box-inner">
								<div class="cart">
									<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                                    <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_addtocart']==1) {?>
                                                        <a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'ISO-8859-1', true);?>
?quantity=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posnewproduct'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posnewproduct'),$_smarty_tpl);?>
</a>
                                                    <?php }?>
                                                    <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_addtocart']==1) {?>
                                                        <span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posnewproduct'),$_smarty_tpl);?>
</span>
                                                    <?php }?>
                                                    <?php }?>
                                            <?php } else { ?>
                                    <div style="height:23px;"></div>
                                <?php }?>
								</div>
								<div class="actions">
									<ul class="add-to-links">
										<li>
											<a class="lnk_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Detail','mod'=>'posnewproduct'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Detail','mod'=>'posnewproduct'),$_smarty_tpl);?>
</a>
										</li>
										<li>
											<a onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', $('#idCombination').val(), 1,'newproduct'); return false;" class="add-wishlist wishlist_button" title="<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'posnewproduct'),$_smarty_tpl);?>
" href="#"><?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'posnewproduct'),$_smarty_tpl);?>
</a>
										</li> 

						</ul>
								</div>	
							</div>	
						</div>
						<div class="name-cart">
							<h5 class="s_title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
							<div class="price-box">
								<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_price']==1) {?>                                            
		                            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><p class="price_container"><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></p><?php } else { ?><div style="height:21px;"></div><?php }?>
		                        <?php }?>	
							</div>
						</div>
					</div>	
                    <!-- <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_des']==1) {?>
                    <div class="product_desc"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More','mod'=>'posnewproduct'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),65,'...');?>
</a></div>
                    <?php }?> -->
					
				</li>
			<?php } ?>
		</ul>

	<?php } else { ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No products for this new products.'),$_smarty_tpl);?>
</p>
	<?php }?>
		<script type="text/javascript">
		  $('.pos-new-product .bxslider').bxSlider({
            auto: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide']!=1) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide'];?>
<?php } else { ?>1<?php }?>,
            slideWidth:<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['width_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['width_item'];?>
<?php } else { ?>250<?php }?>,
			slideMargin: 19,
			infiniteLoop:false,
			minSlides: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['min_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['min_item'];?>
<?php } else { ?>3<?php }?>,
			maxSlides: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['max_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['max_item'];?>
<?php } else { ?>8<?php }?>,
			speed:  <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide'];?>
<?php } else { ?>5000<?php }?>,
			pause: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['a_speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['a_speed'];?>
<?php } else { ?>1000<?php }?>,
			controls: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback'];?>
<?php } else { ?>false<?php }?>,
            pager: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_control']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_control'];?>
<?php } else { ?>false<?php }?>,
		});
	</script>
		 
</div>
</div>
</div><?php }} ?>
