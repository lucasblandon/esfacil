<?php /* Smarty version Smarty-3.1.19, created on 2015-02-02 21:12:33
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/stores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207726535154d02e91d32245-54191795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deaa141a189813b17a716c13b344d4246c978ff3' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/stores.tpl',
      1 => 1422887839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207726535154d02e91d32245-54191795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simplifiedStoresDiplay' => 0,
    'stores' => 0,
    'store' => 0,
    'img_store_dir' => 0,
    'mediumSize' => 0,
    'defaultLat' => 0,
    'defaultLong' => 0,
    'hasStoreIcon' => 0,
    'distance_unit' => 0,
    'img_ps_dir' => 0,
    'searchUrl' => 0,
    'logo_store' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d02e91dd3b91_75756257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d02e91dd3b91_75756257')) {function content_54d02e91dd3b91_75756257($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-title"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['simplifiedStoresDiplay']->value) {?>
	<?php if (count($_smarty_tpl->tpl_vars['stores']->value)) {?>
	<p><?php echo smartyTranslate(array('s'=>'Here you can find our store locations. Please feel free to contact us:'),$_smarty_tpl);?>
</p>
	<?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
		<div class="store-small grid_2">
			<?php if ($_smarty_tpl->tpl_vars['store']->value['has_picture']) {?><p><img src="<?php echo $_smarty_tpl->tpl_vars['img_store_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store']->value['id_store'];?>
-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" /></p><?php }?>
			<p>
				<b><?php echo htmlentities($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</b><br />
				<?php echo htmlentities($_smarty_tpl->tpl_vars['store']->value['address1'], ENT_QUOTES, 'UTF-8', true);?>
<br />
				<?php if ($_smarty_tpl->tpl_vars['store']->value['address2']) {?><?php echo htmlentities($_smarty_tpl->tpl_vars['store']->value['address2'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><br />
				<?php echo $_smarty_tpl->tpl_vars['store']->value['postcode'];?>
 <?php echo htmlentities($_smarty_tpl->tpl_vars['store']->value['city'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['store']->value['state']) {?>, <?php echo $_smarty_tpl->tpl_vars['store']->value['state'];?>
<?php }?><br />
				<?php echo htmlentities($_smarty_tpl->tpl_vars['store']->value['country'], ENT_QUOTES, 'UTF-8', true);?>
<br />
				<?php if ($_smarty_tpl->tpl_vars['store']->value['phone']) {?><?php echo smartyTranslate(array('s'=>'Phone:','js'=>0),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['store']->value['phone'];?>
<?php }?>
			</p>
				<?php if (isset($_smarty_tpl->tpl_vars['store']->value['working_hours'])) {?><?php echo $_smarty_tpl->tpl_vars['store']->value['working_hours'];?>
<?php }?>
		</div>
	<?php } ?>
	<?php }?>
<?php } else { ?>
	<script type="text/javascript">
		// <![CDATA[
		var map;
		var markers = [];
		var infoWindow;
		var locationSelect;

		var defaultLat = '<?php echo $_smarty_tpl->tpl_vars['defaultLat']->value;?>
';
		var defaultLong = '<?php echo $_smarty_tpl->tpl_vars['defaultLong']->value;?>
';
		
		var translation_1 = '<?php echo smartyTranslate(array('s'=>'No stores were found. Please try selecting a wider radius.','js'=>1),$_smarty_tpl);?>
';
		var translation_2 = '<?php echo smartyTranslate(array('s'=>'store found -- see details:','js'=>1),$_smarty_tpl);?>
';
		var translation_3 = '<?php echo smartyTranslate(array('s'=>'stores found -- view all results:','js'=>1),$_smarty_tpl);?>
';
		var translation_4 = '<?php echo smartyTranslate(array('s'=>'Phone:','js'=>1),$_smarty_tpl);?>
';
		var translation_5 = '<?php echo smartyTranslate(array('s'=>'Get directions','js'=>1),$_smarty_tpl);?>
';
		var translation_6 = '<?php echo smartyTranslate(array('s'=>'Not found','js'=>1),$_smarty_tpl);?>
';
		
		var hasStoreIcon = '<?php echo $_smarty_tpl->tpl_vars['hasStoreIcon']->value;?>
';
		var distance_unit = '<?php echo $_smarty_tpl->tpl_vars['distance_unit']->value;?>
';
		var img_store_dir = '<?php echo $_smarty_tpl->tpl_vars['img_store_dir']->value;?>
';
		var img_ps_dir = '<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
';
		var searchUrl = '<?php echo $_smarty_tpl->tpl_vars['searchUrl']->value;?>
';
		var logo_store = '<?php echo $_smarty_tpl->tpl_vars['logo_store']->value;?>
';
		//]]>
	</script>

	<p><?php echo smartyTranslate(array('s'=>'Enter a location (e.g. zip/postal code, address, city or country) in order to find the nearest stores.'),$_smarty_tpl);?>
</p>
	<p>
		<label for="addressInput"><?php echo smartyTranslate(array('s'=>'Your location:'),$_smarty_tpl);?>
</label>
		<input type="text" name="location" id="addressInput" value="<?php echo smartyTranslate(array('s'=>'Address, zip / postal code, city, state or country'),$_smarty_tpl);?>
" onclick="this.value='';" />
	</p>
	<p>
		<label for="radiusSelect"><?php echo smartyTranslate(array('s'=>'Radius:'),$_smarty_tpl);?>
</label> 
		<select name="radius" id="radiusSelect">
			<option value="15">15</option>
			<option value="25">25</option>
			<option value="50">50</option>
			<option value="100">100</option>
		</select> <?php echo $_smarty_tpl->tpl_vars['distance_unit']->value;?>

		<img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" class="middle" alt="" id="stores_loader" />
	</p>
	<p class="clearfix">
		<input type="button" class="button" onclick="searchLocations();" value="<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
" style="display: inline;" /> 
	</p>
	<div><select id="locationSelect"><option></option></select></div>
    <div id="map"></div>
	<table cellpadding="0" cellspacing="0" border="0" id="stores-table" class="table_block">
		<tr>
			<th><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
</th>
			<th><?php echo smartyTranslate(array('s'=>'Store'),$_smarty_tpl);?>
</th>
			<th><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</th>
			<th><?php echo smartyTranslate(array('s'=>'Distance'),$_smarty_tpl);?>
</th>
		</tr>		
	</table>
<?php }?>
<?php }} ?>
