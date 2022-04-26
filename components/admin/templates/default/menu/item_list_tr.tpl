<tr>
	<td>{$item.item->getId()}</td>
	<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$item.item->getId()}"></td>
	<td>
		<div class="btn-group no-margin">
			<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
			<i class="icon-reorder"></i>
			</a>
			<ul class="dropdown-menu nodes-dropdown">
				<li><a href="{$aTemplate.host}admin/menu/edititem/{$item.item->getId()}/"><i class="icon-pencil"></i> Редактировать</a></li>
				<li><a href="{$aTemplate.host}admin/menu/additem/{$iMenuId}/{$item.item->getId()}/"><i class="icon-plus"></i> Добавить подраздел меню</a></li>
				<li class="divider"></li>
				<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteItem({$item.item->getId()});"><i class="icon-trash"></i> Удалить</a></li>
			</ul>
		</div>
	</td>
	<td>
		{section name=foo start=0 loop=$level*2} <i class="icon-null"></i> {/section}
		{if count($item.childs)}<i class="icon-caret-down"></i>{else}<i class="icon-null"></i>{/if}
		<a href="{$aTemplate.host}admin/menu/edititem/{$item.item->getId()}/">
			{$item.item->getTitle()}
	</td>
	<td>{$item.item->getImg()}</td>
	<td>{$item.item->getNodeObject()->getTitle()}</td>
	<td>{$item.item->getUrl()}</td>
	<td>
		<a href="#" class="activation" data-component="menu/itemactivation" data-action="{if $item.item->getActive()}de{/if}activate" data-id="{$item.item->getId()}">
			<span class="badge {if $item.item->getActive()==1}badge-success{else}badge-important{/if}">
				{if $item.item->getActive()==1}Да{else}Нет{/if}
			</span>
		</a>
	</td>
	
	<td>
		{if !$last}<a href="#" onclick="return ajaxSortMenu(this, {$item.item->getId()}, 'down');"><i class="icon-chevron-down"></i></a> {/if}
		{if !$first}<a href="#" onclick="return ajaxSortMenu(this, {$item.item->getId()}, 'up');"><i class="icon-chevron-up"></i></a>{/if}
	</td>
</tr>
{foreach from=$item.childs item=foo name=childs}
	{include file="components/admin/templates/default/menu/item_list_tr.tpl" item=$foo level=$level+1 first=$smarty.foreach.childs.first last=$smarty.foreach.childs.last}
{/foreach}