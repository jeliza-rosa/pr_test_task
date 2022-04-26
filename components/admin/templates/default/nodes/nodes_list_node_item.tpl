{if $item.node->getUrl()!="admin"}
	<tr>
		<td>{$item.node->getId()}</td>
		<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$item.node->getId()}"></td>
		<td>
			<div class="btn-group no-margin">
				<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
				<i class="icon-reorder"></i>
				</a>
				<ul class="dropdown-menu nodes-dropdown">
					<li><a href="{$aTemplate.host}admin/content/{$item.node->getId()}/"><i class="icon-pencil"></i> Редактировать</a></li>
					<li><a href="{$item.node->getFullUrl()}" target="_blank"><i class="icon-external-link"></i> Просмотр</a></li>
					<li><a href="{$aTemplate.host}admin/nodes/add/{$item.node->getId()}/"><i class="icon-plus"></i> Добавить подраздел</a></li>
					<li><a href="{$aTemplate.host}admin/nodes/edit/{$item.node->getId()}/"><i class="icon-cog"></i> Свойства раздела</a></li>
					<li class="divider"></li>
					<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteNode({$item.node->getId()});"><i class="icon-trash"></i> Удалить</a></li>
				</ul>
			</div>
		</td>
		<td>
			{section name=foo start=0 loop=$level}<i class="icon-null"></i><i class="icon-null"></i><i class="icon-null"></i> {/section}{if $item.childs}<i class="icon-caret-down"></i> {else}<i class="icon-null"></i> {/if}&nbsp;<a href="{$aTemplate.host}admin/content/{$item.node->getId()}/">{$item.node->getTitle()}</a>
		</td>
		<td>{$item.node->getUrl()}</td>
		<td>{if $item.node->getComponentObject()}{$item.node->getComponentObject()->getTitle()}{/if}</td>
		<td>
			<a href="#" class="activation" data-component="nodes" data-action="{if $item.node->getActive()==1}de{/if}activate" data-id="{$item.node->getId()}">
				<span class="badge {if $item.node->getActive()==1}badge-success{else}badge-important{/if}">{if $item.node->getActive()==1}Да{else}Нет{/if}</span>
			</a>
		</td>
		<td>{if $level}{if !$last}<a href="#" onclick="return ajaxSortDownNode(this, {$item.node->getId()});"><i class="icon-chevron-down"></i></a> {/if}{if !$first}<a href="#" onclick="return ajaxSortUpNode(this, {$item.node->getId()});"><i class="icon-chevron-up"></i></a>{/if}{/if}</td>
	</tr>
	{if $item.childs}
		{foreach from=$item.childs item=foo name=childs}
			{include file="components/admin/templates/default/nodes/nodes_list_node_item.tpl" item=$foo level=$level+1 first=$smarty.foreach.childs.first last=$smarty.foreach.childs.last}
		{/foreach}
	{/if}
{/if}