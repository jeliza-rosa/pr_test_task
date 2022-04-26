{include file="components/admin/templates/default/header.tpl"}
<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN SAMPLE FORM PORTLET-->   
		<div class="portlet box blue">
			<div class="portlet-title">
				<h4><i class="icon-reorder"></i>{$sFormTitle}</h4>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="#portlet-config" data-toggle="modal" class="config"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body form">
				{if $oDefaultTemplate}
					<div class="alert alert-info">
						<button class="close" data-dismiss="alert"></button>
						<strong>Обратите внимание!</strong> Шаблоном по умолчанию установлен {$oDefaultTemplate->getTitle()} ({$oDefaultTemplate->getName()})<br />{$oDefaultTemplate->getDescription()}
					</div>
				{else}
					<div class="alert alert-error">
						<button class="close" data-dismiss="alert"></button>
						<strong>Внимание!</strong> Шаблон, установленный по умолчанию, отсутствует в файловой структуре.
					</div>
				{/if}
				<!-- BEGIN FORM-->
				<form action="{$aTemplate.host}admin/{$sAction}/{$sFormAction}/" class="form-horizontal validate" method="post">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">
							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								


								<table id="table1" class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th width="10">ID</th>
											
											<th width="150"><i class="icon-bookmark"></i> Шаблон</th>
											<th width="150"><i class="icon-globe"></i> Условие</th>
											<th><i class="icon-cogs"></i> Параметры</th>
											<th width="10">Удалить</th>
											<th width="100"><i class="icon-eye-open"></i> Активно</th>
											<th width="30"><i class="icon-sort"></i></th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$aConditions item=oCondition}
											{include file="components/admin/templates/default/templates/row.tpl" 
												id=$oCondition->getId()
												template=$oCondition->getTemplate()
												type=$oCondition->getType() 
												var=$oCondition->getVar() 
												value=$oCondition->getValue() 
												node=$oCondition->getNode() 
												active=$oCondition->getActive()
												sort=$oCondition->getSort()
											}
										{/foreach}
									</tbody>
								</table>

								<div class="control-group">
									<div class="controls"><a class="btn blue changepass add-button">Добавить условие</a></div>
								</div>
									
							</div>
							<!-- END PORTLET TAB1-->
							<div class="form-actions">
								<button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
								<button type="button" class="btn apply">Применить</button>
								<button type="button" class="btn" onclick="document.location='{$aTemplate.host}admin/{$sAction}/';">Отмена</button>
							</div>
						</div>
						<!-- END TAB CONTENT-->
					</div>   
				</form>
				<!-- END FORM-->       
				<div class="pattern"><table>{include file="components/admin/templates/default/templates/row.tpl" type="get" active=1 sort=500}</table></div>
			</div>
		</div>
		<!-- END SAMPLE FORM PORTLET-->
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