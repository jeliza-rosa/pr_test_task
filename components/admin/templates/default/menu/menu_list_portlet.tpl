<p>	
	<a href="{$aTemplate.host}admin/menu/add/" class="btn green"><i class="icon-plus"></i> Добавить меню</a>
	<a href="#" class="btn" data-set="/admin/menu/deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table id="table1" class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название меню</th>
			<th width="150"><i class="icon-cogs"></i>Псевдоним</th>
			<th width="100"><i class="icon-eye-open"></i> Показывать</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$aMenu item=oMenu}
			<tr>
				<td>{$oMenu->getId()}</td>
				<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$oMenu->getId()}"></td>
				<td>
					<div class="btn-group no-margin">
						<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
						<i class="icon-reorder"></i>
						</a>
						<ul class="dropdown-menu nodes-dropdown">
							<li><a href="{$aTemplate.host}admin/menu/edit/{$oMenu->getId()}/"><i class="icon-pencil"></i> Редактировать</a></li>
							<li><a href="{$aTemplate.host}admin/menu/additem/{$oMenu->getId()}/"><i class="icon-plus"></i> Добавить раздел меню</a></li>
							<li class="divider"></li>
							<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteMenu({$oMenu->getId()});"><i class="icon-trash"></i> Удалить</a></li>
						</ul>
					</div>
				</td>
				<td>
					<a href="{$aTemplate.host}admin/menu/items/{$oMenu->getId()}/">{$oMenu->getTitle()}</a>
				</td>
				<td><span class="label label-info">{$oMenu->getName()}</span></td>
				<td>
					<a href="#" class="activation" data-component="menu" data-action="{if $oMenu->getActive()}de{/if}activate" data-id="{$oMenu->getId()}">
						<span class="badge {if $oMenu->getActive()}badge-success{else}badge-important{/if}">
							{if $oMenu->getActive()}Да{else}Нет{/if}
						</span>
					</a>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>