{extends file="helpers/form/form.tpl"}

{block name="field"}
	{if $input.type == 'agile-fee_validity'}
		<div class="table-responsive clearfix sep col-lg-{if isset($input.col)}{$input.col|intval}{else}9{/if} {if !isset($input.label)}col-lg-offset-3{/if}">
			<table class="table">
				<thead><tr>
				{foreach $input.values.header as $head}
					<th class="{$head.class}">{$head.name}</th>
				{/foreach}
				{if $input.isAgileMultipleSellerInstalled==1}<th class="col-lg-1">{$input.maxListing}</th>{/if}
				</tr></thead>
				<tbody>
				{foreach $input.values.body as $body}
				<tr>
				<td>{$body.membertype}</td>
				<td>{$body.Fees}</td>
				<td>
					<div class="row">
					<div class="col-xs-4 cole-sm-3 col-md-2">
					<input type="text" name="{$body.id_product.name}_units" id="{$body.id_product.name}_units" value="{$body.id_product.units}" size="3" />
					</div>
					<select name="{$body.id_product.name}_interval" id="{$body.id_product.name}_member_interval" class="col-xs-7 cole-sm-8 col-md-6">
					{foreach $input.membership_interval as $interval}
					    <option value="{$interval.id}" {if $body.id_product.interval =={$interval.id}} selected {/if}>{$interval.name}</option>
					{/foreach}
					</select>
					</div>
				</td>
				<td>
					<select name="{$body.id_product.name}_id_group" id="{$body.id_product.name}_id_group">
					{foreach $input.groups as $group}
					    <option value="{$group.id}" {if $body.id_product.group =={$group.id}} selected {/if}>{$group.name}</option>
					{/foreach}
					</select>
				</td>
				{if $input.isAgileMultipleSellerInstalled==1}<td>
					<input type="text" name="{$body.id_product.name}_listing_max" value="{$body.listing_max}" size="5" />
									
				</td>{/if}
				</tr>
				{/foreach}
				</tbody>
			</table>
			{if isset($input.desc) && !empty($input.desc)}
				<p class="help-block">
					{if is_array($input.desc)}
						{foreach $input.desc as $p}
							{if is_array($p)}
								<span id="{$p.id}">{$p.text}</span><br />
							{else}
								{$p}<br />
							{/if}
						{/foreach}
					{else}
						{$input.desc}
					{/if}
				</p>
			{/if}
		</div>
	{else}
		{$smarty.block.parent}
    {/if}

{/block}

{block name="input"}
   {if $input.type == 'agile_condition_radio'}
		{foreach $input.values as $value}
			<div class="radio {if isset($input.class)}{$input.class}{/if}">
				{strip}
				<label>
				<input type="radio"	name="{$input.name}" id="{$value.id}" value="{$value.value|escape:'html':'UTF-8'}"
					{if isset($value.onchange)} onchange="{$value.onchange}" {/if}
					{if $fields_value[$input.name] == $value.value} checked="checked"{/if}{if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}/>
				{$value.label}
				</label>
				{/strip}
				{if isset($value.condfields) }
					<div id="membership_voucher_validity" class="row" style="margin-top:1em"> <span class="col-sm-2 col-md-1">{$value.condfields.label}</span>
						{foreach $value.condfields.fieldvalues as $condfield}
							{assign var='value_text' value=$fields_value[{$condfield.name}]}
							{if $condfield.type == 'text'}
								<span class="col-sm-1">
								<input type="text"
									name="{$condfield.name}"
									id="{if isset($condfield.id)}{$input.id}{else}{$condfield.name}{/if}"
									{if isset($condfield.size)} size="{$condfield.size}"{/if}
									value="{if isset($condfield.string_format) && $condfield.string_format}{$value_text|string_format:$condfield.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}" />
								</span>
							{else if $condfield.type == 'select'}
								<span class="col-sm-3 col-md-2">
									<select name="{$condfield.name|escape:'html':'utf-8'}"
											id="{if isset($condfield.id)}{$condfield.id|escape:'html':'utf-8'}{else}{$condfield.name|escape:'html':'utf-8'}{/if}"
											{if isset($condfield.multiple)}multiple="multiple" {/if}
											{if isset($condfield.size)}size="{$condfield.size|escape:'html':'utf-8'}"{/if}>
											{foreach $condfield.options.query AS $option}
												{if is_object($option)}
													<option value="{$option->$condfield.options.id}"
														{if isset($input.multiple)}
															{foreach $fields_value[$condfield.name] as $field_value}
																{if $field_value == $option->$condfield.options.id}
																	selected="selected"
																{/if}
															{/foreach}
														{else}
															{if $fields_value[$condfield.name] == $option->$condfield.options.id}
																selected="selected"
															{/if}
														{/if}
													>{$option->$condfield.options.name}</option>
												{elseif $option == "-"}
													<option value="">-</option>
												{else}
													<option value="{$option[$condfield.options.id]}"
														{if isset($condfield.multiple)}
															{foreach $fields_value[{$condfield.name}] as $field_value}
																{if $field_value == $option[$condfield.options.id]}
																	selected="selected"
																{/if}
															{/foreach}
														{else}
															{if $fields_value[$condfield.name] == $option[$condfield.options.id]}
																selected="selected"
															{/if}
														{/if}
													>{$option[$condfield.options.name]}</option>

												{/if}
											{/foreach}
									</select>
									</span>
								{/if}
						{/foreach}
					</div>
				{/if}
			</div>
		{/foreach}
   {elseif $input.type == 'checkboxgroup'}
		{assign var='idx' value=0}
		{assign var='remainder' value=$input.values.default|@count % 4}
		<div class="table-responsive clearfix">
       	<table class="table std">
			{foreach $input.values.default as $pg}
				{if ($idx % 4)==0}
               		<tr>
				{/if}
				<td class="col-sm-3"><input type="checkbox" name="{$input.name}" value="{$pg.value}" {if $pg.checked} checked {/if} />&nbsp;{$pg.label} </td>
				{capture assign=idx}{$idx+1}{/capture}
				{if ($idx % 4) == 0 } 
					</tr> 
				{/if}

			{/foreach}
			{if $remainder > 0}
				{if $remainder==1} 
					<td class="col-sm-3"></td><td class="col-sm-3"></td><td class="col-sm-3"></td>
				{else if $remainder==2}
					<td class="col-sm-3"></td><td class="col-sm-3"></td>
				{else if $remainder==3}
					<td class="col-sm-3"></td>
				{/if}
				</tr>
			{/if}
		</table>
		</div>
		{if  isset($input.values.others) && $input.values.others}
			<p>{$input.values.others.header}</p>
			<textarea name="{$input.values.others.name}" >{$fields_value[{$input.values.others.name}]}</textarea>
		{/if}
    {else}
		{$smarty.block.parent}
    {/if}
{/block}
