{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My Account' mod='agilesellershipping'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='My Seller Account'  mod='agilesellershipping'}{/capture}

<h1>{l s='My Seller Account' mod='agilesellershipping'}</h1>
{include file="$agilemultipleseller_views./templates/front/seller_tabs.tpl"}
{include file="$tpl_dir./errors.tpl"}
<script type="text/javascript">
	var id_carrier = {$id_carrier};
	
	$('document').ready(function() {
		$('a.range_fancybox').fancybox({
			modal: true
		});
	});

	function addRangeToTable(from, to, range_id)
	{
		var strTo = "{l s=' to ' mod='agilesellershipping'}";
		
		if($('#range_' + range_id).length)
		{
			rowHtml = parseFloat(from).toFixed(2) + strTo + parseFloat(to).toFixed(2);
			$('#l_range_' + range_id).html(rowHtml);
		}else
		{
			var rowHtml = "<tr valign=\"top\" id=\"range_" + range_id + "\">"; 
			rowHtml += "<td nowrap>";
			rowHtml += "<a href=\"#rangeedit\" class=\"agile-btn agile-btn-default range_fancybox\" onclick=\"preEditRange("+range_id +"," + parseFloat(from).toFixed(2) + "," + parseFloat(to).toFixed(2) +");\">\n";
			rowHtml +="<i class=\"icon-pencil\"></i></a>\n";
			rowHtml +="<a href=\"javascript:deleteRange(" + range_id + ");\" class=\"agile-btn agile-btn-default\" onclick=\"return confirm('{l s='Are you sure to delete the range?' mod='agilesellershipping'}');\">\n";
			rowHtml +="<i class=\"icon-trash\"></i></a></td>\n";
			rowHtml +="<td nowrap><label id=\"l_range_" + range_id +"\">" + parseFloat(from).toFixed(2) + strTo + parseFloat(to).toFixed(2) + "</lable></td>\n";
			/** _agile_  Skip the first 2 items _agile_ **/
			 $('#zone th:nth-child(n+3)').each(function(){
				   if($(this).attr("id") == "all_zones")
				   {				
					   rowHtml += "<td><input size=\"10\" type=\"text\" id=\"fees_all_" + range_id +"\" name=\"fees_all_" + range_id +"\" value=\"\" onkeyup=\"if ((event.keyCode||event.which) != 9){ spreadZoneFees(" + range_id + ")}\" /></td>";
				   
				   }else
				   {	
					   rowHtml += "<td><input size=\"10\" type=\"text\" name=\"fees_" + $(this).attr("id") + "_" + range_id +"\" id=\"fees_" + $(this).attr("id") + "_" + range_id +"\" value=\"\" /></td>";
				   }
			 });
			 rowHtml += "</tr>";
			 $('#zone').append(rowHtml);
		 }
	}

	function spreadZoneFees(id_range)
	{
		newVal = $('#fees_all_'+id_range).val().replace(/,/g, '.');
		$('#zone th:not(:first)').each(function(){
			$('#fees_'+ $(this).attr("id") + '_' + id_range).val(newVal);
		});
	}
	function deleteRangeFromTable(range_id)
	{
		 $('#range_' + range_id).remove();
	}
	
	function preEditRange(range_id, from, to)
	{
		$('#edit_range_id').val(range_id);
		$('#range_from').val(from);
		$('#range_to').val(to);
	}

	function editRange() {
		var from = $('#range_from').val();
		var to = $('#range_to').val();
		var range_id = $('#edit_range_id').val();
		$.ajax({
			type:'POST',
			url: baseDir  + 'index.php?process=shipping&fc=module&module=agilesellershipping&controller=sellercarrierranges&id_carrier=' + {$id_carrier},
			data: {
				ajax: true,
				from: from,
				to: to,
				action: 'edit',
				range_id: range_id
			},
			success: function(data) 
			{
				var obj = JSON && JSON.parse(data) || $.parseJSON(data);
				if(obj["success"] == 1)
				{
					addRangeToTable(obj["from"],obj["to"],obj["range_id"]);
				}else
				{
					alert(obj["errors"]);
				}
			}
		});
	}

	function deleteRange(range_id) {
		$.ajax({
			type:'POST',
			url: baseDir  + 'index.php?process=shipping&fc=module&module=agilesellershipping&controller=sellercarrierranges&id_carrier=' + {$id_carrier},
			data: {
				ajax: true,
				action: 'delete',
				range_id : range_id
			},
			success: function(data) 
			{
				var obj = JSON && JSON.parse(data) || $.parseJSON(data);
				if(obj["success"] == 1)
				{
					deleteRangeFromTable(obj["range_id"]);
				}else
				{
					alert(obj["errors"]);
				}
			}
		});
	}
</script>
{if isset($isSeller) AND $isSeller AND ($hasOwnerShip OR $isSharedCarrier)}
	<div id="agile">
    <form action="{$link->getModuleLink('agilesellershipping', 'sellercarrierranges', ['process' =>'carrierdetail','id_carrier'=>$id_carrier], true)}" enctype="multipart/form-data" method="post" class="std">
	<div id="fieldset_range" class="panel box">
 		<div class="row">
			<h3>
			<span class="agile-pull-right">
				<a  class="agile-btn agile-btn-default" href="{$link->getModuleLink('agilesellershipping', 'sellercarriers', ['process' =>'carriers'], true)}">
				<i class="icon-th-list"></i>{l s=' Back to list ' mod='agilesellershipping'}
				</a>
			</span>
			<span class="agile-pull-left">
				{if $hasOwnerShip}
					<a href="#rangeedit" class="agile-btn agile-btn-default range_fancybox" onclick="preEditRange(-1,'','');">
					<i class="icon-plus-sign"></i>{l s=' Add Range' mod='agilesellershipping'}</a>
				{/if}
			</span></h3>
		</div>

		<div class="panel-heading">
			{if $range_type == "Weight Ranges"}
				<label><b>{l s='Fees by geographical zone, and weight ranges' mod='agilesellershipping'}</b></label>({l s='Unit:' mod='agilesellershipping'}{$range_suffix})&nbsp;&nbsp;&nbsp;&nbsp;({l s='Fee Currency:' mod='agilesellershipping'}{$currency->getSign('left')}&nbsp;{$currency->getSign('right')}&nbsp;{l s='tax excl.'})
			{else}
				<label><b>{l s='Fees by geographical zone, and price ranges' mod='agilesellershipping'}</b></label>({l s='Currency:' mod='agilesellershipping'}{$range_suffix})&nbsp;&nbsp;&nbsp;&nbsp;({l s='Fee Currency:' mod='agilesellershipping'}{$currency->getSign('left')}&nbsp;{$currency->getSign('right')}&nbsp;{l s='tax excl.'})
			{/if}
		</div>
		<div class="table-responsive clearfix">
			<div>
				<table id="zone" border="1" bgcolor="EEEEEE"  class="std">
				<tr>
					<th></th>
					<th nowrap align="center">
					<label>{l s='Range/Zone' mod='agilesellershipping'}</label>
					</th>
					<th nowrap id ="all_zones" align="center">
						{l s='All Zones' mod='agilesellershipping'}
					</th>
					{foreach $carrier_zones AS $carrier_zone}	
						<th nowrap id="{$carrier_zone.id_zone}" align="center">
								<label>{$carrier_zone.name}</label>
						</th>
					{/foreach}
				</tr>
					{foreach $ranges AS $range}
						<tr valign="top" id="range_{$range[$rangeIdentifier]}">
							{if $hasOwnerShip}
							<td nowrap>
								<a href="#rangeedit" class="agile-btn agile-btn-default range_fancybox" onclick="preEditRange({$range[$rangeIdentifier]},{$range.delimiter1|string_format:"%.2f"},{$range.delimiter2|string_format:"%.2f"});">
								<i class="icon-pencil"></i></a>
								<a href="javascript:deleteRange({$range[$rangeIdentifier]});" class="agile-btn agile-btn-default" onclick="return confirm('{l s='Are you sure to delete the range?' mod='agilesellershipping'}');">
								<i class="icon-trash"></i></a>
							</td>
							{else}
							<td></td>
							{/if}
							<td nowrap>
								<label id="l_range_{$range[$rangeIdentifier]}">{$range.delimiter1|string_format:"%.2f"}{l s=' to ' mod='agilesellershipping'}{$range.delimiter2|string_format:"%.2f"}</label>
							</td>
							<td nowrap>
								<input type="text" size="10" id="fees_all_{$range[$rangeIdentifier]}" onkeyup="if ((event.keyCode||event.which) != 9){ spreadZoneFees({$range[$rangeIdentifier]})}">
							</td>
							{foreach $carrier_zones AS $carrier_zone}	
								<td nowrap>
									<input type="text" size="10" name="fees_{$carrier_zone.id_zone}_{$range[$rangeIdentifier]}" id="fees_{$carrier_zone.id_zone}_{$range[$rangeIdentifier]}"
									 value="{if (isset($deliveryArray[$carrier_zone.id_zone][$range[$rangeIdentifier]]))}{$deliveryArray[$carrier_zone.id_zone][$range[$rangeIdentifier]]|string_format:"%.2f"}{else}0.00{/if}" />
								</td>
							{/foreach}
						</tr>
					{/foreach}
				</table>
			</div>
			<div style="display: none">
				<div id="rangeedit">
					<table border="0" width="300" height="100">
						<input type="hidden" id="edit_range_id" />
						<tr><td nowrap><label>{l s='From: ' mod='agilesellershipping'}</label></td><td nowrap><input type="text" name="range_from" id="range_from" value="" />{l s='Range start (included)' mod='agilesellershipping'}</td></tr>
						<tr><td nowrap><label><label>{l s='To: ' mod='agilesellershipping'}</label></td><td nowrap><input type="text" name="range_to" id="range_to" value="" />{l s='Range end (excluded)' mod='agilesellershipping'}</tr>
						<tr><td></td><td>
										<button type="submit" class="agile-btn agile-btn-default" name="submitBack" onclick="editRange();$.fancybox.close();">
										<i class="icon-save"></i> <span>{l s='Save' mod='agilesellershipping'}</span></button>
										&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="button" class="agile-btn agile-btn-default" name="submitBack" onclick="$.fancybox.close();">
										<i class="icon-remove"></i> <span>{l s='Cancel' mod='agilesellershipping'}</span></button>
					</table>
				</div>
			</div>
		{if $hasOwnerShip}				
		<div class="form-group agile-align-center clearfix">
			<div class="submitSave pull-left">
				<button type="submit" class="agile-btn agile-btn-default" name="submitSave" value="{l s='Save' mod='agilesellershipping'}">
				<i class="icon-save"></i> <span>{l s='Save' mod='agilesellershipping'}</span></button>
			</div>
			<div class="submitNext pull-right">
				<button type="submit" class="agile-btn agile-btn-default" name="submitBack" value="{l s='Back To Detail' mod='agilesellershipping'}">
				<i class="icon-arrow-left"></i> <span>{l s='Back To Detail' mod='agilesellershipping'}</span></button>
			</div>
		</div>
		{else}
		<div class="alert alert-warning">
			{l s='This is a shared carrier, you do not have permission to edit it.' mod='agilesellershipping'}
			<a style="color:blue;text-decoration:underline;" href="{$link->getModuleLink('agilesellershipping', 'sellercarrierdetail', ['process' =>'carrierdetail','id_carrier'=>$id_carrier], true)}">{l s='Go back to carrier info' mod='agilesellershipping'}</a>
		</div>
		{/if}	
		</div> <!-- end of panel -->
		</form>
		</div> <!-- end of agile -->
{/if}

{include file="$agilemultipleseller_views./templates/front/seller_footer.tpl"}

