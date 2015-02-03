{extends file="helpers/form/form.tpl"}
{block name="script"}
$(document).ready(function(){
	if ($("select[name='aslo_list_prod_id'] option:selected").index() == 0 )
	{
		$('.aslo_interval_length').hide();
	} else {
		$('.aslo_interval_length').show();
	}

	$('select[name=aslo_list_prod_id]').on('change',function(){
		if ($('option:selected',$(this)).index() == 0 )
		{
			$('.aslo_interval_length').hide();
		} else {
			$('.aslo_interval_length').show();
		}
	});
});
{/block}

{block name="field"}
	{if $input.type == 'htmlhr'}
		<div class="sep">
			<hr />
		</div>
	{else}
		{$smarty.block.parent}
    {/if}

{/block}

{block name="input"}
   {if $input.type == 'agile_text_select'}
   <div class="row">
		{assign var='value_text' value=$fields_value[$input.name]}
		<span class="col-sm-1">
			<input type="text"
				name="{$input.name}"
				id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
				value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}" />
		</span>
		<span class="col-sm-3 col-md-2">
			<select name="{$input.select_name|escape:'html':'utf-8'}"
					id="{if isset($input.select_id)}{$input.select_id|escape:'html':'utf-8'}{else}{$input.select_name|escape:'html':'utf-8'}{/if}">
					{foreach $input.options.query AS $option}
						{if is_object($option)}
							<option value="{$option->$input.options.id}"
							{if $fields_value[$input.select_name] == $option->$input.options.id}
								selected="selected"
							{/if}
							>{$option->$input.options.name}</option>
						{elseif $option == "-"}
							<option value="">-</option>
						{else}
							<option value="{$option[$input.options.id]}"
							{if $fields_value[$input.select_name] == $option[$input.options.id]}
								selected="selected"
							{/if}
							>{$option[$input.options.name]}</option>
						{/if}
					{/foreach}
			</select>
		</span>
	</div>
    {else}
		{$smarty.block.parent}
    {/if}
{/block}