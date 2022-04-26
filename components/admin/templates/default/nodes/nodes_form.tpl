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
		    <form action="{$aTemplate.host}admin/nodes/{$sFormAction}/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" id="node" name="id" value="{$oNode->getId()}">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-globe"></i> SEO</a></li>
	                  <li><a href="#portlet_tab3" data-toggle="tab"><i class="icon-cogs"></i> Параметры компонента</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	 	 <!-- BEGIN PORTLET TAB1-->
	                     <div class="tab-pane active" id="portlet_tab1">
	                       {if $oNode->getId()!=1}
			               <div class="control-group">
			                  <label class="control-label">Родительский раздел</label>
			                  <div class="controls">
			                     <select name="parent" class="span6 m-wrap chosen" data-placeholder="Выберите раздел" tabindex="1">
			                        {foreach from=$aNodes item=foo}
										{include file="components/admin/templates/default/nodes/nodes_form_node_item.tpl" item=$foo level=0 val=$oNode->getParent()}
									{/foreach}
			                     </select>
			                  </div>
			               </div>
			               {else}
			               <input type="hidden" name="parent" value="0">
			               {/if}
			               {include file="components/admin/templates/default/form/text.tpl" title="Заголовок" name="title" value=$oNode->getTitle() popover=true hint="Заголовок раздела. Используются любые символы и буквы." validate=true validate_rule="^.+$" translate="url"}
						   
						   {include file="components/admin/templates/default/form/text.tpl" title="URL" name="url" value=$oNode->getUrl() popover=true hint="Псевдоним раздела. Используются в адресной строке для доступа к разделу. Допускаются только латинские буквы (a-z), нижнее подчеркивание (_), тире (-) и цифры (0-9)" validate=true validate_rule="^[\w\-]+$"}
						   
			               <div class="control-group">
			                  <label class="control-label">Компонент</label>
			                  <div class="controls">
			                     <select id="component" name="component" class="span6 m-wrap chosen" data-placeholder="Выберите компонент" tabindex="1" {*onchange="loadParams(this.value);"*}>
			                        {foreach from=$aComponents item=foo}
			                        	{if $foo->getName()!="admin"}
										<option value="{$foo->getId()}"{if $oNode->getComponent()==$foo->getId()} selected="selected"{/if}>{$foo->getTitle()}</option>
										{/if}
									{/foreach}
			                     </select>
			                  </div>
			               </div>
			               
			               {include file="components/admin/templates/default/form/text.tpl" title="Сортировка" name="sort" value=$oNode->getSort() popover=true hint="Число, по которому сортируется порядок элементов. Чем меньше число, тем выше элемент в списке."}
						   
						   {include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="active" value=$oNode->getActive()}
						   
						   {include file="components/admin/templates/default/form/textarea.tpl" title="Описание раздела" name="description" value=$oNode->getDescription()}
						   

						   {include file="components/admin/templates/default/form/image.tpl" title="Изображение" name="image" image=$oNode->getImage() remove="{$aTemplate.node_url}nodes/removeimage/{$oNode->getId()}/" }

			               {*<div class="control-group">
	                          <label class="control-label">Изображение</label>
	                          <div class="controls">
	                             <div class="fileupload fileupload-new" data-provides="fileupload">
	                                <div class="input-append">
	                                   <div class="uneditable-input">
	                                      <i class="icon-file fileupload-exists"></i> 
	                                      <span class="fileupload-preview"></span>
	                                   </div>
	                                   <span class="btn btn-file">
	                                   <span class="fileupload-new">Выберите файл</span>
	                                   <span class="fileupload-exists">Изменить</span>
	                                   <input name="image" type="file" class="default" />
	                                   </span>
	                                   <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Удалить</a>
	                                </div>
	                             </div>
	                          </div>
	                       </div>
	                       *}
			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
	                  	 {include file="components/admin/templates/default/form/textarea.tpl" title="Заголовок страницы" name="seo_title" value=$oNode->getSeoTitle() popover=true hint="Задает независимый заголовок страницы"}
	                  	 {include file="components/admin/templates/default/form/textarea.tpl" title="Описание" name="seo_description" value=$oNode->getSeoDescription() popover=true hint="Описание страницы (description). Наследуются в иерархическом порядке."}
	                  	 {include file="components/admin/templates/default/form/textarea.tpl" title="Ключевые слова" name="seo_keywords" value=$oNode->getSeoKeywords() popover=true hint="Ключевые слова страницы (keywords). Наследуются в иерархическом порядке."}
	                  </div>	
	                  <!-- END PORTLET TAB2-->
			          <!-- BEGIN PORTLET TAB3-->
	                  <div class="tab-pane" id="portlet_tab3">
	                  	<div id="params-portlet">Загрузка параметров...</div>
	                  </div>
	                  <!-- END PORTLET TAB3-->
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
         </div>
      </div>
      <!-- END SAMPLE FORM PORTLET-->
   </div>
</div>

{include file="components/admin/templates/default/footer.tpl"}