<!-- BEGIN FORM-->
<form action="" class="form-horizontal validate form" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="{$aRequest.id}">
	<input type="hidden" name="apply" value="0">
	<input type="hidden" name="sub" value="1">
	<div class="tabbable tabbable-custom">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-picture"></i> Альбомы</a></li>
			<li><a href="#portlet_tab3" data-toggle="tab"><i class="icon-cog"></i> Настройки</a></li>
		</ul>
		<!-- BEGIN TAB CONTENT-->
		<div class="tab-content">
			<!-- BEGIN PORTLET TAB1-->
			<div class="tab-pane active" id="portlet_tab1">
				<p>	
					<a href="{$aTemplate.node_url}add/" class="btn green"><i class="icon-plus"></i> Добавить {$aLang.item}</a>
					<a href="#" class="btn" data-set="{$aTemplate.node_url}deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
				</p>
				<!-- BEGIN ROW FLUID-->
				<div class="row-fluid">
					<div class="span12">
						<table class="table table-striped table-bordered table-advance table-hover" id="table1">
							<thead>
								<tr>
									<th width="10">ID</th>
									<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes" /></th>
									<th width="10"><i class="icon-reorder"></i></th>
									<th width="100"><i class="icon-upload"></i> Файлы</th>
									<th><i class="icon-bookmark"></i> Название</th>
									<th width="150"><i class="icon-calendar"></i> Дата</th>
									<th width="100"><i class="icon-eye-open"></i> Показывать</th>
									<th width="100"><i class="icon-sort"></i> Сортировка</th>
								</tr>
							</thead>
							<tbody>
								{foreach from=$aGalleries item=item name=childs}
									<tr>
										<td>{$item->getId()}</td>
										<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="{$item->getId()}"></td>
										<td>
											<div class="btn-group no-margin">
												<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
												<i class="icon-reorder"></i>
												</a>
												<ul class="dropdown-menu nodes-dropdown">
													<li><a href="{$aTemplate.node_url}edit/{$item->getId()}/"><i class="icon-pencil"></i> Редактировать</a></li>
													<li class="divider"></li>
													<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm(null, null, '{$aTemplate.node_url}delete/{$item->getId()}/');"><i class="icon-trash"></i> Удалить</a></li>
												</ul>
											</div>
										</td>
										<td><a href="{$aTemplate.node_url}images/{$item->getId()}/" class="btn blue mini"><i class="icon-upload-alt"></i> Файлы</a></td>
										<td><a href="{$aTemplate.node_url}edit/{$item->getId()}/">{$item->getTitle()}</a></td>
										<td>
											{$item->getDatetime()|date_format}
										</td>
										<td>
											<a href="#" class="activation" data-component="{$aTemplate.node_url}activate" data-action="{if $item->getActive()}de{/if}activate" data-id="{$item->getId()}">
												<span class="badge {if $item->getActive()==1}badge-success{else}badge-important{/if}">
													{if $item->getActive()==1}Да{else}Нет{/if}
												</span>
											</a>
										</td>
										<td>
										   <a href="#" class="sort-button-ajax arrow-down" data-url="{$aTemplate.node_url}sort/{$item->getId()}/down/"><i class="icon-chevron-down"></i></a>
										   <a href="#" class="sort-button-ajax arrow-up"   data-url="{$aTemplate.node_url}sort/{$item->getId()}/up/"><i class="icon-chevron-up"></i></a>
										</td>
									</tr>
								{foreachelse}
									<tr>
										<td colspan="6">Нет данных</td>
									</tr>
								{/foreach}
							</tbody>
						</table>
					</div>
					
				</div>
				<!-- END ROW FLUID-->

			</div>
			<!-- END PORTLET TAB1-->
			<!-- BEGIN PORTLET TAB3-->
			<div class="tab-pane" id="portlet_tab3">
				{$aRequest.mails}
			</div>	
			<!-- END PORTLET TAB3-->
		</div>
		<!-- END TAB CONTENT-->
	</div>   
</form>
<!-- END FORM-->  


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