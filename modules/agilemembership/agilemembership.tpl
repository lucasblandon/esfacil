<!-- Block Viewed Memberships -->
<div id="viewed-agilememberfee" class="block">
  <p class="title_block">{l s='Memberships' mod='agilemembership'}</p>
  <div class="block_content products-block">
    <ul>
      {foreach from=$mem_types item=mem_type name=myLoop}
      <li class="clearfix{if $smarty.foreach.myLoop.last} last_item{elseif $smarty.foreach.myLoop.first} first_item{else} item{/if}">
        <a
        class="products-block-image"
        href="{$link->getProductLink($mem_type.product->id)}"
        title="{l s='More about %s' mod='agilemembership' sprintf=[$mem_type.product->name|escape:'html':'UTF-8']}" >
          <img class="replace-2x img-responsive" 
          src="{$link->getImageLink($mem_type.product->link_rewrite, $mem_type.cover.id_image, 'small_default')|escape:'html'}"
          alt="{$mem_type.product->name|escape:'html':'UTF-8'}" />
        </a>
        <div class="product-content">
          <h5>
            <a class="product-name"
            href="{$link->getProductLink($mem_type.product->id)}"
            title="{l s='More about %s' mod='agilemembership' sprintf=[$mem_type.product->name|escape:'html':'UTF-8']}" >
              {$mem_type.product->name|truncate:25:'...'|escape:'html':'UTF-8'}
            </a>
          </h5>
          <p class="product-description">{$mem_type.product->description_short|strip_tags:'UTF-8'|truncate:40}</p>
          <div class="price-box">
            <span class="price">
              {convertPrice price=$mem_type.product->price}
            </span>
          </div>

        </div>
      </li>
      {/foreach}
    </ul>
  </div>
</div>
