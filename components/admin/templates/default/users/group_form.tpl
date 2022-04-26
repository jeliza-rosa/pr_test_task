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
		       <input type="hidden" name="id" value="{$oGroup->getId()}">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	         	   	  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>
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
						{include file="components/admin/templates/default/form/text.tpl" title="Имя группы" name="name" value=$oGroup->getName() popover=true hint="Имя группы. Используются любые символы и буквы." validate=true validate_rule="^.+$"}

						{include file="components/admin/templates/default/form/textarea.tpl" title="Описание" name="desc" value=$oGroup->getDesc() }

						{foreach from=$aAccesses item=sAccess key=sType}
							<div class="control-group">
								<label class="control-label">{$sAccess}</label>
								<div class="controls">
									<select name="accesses[{$sType}]" class="span6 m-wrap chosen" data-placeholder="{$sType}" tabindex="1">
										{foreach from=$aValues item=desc key=value}
											<option value="{$value}"{if $oGroup->getAccess( $sType )==$value} selected="selected"{/if}>{$desc}</option>
										{/foreach}
									</select>
								</div>
							</div>
						{/foreach}
					
			          </div>
			          <!-- END PORTLET TAB1-->
					  <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
							{assign var="aAccesses" value=$oGroup->getAccesses("nodes")}

							{section name=key loop=(count($aAccesses)+1)}
								{if $aAccesses[key]}
									{assign var="oAccess" value=$aAccesses[key]}
								{else}
									{assign var="oAccess" value=Engine::GetEntity('User', null, 'Access')}
								{/if}
								<div class="control-group">
									<label class="control-label">Доступ к разделу</label>
									<div class="controls">
										<select name="node[]" class="m-wrap chosen nodes" data-placeholder="Выберите раздел" tabindex="1" style="width: 450px;">
											<option value="0">&nbsp;</option>
											{foreach from=$aNodes item=foo}
												{include file="components/admin/templates/default/nodes/nodes_form_node_item.tpl" item=$foo level=0 val=$oAccess->getNode()}
											{/foreach}
										</select>
										<select name="value[]" class="m-wrap chosen access" data-placeholder="Уровень доступа" tabindex="1" style="width: 250px;">
											{foreach from=$aValues item=desc key=value}
												<option value="{$value}"{if $oGroup->getAccess( $oAccess->getType() )==$value} selected="selected"{/if}>{$desc}</option>
											{/foreach}
										</select>
									</div>
								</div>
	                  		{/section}

	                  </div>
	                  <!-- END PORTLET TAB2-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <button type="button" class="btn" onclick="document.location='{$aTemplate.host}admin/{$sAction}/groups/';">Отмена</button>
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