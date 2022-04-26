<p>	
	<a href="{$aTemplate.node_url}add/" class="btn green"><i class="icon-plus"></i> Добавить {$aLang.item}</a>
	<a href="#" class="btn"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table class="table table-striped table-bordered table-advance table-hover" id="table1">
	<thead>
		<tr>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes" /></th>
			<th width="10"><i class="icon-reorder"></i></th>
			{foreach from=$aItems[0]->getInstance() item="item" key="key"}
			<th width="10">{$key}</th>
			{/foreach}
		</tr>
	</thead>
	<tbody>
		{foreach from=$aItems item=item key=key name=childs}
			{assign var="aInstance" value=$item->getInstance()}
			<tr>
				<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$aInstance.$sKey}"></td>
				<td>
					<div class="btn-group no-margin">
						<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
						<i class="icon-reorder"></i>
						</a>
						<ul class="dropdown-menu nodes-dropdown">
							<li><a href="{$aTemplate.node_url}edit/{$aInstance.$sKey}/"><i class="icon-pencil"></i> Редактировать</a></li>
							<li class="divider"></li>
							<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm(null, null, '{$aTemplate.node_url}delete/{$aInstance.$sKey}/');"><i class="icon-trash"></i> Удалить</a></li>
						</ul>
					</div>
				</td>
				{foreach from=$aInstance item="instance" key="key"}
				<td>{$instance|truncate:200}</td>
				{/foreach}
			</tr>
		{/foreach}
	</tbody>
</table>
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