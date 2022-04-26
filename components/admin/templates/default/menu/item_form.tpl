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
		    <form action="{$aTemplate.host}admin/menu/{$sFormAction}/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="{$oItem->getId()}">
		       <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="menu" value="{$iMenuId}">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <!--<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>-->
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
					  {if $sErrorMsg}
						<div class="alert alert-error">
						  <button class="close" data-dismiss="alert"></button>
						  <strong>Ошибка!</strong>
						  {$sErrorMsg}
					    </div>
					  {/if}
	               	  <!-- BEGIN PORTLET TAB1-->
	                  <div class="tab-pane active" id="portlet_tab1">
			               {include file="components/admin/templates/default/form/text.tpl" title="Заголовок" name="title" value=$oItem->getTitle() popover=true hint="Заголовок пункта меню. Используются любые символы и буквы." validate=true validate_rule="^.+$"}
						   
							<div class="control-group">
							  <label class="control-label">Раздел</label>
							  <div class="controls">
							     <select name="node" class="span6 m-wrap chosen" data-placeholder="Выберите раздел" tabindex="1">
							        <option value="0">&nbsp;</option>
							        {foreach from=$aNodes item=foo}
										{include file="components/admin/templates/default/nodes/nodes_form_node_item.tpl" item=$foo level=0 val=$oItem->getNode()}
									{/foreach}
							     </select>
							  </div>
							</div>
						   
						   
						   {include file="components/admin/templates/default/form/text.tpl" title="URL" name="url" value=$oItem->getUrl() popover=true hint="Укажите внешнюю ссылку (это значение приоритетнее, чем Раздел)"}

						   <div class="control-group">
							  <label class="control-label">Родительский пункт</label>
							  <div class="controls">
							     <select name="parent" class="span6 m-wrap chosen" data-placeholder="Выберите родительский пункт" tabindex="1">
							        <option value="0">&nbsp;</option>
							        {foreach from=$aItems item=foo}
										{include file="components/admin/templates/default/menu/item_list_option.tpl" item=$foo level=0 sel=$oItem->getParent() cur=$oItem->getId()}
									{/foreach}
							     </select>
							  </div>
							</div>

							{include file="components/admin/templates/default/form/image.tpl" title="Изображение" name="image" image=$oItem->getImg() remove="{$aTemplate.node_url}menu/removeimage/{$oItem->getId()}/" }

						   {include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="active" value=$oItem->getActive()}
			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
	                  	 
	                  </div>	
	                  <!-- END PORTLET TAB2-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <a class="btn" href="{$aTemplate.host}admin/{$sAction}/items/{$iMenuId}/">Отмена</a>
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