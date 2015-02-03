<script type="text/javascript">
    var base_dir = "{$base_dir_ssl}";
    var id_product = {$id_product};
</script>

<script type="text/javascript">
    var agilereviewform_open = false;

	/** _agile_ this must be here for translation purpose _agile_ **/
    function validateReviewForm() {ldelim}
        if (trim($('input#apr_customer').val()).length < 1) {ldelim}
            alert("{l s='Please enter your name' mod='agileproductreviews'}");
            return false;
        {rdelim}
        if (trim($('textarea#apr_content').val()).length < 1) {ldelim}
            alert("{l s='Please enter your question or comment' mod='agileproductreviews'}");
            return false;
        {rdelim}

        var ret = true;
        $.each($("input[id^='grade_']"),function(index, obj){ldelim}
            if($(obj).val() ==0)ret = false;
        {rdelim}
        );
        if(!ret)
		{ldelim}
			alert("{l s='Please select your rating' mod='agileproductreviews'}");
			return false;
		{rdelim}

        post_productreviewmessage();
		return true;
    {rdelim}
</script>

{if $isVertical==1}
<h3 class="idTabHrefShort page-product-heading">{l s='Reviews' mod='agileproductreviews'} ({$nb_total})</h3>
{/if}



{if $logged == true OR !$login_required}
<button id="addReviewButton" style="cursor:pointer;margin-bottom:1em;" onclick="javascript:toogleReviewForm()">
  <h4>{l s='Click here to write a review' mod='agileproductreviews'}</h4>
</button>
    <form class="std" id="sendReview">
	    <fieldset>
		    {if $criterions|@count > 0}
		    <p class="bold">{l s='Your rating for the product' mod='agileproductreviews'}</p>
		    <table border="0" cellspacing="0" cellpadding="0">
			<input type="hidden" name="apr_criterions_nbr" id="apr_criterions_nbr" value="{count($criterions)}" >
		    {section loop=$criterions name=i start=0 step=1}
		    <tr>
			    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			    <td>
				    <input type="hidden" name="id_agile_criterion_{$smarty.section.i.iteration}" id="id_agile_criterion_{$smarty.section.i.iteration}" value="{$criterions[i].id_agile_criterion|intval}" />
				    {$criterions[i].name|escape:'html':'UTF-8'}
			        <input type="hidden" name="grade_{$smarty.section.i.iteration}" id="grade_{$smarty.section.i.iteration}" value="0" />
			    </td>
			    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			    <td>
			        <table cellpadding="0" cellspacing="0"><tr>
                    {section loop=6 step=1 start=1 name=img_review}
			        <td>
			        <div style="width:16px;height:16px; border:solid 0px red; overflow:hidden;"><img src="{$base_dir_ssl}modules/agileproductreviews/img/star.png" name="stars_{$smarty.section.i.iteration}" style="margin:0px 0px 0px 0px;cursor:pointer" id="stars_{$smarty.section.i.iteration}_{$smarty.section.img_review.index}" refinfo="grade_{$smarty.section.i.iteration}" refval="{$smarty.section.img_review.index}" title="{$criterions[i].name|escape:'html':'UTF-8'} - {$smarty.section.img_review.index} {l s='stars' mod='agileproductreview'}" alt="{$criterions[i].name|escape:'html':'UTF-8'} - {$smarty.section.img_review.index} {l s='stars' mod='agileproductreview'}"  /></div>
			        </td>
    			    {/section}
			        </tr></table>
			    </td>
		    </tr>
		    {/section}
		    </table>
		    {/if}
		    <div id="divCustomer" style="display:{if $logged}none{/if}">
    		    <p class="bold">{l s='Name: (nicknames are allowed)' mod='agileproductreviews'}</p>
	    	    <p><input type="text" name="apr_customer" id="apr_customer" value="{$nickname}" /></p>
		    </div>
    		{if $use_capcha}
            <p class="bold">
		    {l s='Verfication Text' mod='agileproductreviews'}<br />
		    <table><tr><td>
    		<input type="text" name="apr_anti_spam_code" id="apr_anti_spam_code" value="" />
            </td><td>&nbsp;&nbsp;
    		<img src="{$base_dir_ssl}modules/agileproductreviews/antispamimage.php?k={$apr_stamp}" />
            </td>
            </tr>
            </table>
		    </p>
		    {/if}
		    <p class="bold">{l s='Your comment' mod='agileproductreviews'}</p>
		    <p><textarea cols="80" rows="5" name="apr_content" id="apr_content">{$post_content|escape:'html':'UTF-8'}</textarea></p>
		    <p class="submit">
			    <input class="button" name="submitMessage" value="{l s='Send' mod='agileproductreviews'}" type="button" onclick="javascript:validateReviewForm()" />
		    </p>
	    </fieldset>
    </form>
{else}
	    <p class="align_center">{l s='Only registered users can post a new review.' mod='agileproductreviews'}</p>
{/if}
<div>
      {l s='Reviews' mod='agileproductreviews'}(total:{$nb_reviews}){l s=' in your selected language.' mod='agileproductreviews'}
      <br></br>
      <input type="checkbox" name="my_lang_only" id="my_lang_only" value="1" {if $my_lang_only>0}checked{/if}/>&nbsp;{l s='Show reviews in my language' mod='agileproductreviews'}
      <hr />
</div>


<div id="idTab5">
	<div id="divMsg" style="padding-left:10px;margin:10px;color:green;font-size:14px;border:dotted green 1px;display:none;"></div>
	<div id="divTabContent" class="rte">
		<input type="button" class="button" value="Click here to see detailed reiew summary and history of this product." onclick="javascript:get_review_contents(1, 10, 1)">
	</div>
</div>
<script type="text/javascript">
	var goreviewtab = {$goreviewtab};

	function switchtoreviewtab()
	{
		if(goreviewtab == 1) $("#more_info_block ul").idTabs("idTab5"); 

	}
	setTimeout("switchtoreviewtab()",400);
</script>

