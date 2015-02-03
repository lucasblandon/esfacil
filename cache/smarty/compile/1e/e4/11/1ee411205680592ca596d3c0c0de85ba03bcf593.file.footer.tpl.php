<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:09
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97540043254d0d7b1019991-64598246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ee411205680592ca596d3c0c0de85ba03bcf593' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/footer.tpl',
      1 => 1422887808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97540043254d0d7b1019991-64598246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7b1036933_94357089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7b1036933_94357089')) {function content_54d0d7b1036933_94357089($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
				</div>

<!-- Right -->			<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
					<div id="right_column" class="col-xs-12 col-sm-3">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

					</div>
				<?php }?>
				
						</div>
					</div>
				</div>
			</div>
			

<!-- Footer -->		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"brandSlider"),$_smarty_tpl);?>

			<div id="footer">
				<div class="pos-footer-top">
					<div class="footer-top">
					    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter3"),$_smarty_tpl);?>

					</div>	
				</div>
				<div class="pos-footer-center">
					<div class="container">
						<div class="row">
						    <div class="footer-center">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter1"),$_smarty_tpl);?>

						    </div>
					    </div>
					</div>
				</div>
				<div class="pos-footer-bottom">
					<div class="container">
						<div class="row">
							<div class="footer-bottom">
							    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter2"),$_smarty_tpl);?>

							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<?php }?>
	<div class="back-top"><a href= "#" class="mypresta_scrollup hidden-phone"></a></div>
	</body>
</html>
<?php }} ?>
