<?php /* Smarty version Smarty-3.1.19, created on 2015-02-02 22:45:25
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/manufacturer-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188031883154d04455b9e557-76126983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a29a4be329182d3e53a0a916a89022af629c65ed' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/manufacturer-list.tpl',
      1 => 1422887816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188031883154d04455b9e557-76126983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'nbManufacturers' => 0,
    'manufacturers' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
    'mediumSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d04455c7fe16_74724196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d04455c7fe16_74724196')) {function content_54d04455c7fe16_74724196($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Manufacturers:'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-title"><?php echo smartyTranslate(array('s'=>'Manufacturers:'),$_smarty_tpl);?>
</h1>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<p class="nbrmanufacturer"><span class="bold"><?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value==0) {?><?php echo smartyTranslate(array('s'=>'There are no manufacturers.'),$_smarty_tpl);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is %d manufacturer.','sprintf'=>$_smarty_tpl->tpl_vars['nbManufacturers']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There are %d manufacturers.','sprintf'=>$_smarty_tpl->tpl_vars['nbManufacturers']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
	</p>

	<?php if ($_smarty_tpl->tpl_vars['nbManufacturers']->value>0) {?>
		<ul id="manufacturers_list">
		<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturers']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturers']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
			<li class="clearfix <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturers']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturers']['last']) {?>last_item<?php } else { ?>item<?php }?>"> 
				<div class="left_side">
					<!-- logo -->
					<div class="logo">
					<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?><a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlentities($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="lnk_img"><?php }?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo htmlentities($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
					<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?></a><?php }?>
					</div>
					<!-- name -->
					<h3>
						<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?><a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
						<?php echo htmlentities($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['manufacturer']->value['name'],60,'...'), ENT_QUOTES, 'UTF-8', true);?>

						<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?></a><?php }?>
					</h3>
					<p class="description rte">
					<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?><a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
						<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>

					<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?></a><?php }?>
					<br />
					<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?><a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
						<span><?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']==1) {?><?php echo smartyTranslate(array('s'=>'%d product','sprintf'=>intval($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products'])),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d products','sprintf'=>intval($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products'])),$_smarty_tpl);?>
<?php }?></span>
					<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?></a><?php }?>
					</p>
				</div>

				<div class="right_side">
				<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['nb_products']>0) {?>
					<a class="button" href="<?php echo htmlentities($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'view products'),$_smarty_tpl);?>
</a>
				<?php }?>
				</div>
			</li>
		<?php } ?>
		</ul>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>
<?php }} ?>
