{if $reviews}
<div class="row">
    <h2>
	    <span style="float:left">{l s='Latest received customer reviews' mod='agileproductreviews'}
	    </span>
    </h2>
</div>
<div class="row">
	<div class="clear table_block">
		{foreach from=$reviews item=review}
			{if $review.content}
			  <div itemscope itemtype="http://data-vocabulary.org/Review" style="margin:10px;">
				<span itemprop="itemreviewed"><a href="{$review.link_url}" style="text-decoration:none;">{$review.product}</a></span><br />
				<span itemprop="rating">{$review.stars}&nbsp;{$review.grade|round:1}</span><br />
				<span itemprop="reviewer">{$review.customer|truncate:20:'...':true|escape:'html':'UTF-8'}</span>
				<time itemprop="dtreviewed" datetime="{dateFormat date=$review.date_add|escape:'html':'UTF-8' full=0}">{dateFormat date=$review.date_add|escape:'html':'UTF-8' full=0}</time><br />
				<span itemprop="summary"></span>
				<span itemprop="description">{$review.content|nl2br}</span>
			  </div>
			 <hr style="border:dotted 1px gray" />
			{/if}
		{/foreach}
	</div>
</div>
{/if}



