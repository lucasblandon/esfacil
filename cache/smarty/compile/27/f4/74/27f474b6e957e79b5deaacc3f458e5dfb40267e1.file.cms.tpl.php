<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 03:06:55
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/cms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50463122154d0819fcd1f60-28287034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f474b6e957e79b5deaacc3f458e5dfb40267e1' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/cms.tpl',
      1 => 1422887807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50463122154d0819fcd1f60-28287034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms' => 0,
    'cms_category' => 0,
    'base_dir' => 0,
    'content_only' => 0,
    'link' => 0,
    'sub_category' => 0,
    'subcategory' => 0,
    'cms_pages' => 0,
    'cmspages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0819fd778a0_42303355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0819fd778a0_42303355')) {function content_54d0819fd778a0_42303355($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms']->value)&&!isset($_smarty_tpl->tpl_vars['cms_category']->value)) {?>
	<?php if (!$_smarty_tpl->tpl_vars['cms']->value->active) {?>
		<br />
		<div id="admin-action-cms">
			<p><?php echo smartyTranslate(array('s'=>'This CMS page is not visible to your customers.'),$_smarty_tpl);?>

			<input type="hidden" id="admin-action-cms-id" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value->id;?>
" />
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishCMS('<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo htmlentities($_GET['ad'], ENT_QUOTES, 'UTF-8', true);?>
', 0, '<?php echo htmlentities($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);?>
')"/>
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishCMS('<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php echo htmlentities($_GET['ad'], ENT_QUOTES, 'UTF-8', true);?>
', 1, '<?php echo htmlentities($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);?>
')"/>
			</p>
			<div class="clear" ></div>
			<p id="admin-action-result"></p>
			</p>
		</div>
	<?php }?>
	<div class="rte<?php if ($_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?>">
		<?php echo $_smarty_tpl->tpl_vars['cms']->value->content;?>

	</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['cms_category']->value)) {?>
	<div class="block-cms">
		<h1 class="page-title"><a href="<?php if ($_smarty_tpl->tpl_vars['cms_category']->value->id==1) {?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['cms_category']->value->id,$_smarty_tpl->tpl_vars['cms_category']->value->link_rewrite);?>
<?php }?>"><?php echo htmlentities($_smarty_tpl->tpl_vars['cms_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h1>
		<?php if (isset($_smarty_tpl->tpl_vars['sub_category']->value)&&!empty($_smarty_tpl->tpl_vars['sub_category']->value)) {?>	
			<p class="title_block"><?php echo smartyTranslate(array('s'=>'List of sub categories in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</p>
			<ul class="bullet">
				<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
					<li>
						<a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_cms_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['cms_pages']->value)&&!empty($_smarty_tpl->tpl_vars['cms_pages']->value)) {?>
		<p class="title_block"><?php echo smartyTranslate(array('s'=>'List of pages in %s:','sprintf'=>$_smarty_tpl->tpl_vars['cms_category']->value->name),$_smarty_tpl);?>
</p>
			<ul class="bullet">
				<?php  $_smarty_tpl->tpl_vars['cmspages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmspages']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmspages']->key => $_smarty_tpl->tpl_vars['cmspages']->value) {
$_smarty_tpl->tpl_vars['cmspages']->_loop = true;
?>
					<li>
						<a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cmspages']->value['id_cms'],$_smarty_tpl->tpl_vars['cmspages']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php }?>
	</div>
<?php } else { ?>
	<div class="error">
		<?php echo smartyTranslate(array('s'=>'This page does not exist.'),$_smarty_tpl);?>

	</div>
<?php }?>
<br /><?php }} ?>
