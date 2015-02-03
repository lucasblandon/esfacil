<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:09
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/modules/blocknewsletter/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96869252554d0d7b1064cf5-61228935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a6bc89819c15b682cefeb90b5df232fa52b955' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1422888355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96869252554d0d7b1064cf5-61228935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7b10c0fb3_62114099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7b10c0fb3_62114099')) {function content_54d0d7b10c0fb3_62114099($_smarty_tpl) {?>

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="f-col col-sm-3 col-md-3 col-sms-12 col-smb-12">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</p>
	<div class="block_content">
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning_inline<?php } else { ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
		<p class="newletter-header"><?php echo smartyTranslate(array('s'=>'Newsletter Sign Up','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</p>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'ISO-8859-1', true);?>
" method="post">
			<p>
				<input class="inputNew" id="newsletter-input" type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value) {?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" />
				<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
" class="button_mini" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
        $(document).ready(function() {
            $('#newsletter-input').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

            <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
                $('#columns').before('<div class="clearfix"></div><p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning<?php } else { ?>success<?php }?>"><?php echo smartyTranslate(array('s'=>"Newsletter:",'js'=>1,'mod'=>"blocknewsletter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>');
            <?php }?>
        });
</script>
<?php }} ?>
