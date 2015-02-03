<script type="text/javascript">
<!--
	var baseDir = '{$base_dir_ssl}';
-->
</script>

{if !$content_only}
{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My membership' mod='agilemembership'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Your membership information' mod='agilemembership'}{/capture}
{/if}

<h2>{l s='Your membership information' mod='agilemembership'}</h2>

{include file="$tpl_dir./errors.tpl"}

{if $confirmation}
	<p class="success">
		{l s='Your membership information has been successfully updated.' mod='agilemembership'}
	</p>
{else}
    <fieldset>
    <form action="{$base_dir_ssl}/modules/agilemembership/mymembership.php" method="post">
    {if $membership_valid}
	    <p class="text">
		    <label for="membership_activated">{l s='Membership Type' mod='agilemembership'}:</label>
		    <select id="membership_activated" name="membership_activated"  style="width:350px;" disabled=disabled>
			    <option value="0">-</option>
                {foreach from=$membershiptypes item=membershiptype}

                    <option value="{$membershiptype.id_membership_type|intval}" {if $membership->id_membership_type==$membershiptype.id_membership_type|intval} selected {/if}>{$membershiptype.name} - {convertPrice price=$membershiptype.price}</option>
	            {/foreach}
		    </select>
        </p>

    	<p class="text">
    		<label for="id_date_add">{l s='Signup Date' mod='agilemembership'  mod='agilemembership'}:</label>
    		<span id="id_date_add">{$membership->date_add|date_format:$user_date_format}</span>
        </p>

    	<p class="text">
    		<label for="id_activation_date">{l s='Activation Date' mod='agilemembership'  mod='agilemembership'}:</label>
    		<span id="id_activation_date">{$membership->activation_date|date_format:$user_date_format}</span>
        </p>
    	<p class="text">
    		<label for="id_expiry_date">{l s='Expiration Date' mod='agilemembership'}:</label>
    		<span id="id_expiry_date">{$expiry_date|date_format:$user_date_format}</span>
        </p>
    {/if}
    </form>
    </fieldset>
{/if}
<p>
<a href="{$catlink}">
{l s='Please click here to purchase or renew your membership.' mod='agilemembership'}
</a>
</p>

<span style="font-size:12px;">{l s='Your membership history' mod='agilemembership'}</span>
{if isset($membership_history) AND count($membership_history)>0}
<div class="table-responsive clearfix">
<table class="std">
<thead><tr>
	<th>{l s='Membership' mod='agilemembership'}</th>
	<th>{l s='Start' mod='agilemembership'}</th>
	<th>{l s='Expires' mod='agilemembership'}</th>
	<th>{l s='Order #' mod='agilemembership'}</th>
	<th>{l s='Order Status' mod='agilemembership'}</th>
	<th>{l s='Cancelled' mod='agilemembership'}</th>
	<th></th>
</tr></thead>
    {foreach from=$membership_history item=history}
	<tr>
	<td style="{if $history.is_cancelled==1}text-decoration:line-through{/if}">{$history.membership}</td>
	<td style="{if $history.is_cancelled==1}text-decoration:line-through{/if}">{$history.date_start|date_format:$user_date_format}</td>
	<td style="{if $history.is_cancelled==1}text-decoration:line-through{/if}">{$history.expiry_date|date_format:$user_date_format}</td>
	<td align="center" style="{if $history.is_cancelled==1}text-decoration:line-through{/if}">{$history.id_order}</td>
	<td style="{if $history.is_cancelled==1}text-decoration:line-through{/if}">{$history.status}</td>
	<td>{if $history.is_cancelled==1}
			{$history.date_cancelled|date_format:$user_date_format}
		{else if $history.is_cancelled==2}
			{l s='Cancellation request has been submitted on' mod='agilemembership'} {$history.date_cancelled|date_format:$user_date_format}
		{else if $membership_cancelmethod !=1}
			<a href="{$link->getModuleLink('agilemembership', 'mymembership', ['process' => 'cancelrequest', 'id_membership_history'=>$history.id_membership_history], true)}" onclick="if (confirm('Are you sure to submit a request to cancel this membership?')){ return true; }else{ event.stopPropagation(); event.preventDefault();};">{l s='Submit Cancel Request' mod='agilemembership'}</a>
		{else}
			<a href="{$link->getModuleLink('agilemembership', 'mymembership', ['process' => 'cancel', 'id_membership_history'=>$history.id_membership_history], true)}" onclick="if (confirm('Are you sure to cancel this membership?')){ return true; }else{ event.stopPropagation(); event.preventDefault();};">{l s='Cancel' mod='agilemembership'}</a>
		{/if}</td>
	<td><a href=""></a></td>
	</tr>
  {/foreach}
</table>
</div>
{else}
<p class="alert alert-warning">{l s='You do not have membership yet.'  mod='agilemembership'}</p>
{/if}

{if !$content_only}
<ul class="footer_links clearfix">
    <li>
      <a href="{$link->getPageLink('my-account', true)}">
        <i class="icon-circle-arrow-left"></i>>{l s='Back to Your Account' mod='agilemembership'}
      </a>
    </li>
    <li>
      <a href="{$base_dir_ssl}">
        <i class="icon-home"></i>{l s='Home' mod='agilemembership'}
      </a>
    </li>
</ul>
{/if}