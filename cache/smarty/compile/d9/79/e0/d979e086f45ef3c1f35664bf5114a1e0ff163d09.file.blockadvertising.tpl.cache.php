<?php /* Smarty version Smarty-3.1.19, created on 2015-02-02 09:58:48
         compiled from "/home/cooltivoinfo/public_html/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102767864954cf90a8cb00a8-04025883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd979e086f45ef3c1f35664bf5114a1e0ff163d09' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/blockadvertising/blockadvertising.tpl',
      1 => 1420662986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102767864954cf90a8cb00a8-04025883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cf90a8d05de4_14176897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf90a8d05de4_14176897')) {function content_54cf90a8d05de4_14176897($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>
