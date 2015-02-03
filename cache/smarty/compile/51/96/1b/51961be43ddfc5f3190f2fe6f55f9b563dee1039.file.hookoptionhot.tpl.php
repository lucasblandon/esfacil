<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/modules/agilesellerlistoptions//hookoptionhot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144968489654d0d7afcabba7-78143034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51961be43ddfc5f3190f2fe6f55f9b563dee1039' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agilesellerlistoptions//hookoptionhot.tpl',
      1 => 1422889667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144968489654d0d7afcabba7-78143034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_valid' => 0,
    'base_dir_ssl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7afcb7702_66625435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7afcb7702_66625435')) {function content_54d0d7afcb7702_66625435($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_valid']->value>0) {?>
<div class="row">
	<span class="agile-col-lg-4 agile-col-xl-3" style="color:Red">
		<?php echo smartyTranslate(array('s'=>'HOT','mod'=>'agilesellerlistoptions'),$_smarty_tpl);?>

		<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agilesellerlistoptions/imgs/hot.png" />
	</span>
</div>
<?php }?><?php }} ?>
