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
				<!-- BEGIN FORM-->
				<form action="{$aTemplate.node_url}{$action}/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="{$oCsv->getId()}">
					<input type="hidden" name="node" value="{$oCsv->getNode()}">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
						</ul>
{*						<!-- BEGIN TAB CONTENT-->*}
						<div class="tab-content">
{*							<!-- BEGIN PORTLET TAB1-->*}
							<div class="tab-pane active" id="portlet_tab1">
								{include file="components/admin/templates/default/form/text.tpl" title="Группа задачи" name="group" value=$oCsv->getGroup() popover=true}
								{include file="components/admin/templates/default/form/text.tpl" title="Задача" name="task" value=$oCsv->getTask() popover=true}
								{include file="components/admin/templates/default/form/datetime.tpl" title="Дата" datename="date" dateval=$oCsv->getDate()}
								{include file="components/admin/templates/default/form/text.tpl" title="Запланированное время" name="time_plan" value=$oCsv->getTimePlan() popover=true}
								{include file="components/admin/templates/default/form/text.tpl" title="Фактическое время" name="time_fact" value=$oCsv->getTimeFact() popover=true}
								{include file="components/admin/templates/default/form/text.tpl" title="Сумма" name="sum" value=$oCsv->getSum() popover=true}
								{include file="components/admin/templates/default/form/text.tpl" title="Ссылка" name="link" value=$oCsv->getLink() popover=true}
								{include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="active" value=$oCsv->getActive()}
							</div>
{*							<!-- END PORTLET TAB1-->*}
{*							<div class="form-actions">*}
								<button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
								<button type="button" class="btn apply">Применить</button>
								<a type="button" class="btn" href="{$aTemplate.node_url}">Отмена</a>
{*							</div>*}
						</div>
{*						<!-- END TAB CONTENT-->*}
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
		<!-- END SAMPLE FORM PORTLET-->
	</div>
</div>
{include file="components/admin/templates/default/footer.tpl"}