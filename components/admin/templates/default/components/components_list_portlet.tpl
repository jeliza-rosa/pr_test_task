<p>	
	<a href="{$aTemplate.host}admin/components/add/" class="btn green"><i class="icon-plus"></i> Добавить компонент</a>
	<a href="#" class="btn" id="deleteChosen" data-set="/admin/components/deleteall/"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table id="table1" class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название</th>
			<th width="150"><i class="icon-cogs"></i> Имя</th>
			<th width="100"><i class="icon-eye-open"></i> Активен</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$aComponents item=oItem}
			<tr>
				<td>{$oItem->getId()}</td>
				<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$oItem->getId()}"></td>
				<td>
					<div class="btn-group no-margin">
						<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
						<i class="icon-reorder"></i>
						</a>
						<ul class="dropdown-menu nodes-dropdown">
							<li><a href="{$aTemplate.host}admin/components/edit/{$oItem->getId()}/"><i class="icon-pencil"></i> Редактировать</a></li>
							<li class="divider"></li>
							<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm('Удаление компонента', 'Вы действительно хотите удалить компонент?', '{$aTemplate.host}admin/components/delete/{$oItem->getId()}/');"><i class="icon-trash"></i> Удалить</a></li>
						</ul>
					</div>
				</td>
				<td>
					<a href="{$aTemplate.host}admin/components/edit/{$oItem->getId()}/">{$oItem->getTitle()}</a>
				</td>
				<td>{$oItem->getName()}</td>
				<td>{if $oItem->getActive()==1}<a href="#" onclick="return ajaxActivate('deactivate', {$oItem->getId()}, this);"><span class="badge badge-success">Да</span></a>{else}<a href="#" onclick="return ajaxActivate('activate', {$oItem->getId()}, this);"><span class="badge badge-important">Нет</span></a>{/if}</td>
			</tr>
		{/foreach}
	</tbody>
</table>