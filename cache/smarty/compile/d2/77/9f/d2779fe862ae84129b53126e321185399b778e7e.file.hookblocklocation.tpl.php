<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/modules/agilemultipleshop/views/templates/hook/hookblocklocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79990083054d0d7afb0a333-06059694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2779fe862ae84129b53126e321185399b778e7e' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agilemultipleshop/views/templates/hook/hookblocklocation.tpl',
      1 => 1422889391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79990083054d0d7afb0a333-06059694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'location_level' => 0,
    'link' => 0,
    'location_custom_name' => 0,
    'seller_locations4block' => 0,
    'asp_location_block_style' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7afbacd43_53978817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7afbacd43_53978817')) {function content_54d0d7afbacd43_53978817($_smarty_tpl) {?>

<script language="javascript" type="text/javascript">
<!--
    function shopbylocation_block_selectedchanged() {
        var url = $("#shop_by_location_list").val();
        window.location.href = url;
    }
-->
</script>

<div id="manufacturers_block_left" class="block blockmanufacturer">
	<?php if ($_smarty_tpl->tpl_vars['location_level']->value=="country") {?>
		<h4><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getSellerLocationLink('',$_smarty_tpl->tpl_vars['location_level']->value);?>
" title="<?php echo smartyTranslate(array('s'=>'Shop by Country','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Shop by Country','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a></h4>
	<?php } elseif ($_smarty_tpl->tpl_vars['location_level']->value=="state") {?>
		<h4><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getSellerLocationLink('',$_smarty_tpl->tpl_vars['location_level']->value);?>
" title="<?php echo smartyTranslate(array('s'=>'Shop by State','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Shop by State','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a></h4>
	<?php } elseif ($_smarty_tpl->tpl_vars['location_level']->value=="city") {?>
		<h4><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getSellerLocationLink('',$_smarty_tpl->tpl_vars['location_level']->value);?>
" title="<?php echo smartyTranslate(array('s'=>'Shop by City','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Shop by City','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a></h4>
	<?php } elseif ($_smarty_tpl->tpl_vars['location_level']->value=="sellertype") {?>
		<h4><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getSellerLocationLink('',$_smarty_tpl->tpl_vars['location_level']->value);?>
" title="<?php echo smartyTranslate(array('s'=>'Shop by Seller Type','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Shop by Seller Type','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a></h4>
	<?php } elseif ($_smarty_tpl->tpl_vars['location_level']->value=="custom") {?>
		<h4><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getSellerLocationLink('',$_smarty_tpl->tpl_vars['location_level']->value);?>
" title="<?php echo smartyTranslate(array('s'=>'Shop by','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['location_custom_name']->value;?>
"><?php echo smartyTranslate(array('s'=>'Shop by','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['location_custom_name']->value;?>
</a></h4>
	<?php }?>
	<div class="block_content list-block">
        <?php if ($_smarty_tpl->tpl_vars['seller_locations4block']->value!==false) {?>
			<?php if ($_smarty_tpl->tpl_vars['asp_location_block_style']->value==1) {?>
				<div class="form-group selector1">
					<select name="shop_by_location_list" id="shop_by_location_list"  class="form-control" onchange=" shopbylocation_block_selectedchanged()">
						<option value="0"><?php echo smartyTranslate(array('s'=>'Please select','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seller_locations4block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getSellerLocationLink($_smarty_tpl->tpl_vars['location']->value['id'],$_smarty_tpl->tpl_vars['location_level']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			<?php } else { ?>
				<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seller_locations4block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
					<ul class="block_content">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getSellerLocationLink($_smarty_tpl->tpl_vars['location']->value['id'],$_smarty_tpl->tpl_vars['location_level']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>
</a></li>
					</ul>
				<?php } ?>

			<?php }?>
        <?php } else { ?>
	        <p><?php echo smartyTranslate(array('s'=>'No seller found in this location','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</p>
        <?php }?>

	</div>
</div>
<!-- /MODULE Agile Sellers Products -->

<?php }} ?>
