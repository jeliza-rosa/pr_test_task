<p>	
	<a href="{$aTemplate.host}admin/menu/additem/{$iMenuId}/" class="btn green"><i class="icon-plus"></i> Добавить пункт меню</a>
	<a href="#" class="btn" data-set="/admin/menu/deleteallitem/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table id="table1" class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название пункта меню</th>
			<th width="150"><i class="icon-picture"></i> Изображение</th>
			<th width="150"><i class="icon-sitemap"></i> Раздел</th>
			<th width="150"><i class="icon-globe"></i> URL</th>
			<th width="100"><i class="icon-eye-open"></i> Показывать</th>
			<th width="100"><i class="icon-sort"></i> Сортировка</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$aItems item=foo name=childs}
			{include file="components/admin/templates/default/menu/item_list_tr.tpl" item=$foo level=0 first=$smarty.foreach.childs.first last=$smarty.foreach.childs.last}
		{/foreach}
	</tbody>
</table>