<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 06:23:57
         compiled from "/home/cooltivoinfo/public_html/modules/agilemultipleshop/views/templates/front/agilesellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200123198754d0afcd8ddfd8-95886160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a5d2db7e7e3a802c77b22b00c1e2bdfad530f39' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agilemultipleshop/views/templates/front/agilesellers.tpl',
      1 => 1422889382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200123198754d0afcd8ddfd8-95886160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'loclevel' => 0,
    'parentid' => 0,
    'filter' => 0,
    'sellertypes' => 0,
    'sellertype' => 0,
    'seller_type' => 0,
    'sellerlocs' => 0,
    'sellerloc' => 0,
    'seller_location' => 0,
    'link' => 0,
    'filters' => 0,
    'letter' => 0,
    'selers_nb' => 0,
    'seller_list' => 0,
    'seller' => 0,
    'seller_link' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbLines' => 0,
    'liHeight' => 0,
    'totModulo' => 0,
    'homeSize' => 0,
    'userview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0afcdaa5405_11507016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0afcdaa5405_11507016')) {function content_54d0afcdaa5405_11507016($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/cooltivoinfo/public_html/tools/smarty/plugins/function.math.php';
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script language="javascript" type="text/javascript">
	$(document).ready(function () {
		$('div.filter2 a').click(function() {
			jumptoagilesellerspage("<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
",$(this).attr("letter"), "<?php echo $_smarty_tpl->tpl_vars['loclevel']->value;?>
", <?php echo $_smarty_tpl->tpl_vars['parentid']->value;?>
);
			return false;
		});

		$('div.filters select').change(function() {
			jumptoagilesellerspage("<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
", "<?php echo $_smarty_tpl->tpl_vars['loclevel']->value;?>
", <?php echo $_smarty_tpl->tpl_vars['parentid']->value;?>
);
		});

	});
</script>
<h2><?php echo smartyTranslate(array('s'=>'Seller List','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</h2>
<br>

<div class="filters">
	<div class="row">
		<div class="agile-col-xs-12 agile-col-sm-6 agile-col-md-4 clearfix">
			<label class="agile-col-xs-4 agile-col-sm-4 agile-col-md-4 agile-col-lg-3 agile-col-xl-3"><?php echo smartyTranslate(array('s'=>'Type:','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</label>
 			<select name="seller_type" id="seller_type" class="agile-col-xs-8 agile-col-sm-8 agile-col-md-8 agile-col-lg-6 agile-col-xl-8">
				<option value="0"><?php echo smartyTranslate(array('s'=>'- All Type-','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['sellertype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sellertype']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sellertypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sellertype']->key => $_smarty_tpl->tpl_vars['sellertype']->value) {
$_smarty_tpl->tpl_vars['sellertype']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['sellertype']->value['id_sellertype'];?>
" <?php if ($_smarty_tpl->tpl_vars['sellertype']->value['id_sellertype']==$_smarty_tpl->tpl_vars['seller_type']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sellertype']->value['name'];?>
</option>
				<?php } ?>
			</select>
		 </div>
		<div class="agile-col-xs-12 agile-col-sm-6 agile-col-md-4 clearfix">
			<label class="agile-col-xs-4 agile-col-sm-4 agile-col-md-4 agile-col-lg-3 agile-col-xl-3"><?php echo smartyTranslate(array('s'=>'Location:','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</label>
 			<select name="seller_location" id="seller_location" class="agile-col-xs-8 agile-col-sm-8 agile-col-md-8 agile-col-lg-6 agile-col-xl-8">
				<option value=""><?php echo smartyTranslate(array('s'=>' - All Locations-','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['sellerloc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sellerloc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sellerlocs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sellerloc']->key => $_smarty_tpl->tpl_vars['sellerloc']->value) {
$_smarty_tpl->tpl_vars['sellerloc']->_loop = true;
?>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sellerloc']->value['name'];?>
<?php $_tmp4=ob_get_clean();?><?php if (!empty($_tmp4)) {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['sellerloc']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sellerloc']->value['id']==$_smarty_tpl->tpl_vars['seller_location']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sellerloc']->value['name'];?>
</option>
					<?php }?>
				<?php } ?>
			</select>
		</div>
	</div> <!-- row -->
</div>

<div class="filter2">
	<b><?php echo smartyTranslate(array('s'=>'Name Filter','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</b>:&nbsp; <?php if (strtoupper($_smarty_tpl->tpl_vars['filter']->value)=='ALL') {?><b>All</b><?php } else { ?><a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['loclevel']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getAgileSellersLink('all',null,$_tmp5);?>
" letter="all">All</a><?php }?>
	<?php  $_smarty_tpl->tpl_vars['letter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['letter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['letter']->key => $_smarty_tpl->tpl_vars['letter']->value) {
$_smarty_tpl->tpl_vars['letter']->_loop = true;
?>
	&nbsp;
	<?php if ($_smarty_tpl->tpl_vars['filter']->value==$_smarty_tpl->tpl_vars['letter']->value) {?><b><?php echo strtoupper($_smarty_tpl->tpl_vars['letter']->value);?>
</b><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAgileSellersLink($_smarty_tpl->tpl_vars['letter']->value,null,$_smarty_tpl->tpl_vars['loclevel']->value);?>
" letter="<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['letter']->value);?>
</a><?php }?>
	<?php } ?>
</div>


<div class="content_sortPagiBar">
	<?php if ($_smarty_tpl->tpl_vars['selers_nb']->value>1) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	<div class="sortPagiBar clearfix">
	<ul class="display">
		<li class="display-title"> <?php echo smartyTranslate(array('s'=>'View:','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</li>
		<li id="grid"><a rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'Grid','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><i class="icon-th-large"></i> <?php echo smartyTranslate(array('s'=>'Grid','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a></li>
		<li id="list"><a rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'List','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><i class="icon-th-list"></i><?php echo smartyTranslate(array('s'=>'List','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a></li>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['selers_nb']->value>0) {?>
		<?php if ($_smarty_tpl->tpl_vars['selers_nb']->value>1) {?>
			<p class="alert alert-info agile-col-xs-8"><?php echo smartyTranslate(array('s'=>'There are','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['selers_nb']->value;?>
 <?php echo smartyTranslate(array('s'=>'sellers.','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</p>
		<?php } else { ?>
			<p class="alert alert-info agile-col-xs-8"><?php echo smartyTranslate(array('s'=>'There is','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['selers_nb']->value;?>
 <?php echo smartyTranslate(array('s'=>'seller.','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</p>
		<?php }?>
	<?php } else { ?>
		<p class="alert alert-warning agile-col-xs-8"><?php echo smartyTranslate(array('s'=>'There is no sellers found meets your search criteria.','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</p>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['agilemultipleshop_tpl']->value)."./nbr-per-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>



<div id="listview" class="hidden">
    <table class="std">
	<tr>
	<th><?php echo smartyTranslate(array('s'=>'Logo/Photo','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</th>
	<th><?php echo smartyTranslate(array('s'=>'Description','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['seller'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seller']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seller_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seller']->key => $_smarty_tpl->tpl_vars['seller']->value) {
$_smarty_tpl->tpl_vars['seller']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['seller_link'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getAgileSellerLink($_smarty_tpl->tpl_vars['seller']->value['id_seller'],$_smarty_tpl->tpl_vars['seller']->value['company']), null, 0);?>
	<tr>
		<td>
					<div class="logo">
           			<a href="<?php echo $_smarty_tpl->tpl_vars['seller_link']->value;?>
">
           			
   					<img src="<?php echo $_smarty_tpl->tpl_vars['seller']->value['seller_logo_url'];?>
" width="120" title="Logo" alt="Logo" />
   					</a>
					</div>
		</td>
		<td>
					<h4><a href="<?php echo $_smarty_tpl->tpl_vars['seller_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['seller']->value['company'];?>
</a></h4>
					<span><?php echo $_smarty_tpl->tpl_vars['seller']->value['country'];?>
</span><br>
					<p class="description">
					<?php echo $_smarty_tpl->tpl_vars['seller']->value['description'];?>

					</p>
		</td>
	</tr>
	<?php } ?>
    </table>
</div>



<div id="gridview" class="hidden">
	<?php if ($_smarty_tpl->tpl_vars['selers_nb']->value) {?>
		<div class="block_content">
			<?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(250, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['seller_list']->value), null, 0);?>
			<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

			<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->tpl_vars['nbLines']->value),'liHeight'=>$_smarty_tpl->tpl_vars['liHeight']->value,'assign'=>'ulHeight'),$_smarty_tpl);?>

			<ul class="seller_list grid row ">
			<?php  $_smarty_tpl->tpl_vars['seller'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seller']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seller_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['seller']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['seller']->iteration=0;
 $_smarty_tpl->tpl_vars['seller']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gridViewSellers']['total'] = $_smarty_tpl->tpl_vars['seller']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gridViewSellers']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['seller']->key => $_smarty_tpl->tpl_vars['seller']->value) {
$_smarty_tpl->tpl_vars['seller']->_loop = true;
 $_smarty_tpl->tpl_vars['seller']->iteration++;
 $_smarty_tpl->tpl_vars['seller']->index++;
 $_smarty_tpl->tpl_vars['seller']->first = $_smarty_tpl->tpl_vars['seller']->index === 0;
 $_smarty_tpl->tpl_vars['seller']->last = $_smarty_tpl->tpl_vars['seller']->iteration === $_smarty_tpl->tpl_vars['seller']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gridViewSellers']['first'] = $_smarty_tpl->tpl_vars['seller']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gridViewSellers']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gridViewSellers']['last'] = $_smarty_tpl->tpl_vars['seller']->last;
?>
				<?php $_smarty_tpl->tpl_vars['seller_link'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getAgileSellerLink($_smarty_tpl->tpl_vars['seller']->value['id_seller'],$_smarty_tpl->tpl_vars['seller']->value['company']), null, 0);?>
				<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['gridViewSellers']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
				<li class="ajax_block_seller col-xs-12 col-sm-6 col-md-4 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['gridViewSellers']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['gridViewSellers']['last']) {?>last_item<?php } else { ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['gridViewSellers']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?>last_item_of_line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['gridViewSellers']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> <?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['gridViewSellers']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['gridViewSellers']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last_line<?php }?>">
				<div class="seller-container">
					<span><?php echo $_smarty_tpl->tpl_vars['seller']->value['country'];?>
</span><br>
					<div class="seller-image-container">
					<a href="<?php echo $_smarty_tpl->tpl_vars['seller_link']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seller']->value['company'], ENT_QUOTES, 'UTF-8', true);?>
" class="product_image">
					<img src="<?php echo $_smarty_tpl->tpl_vars['seller']->value['seller_logo_url'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seller']->value['company'], ENT_QUOTES, 'UTF-8', true);?>
"  /></a>
					</div>
					<h5><a href="<?php echo $_smarty_tpl->tpl_vars['seller_link']->value;?>
" title="<?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['seller']->value['company'],50,'...'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['seller']->value['company'],35,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
					<div class="product_desc" style="display:none;"><a href="" title="<?php echo smartyTranslate(array('s'=>'More','mod'=>'homefeatured'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['seller']->value['description']),65,'...');?>
</a></div>
				</div>
				</li>
			<?php } ?>
			</ul>
		</div>
	<?php }?>
</div>


<div class="content_sortPagiBar">
	<?php if ($_smarty_tpl->tpl_vars['selers_nb']->value>1) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	<div class="sortPagiBar clearfix">
		<ul class="display">
			<li class="display-title"> <?php echo smartyTranslate(array('s'=>'View:','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</li>
			<li id="grid"><a rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'Grid','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><i class="icon-th-large"></i> <?php echo smartyTranslate(array('s'=>'Grid','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a></li>
			<li id="list"><a rel="nofollow" href="#" title="<?php echo smartyTranslate(array('s'=>'List','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
"><i class="icon-th-list"></i><?php echo smartyTranslate(array('s'=>'List','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</a></li>
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['selers_nb']->value>0) {?>
			<?php if ($_smarty_tpl->tpl_vars['selers_nb']->value>1) {?>
				<p class="alert alert-info agile-col-xs-8"><?php echo smartyTranslate(array('s'=>'There are','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['selers_nb']->value;?>
 <?php echo smartyTranslate(array('s'=>'sellers.','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</p>
			<?php } else { ?>
				<p class="alert alert-info agile-col-xs-8"><?php echo smartyTranslate(array('s'=>'There is','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['selers_nb']->value;?>
 <?php echo smartyTranslate(array('s'=>'seller.','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</p>
			<?php }?>
		<?php } else { ?>
			<p class="alert alert-warning agile-col-xs-8"><?php echo smartyTranslate(array('s'=>'There is no sellers found meets your search criteria.','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
</p>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['agilemultipleshop_tpl']->value)."./nbr-per-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<span style="float:right;display:none;">
			<input type="hidden" name="userview" id="userview" value="<?php echo $_smarty_tpl->tpl_vars['userview']->value;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agilemultipleshop/img/grid.png" id="imggrid" value="grid" style="cursor:pointer" class="listgrid" title="<?php echo smartyTranslate(array('s'=>'Show in Grid View','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
">&nbsp;
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agilemultipleshop/img/list.png" id="imglist" value="list" style="cursor:pointer" class="listgrid" title="<?php echo smartyTranslate(array('s'=>'Show in List View','mod'=>'agilemultipleshop'),$_smarty_tpl);?>
">
		</span>
	</div>
</div>
<?php }} ?>
