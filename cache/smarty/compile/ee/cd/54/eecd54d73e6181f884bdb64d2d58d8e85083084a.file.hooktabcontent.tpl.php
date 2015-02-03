<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:08
         compiled from "/home/cooltivoinfo/public_html/modules/agilesellermessenger//hooktabcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183223436254d0d7b00d2a77-28569514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eecd54d73e6181f884bdb64d2d58d8e85083084a' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/agilesellermessenger//hooktabcontent.tpl',
      1 => 1422889810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183223436254d0d7b00d2a77-28569514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'id_product' => 0,
    'request_sellerquestion_uri' => 0,
    'request_sellerquestion_p' => 0,
    'request_sellerquestion_n' => 0,
    'ispostbacksellerquestion' => 0,
    'module_dir' => 0,
    'post_errors' => 0,
    'isVertical' => 0,
    'error' => 0,
    'postSellerQuestionSuccess' => 0,
    'logged' => 0,
    'login_required_sellerquestion' => 0,
    'sellerinfo' => 0,
    'customer_name' => 0,
    'customer_email' => 0,
    'use_capcha_sellerquestion' => 0,
    'allow_attachment' => 0,
    'post_message' => 0,
    'sellerquestions' => 0,
    'sellerquestions_nb' => 0,
    'sellerquestion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7b021ed63_49009493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7b021ed63_49009493')) {function content_54d0d7b021ed63_49009493($_smarty_tpl) {?><script type="text/javascript">
    var base_dir = "<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
";
    var id_product = <?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
;
    var request_sellerquestion_uri = "<?php echo $_smarty_tpl->tpl_vars['request_sellerquestion_uri']->value;?>
";
    var request_sellerquestion_p = <?php echo $_smarty_tpl->tpl_vars['request_sellerquestion_p']->value;?>
;
    var request_sellerquestion_n = <?php echo $_smarty_tpl->tpl_vars['request_sellerquestion_n']->value;?>
;
    var ispostbacksellerquestion = <?php if ($_smarty_tpl->tpl_vars['ispostbacksellerquestion']->value) {?>true<?php } else { ?>false<?php }?>;
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
js/common.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
js/sellerquestionform.js"></script>
<script type="text/javascript">
    var agilesellerquestionsform_open = <?php if (isset($_smarty_tpl->tpl_vars['post_errors']->value)&&count($_smarty_tpl->tpl_vars['post_errors']->value)>0) {?>1<?php } else { ?>0<?php }?>;
	/** _agile_ tootgle  seller questions form _agile_ **/
	function toogleSellerQuestionForm()
	{
	    if(agilesellerquestionsform_open == 1)
    	{
    		$('#sendSellerQuestion').slideUp('fast');
	    	$('input#addSellerQuestionButton').fadeIn('slow');
	    	agilesellerquestionsform_open = 0;
    	}
	    else
    	{
    		$('#sendSellerQuestion').slideDown('fast');
	    	$('input#addSellerQuestionButton').fadeOut('slow');
	    	agilesellerquestionsform_open = 1;
    	}
	}
	
	
    function validateSellerQuestionForm() {
        if (trim($('input#sellercustomer').val()).length < 1) {
            alert("<?php echo smartyTranslate(array('s'=>'please input your name','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
");
            return false;
        }
        if (trim($('textarea#yourquestion').val()).length < 1) {
            alert("<?php echo smartyTranslate(array('s'=>'Please enter your question or comment','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
");
            return false;
        }

        return ret;
    }
	
</script>

<?php if ($_smarty_tpl->tpl_vars['isVertical']->value==1) {?>
<h3 class="idTabHrefShort page-product-heading"><?php echo smartyTranslate(array('s'=>'Seller Q&A','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
</h3>
<?php }?>
<div id="idTab12" class="rte">
            <?php if (isset($_smarty_tpl->tpl_vars['post_errors']->value)&&$_smarty_tpl->tpl_vars['post_errors']->value) {?>

	          <div class="alert alert-info">
		          <p><?php if (count($_smarty_tpl->tpl_vars['post_errors']->value)>1) {?><?php echo smartyTranslate(array('s'=>'There are','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There is','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
<?php }?> <?php echo count($_smarty_tpl->tpl_vars['post_errors']->value);?>
 <?php if (count($_smarty_tpl->tpl_vars['post_errors']->value)>1) {?><?php echo smartyTranslate(array('s'=>'errors','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'error','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
<?php }?> :</p>
		          <ol>
		          <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
			          <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
		          <?php } ?>
		          </ol>
	          </div>

          <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['postSellerQuestionSuccess']->value) {?>
    			<div style="color:green;border:solid 1px green;padding:10px 10px 10px 10px;background-color:#e0e0e0;">
    			    <b><font color="green"><?php echo $_smarty_tpl->tpl_vars['postSellerQuestionSuccess']->value;?>
</font></b>
                </div>
            <?php }?>
             
            
    <?php if ($_smarty_tpl->tpl_vars['logged']->value==true||!$_smarty_tpl->tpl_vars['login_required_sellerquestion']->value) {?>
    <button id="addSellerQuestionButton" style="cursor:pointer;margin-bottom:1em;" onclick="javascript:toogleSellerQuestionForm()" >
      <h4><?php echo smartyTranslate(array('s'=>'Click here to open or close the "Ask Seller A Question" form','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
</h4>
     </button>
    <form style="display:<?php if (isset($_smarty_tpl->tpl_vars['post_errors']->value)&&count($_smarty_tpl->tpl_vars['post_errors']->value)>0) {?><?php } else { ?>none<?php }?>;" action="<?php echo $_smarty_tpl->tpl_vars['request_sellerquestion_uri']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['request_sellerquestion_p']->value;?>
&n=<?php echo $_smarty_tpl->tpl_vars['request_sellerquestion_n']->value;?>
&ispostbacksellerquestion=1" method="post" onsubmit="return validateSellerQuestionForm()" class="std" enctype="multipart/form-data" id="sendSellerQuestion">
		<input type="hidden" name="id_seller" value="<?php echo $_smarty_tpl->tpl_vars['sellerinfo']->value->id_seller;?>
">
	    <fieldset><?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>

		    <div id="divSellerCustomer" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>none<?php }?>;margin:1em 1em 1em 1em;">
    		    <p class="bold"><?php echo smartyTranslate(array('s'=>'Your Name (nicknames allowed):','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
</p>
	    	    <p><input type="text" name="customer_name" id="customer_name" value="<?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
" /></p>
		    </div>
		    <div id="div1" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>none<?php }?>;margin:1em 1em 1em 1em;">
    		    <p class="bold"><?php echo smartyTranslate(array('s'=>'Your email address:','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
</p>
	    	    <p><input type="text" name="customer_email" size="80" id="customer_email" value="<?php echo $_smarty_tpl->tpl_vars['customer_email']->value;?>
" /></p>
		    </div>
    		<?php if ($_smarty_tpl->tpl_vars['use_capcha_sellerquestion']->value) {?>
            <p class="bold" style="margin:1em 1em 1em 1em;";>
		    <?php echo smartyTranslate(array('s'=>'Verification Text:','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
<br />
		    <span>
    		<input type="text" name="anti_spam_code_sellermessage" value="" />
            </span>
            <span>
    		<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agilesellermessenger/antispamimage.php" />
            </span>
		    </p>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['allow_attachment']->value==1) {?>
        <p class="bold" style="margin:1em 1em 1em 1em;"><?php echo smartyTranslate(array('s'=>'Attach file','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
</p>
        <p style="margin:1em 1em 1em 1em;">
          <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
          <input type="file" size="50" name="fileUpload1" id="fileUpload1" />
        </p>
        <p style="margin:1em 1em 1em 1em;"> 
          <input type="file" size="50" name="fileUpload2" id="fileUpload2" />
        </p>
        <p style="margin:1em 1em 1em 1em;">
          <input type="file" size="50" name="fileUpload3" id="fileUpload3" />
        </p>
        <?php }?>
        <p class="bold" style="margin:1em 1em 1em 1em;"><?php echo smartyTranslate(array('s'=>'Your Question:','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
</p>
		    <p style="margin:1em 1em 1em 1em;"><textarea style="width:100%" rows="5" name="customer_message" id="customer_message"><?php if (isset($_smarty_tpl->tpl_vars['post_errors']->value)&&$_smarty_tpl->tpl_vars['post_errors']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_message']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea></p>
		    <p class="submit" style="margin:1em 1em 1em 1em;">
          <button type="submit" name="submitSellerQuestion" id="submitSellerQuestion" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
" class="button agile-btn agile-btn-default">
            <span><?php echo smartyTranslate(array('s'=>'Send','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
&nbsp;<i class="icon-chevron-right right"></i>
            </span>
          </button>
 		    </p>
	    </fieldset>
    </form>
    <?php } else { ?>
	    <p class="align_center"><?php echo smartyTranslate(array('s'=>'Only registered users can post a new question.','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
</p>
    <?php }?>	    
    <?php if ($_smarty_tpl->tpl_vars['sellerquestions']->value&&count($_smarty_tpl->tpl_vars['sellerquestions']->value)>0) {?>
    <p><?php echo smartyTranslate(array('s'=>'Questions Asked','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
(total:<?php echo $_smarty_tpl->tpl_vars['sellerquestions_nb']->value;?>
)</p>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
	    <div class="clear table_block">
	    <?php  $_smarty_tpl->tpl_vars['sellerquestion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sellerquestion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sellerquestions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sellerquestion']->key => $_smarty_tpl->tpl_vars['sellerquestion']->value) {
$_smarty_tpl->tpl_vars['sellerquestion']->_loop = true;
?>
		    <?php if ($_smarty_tpl->tpl_vars['sellerquestion']->value['message']) {?>
              <div class="itemscope"  itemtype="http://data-vocabulary.org/Review" style="margin:10px;">
                <span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['sellerquestion']->value['from_name'],20,'...',true), ENT_QUOTES, 'UTF-8', true);?>
</span>
                <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['sellerquestion']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
</span><br />
                <br />
                <span><?php echo nl2br(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['sellerquestion']->value['message'],380,'...',true), ENT_QUOTES, 'UTF-8', true));?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['sellerquestion']->value['attshname1']) {?>
                 <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agilesellermessenger/get-att.php?&filename=<?php echo $_smarty_tpl->tpl_vars['sellerquestion']->value['attpsname1'];?>
&id_seller=<?php echo $_smarty_tpl->tpl_vars['sellerquestion']->value['id_seller'];?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['sellerquestion']->value['attshname1'],20,'...',true), ENT_QUOTES, 'UTF-8', true);?>
</a>&nbsp&nbsp
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sellerquestion']->value['attshname2']) {?>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agilesellermessenger/get-att.php?&filename=<?php echo $_smarty_tpl->tpl_vars['sellerquestion']->value['attpsname2'];?>
&id_seller=<?php echo $_smarty_tpl->tpl_vars['sellerquestion']->value['id_seller'];?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['sellerquestion']->value['attshname2'],20,'...',true), ENT_QUOTES, 'UTF-8', true);?>
</a>&nbsp&nbsp
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sellerquestion']->value['attshname3']) {?>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/agilesellermessenger/get-att.php?&filename=<?php echo $_smarty_tpl->tpl_vars['sellerquestion']->value['attpsname3'];?>
&id_seller=<?php echo $_smarty_tpl->tpl_vars['sellerquestion']->value['id_seller'];?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['sellerquestion']->value['attshname3'],20,'...',true), ENT_QUOTES, 'UTF-8', true);?>
</a>
                <?php }?>
              </div>
             <hr style="border:dotted 1px gray" />
		    <?php }?>
	    <?php } ?>
	    </div>
    <?php } else { ?>
	    <p class="align_center"><?php echo smartyTranslate(array('s'=>'There are currently no questions for this product.','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
<br /><?php echo smartyTranslate(array('s'=>'Be the first to ask a question.','mod'=>'agilesellermessenger'),$_smarty_tpl);?>
</p>
    <?php }?>

</div>
<?php }} ?>
