<div class="account_creation">
	<h3 class="page-subheading">{l s='Membership signup' mod='agilemembership'}</h3>
	<div class="required form-group">
		<label for="id_membership_type" class="control-label">{l s='Membership Type' mod='agilemembership'}
  </label>
		<select id="id_membership_type" name="id_membership_type" class="is_required form-control">
			<option value="0">-</option>
            {foreach from=$membershiptypes item=membershiptype}
                <option value="{$membershiptype.id_membership_type|intval}" {if $membership->id_membership_type==$membershiptype.id_membership_type|intval} selected {/if}>{$membershiptype.name} - {convertPrice price=$membershiptype.price}</option>
	        {/foreach}
		</select>
    </div>
</div>
