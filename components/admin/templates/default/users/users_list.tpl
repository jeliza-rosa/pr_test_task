{include file="components/admin/templates/default/header.tpl"}
<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-sitemap"></i>Пользователи</h4>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body">
		<p>	
			<a href="{$aTemplate.host}admin/users/add/" class="btn green"><i class="icon-plus"></i> Добавить пользователя</a>
			<a href="#" class="btn" id="deleteChosen" data-set="/admin/users/deleteall/"><i class="icon-trash"></i> Удалить выбранные</a>
			<a href="{$aTemplate.host}admin/users/groups/" class="btn"><i class="icon-group"></i> Группы Пользователей</a>
		</p>
		<table id="table1" class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th width="10">ID</th>
					<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
					<th width="10"><i class="icon-reorder"></i></th>
					<th><i class="icon-bookmark"></i> Login</th>
					<th width="150"><i class="icon-cogs"></i> Группа</th>
					<th width="150"><i class="icon-cogs"></i> Имя</th>
					<th width="100"><i class="icon-eye-open"></i> Активен</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$aUsers item=item}
					<tr>
						
						<td>{$item->getId()}</td>
						<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$item->getId()}"></td>
						<td>
							<div class="btn-group no-margin">
								<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
								<i class="icon-reorder"></i>
								</a>
								<ul class="dropdown-menu nodes-dropdown">
									<li><a href="{$aTemplate.host}admin/users/edit/{$item->getId()}/"><i class="icon-pencil"></i> Редактировать</a></li>
									<li class="divider"></li>
									<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteUser({$item->getId()});"><i class="icon-trash"></i> Удалить</a></li>
								</ul>
							</div>
						</td>
						<td>
							<a href="{$aTemplate.host}admin/users/edit/{$item->getId()}/">{$item->getLogin()}</a>
						</td>
						<td>{$item->getGroup()->getName()}</td>
						<td>{$item->getName()}</td>

						<td>
							<a href="#" class="activation" data-component="users" data-action="{if $item->getActive()}de{/if}activate" data-id="{$item->getId()}">
								<span class="badge {if $item->getActive()==1}badge-success{else}badge-important{/if}">
									{if $item->getActive()==1}Да{else}Нет{/if}
								</span>
							</a>
						</td>
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
		<p>Вы действительно хотите удалить этих пользователей?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Нет</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div>
{include file="components/admin/templates/default/footer.tpl"}