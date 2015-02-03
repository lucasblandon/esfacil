<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/modules/agileproductreviews/views/templates/hook/hooktabcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170309786454d0d7afe7e0b3-63833807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19d1b370ee7c408393e9c7a1c509dd6773fda957' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agileproductreviews/views/templates/hook/hooktabcontent.tpl',
      1 => 1422889558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170309786454d0d7afe7e0b3-63833807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nb_total' => 0,
    'averageTotal' => 0,
    'nb_reviews' => 0,
    'criterions' => 0,
    'c' => 0,
    'averagestars' => 0,
    'averages' => 0,
    'reviews' => 0,
    'review' => 0,
    'hide_reviewer' => 0,
    'enable_voting' => 0,
    'voting_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7aff2aa87_81942138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7aff2aa87_81942138')) {function content_54d0d7aff2aa87_81942138($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['nb_total']->value>0) {?>
<div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
  <span>
    <?php echo smartyTranslate(array('s'=>'Average','mod'=>'agileproductreviews'),$_smarty_tpl);?>
&nbsp;<span itemprop="ratingValue" ><?php echo $_smarty_tpl->tpl_vars['averageTotal']->value;?>
</span>&nbsp;
  </span>
  <span itemprop="reviewCount" content="<?php echo $_smarty_tpl->tpl_vars['nb_reviews']->value;?>
">.</span>
    <table>
    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
    <tr>
      <td>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br />
      </td>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['averagestars']->value[$_smarty_tpl->tpl_vars['c']->value['id_agile_criterion']];?>

      </td>
      <td>
        <?php echo round($_smarty_tpl->tpl_vars['averages']->value[$_smarty_tpl->tpl_vars['c']->value['id_agile_criterion']],1);?>

      </td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear table_block">
	    <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
		    <?php if ($_smarty_tpl->tpl_vars['review']->value['content']) {?>

          <div itemscope itemtype="http://data-vocabulary.org/Review" style="margin:10px;">
            <span itemprop="itemreviewed"><?php echo $_smarty_tpl->tpl_vars['review']->value['product_name'];?>
</span><br />
            <span itemprop="rating"><?php echo $_smarty_tpl->tpl_vars['review']->value['stars'];?>
&nbsp;<?php echo round($_smarty_tpl->tpl_vars['review']->value['grade'],1);?>
</span><br />
            <?php if ($_smarty_tpl->tpl_vars['hide_reviewer']->value) {?>
            <span itemprop="reviewer"><b><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['review']->value['customer'],20,'...',true), ENT_QUOTES, 'UTF-8', true);?>
</b></span>
            <?php }?>
            <time itemprop="dtreviewed" datetime="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
"><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
</b></time><br />
            <span itemprop="summary"></span>
            <br />
            <span itemprop="description"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['content'], ENT_QUOTES, 'UTF-8', true));?>
</span>

            <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['response'])) {?>
			<div style="color:blue;">
			<br /><br />
            <b><?php echo smartyTranslate(array('s'=>'Store','mod'=>'agileproductreviews'),$_smarty_tpl);?>
 &nbsp; <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['date_response'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
</b><br>
            <span itemprop="description"><?php echo nl2br($_smarty_tpl->tpl_vars['review']->value['response']);?>
</span>
			</div>
            <?php }?>
          </div>
         <?php if ($_smarty_tpl->tpl_vars['enable_voting']->value) {?>
         <table width="100%"><tr>
            <td><?php echo smartyTranslate(array('s'=>'I like this review','mod'=>'agileproductreviews'),$_smarty_tpl);?>
&nbsp;&nbsp;<input type="radio" name="review_voting_<?php echo $_smarty_tpl->tpl_vars['review']->value['id_agile_review'];?>
" value="yes" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'agileproductreviews'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="review_voting_<?php echo $_smarty_tpl->tpl_vars['review']->value['id_agile_review'];?>
" value="no" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'No','mod'=>'agileproductreviews'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;</td>
            <td align="left"><input type="button" class="button_small" onclick="javascript:cast_review_voting('<?php echo $_smarty_tpl->tpl_vars['voting_path']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['review']->value['id_agile_review'];?>
)" value="Vote"></td>
            <td align="right"><?php echo smartyTranslate(array('s'=>'Total','mod'=>'agileproductreviews'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'agileproductreviews'),$_smarty_tpl);?>
:<span id="span_yes_<?php echo $_smarty_tpl->tpl_vars['review']->value['id_agile_review'];?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['yes_counter'];?>
</span>&nbsp;&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'No','mod'=>'agileproductreviews'),$_smarty_tpl);?>
:<span id="span_no_<?php echo $_smarty_tpl->tpl_vars['review']->value['id_agile_review'];?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['no_counter'];?>
</span></td>
          </tr></table>
          <?php }?>

         <hr style="border:dotted 1px gray" />
				    
		    <?php }?>
	    <?php } ?>
	    </div>
<?php } else { ?>
	    <p class="align_center"><?php echo smartyTranslate(array('s'=>'No customer reviews for the moment','mod'=>'agileproductreviews'),$_smarty_tpl);?>
<?php echo smartyTranslate(array('s'=>' in your selected language. ','mod'=>'agileproductreviews'),$_smarty_tpl);?>
<br /><?php echo smartyTranslate(array('s'=>'Be the first to write a review.','mod'=>'agileproductreviews'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>
