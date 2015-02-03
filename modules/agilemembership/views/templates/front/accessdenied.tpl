<div>
<h2 style="color:red">{l s='Access Permission Denied' mod='agilemembership'}</h2>

<p>
{l s='The page you are trying to access is for members access only. ' mod='agilemembership'}<br />
</p>

{if isset($am_error_no) && $am_error_no>0}
	{if $am_error_no==1}
	<p class="error">
		{l s='You are trying to add a product to shopping cart. Only customers with valid membership can purchase.' mod='agilemembership'}<br />
	</p>
	{/if}
{/if}


<p>
{l s='If you have not signed up for an account yet, ' mod='agilemembership'}<a href="{$base_dir_ssl}authentication.php">{l s='please click to sign up' mod='agilemembership'}</a>.<br />
</p>

<p>
{l s='If you have signed up, but have not bought a membership, ' mod='agilemembership'}<A href="{$base_dir_ssl}category.php?id_category={$membership_cid}">{l s='please click to buy your membership.' mod='agilemembership'}</A><br />
</p>

<p>
{l s='If you have purchased a membership but it has not been activated, please try again later. Once we approve your membership, your account will be activated.' mod='agilemembership'}<br />
</p>


<p>
{l s='If you have any questions, ' mod='agilemembership'}<a href="{$base_dir_ssl}contact-form.php">{l s='please feel free to contact us' mod='agilemembership'}</a>.
</p>

</div>
