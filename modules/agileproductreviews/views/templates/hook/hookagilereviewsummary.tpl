<table id="tblAgilereviewSummary_{$id_product}">
  {if $nbReviews>0}
  <tr>
    <td nowrap="">
      <div itemscope="" itemtype="http://data-vocabulary.org/Product">
        <table border="0">
          <tr>
            <td>
            </td>
            <td align="left">
              {if $is_at_product_page!=1}
              <a href="{$link_url}">
              {/if}
                <div itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
                  <span itemprop="itemreviewed">{$product_name}</span><br />
                  <span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating">
                    <span itemprop="average">{$agilereviewsummary|round:1}</span>
                    /<span itemprop="best">5</span>
                  </span>
                  based on <span itemprop="votes">{$nbReviews}</span>
	              {if $is_at_product_page!=1}<a href="{$link_url}">{/if}{$stars}{if $is_at_product_page!=1}</a>{/if}
                </div>
              {if $is_at_product_page!=1}
              </a>
              {/if}
            </td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
  {else}
	 {if $is_at_product_page!=1}
	  <tr>
		<td nowrap="">
	      <div itemscope="" itemtype="http://data-vocabulary.org/Product">

        <table border="0">
          <tr>
            <td>
            </td>
            <td align="left">
				  <a href="{$link_url}">
					<span>{$product_name}</span><br />
					{l s='No review yet, write a review' mod='agileproductreviews'}
				  </a>
				</td>
			</tr>
			</table>
		</td>
	  </tr>
	  {/if}
  {/if}
</table>
