{if $item.node->getUrl()!="admin"}
	<option value="{$item.node->getId()}" {if in_array($item.node->getId(), $aNodesChosen)}selected="selected"{/if}>{section name=foo start=0 loop=$level} &ndash;&ndash; {/section}{$item.node->getTitle()}</option>
	{foreach from=$item.childs item=foo}
		{include file="components/admin/templates/default/hooks/hook_form_node_item_multiple.tpl" item=$foo level=$level+1 aNodesChosen=$aNodesChosen}
	{/foreach}
{/if}