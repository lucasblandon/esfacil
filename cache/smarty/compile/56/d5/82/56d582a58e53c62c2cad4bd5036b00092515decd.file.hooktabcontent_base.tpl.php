<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/modules/agileproductreviews/views/templates/hook/hooktabcontent_base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104002917254d0d7aff2fd38-32441532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d582a58e53c62c2cad4bd5036b00092515decd' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agileproductreviews/views/templates/hook/hooktabcontent_base.tpl',
      1 => 1422889560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104002917254d0d7aff2fd38-32441532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'id_product' => 0,
    'isVertical' => 0,
    'nb_total' => 0,
    'logged' => 0,
    'login_required' => 0,
    'criterions' => 0,
    'nickname' => 0,
    'use_capcha' => 0,
    'apr_stamp' => 0,
    'post_content' => 0,
    'nb_reviews' => 0,
    'my_lang_only' => 0,
    'goreviewtab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7b00bdb50_56232792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7b00bdb50_56232792')) {function content_54d0d7b00bdb50_56232792($_smarty_tpl) {?><script type="text/javascript">
    var base_dir = "<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
";
    var id_product = <?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
;
</script>

<script type="text/javascript">
    var agilereviewform_open = false;

	/** _agile_ this must be here for translation purpose _agile_ **/
    function validateReviewForm() {
        if (trim($('input#apr_customer').val()).length < 1) {
            alert("<?php echo smartyTranslate(array('s'=>'Please enter your name','mod'=>'agileproductreviews'),$_smarty_tpl);?>
");
            return false;
        }
        if (trim($('textarea#apr_content').val()).length < 1) {
            alert("<?php echo smartyTranslate(array('s'=>'Please enter your question or comment','mod'=>'agileproductreviews'),$_smarty_tpl);?>
");
            return false;
        }

        var ret = true;
        $.each($("input[id^='grade_']"),function(index, obj){
            if($(obj).val() ==0)ret = false;
        }
        );
        if(!ret)
		{
			alert("<?php echo smartyTranslate(array('s'=>'Please select your rating','mod'=>'agileproductreviews'),$_smarty_tpl);?>
");
			return false;
		}

        post_productreviewmessage();
		return true;
    }
</script>

<?php if ($_smarty_tpl->tpl_vars['isVertical']->value==1) {?>
<h3 class="idTabHrefShort page-product-heading"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'agileproductreviews'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['nb_total']->value;?>
)</h3>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['logged']->value==true||!$_smarty_tpl->tpl_vars['login_required']->value) {?>
<button id="addReviewButton" style="cursor:pointer;margin-bottom:1em;" onclick="javascript:toogleReviewForm()">
  <h4><?php echo smartyTranslate(array('s'=>'Click here to write a review','mod'=>'agileproductreviews'),$_smarty_tpl);?>
</h4>
</button>
    <form class="std" id="sendReview">
	    <fieldset>
		    <?php if (count($_smarty_tpl->tpl_vars['criterions']->value)>0) {?>
		    <p class="bold"><?php echo smartyTranslate(array('s'=>'Your rating for the product','mod'=>'agileproductreviews'),$_smarty_tpl);?>
</p>
		    <table border="0" cellspacing="0" cellpadding="0">
			<input type="hidden" name="apr_criterions_nbr" id="apr_criterions_nbr" value="<?php echo count($_smarty_tpl->tpl_vars['criterions']->value);?>
" >
		    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['criterions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
		    <tr>
			    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			    <td>
				    <input type="hidden" name="id_agile_criterion_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
" id="id_agile_criterion_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['criterions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_agile_criterion']);?>
" />
				    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>

			        <input type="hidden" name="grade_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
" id="grade_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
" value="0" />
			    </td>
			    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			    <td>
			        <table cellpadding="0" cellspacing="0"><tr>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['name'] = 'img_review';
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['img_review']['total']);
?>
			        <td>
			        <div style="width:16px;height:16px; border:solid 0px red; overflow:hidden;"><img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agileproductreviews/img/star.png" name="stars_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
" style="margin:0px 0px 0px 0px;cursor:pointer" id="stars_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['img_review']['index'];?>
" refinfo="grade_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
" refval="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['img_review']['index'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['img_review']['index'];?>
 <?php echo smartyTranslate(array('s'=>'stars','mod'=>'agileproductreview'),$_smarty_tpl);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['img_review']['index'];?>
 <?php echo smartyTranslate(array('s'=>'stars','mod'=>'agileproductreview'),$_smarty_tpl);?>
"  /></div>
			        </td>
    			    <?php endfor; endif; ?>
			        </tr></table>
			    </td>
		    </tr>
		    <?php endfor; endif; ?>
		    </table>
		    <?php }?>
		    <div id="divCustomer" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>none<?php }?>">
    		    <p class="bold"><?php echo smartyTranslate(array('s'=>'Name: (nicknames are allowed)','mod'=>'agileproductreviews'),$_smarty_tpl);?>
</p>
	    	    <p><input type="text" name="apr_customer" id="apr_customer" value="<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
" /></p>
		    </div>
    		<?php if ($_smarty_tpl->tpl_vars['use_capcha']->value) {?>
            <p class="bold">
		    <?php echo smartyTranslate(array('s'=>'Verfication Text','mod'=>'agileproductreviews'),$_smarty_tpl);?>
<br />
		    <table><tr><td>
    		<input type="text" name="apr_anti_spam_code" id="apr_anti_spam_code" value="" />
            </td><td>&nbsp;&nbsp;
    		<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agileproductreviews/antispamimage.php?k=<?php echo $_smarty_tpl->tpl_vars['apr_stamp']->value;?>
" />
            </td>
            </tr>
            </table>
		    </p>
		    <?php }?>
		    <p class="bold"><?php echo smartyTranslate(array('s'=>'Your comment','mod'=>'agileproductreviews'),$_smarty_tpl);?>
</p>
		    <p><textarea cols="80" rows="5" name="apr_content" id="apr_content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></p>
		    <p class="submit">
			    <input class="button" name="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'agileproductreviews'),$_smarty_tpl);?>
" type="button" onclick="javascript:validateReviewForm()" />
		    </p>
	    </fieldset>
    </form>
<?php } else { ?>
	    <p class="align_center"><?php echo smartyTranslate(array('s'=>'Only registered users can post a new review.','mod'=>'agileproductreviews'),$_smarty_tpl);?>
</p>
<?php }?>
<div>
      <?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'agileproductreviews'),$_smarty_tpl);?>
(total:<?php echo $_smarty_tpl->tpl_vars['nb_reviews']->value;?>
)<?php echo smartyTranslate(array('s'=>' in your selected language.','mod'=>'agileproductreviews'),$_smarty_tpl);?>

      <br></br>
      <input type="checkbox" name="my_lang_only" id="my_lang_only" value="1" <?php if ($_smarty_tpl->tpl_vars['my_lang_only']->value>0) {?>checked<?php }?>/>&nbsp;<?php echo smartyTranslate(array('s'=>'Show reviews in my language','mod'=>'agileproductreviews'),$_smarty_tpl);?>

      <hr />
</div>


<div id="idTab5">
	<div id="divMsg" style="padding-left:10px;margin:10px;color:green;font-size:14px;border:dotted green 1px;display:none;"></div>
	<div id="divTabContent" class="rte">
		<input type="button" class="button" value="Click here to see detailed reiew summary and history of this product." onclick="javascript:get_review_contents(1, 10, 1)">
	</div>
</div>
<script type="text/javascript">
	var goreviewtab = <?php echo $_smarty_tpl->tpl_vars['goreviewtab']->value;?>
;

	function switchtoreviewtab()
	{
		if(goreviewtab == 1) $("#more_info_block ul").idTabs("idTab5"); 

	}
	setTimeout("switchtoreviewtab()",400);
</script>

<?php }} ?>
