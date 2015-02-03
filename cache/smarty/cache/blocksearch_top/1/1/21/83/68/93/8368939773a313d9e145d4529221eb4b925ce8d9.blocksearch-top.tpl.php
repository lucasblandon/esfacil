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
    '0d1c1236a9631c789b12ee2893b073ac2aaf37f5' => 
    array (
      0 => '/home/cooltivoinfo/public_html/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1420663026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94651444354cf90a87d4b71-47947206',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54cf9a01697256_54267191',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cf9a01697256_54267191')) {function content_54cf9a01697256_54267191($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div class = "block-search-top">
	<div class ="icon-search">
		<div id="search_block_top">
			<form method="get" action="http://cooltivo.info/index.php?controller=search" id="searchbox">
				<p>
					<label for="search_query_top"><!-- image on background --></label>
					<input type="hidden" name="controller" value="search" />
					<input type="hidden" name="orderby" value="position" />
					<input type="hidden" name="orderway" value="desc" />
					<input class="search_query" type="text" id="search_query_top" name="search_query" value="Search..." />
					<input type="submit" name="submit_search" value="Search" class="button" />
				</p>
			</form>
		</div>
	</div>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://cooltivo.info/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#search_block_top').css('display','inline-block');
		//$('.icon-search').live('hover',function() {
			//$('#search_block_top').slideToggle('fast');
		//});
	})
	$('#search_query_top').on('focus', function(){
		    var $this = $(this);
		    if($this.val() == 'Search...'){
			$this.val('');
		    }
		}).on('blur', function(){
		    var $this = $(this);
		    if($this.val() == ''){
			$this.val('Search...');
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
