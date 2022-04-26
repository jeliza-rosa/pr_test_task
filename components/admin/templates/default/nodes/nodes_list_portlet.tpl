<p>	
	<a href="{$aTemplate.host}admin/nodes/add/" class="btn green"><i class="icon-plus"></i> Добавить раздел</a>
	<a href="#" class="btn"><i class="icon-external-link"></i> Просмотреть выбранные</a>
	<a href="#" class="btn" id="deleteChosen" data-set="/admin/nodes/deleteall/"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table id="table1" class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название раздела</th>
			<th width="150"><i class="icon-globe"></i> URL</th>
			<th width="150"><i class="icon-cogs"></i> Компонент</th>
			<th width="100"><i class="icon-eye-open"></i> Показывать</th>
			<th width="30"><i class="icon-sort"></i></th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$aNodes item=foo name=childs}
			{include file="components/admin/templates/default/nodes/nodes_list_node_item.tpl" item=$foo level=0 first=$smarty.foreach.childs.first last=$smarty.foreach.childs.last}
		{/foreach}
	</tbody>
</table>