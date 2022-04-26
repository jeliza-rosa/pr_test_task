{include file="components/admin/templates/default/header.tpl"}
<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-cogs"></i>{$sFormTitle}</h4>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<form action="{$aTemplate.node_url}loadfile/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{$aRequest.id}">
		<div class="tabbable tabbable-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Текст на странице</a></li>
				<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cog"></i> Дополнительно</a></li>
			</ul>
			<!-- BEGIN TAB CONTENT-->
			<div class="tab-content">
				<!-- BEGIN PORTLET TAB1-->
				<div class="tab-pane active" id="portlet_tab1">
					<input type="file" name="file">
				</div>
				<!-- END PORTLET TAB1-->
				<!-- BEGIN PORTLET TAB1-->
				<div class="tab-pane" id="portlet_tab2">
					<div id="params-portlet" data-node="{$oContentNode->getId()}" data-component="{$oContentNode->getComponent()}">Загрузка параметров...</div>
				</div>
				<button type="submit" class="btn blue"><i class="icon-ok"></i> Загрузить данные</button>
			</div>
			<!-- END TAB CONTENT-->
		</div>
	</form>
	<form action="{$aTemplate.node_url}" class="form-horizontal validate" method="get">
		<div class="tabbable tabbable-custom">
			<p>Сортировка</p>
			<div class="tab-content">
				<button type="submit" name="sort" value="asc" class="btn blue">По возрастанию</button>
				<button type="submit" name="sort" value="desc" class="btn blue">По убыванию</button>
			</div>
		</div>
	</form>
	<div class="portlet-body">
		{include file="components/csv/templates/admin/csv_list_portlet.tpl"}
	</div>
</div>
{include file="components/admin/templates/default/footer.tpl"}