{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My Account' mod='agilesellerlistoptions'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='My Seller Account'  mod='agilesellerlistoptions'}{/capture}

<h1>{l s='My Seller Account' mod='agilesellerlistoptions'}</h1>
{include file="$tpl_dir./errors.tpl"}

{include file="$agilemultipleseller_views./templates/front/seller_tabs.tpl"}

<script type="text/javascript">

</script>

{if isset($isSeller) AND $isSeller}
<div class="block-center" id="block-history">
    {if $expiredproducts && count($expiredproducts) }
	{include file="$tpl_dir./pagination.tpl"}
	<span>{l s='Only products with list options expired will be shown here' mod='agilesellerlistoptions'}</span>
    <form action="{$link->getModuleLink('agilesellerlistoptions', 'expiredproducts', [], true)}" enctype="multipart/form-data" method="post" class="std">
 	<div class="table-responsive clearfix">
    <table id="expiredproducts-list" class="std">
        <thead>
	        <tr>
		        <th class="first_item">{l s='ID' mod='agilesellerlistoptions'}</th>
		        <th class="item">{l s='Product Name' mod='agilesellerlistoptions'}</th>
		        <th class="item">{l s='Options' mod='agilesellerlistoptions'}</th>
	        </tr>
        </thead>
        <tbody>
        {foreach from=$expiredproducts item=expiredproduct name=myLoop}
	        <tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
		        <td class="history_link bold">
			        {$expiredproduct.id_product}
					<input type="hidden" name="id_products[]" value=" {$expiredproduct.id_product}">
		        </td>
		        <td>
			        <a href="{$link->getModuleLink('agilemultipleseller', 'sellerproductdetail', ['id_product' => $expiredproduct.id_product], true)}">{$expiredproduct.name}</a>
		        </td>
		        <td>
			        {$expiredproduct.options}
		        </td>
	        </tr>
        {/foreach}
        </tbody>
    </table>
	</div>
	<div class="agile-align-center">
		<button type="submit" class="agile-btn agile-btn-default" name="saveOptions" id="saveOptions" value="{l s='Save Options' mod='agilesellerlistoptions'}">
		<i class="icon-save"></i>&nbsp;<span>{l s='Save Options' mod='agilesellerlistoptions'}</span></button>
		<button type="submit" class="agile-btn agile-btn-default" name="buyOptions" id="buyOptions" value="{l s='Pay Options' mod='agilesellerlistoptions'}">
		<i class="icon-save"></i>&nbsp;<span>{l s='Pay Options' mod='agilesellerlistoptions'}</span></button>
	</div>
	</form>
	<br>
    {else}
		<div class="clearfix">
			<p class="alert alert-warning">{l s='You do not yet have a expired product' mod='agilesellerlistoptions'}</p>
		</div>
    {/if}
</div>
{/if}
{include file="$agilemultipleseller_views./templates/front/seller_footer.tpl"}

