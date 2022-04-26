<div class="portlet-body">
	<p>	
		<a href="{$aTemplate.host}admin/{$sAction}/add/" class="btn green"><i class="icon-plus"></i> Добавить хук</a>
		<a href="#" class="btn" data-set="/admin/{$sAction}/deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
		<a href="{$aTemplate.host}admin/{$sAction}/groups/" class="btn"><i class="icon-th-list"></i> Группы хуков</a>
	</p>
	<table id="table1" class="table table-striped table-bordered table-advance table-hover">
		<thead>
			<tr>
				<th width="10">ID</th>
				<th width="10">
					<input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes">
				</th>
				<th width="10"><i class="icon-reorder"></i></th>
				<th><i class="icon-bookmark"></i> Заголовок хука</th>
				<th><i class="icon-globe"></i> Описание</th>
				<th><i class="icon-tag"></i> Тип</th>
				<th><i class="icon-pushpin"></i> Группа</th>				
				<th width="100"><i class="icon-eye-open"></i> Показывать</th>
				<th width="100"><i class="icon-eye-open"></i> Сортировка</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$aHooks item=oHook name=sort}
				<tr>
					<td>{$oHook->getId()}</td>
					<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$oHook->getId()}"></td>
					<td>
						<div class="btn-group no-margin">
							<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
							<i class="icon-reorder"></i>
							</a>
							<ul class="dropdown-menu nodes-dropdown">
								<li><a href="{$aTemplate.host}admin/{$sAction}/edit/{$oHook->getId()}/"><i class="icon-pencil"></i> Редактировать</a></li>
								<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteHook({$oHook->getId()});"><i class="icon-trash"></i> Удалить</a></li>
							</ul>
						</div>
					</td>
					<td>
						<a href="{$aTemplate.host}admin/{$sAction}/edit/{$oHook->getId()}/">
							{$oHook->getTitle()}
						</a>
					</td>
					<td>{$oHook->getDesc()}</td>
					<td>{$oHook->getName()}{if $oHook->getComponent()} (Из компонента {$oHook->getComponent()}) {/if}</td>
					<td>{$oHook->getGroupObject()->getName()} ({$oHook->getGroupObject()->getDesc()})</td>
					<td>
						<a href="#" class="activation" data-component="{$sAction}" data-action="{if $oHook->getActive()}de{/if}activate" data-id="{$oHook->getId()}">
							<span class="badge {if $oHook->getActive()==1}badge-success{else}badge-important{/if}">
								{if $oHook->getActive()==1}Да{else}Нет{/if}
							</span>
						</a>
					</td>
					<td>
						{if !$smarty.foreach.sort.last}<a href="#" onclick="return ajaxSortDownHook(this, {$oHook->getId()});"><i class="icon-chevron-down"></i></a> {/if}
						{if !$smarty.foreach.sort.first}<a href="#" onclick="return ajaxSortUpHook(this, {$oHook->getId()});"><i class="icon-chevron-up"></i></a>{/if}
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
</div>