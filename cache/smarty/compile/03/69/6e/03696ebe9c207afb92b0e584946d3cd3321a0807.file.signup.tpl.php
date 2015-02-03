<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 03:07:04
         compiled from "/home/cooltivoinfo/public_html/modules/agilemembership/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72774018054d081a873d229-37747076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03696ebe9c207afb92b0e584946d3cd3321a0807' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agilemembership/signup.tpl',
      1 => 1422889095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72774018054d081a873d229-37747076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'membershiptypes' => 0,
    'membershiptype' => 0,
    'membership' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d081a87a1317_41072997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d081a87a1317_41072997')) {function content_54d081a87a1317_41072997($_smarty_tpl) {?><div class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Membership signup','mod'=>'agilemembership'),$_smarty_tpl);?>
</h3>
	<div class="required form-group">
		<label for="id_membership_type" class="control-label"><?php echo smartyTranslate(array('s'=>'Membership Type','mod'=>'agilemembership'),$_smarty_tpl);?>

  </label>
		<select id="id_membership_type" name="id_membership_type" class="is_required form-control">
			<option value="0">-</option>
            <?php  $_smarty_tpl->tpl_vars['membershiptype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['membershiptype']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['membershiptypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['membershiptype']->key => $_smarty_tpl->tpl_vars['membershiptype']->value) {
$_smarty_tpl->tpl_vars['membershiptype']->_loop = true;
?>
                <option value="<?php echo intval($_smarty_tpl->tpl_vars['membershiptype']->value['id_membership_type']);?>
" <?php if ($_smarty_tpl->tpl_vars['membership']->value->id_membership_type==intval($_smarty_tpl->tpl_vars['membershiptype']->value['id_membership_type'])) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['membershiptype']->value['name'];?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['membershiptype']->value['price']),$_smarty_tpl);?>
</option>
	        <?php } ?>
		</select>
    </div>
</div>
<?php }} ?>
