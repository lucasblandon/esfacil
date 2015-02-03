<script language="javascript" type="text/javascript">
	$(document).ready(function() {
		$("[id^='cancellink_']").click(function() {
			return confirm("{l s='Are you sure want to cancel selected options?' mod='agilesellerlistoptions'}");
		});
	});	
</script>

<input type="hidden" name="list_options_posted_pid" value="{$id_product}">
{foreach from=$listoptions item=listoption}
<div class="checkbox">
	<input type="checkbox" class="comparator" {if intval($listoption.option_data.status) == 2 || ($is_base_always_free == 1 && $listoption.id_option == 4)} disabled {/if}  {if (intval($listoption.option_data.status)>0 || ($is_base_always_free == 1 && $listoption.id_option == 4))} checked {/if} name="product_options_{$id_product}_{$listoption.id_option}" id="product_options_{$id_product}_{$listoption.id_option}" value="1" />{$listoption.option_name}--{$listoption.option_price}
	{if !$isseller &&  intval($listoption.option_data.status) == 2}
		&nbsp;<a href="{$cancelurl}&id_product={$id_product}&cancellistoptions={$listoption.id_option}" id="cancellink_{$listoption.id_option}">{l s='Cancel this options' mod='agilesellerlistoptions'}</a>
	{/if}
</div>
{/foreach}
