<?php /* Smarty version Smarty-3.1.19, created on 2015-02-02 09:58:48
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94651444354cf90a87d4b71-47947206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8368939773a313d9e145d4529221eb4b925ce8d9' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/blocksearch/blocksearch-top.tpl',
      1 => 1422888364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94651444354cf90a87d4b71-47947206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cf90a8812218_37195063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf90a8812218_37195063')) {function content_54cf90a8812218_37195063($_smarty_tpl) {?>
<!-- block seach mobile -->
<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)) {?>
<div class="input_search" data-role="fieldcontain">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'ISO-8859-1', true);?>
" id="searchbox">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php if (isset($_GET['search_query'])) {?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?>" />
	</form>
</div>
<?php } else { ?>
<!-- Block search module TOP -->
<div class = "block-search-top">
	<div class ="icon-search">
		<div id="search_block_top">
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'ISO-8859-1', true);?>
" id="searchbox">
				<p>
					<label for="search_query_top"><!-- image on background --></label>
					<input type="hidden" name="controller" value="search" />
					<input type="hidden" name="orderby" value="position" />
					<input type="hidden" name="orderway" value="desc" />
					<input class="search_query" type="text" id="search_query_top" name="search_query" value="<?php echo smartyTranslate(array('s'=>'Search...','mod'=>'blocksearch'),$_smarty_tpl);?>
" />
					<input type="submit" name="submit_search" value="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" class="button" />
				</p>
			</form>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/blocksearch-instantsearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#search_block_top').css('display','inline-block');
		//$('.icon-search').live('hover',function() {
			//$('#search_block_top').slideToggle('fast');
		//});
	})
	$('#search_query_top').on('focus', function(){
		    var $this = $(this);
		    if($this.val() == '<?php echo smartyTranslate(array('s'=>'Search...','mod'=>'blocksearch'),$_smarty_tpl);?>
'){
			$this.val('');
		    }
		}).on('blur', function(){
		    var $this = $(this);
		    if($this.val() == ''){
			$this.val('<?php echo smartyTranslate(array('s'=>'Search...','mod'=>'blocksearch'),$_smarty_tpl);?>
');
		    }
		});
	
	$('.search_query').live('click', function(){ 
		$(this).attr('placeholder','');
	});
	$('.header-inner').live('dblclick', function(){
		$('.search_query').attr('placeholder',' ');
	});
</script>
<!-- /Block search module TOP -->
<?php }} ?>
