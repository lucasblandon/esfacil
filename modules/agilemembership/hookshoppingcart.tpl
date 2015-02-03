{if $donoteligibles_nb>0}
    <div class="block" style="border:dotted 2px red; padding:5px; color:blue">
    {l s='Sorry.  You are already enrolled in a free membership plan, you cannot create another one under this account.' mod='agilemembership'}<br /><br />
    {foreach from=$donoteligibles item=donoteligible}
    <span style="color:Black;"><b>{$donoteligible} </b></span>
	{/foreach}
    </div>
    <br /><br />
{/if}
