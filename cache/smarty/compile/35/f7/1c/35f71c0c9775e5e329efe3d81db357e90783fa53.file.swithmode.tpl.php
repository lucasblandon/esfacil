<?php /* Smarty version Smarty-3.1.19, created on 2015-02-03 09:14:07
         compiled from "/home/cooltivoinfo/public_html/themes/electronic/modules/posmodeproduct/swithmode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78212876154d0d7af6c50b3-36362325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35f71c0c9775e5e329efe3d81db357e90783fa53' => 
    array (
      0 => '/home/cooltivoinfo/public_html/themes/electronic/modules/posmodeproduct/swithmode.tpl',
      1 => 1422888420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78212876154d0d7af6c50b3-36362325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_mode' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54d0d7af6f3811_04779771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d0d7af6f3811_04779771')) {function content_54d0d7af6f3811_04779771($_smarty_tpl) {?><script type='text/javascript'>
//<![CDATA[

function setCookie1(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}
function setCookie(c_name, value, expiredays) {
	var exdate = new Date();
	exdate.setTime(exdate.getTime() + (expiredays * 86400000));

	document.cookie= c_name + "=" + escape(value) + ((expiredays==null) ? "" : ";expires=" + exdate.toUTCString());
}
function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}

$(document).ready(function() {
		 setCookie('product_mode', 'grid',1);  
         var mode_product = '<?php echo $_smarty_tpl->tpl_vars['product_mode']->value;?>
';
	 var page_name = '<?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
';
         var modeButton = '<div id="view_as">';
            if(mode_product == 'grid') {
                modeButton += '<div class="switch_mode products_left_grid_button active"><span class="products_grid_button_id"><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</span></div>'
            } else {
                modeButton += '<div class="switch_mode products_left_grid_button"><span class="products_grid_button_id"><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</span></div>'
            }
            if(mode_product == 'list') {
                modeButton += '<div class="switch_mode products_right_grid_button active"><span class="products_list_button_id"><?php echo smartyTranslate(array('s'=>'List','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</span></div>'
            } else {
                modeButton += '<div class="switch_mode products_right_grid_button"><span class="products_list_button_id"><?php echo smartyTranslate(array('s'=>'List','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</span></div>'
            }
            modeButton += '</div>';
			
			var modeP = getCookie('product_mode');
			/*if (typeof(modeP) == "undefined")  {
				 setCookie('product_mode', 'grid',1);  
			}*/

         var selectMode = '<select name ="switch_mode_product" class = "switch_mode_product">';
             if(mode_product == 'list') {
                selectMode += '<option value="list" selected ="selected"><?php echo smartyTranslate(array('s'=>'List','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</option>';
             } else {
                selectMode += '<option value="list"><?php echo smartyTranslate(array('s'=>'List','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</option>';
             }
             if(mode_product == 'grid') {
                selectMode += '<option value="grid" selected = "selected"><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</option>';
             } else {
                selectMode += '<option value="grid"><?php echo smartyTranslate(array('s'=>'Grid','mod'=>'posmodeproduct'),$_smarty_tpl);?>
</option>';
             }
             selectMode +='</select>';

    
         //$('.content_sortPagiBar .product_mode_view').append(modeButton);
		 $('.sortPagiBar .mode-view').append(modeButton);
         //$('.content_sortPagiBar').append(selectMode);
		 
         $('.switch_mode_product').bind('change', function() {
            var url = window.location.href;
            if(mode_product!=""){
                var mode = $(this).val();
             
                if(mode=='grid'){
                        setCookie('product_mode', 'grid',1);  
                        location.reload();
                }
                if(mode=='list'){
                     
                     setCookie('product_mode', 'list',1);  
                       location.reload();
                }
			
            }
          
         });
      
var haveLayer = $('#layered_form').html();  
      
 $('.products_left_grid_button,.pagination li a').bind('click', function(){
    $('.products_right_grid_button').removeClass('active');
    $(this).addClass('active');
                //grid
                setCookie('product_mode', 'grid',1); 
    if(haveLayer != null) {
     reloadContent();
    } else {
       location.reload();
    }

  
 });
 
 $('.products_right_grid_button,.pagination li a').bind('click', function(){
   $('.products_left_grid_button').removeClass('active');
   $(this).addClass('active');
             //list
             setCookie('product_mode', 'list',1);  
   if(haveLayer != null) {
    reloadContent();
   } else {
      location.reload();
   }
   });
});
//]]>
</script>

<?php }} ?>
