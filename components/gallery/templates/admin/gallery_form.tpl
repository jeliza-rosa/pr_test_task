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
		    <form action="{$aTemplate.node_url}{$sFormAction}/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="{$oGallery->getId()}">
		       <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="parent" value="{$oGallery->getParent()}">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	   <!-- BEGIN PORTLET TAB1-->
	                   <div class="tab-pane active" id="portlet_tab1">
			               {include file="components/admin/templates/default/form/text.tpl" title="Заголовок" name="title" value=$oGallery->getTitle() popover=true hint="Заголовок поля. Используются любые символы и буквы." validate=true validate_rule="^.+$"}
	                       
	                       <div class="control-group">
			                  <label class="control-label">Дата и время</label>
			                  <div class="controls">
			                     <input name="date" value="{$oGallery->getDate()}" type="date" class="span-auto m-wrap">
			                     <input name="time" value="{$oGallery->getTime()}" type="time" class="span-auto m-wrap">
			                  </div>
			               </div>
			               
	                       {include file="components/admin/templates/default/form/textarea.tpl" title="Описание" name="description" value=$oGallery->getDescription() popover=true hint="Описание фотогалереи"}
			               
			               {include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="active" value=$oGallery->getActive()}
			               
			               {include file="components/admin/templates/default/form/image.tpl" title="Изображение" name="image" image=$oGallery->getImage() remove="{$aTemplate.node_url}removegalleryimage/{$oGallery->getId()}/" }
	                       
			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">

	                  </div>	
	                  <!-- END PORTLET TAB2-->
			          <!-- BEGIN PORTLET TAB3-->
	                  <div class="tab-pane" id="portlet_tab3">
	                  	
	                  </div>	
	                  <!-- END PORTLET TAB3-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <button type="button" class="btn" onclick="document.location='{$aTemplate.node_url}#portlet_tab2';">Отмена</button>
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