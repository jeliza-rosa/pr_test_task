{if $item.node->getUrl()!="admin"}
	<option value="{$item.node->getId()}"{if $val==$item.node->getId()} selected="selected"{/if}>{section name=foo start=0 loop=$level}&ndash;&ndash; {/section}{$item.node->getTitle()}</option>
	{foreach from=$item.childs item=foo}
		{include file="components/admin/templates/default/nodes/nodes_form_node_item.tpl" item=$foo level=$level+1}
	{/foreach}
{/if}