<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 08:47:43
         compiled from "/home/cooltivoinfo/public_html/modules/agileproductreviews/views/templates/hook/hookhome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131252025354d0d17ff2ae45-99298498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e6989eaab1e7873d72beaf0b146c8d6a63e46c' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agileproductreviews/views/templates/hook/hookhome.tpl',
      1 => 1422889553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131252025354d0d17ff2ae45-99298498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reviews' => 0,
    'review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d180024337_27609983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d180024337_27609983')) {function content_54d0d180024337_27609983($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
<div class="row">
    <h2>
	    <span style="float:left"><?php echo smartyTranslate(array('s'=>'Latest received customer reviews','mod'=>'agileproductreviews'),$_smarty_tpl);?>

	    </span>
    </h2>
</div>
<div class="row">
	<div class="clear table_block">
		<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['review']->value['content']) {?>
			  <div itemscope itemtype="http://data-vocabulary.org/Review" style="margin:10px;">
				<span itemprop="itemreviewed"><a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['link_url'];?>
" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['review']->value['product'];?>
</a></span><br />
				<span itemprop="rating"><?php echo $_smarty_tpl->tpl_vars['review']->value['stars'];?>
&nbsp;<?php echo round($_smarty_tpl->tpl_vars['review']->value['grade'],1);?>
</span><br />
				<span itemprop="reviewer"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['review']->value['customer'],20,'...',true), ENT_QUOTES, 'UTF-8', true);?>
</span>
				<time itemprop="dtreviewed" datetime="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
</time><br />
				<span itemprop="summary"></span>
				<span itemprop="description"><?php echo nl2br($_smarty_tpl->tpl_vars['review']->value['content']);?>
</span>
			  </div>
			 <hr style="border:dotted 1px gray" />
			<?php }?>
		<?php } ?>
	</div>
</div>
<?php }?>



<?php }} ?>
