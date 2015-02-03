<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/modules/agileproductreviews/views/templates/hook/hookagilereviewsummary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63076110654d0d7afcea721-74870798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda265a2a7582d6ab622ad1e446a7482941b3a3d' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agileproductreviews/views/templates/hook/hookagilereviewsummary.tpl',
      1 => 1422889551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63076110654d0d7afcea721-74870798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
    'nbReviews' => 0,
    'is_at_product_page' => 0,
    'link_url' => 0,
    'product_name' => 0,
    'agilereviewsummary' => 0,
    'stars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7afd262b6_62582464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7afd262b6_62582464')) {function content_54d0d7afd262b6_62582464($_smarty_tpl) {?><table id="tblAgilereviewSummary_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
">
  <?php if ($_smarty_tpl->tpl_vars['nbReviews']->value>0) {?>
  <tr>
    <td nowrap="">
      <div itemscope="" itemtype="http://data-vocabulary.org/Product">
        <table border="0">
          <tr>
            <td>
            </td>
            <td align="left">
              <?php if ($_smarty_tpl->tpl_vars['is_at_product_page']->value!=1) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['link_url']->value;?>
">
              <?php }?>
                <div itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
                  <span itemprop="itemreviewed"><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</span><br />
                  <span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating">
                    <span itemprop="average"><?php echo round($_smarty_tpl->tpl_vars['agilereviewsummary']->value,1);?>
</span>
                    /<span itemprop="best">5</span>
                  </span>
                  based on <span itemprop="votes"><?php echo $_smarty_tpl->tpl_vars['nbReviews']->value;?>
</span>
	              <?php if ($_smarty_tpl->tpl_vars['is_at_product_page']->value!=1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['link_url']->value;?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['stars']->value;?>
<?php if ($_smarty_tpl->tpl_vars['is_at_product_page']->value!=1) {?></a><?php }?>
                </div>
              <?php if ($_smarty_tpl->tpl_vars['is_at_product_page']->value!=1) {?>
              </a>
              <?php }?>
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
  <?php } else { ?>
	 <?php if ($_smarty_tpl->tpl_vars['is_at_product_page']->value!=1) {?>
	  <tr>
		<td nowrap="">
	      <div itemscope="" itemtype="http://data-vocabulary.org/Product">

        <table border="0">
          <tr>
            <td>
            </td>
            <td align="left">
				  <a href="<?php echo $_smarty_tpl->tpl_vars['link_url']->value;?>
">
					<span><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</span><br />
					<?php echo smartyTranslate(array('s'=>'No review yet, write a review','mod'=>'agileproductreviews'),$_smarty_tpl);?>

				  </a>
				</td>
			</tr>
			</table>
		</td>
	  </tr>
	  <?php }?>
  <?php }?>
</table>
<?php }} ?>
