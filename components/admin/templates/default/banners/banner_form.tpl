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
		       <input type="hidden" name="id" value="{$oBanner->getId()}">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <!--<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>-->
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	  <!-- BEGIN PORTLET TAB1-->
	                  <div class="tab-pane active" id="portlet_tab1">
			               {include file="components/admin/templates/default/form/text.tpl" title="Заголовок" name="title" value=$oBanner->getTitle() popover=true hint="Заголовок баннера. Используются любые символы и буквы." validate=true validate_rule="^.+$"}
							
							{include file="components/admin/templates/default/form/editor.tpl" title="Описание" name="desc" value=$oBanner->getDesc()}

							{include file="components/admin/templates/default/form/text.tpl" title="URL" name="url" value=$oBanner->getUrl() popover=true hint="Ссылка для баннера."}

							{include file="components/admin/templates/default/form/text.tpl" title="Приоритет" name="priority" value=$oBanner->getPriority() popover=true hint="Приоритет показа."}

							{include file="components/admin/templates/default/form/image.tpl" title="Изображение" name="image" image=$oBanner->getImg() remove="{$aTemplate.node_url}{$sAction}/removeimage/{$oBanner->getId()}/" }

							<div class="control-group">
							  <label class="control-label">Группа</label>
							  <div class="controls">
							     <select name="group" class="span6 m-wrap chosen" data-placeholder="Выберите группу" tabindex="1">
							        <option value="0">&nbsp;</option>
							        {foreach from=$aGroups item=oGroup}
										<option value="{$oGroup->getId()}" {if $oGroup->getId() == $oBanner->getGroup()}selected{/if}>{$oGroup->getTitle()}</option>
									{/foreach}
							     </select>
							  </div>
							</div>

							{include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="active" value=$oBanner->getActive()}
			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
	                  	 
	                  </div>	
	                  <!-- END PORTLET TAB2-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <a class="btn" href="{$aTemplate.host}admin/{$sAction}/list/{$oBanner->getGroup()}/">Отмена</a>
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