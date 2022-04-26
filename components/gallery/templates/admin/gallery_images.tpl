{include file="components/admin/templates/default/header.tpl"}
<script>
	var upload_url='{$aTemplate.node_url}upload/{$oGallery->getId()}/';
</script>
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
		    <form action="{$aTemplate.node_url}{$sFormAction}/{$oGallery->getId()}/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="{$oGallery->getId()}">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	   <!-- BEGIN PORTLET TAB1-->
	                   <div class="tab-pane active" id="portlet_tab1">
			                <div class="row-fluid">
								<h4><i class="icon-picture"></i> {$oGallery->getTitle()}</h4>
							</div>
							<!-- BEGIN GALLERY MANAGER LISTING-->
							<div class="row-fluid">
								<div id="file_upload"></div>
							</div>
							<div class="row-fluid">
								<ul class="images sortable">
									{foreach from=$aImages item="oImage"}
										<li class="item" style="width: 200px;">
											<div class="wrap">
												<a class="fancybox-button image" data-rel="fancybox-button" href="{$oImage->getUrl()}" target="_blank">
													<img src="{$oImage->getResizedImage(200,200)}" alt="" />							
													<span class="desc">
														{$oImage->getTitle()}<hr>
														{$oImage->getDescription()}
													</span>
												
												</a>
												<div class="details">
												
													<a href="#image-config" data-toggle="modal" class="icon config"><i class="icon-pencil"></i></a>
													<a href="/admin/files/" target="_blank" class="icon"><i class="icon-zoom-in"></i></a>
													<a href="#" class="icon" onclick="return removeImage('{$aTemplate.node_url}removeimage/{$oImage->getId()}/', this);">
														<i class="icon-remove"></i>
													</a>		
												</div>
											</div>
											
											<input type="hidden" class="config title" 		name="file[{$oImage->getID()}][title]"		 value="{$oImage->getTitle()|escape:"html"}" data-target="title">
											<input type="hidden" class="config description" name="file[{$oImage->getID()}][description]" value="{$oImage->getDescription()|escape:"html"}" data-target="description">
											{*<input name="file[{$oImage->getID()}][url]" type="hidden" value="{$oImage->getUrl()}">
											<input name="file[{$oImage->getID()}][gallery]" type="hidden" value="{$oImage->getGallery()}">*}
											<input name="file[{$oImage->getID()}][sort]" type="hidden" value="{$oImage->getSort()}" class="sort">
										</li>
									{foreachelse}
										<li class="span12">
											<p>Фотографии еще не загружены</p>
										</li>
									{/foreach}
								</ul>

								{*if $aImages}
									{foreach from=$aImages item="oImage" name="foo"}

										{if preg_match("/\.(jpg|jpeg|gif|png)$/", $oImage->getUrl)}
											<div class="span2">
												<div class="item">
													<a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="{$oImage->getUrl()}" target="_blank">
														<div class="zoom">
															<img src="{$oImage->getUrl()}" alt="{$oImage->getTitle()|escape:"html"}" />							
															<div class="zoom-icon"></div>
														</div>
													</a>
													<div class="details">
														<a href="#" class="icon"><i class="icon-paper-clip"></i></a>
														<a href="#" class="icon"><i class="icon-link"></i></a>
														<a href="#" class="icon"><i class="icon-pencil"></i></a>
														<a href="#" class="icon" onclick="return removeImage('{$aTemplate.node_url}removeimage/{$oImage->getId()}/', this);"><i class="icon-remove"></i></a>		
													</div>
												</div>
											</div>

										{else}
											<table>
												<!-- <tr>
													<th>Название</th>
													<th>Описание</th>
													<th>Удалить</th>
												</tr> -->
												<tr>
													<td>{$oImage->getID()}</td>
													<td><label>Название</label><input name="file[{$oImage->getID()}][title]" type="text" value="{$oImage->getTitle()|escape:"html"}"></td>
													<td><label>Описание</label><input name="file[{$oImage->getID()}][description]" type="text" value="{$oImage->getDescription()|escape:"html"}"></td>
													<td>
														<a href="#" class="icon" onclick="return removeImage('{$aTemplate.node_url}removeimage/{$oImage->getId()}/', this);">
															<i class="icon-remove"></i>
														</a>
														<input name="file[{$oImage->getID()}][url]" type="hidden" value="{$oImage->getUrl()}">
														<input name="file[{$oImage->getID()}][gallery]" type="hidden" value="{$oImage->getGallery()}">
													</td>
												</tr>
											</table>
										{/if}
										{if ($smarty.foreach.foo.index+1)%6==0}</div><div class="row-fluid">{/if}
									{/foreach}
								{else}
								<div class="span12">
									<p>Фотографии еще не загружены</p>
								</div>
								{/if*}
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

<div id="image-config" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		<h3 id="modalDeleteLabel">Информация об изображении</h3>
	</div>
	<div class="modal-body form-horizontal">
		{include file="components/admin/templates/default/form/text.tpl" title="Заголовок" value="" name="title"}
		{include file="components/admin/templates/default/form/text.tpl" title="Описание"  value="" name="description"}
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div>
{include file="components/admin/templates/default/footer.tpl"}