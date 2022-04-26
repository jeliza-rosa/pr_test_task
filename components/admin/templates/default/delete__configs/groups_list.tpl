{include file="components/admin/templates/default/header.tpl"}
<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-sitemap"></i>Баннерный барабан</h4>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body">
		<p>	
			<a href="{$aTemplate.host}admin/{$sAction}/addgroup/" class="btn green"><i class="icon-plus"></i> Добавить группу</a>
			<a href="#" class="btn" data-set="/admin/{$sAction}/deleteallgroup/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
		</p>
		<table id="table1" class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th width="10">ID</th>
					<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
					<th width="10"><i class="icon-reorder"></i></th>
					<th><i class="icon-bookmark"></i> Название меню</th>
					<th><i class="icon-eye-open"></i> Описание</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$aGroups item=oGroup}
					<tr>
						<td>{$oGroup->getId()}</td>
						<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$oGroup->getId()}"></td>
						<td>
							<div class="btn-group no-margin">
								<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
								<i class="icon-reorder"></i>
								</a>
								<ul class="dropdown-menu nodes-dropdown">
									<li><a href="{$aTemplate.host}admin/{$sAction}/editgroup/{$oGroup->getId()}/"><i class="icon-pencil"></i> Редактировать</a></li>
									<li><a href="{$aTemplate.host}admin/{$sAction}/add/{$oGroup->getId()}/"><i class="icon-plus"></i> Добавить баннер</a></li>
									<li class="divider"></li>
									<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm('Подтверждение удаления', 'Вы действительно хотите удалить эту группу баннеров?', '/admin/{$sAction}/deletegroup/{$oGroup->getId()}/')"><i class="icon-trash"></i> Удалить</a></li>
								</ul>
							</div>
						</td>
						<td>
							<a href="{$aTemplate.host}admin/{$sAction}/list/{$oGroup->getId()}/">{$oGroup->getTitle()}</a>
						</td>
						<td>{$oGroup->getDesc()}</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>
<div id="modalDelete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		<h3 id="modalDeleteLabel">Подтверждение удаления</h3>
	</div>
	<div class="modal-body">
		<p>Вы действительно хотите удалить этот элемент?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Нет</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div>
{include file="components/admin/templates/default/footer.tpl"}