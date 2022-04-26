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
		       <input type="hidden" name="id" value="{$aRequest.id}">
		       <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="sub" value="1">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <!-- <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительные</a></li> -->
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	 	 <!-- BEGIN PORTLET TAB1-->
	                     <div class="tab-pane active" id="portlet_tab1">
			               <div class="control-group">
			                  <label class="control-label">Автор вопроса</label>
			                  <div class="controls">
			                     <input name="author" value="{$aRequest.author}" type="text" class="span6 m-wrap popovers validate" data-trigger="hover" data-original-title="Автор вопроса" data-content="Автор вопроса {$aLang.items_genitive}. Используются любые символы и буквы." data-validate-rule="^.+$" data-validate-content="Пожалуйста, заполните поле.">
			                  </div>
			               </div>
			               <div class="control-group">
			                  <label class="control-label">E-mail автора</label>
			                  <div class="controls">
			                     <input name="phone" value="{$aRequest.phone}" type="text" class="span6 m-wrap popovers" disabled>
			                  </div>
			               </div>
			               <div class="control-group">
			                  <label class="control-label">Дата и время</label>
			                  <div class="controls">
			                     <input name="datecreate" value="{$aRequest.datecreate}" type="date" class="span-auto m-wrap">
			                     <input name="timecreate" value="{$aRequest.timecreate}" type="time" class="span-auto m-wrap">
			                  </div>
			               </div>
			               <div class="control-group">
			                  <label class="control-label">Вопрос</label>
			                  <div class="controls">
				                  <textarea class="span6 m-wrap popovers" name="question" rows="4">{$aRequest.question}</textarea>
			                  </div>
	                  	  </div>
	                  	  <div class="control-group">
			                  <label class="control-label">Ответ</label>
			                  <div class="controls">
				                  <textarea class="span12 popovers m-wrap" name="answer" rows="6">{$aRequest.answer}</textarea>
			                  </div>
	                  	  </div>
			               <!-- <div class="control-group">
			                  <label class="control-label">Автор ответа</label>
			                  <div class="controls">
			                  	<select name="answerauthor">
			                  		{foreach from=$aAuthors item="oAuthor" name="foo"}
			                  			<option value="{$oAuthor->getId()}"{if ($oAuthor->getId()==$aRequest.answerauthor)} selected{/if}>{$oAuthor->getTitle()}</option>
			                  		{/foreach}
			                  	</select>
			                  
			                  </div>
			               </div> -->
			               <div class="control-group">
			                  <label class="control-label">Дата и время ответа</label>
			                  <div class="controls">
			                     <input name="dateanswer" value="{$aRequest.dateanswer}" type="date" class="span-auto m-wrap">
			                     <input name="timeanswer" value="{$aRequest.timeanswer}" type="time" class="span-auto m-wrap">
			                  </div>
			               </div>
			              <div class="control-group">
			                  <label class="control-label">Показывать</label>
			                  <div class="controls">
			                     <div class="basic-toggle-button">
			                        <input name="active" type="checkbox" class="toggle"{if $aRequest.active} checked="checked"{/if} value="1" />
			                     </div>
			                  </div>
			               </div>
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