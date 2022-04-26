{if $cur!=$item.item->getId()}
	<option 
		value="{$item.item->getId()}"
		{if $sel==$item.item->getId() || $iParentItem==$item.item->getId() } selected="selected"{/if}>
			{section name=foo start=0 loop=$level}&ndash;&ndash; {/section}{$item.item->getTitle()}
	</option>
	{foreach from=$item.childs item=foo}
		{include file="components/admin/templates/default/menu/item_list_option.tpl" item=$foo level=$level+1}
	{/foreach}
{/if}