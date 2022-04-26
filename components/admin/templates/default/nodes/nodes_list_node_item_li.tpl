{if $item.node->getUrl()!="admin"}
	<li class="tr">
		<div class="td node-id">{$item.node->getId()}</div>
		<div class="td node-check"><input name="item-checkbox[]" type="checkbox" class="item-checkbox" value="{$item.node->getId()}"></div>
		<div class="td node-dropdown">
			<div class="btn-group no-margin">
				<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
				<i class="icon-reorder"></i>
				</a>
				<ul class="dropdown-menu nodes-dropdown">
					<li><a href="#"><i class="icon-pencil"></i> Редактировать</a></li>
					<li><a href="#"><i class="icon-external-link"></i> Просмотр</a></li>
					<li><a href="{$aTemplate.host}admin/nodes/add/{$item.node->getId()}/"><i class="icon-plus"></i> Добавить подраздел</a></li>
					<li><a href="{$aTemplate.host}admin/nodes/edit/{$item.node->getId()}/"><i class="icon-cog"></i> Свойства раздела</a></li>
					<li class="divider"></li>
					<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteNode({$item.node->getId()});"><i class="icon-trash"></i> Удалить</a></li>
				</ul>
			</div>
		</div>
		<div class="td node-title">
			{section name=foo start=0 loop=$level}&ndash;&ndash; {/section}<a href="#">{$item.node->getTitle()}</a>
		</div>
		<div class="td node-active">{if $item.node->getActive()==1}<a href="#" onclick="return ajaxActivateNode('/admin/nodes/deactivate/{$item.node->getId()}/', this, {$item.node->getId()});"><span class="badge badge-success">Да</span></a>{else}<a href="#" onclick="return ajaxActivateNode('/admin/nodes/activate/{$item.node->getId()}/', this, {$item.node->getId()});"><span class="badge badge-important">Нет</span></a>{/if}</div>
		<div class="td node-component">{$item.node->getComponentObject()->getTitle()}</div>
	</li>
	{if $item.childs}
	<ul class="table-nodes sortable">
		{foreach from=$item.childs item=foo}
			{include file="components/admin/templates/default/nodes/nodes_list_node_item_li.tpl" item=$foo level=$level+1}
		{/foreach}
	</ul>
	{/if}
{/if}