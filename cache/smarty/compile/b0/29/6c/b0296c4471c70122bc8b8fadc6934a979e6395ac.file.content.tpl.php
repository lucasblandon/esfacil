<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 08:48:31
         compiled from "/home/cooltivoinfo/public_html/adminpruebas/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107837198554d0d1af835af7-05350706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0296c4471c70122bc8b8fadc6934a979e6395ac' => 
    array (
      0 => '/home/cooltivoinfo/public_html/adminpruebas/themes/default/template/content.tpl',
      1 => 1420643154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107837198554d0d1af835af7-05350706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d1af841223_02010618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d1af841223_02010618')) {function content_54d0d1af841223_02010618($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
