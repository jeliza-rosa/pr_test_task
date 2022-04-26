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
		    <form action="" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		        <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="sub" value="1">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	 	 <!-- BEGIN PORTLET TAB1-->
	                     <div class="tab-pane active" id="portlet_tab1">
	                     	{foreach from=$aDescribe item="aField" key="key"}
	                     		{if $aField.Key!="PRI"}
		                     		{if $aField.Type=="int" || $aField.Type=="varchar"}
		                     			{include file="components/admin/templates/default/form/text.tpl" title=$aField.Field name=$aField.Field value=$aField.Value}
		                     		{else}
		                     			{include file="components/admin/templates/default/form/textarea.tpl" title=$aField.Field name=$aField.Field value=$aField.Value}
		                     		{/if}
		                     	{else}
		                     		<input type="hidden" name="{$aField.Field}" value="{$aField.Value}">
	                     		{/if}
						    {/foreach}

						 </div>
						 <!-- END PORTLET TAB1-->
			          <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <button type="button" class="btn" onclick="document.location='{$aTemplate.node_url}';">Отмена</button>
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