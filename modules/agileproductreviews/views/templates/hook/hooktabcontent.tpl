{if $nb_total > 0}
<div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
  <span>
    {l s='Average' mod='agileproductreviews'}&nbsp;<span itemprop="ratingValue" >{$averageTotal}</span>&nbsp;
  </span>
  <span itemprop="reviewCount" content="{$nb_reviews}">.</span>
    <table>
    {foreach from=$criterions item=c}
    <tr>
      <td>
        {$c.name|escape:'html':'UTF-8'}<br />
      </td>
      <td>
        {$averagestars[$c.id_agile_criterion]}
      </td>
      <td>
        {$averages[$c.id_agile_criterion]|round:1}
      </td>
    </tr>
    {/foreach}
  </table>
</div>
{/if}

{if $reviews}
{include file="$tpl_dir./pagination.tpl"}
<div class="clear table_block">
	    {foreach from=$reviews item=review}
		    {if $review.content}

          <div itemscope itemtype="http://data-vocabulary.org/Review" style="margin:10px;">
            <span itemprop="itemreviewed">{$review.product_name}</span><br />
            <span itemprop="rating">{$review.stars}&nbsp;{$review.grade|round:1}</span><br />
            {if $hide_reviewer}
            <span itemprop="reviewer"><b>{$review.customer|truncate:20:'...':true|escape:'html':'UTF-8'}</b></span>
            {/if}
            <time itemprop="dtreviewed" datetime="{dateFormat date=$review.date_add|escape:'html':'UTF-8' full=0}"><b>{dateFormat date=$review.date_add|escape:'html':'UTF-8' full=0}</b></time><br />
            <span itemprop="summary"></span>
            <br />
            <span itemprop="description">{$review.content|escape:'html':'UTF-8'|nl2br}</span>

            {if !empty($review.response)}
			<div style="color:blue;">
			<br /><br />
            <b>{l s='Store' mod='agileproductreviews'} &nbsp; {dateFormat date=$review.date_response|escape:'html':'UTF-8' full=0}</b><br>
            <span itemprop="description">{$review.response|nl2br}</span>
			</div>
            {/if}
          </div>
         {if $enable_voting}
         <table width="100%"><tr>
            <td>{l s='I like this review' mod='agileproductreviews'}&nbsp;&nbsp;<input type="radio" name="review_voting_{$review.id_agile_review}" value="yes" />&nbsp;&nbsp;{l s='Yes' mod='agileproductreviews'}&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="review_voting_{$review.id_agile_review}" value="no" />&nbsp;&nbsp;{l s='No' mod='agileproductreviews'}&nbsp;&nbsp;&nbsp;</td>
            <td align="left"><input type="button" class="button_small" onclick="javascript:cast_review_voting('{$voting_path}',{$review.id_agile_review})" value="Vote"></td>
            <td align="right">{l s='Total' mod='agileproductreviews'}&nbsp;&nbsp;&nbsp;{l s='Yes' mod='agileproductreviews'}:<span id="span_yes_{$review.id_agile_review}">{$review.yes_counter}</span>&nbsp;&nbsp;&nbsp;{l s='No' mod='agileproductreviews'}:<span id="span_no_{$review.id_agile_review}">{$review.no_counter}</span></td>
          </tr></table>
          {/if}

         <hr style="border:dotted 1px gray" />
				    
		    {/if}
	    {/foreach}
	    </div>
{else}
	    <p class="align_center">{l s='No customer reviews for the moment' mod='agileproductreviews'}{l s=' in your selected language. ' mod='agileproductreviews'}<br />{l s='Be the first to write a review.' mod='agileproductreviews'}</p>
{/if}
