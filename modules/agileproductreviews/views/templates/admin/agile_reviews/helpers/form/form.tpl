{*
*}
{extends file="helpers/form/form.tpl"}

{block name="label"}
		{$smarty.block.parent}
{/block}

{block name="field"}
	{if $input.type == 'product'}
		<div class="margin-form">
			<input type="hidden" name="id_product" id="id_product" value="{$product->id}">
			<span>{$product->name}</span>
		</div>
	{else}
		{$smarty.block.parent}
	{/if}
{/block}
