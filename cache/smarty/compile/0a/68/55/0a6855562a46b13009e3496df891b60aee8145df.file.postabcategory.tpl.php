<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 08:47:44
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/modules/postabcategory/postabcategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194488531754d0d180501c18-59665550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6855562a46b13009e3496df891b60aee8145df' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/postabcategory/postabcategory.tpl',
      1 => 1422888442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194488531754d0d180501c18-59665550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_effect' => 0,
    'title' => 0,
    'productCates' => 0,
    'productCate' => 0,
    'count' => 0,
    'product_on_row' => 0,
    'product' => 0,
    'link' => 0,
    'add_prod_display' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d18061dfc1_33106106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d18061dfc1_33106106')) {function content_54d0d18061dfc1_33106106($_smarty_tpl) {?><script type="text/javascript">

$(document).ready(function() {

	$(".tab_category").hide();
	$(".tab_category:first").show(); 

	$("ul.tab_cates li").click(function() {
		$("ul.tab_cates li").removeClass("active");
		$(this).addClass("active");
		$(".tab_category").hide();
		$(".tab_category").removeClass("animate1 <?php echo $_smarty_tpl->tpl_vars['tab_effect']->value;?>
");
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab) .addClass("animate1 <?php echo $_smarty_tpl->tpl_vars['tab_effect']->value;?>
");
		$("#"+activeTab).fadeIn(); 
	});
});

</script>

<div class="tab-category-container">
	<div class="container">
			<div class="tab-category row">
				<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
					<div class ='cate_title col-sm-4 col-md-4 col-sms-6 col-smb-12'>
						<h2><?php echo smartyTranslate(array('s'=>'Lastest Products','mod'=>'postabcategory'),$_smarty_tpl);?>
</h2>
					</div>
				<?php }?>
				<ul class="tab_cates col-sm-8 col-md-8 col-sms-6 col-smb-12"> 
				<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['productCate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productCate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productCate']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productCate']->iteration=0;
 $_smarty_tpl->tpl_vars['productCate']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productCate']->key => $_smarty_tpl->tpl_vars['productCate']->value) {
$_smarty_tpl->tpl_vars['productCate']->_loop = true;
 $_smarty_tpl->tpl_vars['productCate']->iteration++;
 $_smarty_tpl->tpl_vars['productCate']->index++;
 $_smarty_tpl->tpl_vars['productCate']->first = $_smarty_tpl->tpl_vars['productCate']->index === 0;
 $_smarty_tpl->tpl_vars['productCate']->last = $_smarty_tpl->tpl_vars['productCate']->iteration === $_smarty_tpl->tpl_vars['productCate']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabCategory']['first'] = $_smarty_tpl->tpl_vars['productCate']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabCategory']['last'] = $_smarty_tpl->tpl_vars['productCate']->last;
?>
						<li rel="tab_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?> class="active"  <?php }?> > <?php echo $_smarty_tpl->tpl_vars['productCate']->value['name'];?>
</li>
						<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
				<?php } ?>	
				</ul>
			<div class="tab_container row"> 
				<?php  $_smarty_tpl->tpl_vars['productCate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productCate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productCate']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productCate']->iteration=0;
 $_smarty_tpl->tpl_vars['productCate']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productCate']->key => $_smarty_tpl->tpl_vars['productCate']->value) {
$_smarty_tpl->tpl_vars['productCate']->_loop = true;
 $_smarty_tpl->tpl_vars['productCate']->iteration++;
 $_smarty_tpl->tpl_vars['productCate']->index++;
 $_smarty_tpl->tpl_vars['productCate']->first = $_smarty_tpl->tpl_vars['productCate']->index === 0;
 $_smarty_tpl->tpl_vars['productCate']->last = $_smarty_tpl->tpl_vars['productCate']->iteration === $_smarty_tpl->tpl_vars['productCate']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabCategory']['first'] = $_smarty_tpl->tpl_vars['productCate']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabCategory']['last'] = $_smarty_tpl->tpl_vars['productCate']->last;
?>
					 <div id="tab_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
" class="tab_category"> 
									<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productCate']->value['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabCategory']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabCategory']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
									<?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['product_on_row']->value==1) {?>
										<ul class="productTabCategory">
									<?php }?>	
										<li class="col-sm-3 col-md-3 col-sms-12 col-smb-12 tab-category-item  ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posTabCategory']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posTabCategory']['last']) {?>last_item<?php } else { ?>item<?php }?>">
											<div class="item-inner">
											<a class ="bigpic_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_tab_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
 product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'pos_product'), ENT_QUOTES, 'ISO-8859-1', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
												<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']) {?> 
													<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']) {?><span class="sale"><?php echo smartyTranslate(array('s'=>'Sale'),$_smarty_tpl);?>
</span><?php }?>
												<?php } else { ?>
												<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?><span class="new"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span><?php }?>
												<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']) {?><span class="sale"><?php echo smartyTranslate(array('s'=>'Sale'),$_smarty_tpl);?>
</span><?php }?>
												<?php }?>								
											</a>
											<div class="item-box-hover">
												<div class="box-inner">
													<div class="cart">
														<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
													<?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
													<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'ISO-8859-1', true);?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'postabcategory'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'postabcategory'),$_smarty_tpl);?>
</a>
														<?php } else { ?>
															<span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'postabcategory'),$_smarty_tpl);?>
</span>
														<?php }?>
													<?php } else { ?>
													<div style="height:23px;"></div>
												<?php }?>	
													</div><!-- cart-->
												
												<div class="actions">
													<ul class="add-to-links">
														<li><a class="lnk_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Detail','mod'=>'postabcategory'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Detail','mod'=>'postabcategory'),$_smarty_tpl);?>
</a></li>
														<li><a onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', $('#idCombination').val(), 1,'tab_<?php echo $_smarty_tpl->tpl_vars['productCate']->value['id'];?>
'); return false;" class="add-wishlist wishlist_button" title="<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'postabcategory'),$_smarty_tpl);?>
" href="#"><?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'postabcategory'),$_smarty_tpl);?>
</a></li> 

													</ul>
												</div><!-- actions -->
												
											</div><!-- box-inner-->
											</div><!-- item-box-hover-->
											<div class="name-cart">
												<h5 class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>

												<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><div class="price-box"><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></div><?php } else { ?><div style="height:21px;"></div><?php }?>
											</div><!--name-cart-->									
											</div><!--item-inner-->
										</li>
									<?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['product_on_row']->value==0) {?>
										
										</ul>
									<?php }?>	
									<?php } ?>
							
							</div> <!-- tab_category-->
				<?php } ?>	
				 </div> <!-- .tab_container -->
</div>
</div>
</div>
<?php }} ?>
