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
		    <form action="{$aTemplate.host}admin/{$sAction}/{$sFormAction}/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" id="hook" value="{$oHook->getId()}">
		       <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="sort" value="{$oHook->getSort()}">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Параметры</a></li>
	                  <li><a href="#portlet_tab3" data-toggle="tab"><i class="icon-cogs"></i> Разделы</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	  <!-- BEGIN PORTLET TAB1-->
	                  <div class="tab-pane active" id="portlet_tab1">

			            	{include file="components/admin/templates/default/form/text.tpl" title="Заголовок" name="title" value=$oHook->getTitle() popover=true hint="Заголовок hook. Используются любые символы и буквы."}
							
							{include file="components/admin/templates/default/form/textarea.tpl" title="Описание" name="desc" value=$oHook->getDesc()}

							{include file="components/admin/templates/default/form/select.start.tpl" title="Тип Hook" name="type" placeholder="Выберите тип" id="type"}
								{foreach from=$aHooksAvailable item=aHook}
									<option value="{$aHook.name}" {if $aHook.name == $oHook->getType()}selected{/if}>{$aHook.title}</option>
								{/foreach}
							{include file="components/admin/templates/default/form/select.end.tpl"}
							{include file="components/admin/templates/default/form/select.start.tpl" title="Группа" name="group" placeholder="Выберите группу хуков"}
								{foreach from=$aGroups item=oGroup}
									<option value="{$oGroup->getId()}" {if $oHook->getGroup() == $oGroup->getId()} selected="selected" {/if}>{$oGroup->getName()} ({$oGroup->getDesc()})</option>
								{/foreach}
							{include file="components/admin/templates/default/form/select.end.tpl"}

							{include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="active" value=$oHook->getActive()}

			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
						
					  </div>	
	                  <!-- END PORTLET TAB2-->
	                  <!-- BEGIN PORTLET TAB3-->

	                  <div class="tab-pane" id="portlet_tab3">
	                  	{*include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="nodes[]" value="all" text="custom" textenabled="Все" textdisabled="Выбрать" class="nodeAll" *}

	                  	<div class="control-group nodeAll">
						  <label class="control-label">{$title}</label>
						  <div class="controls">
						     <div class="custom-toggle-button" data-enabled="Все" data-disabled="Выбрать">
						        <input name="nodes[]" type="checkbox" class="toggle" {if $aNodesChosen[0]=="all" or empty($aNodesChosen)} checked="checked"{/if} value="all" />
						     </div>
						  </div>
						</div>

						{include file="components/admin/templates/default/form/select.start.tpl" title="Разделы" name="nodes[]" placeholder="Выберите разделы" multiple=1 class="node-select nodeAllList" disabled=($aNodesChosen[0]=="all" or empty($aNodesChosen)) }
							{foreach from=$aNodes item=foo}
								{include file="components/admin/templates/default/hooks/hook_form_node_item_multiple.tpl" item=$foo level=0 aNodesChosen=$aNodesChosen}
							{/foreach}
						{include file="components/admin/templates/default/form/select.end.tpl"}


	                  </div>	
	                  <!-- END PORTLET TAB3-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <a class="btn" href="{$aTemplate.host}admin/{$sAction}/">Отмена</a>
		              </div>
		         </div>
		         <!-- END TAB CONTENT-->
		     </div>   
		    </form>
		    <!-- END FORM-->       
         </div>
      </div>
      <!-- END SAMPLE FORM PORTLET-->
   </div>
</div>
{include file="components/admin/templates/default/footer.tpl"}