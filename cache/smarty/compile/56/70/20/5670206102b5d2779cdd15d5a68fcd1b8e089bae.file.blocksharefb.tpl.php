<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110734814254d0d7afc91193-06627187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5670206102b5d2779cdd15d5a68fcd1b8e089bae' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/blocksharefb/blocksharefb.tpl',
      1 => 1420663026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110734814254d0d7afc91193-06627187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7afc9afb0_90415781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7afc9afb0_90415781')) {function content_54d0d7afc9afb0_90415781($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
