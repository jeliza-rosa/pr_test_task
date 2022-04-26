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
		    <form action="{$aTemplate.host}admin/{$sAction}/{$sFormAction}/" class="form-horizontal validate" method="post">
		       <input type="hidden" name="id" value="{$oComponent->getId()}">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
               	 	 <!-- BEGIN PORTLET TAB1-->
                     <div class="tab-pane active" id="portlet_tab1">
						{include file="components/admin/templates/default/form/text.tpl" title="Заголовок" name="title" value=$oComponent->getTitle() popover=true hint="Заголовок компонента." validate=true validate_rule="^.+$"}
		                
		                {include file="components/admin/templates/default/form/text.tpl" title="Название" name="name" value=$oComponent->getName() popover=true hint="Название.  Допускаются только латинские буквы (a-z), нижнее подчеркивание (_) и цифры (0-9)" validate=true validate_rule="^\w+$"}
		               
						{include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="active" value=$oComponent->getActive() }
					   
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
         </div>
      </div>
      <!-- END SAMPLE FORM PORTLET-->
   </div>
</div>
{include file="components/admin/templates/default/footer.tpl"}