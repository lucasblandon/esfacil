{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My Account' mod='agilemultipleseller'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='My Seller Account'  mod='agilemultipleseller'}{/capture}

<h1>{l s='My Seller Account' mod='agilemultipleseller'}</h1>
{include file="$tpl_dir./errors.tpl"}

{include file="$agilemultipleseller_views./templates/front/seller_tabs.tpl"}
{if isset($isSeller) AND $isSeller}
<div id="agile">
<div class="block-center clearfix" id="block-history">
    <div class="row">
		<a class="agile-btn agile-btn-default" href="{$link->getModuleLink('agilemultipleseller', 'sellerproductdetail', ['id_product' =>0], true)}">
				<i class="icon-plus-sign"></i>&nbsp;{l s='Add New' mod='agilemultipleseller'}
			</a>
    </div>
    {if $products && count($products)}
	<div class="table-responsive clearfix">
	{include file="$tpl_dir./pagination.tpl"}
    <table id="product-list" class="std">
        <thead>
	        <tr>
		        <th class="first_item">{l s='ID' mod='agilemultipleseller'}</th>
		        <th class="item">{l s='Photo' mod='agilemultipleseller'}</th>
		        <th class="item">{l s='Name' mod='agilemultipleseller'}</th>
		        <th class="item">{l s='Category' mod='agilemultipleseller'}</th>
		        <th class="item">{l s='Base Price' mod='agilemultipleseller'}</th>
		        <th class="item">{l s='Final Price' mod='agilemultipleseller'}</th>
		        <th class="item">{l s='Quantity' mod='agilemultipleseller'}</th>
		        <th class="item">{l s='Active' mod='agilemultipleseller'}</th>
		        {if $is_apprpved_required}
		        <th class="item">{l s='Approved' mod='agilemultipleseller'}</th>
		        {/if}
		        <th class="last_item" style="width:5px">&nbsp;</th>
	        </tr>
        </thead>
        <tbody>
        {foreach from=$products item=product name=myLoop}
    	{assign var='detail_url' value=$link->getModuleLink('agilemultipleseller', 'sellerproductdetail', ['id_product' => $product.id_product], true)}
	        <tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
		        <td class="pointer center" onclick="document.location = '{$detail_url}'">
			        <a class="color-myaccount" href="{$detail_url}">{$product.id_product}</a>
		        </td>
		        <td class="pointer center" onclick="document.location = '{$detail_url}'">
					<a href="{$detail_url}">
					{if $product.id_image}
						<img src="{$link->getImageLink($product['name'], $product['id_image'], 'small_default')}" />
					{else}
						<img src="{$base_dir_ssl}img/c/en-default-medium.jpg" />
					{/if}
					</a>
					</td>
		        <td class="pointer center" onclick="document.location = '{$detail_url}'"><a href="{$detail_url}">{$product.name}</a></td>
		        <td class="pointer center" onclick="document.location = '{$detail_url}'">{$product.name_category}</td>
		        <td class="pointer right" onclick="document.location = '{$detail_url}'"><span class="price">{displayPrice price=$product.price_without_reduction currency=$def_id_currency no_utf8=false convert=false}</span></td>
		        <td class="pointer right" onclick="document.location = '{$detail_url}'"><span class="price">{displayPrice price=$product.price_final currency=$def_id_currency no_utf8=false convert=false}</span></td>
		        <td class="pointer right" onclick="document.location = '{$detail_url}'">{$product.sav_quantity}</td>
		        <td class="center">
		            {if $product.active == 1}
						<a href="{$link->getModuleLink('agilemultipleseller', 'sellerproducts', ['process' => 'inactive', 'id_product'=>$product.id_product], true)}" ><img src="{$base_dir_ssl}img/admin/enabled.gif" /></a>
		            {else}
						<a href="{$link->getModuleLink('agilemultipleseller', 'sellerproducts', ['process' => 'active', 'id_product'=>$product.id_product], true)}" ><img src="{$base_dir_ssl}img/admin/disabled.gif" /></a>
		            {/if}
		        </td>
		        {if $is_apprpved_required}
		        <td align="center" valign="middle">
		            {if $product.approved == 1}
		            <img src="{$base_dir_ssl}img/admin/enabled.gif" />
		            {else}
		            <img src="{$base_dir_ssl}img/admin/disabled.gif" />
		            {/if}
		        </td>
		        {/if}
		        <td class="history_detail">
		        <a href="{$link->getModuleLink('agilemultipleseller', 'sellerproducts', ['process' => 'delete', 'id_product'=>$product.id_product], true)}" onclick="if (confirm('Delete selected item?')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"><img src="{$base_dir_ssl}img/admin/delete.gif" /></a>
		        </td>
	        </tr>
        {/foreach}
        </tbody>
    </table>
	</div> <!-- table-responsive -->
    <div id="block-product-detail" class="hidden">&nbsp;</div>
    {else}
		<div class="row">
			<p class="alert alert-warning">{l s='You do not have any products registered' mod='agilemultipleseller'}</p>
		</div>
    {/if}
</div>
</div> <!-- agile --!>
{/if}
{include file="$agilemultipleseller_views./templates/front/seller_footer.tpl"}

