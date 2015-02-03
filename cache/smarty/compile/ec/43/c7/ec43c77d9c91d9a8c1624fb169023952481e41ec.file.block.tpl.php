<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/modules/posstaticblocks/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40547179254d0d7afbc0691-55077227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec43c77d9c91d9a8c1624fb169023952481e41ec' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/posstaticblocks/block.tpl',
      1 => 1422888440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40547179254d0d7afbc0691-55077227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'staticblocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7afbdf6c4_89208150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7afbdf6c4_89208150')) {function content_54d0d7afbdf6c4_89208150($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
	  <?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1) {?>
		  <p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp3=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp3),$_smarty_tpl);?>
 </p>
		
	  <?php }?>
	  <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

	  <?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1) {?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

	   <?php }?>
     <?php } ?><?php }} ?>
