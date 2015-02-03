<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 08:35:51
         compiled from "/home/cooltivoinfo/public_html/adminpruebas/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142226729154d0ceb764d458-27183835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86b37ae84efcc460c5f6815ff5c3633e35a59718' => 
    array (
      0 => '/home/cooltivoinfo/public_html/adminpruebas/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1420643154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142226729154d0ceb764d458-27183835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0ceb7657274_94071382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0ceb7657274_94071382')) {function content_54d0ceb7657274_94071382($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
