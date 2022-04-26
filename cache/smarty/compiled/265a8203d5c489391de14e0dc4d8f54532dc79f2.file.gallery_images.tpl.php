<?php /* Smarty version Smarty-3.1.12, created on 2014-04-16 15:44:39
         compiled from "components/gallery/templates/admin/gallery_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1804698129534e510779a355-68365973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '265a8203d5c489391de14e0dc4d8f54532dc79f2' => 
    array (
      0 => 'components/gallery/templates/admin/gallery_images.tpl',
      1 => 1395030583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804698129534e510779a355-68365973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'oGallery' => 0,
    'sFormTitle' => 0,
    'sFormAction' => 0,
    'aImages' => 0,
    'oImage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_534e51079ad2a1_18320473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534e51079ad2a1_18320473')) {function content_534e51079ad2a1_18320473($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
	var upload_url='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getId();?>
/';
</script>
<div class="row-fluid">
   <div class="span12">
      <!-- BEGIN SAMPLE FORM PORTLET-->   
      <div class="portlet box blue">
         <div class="portlet-title">
            <h4><i class="icon-reorder"></i><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</h4>
            <div class="tools">
				<a href="javascript:;" class="collapse"></a>
				<a href="#portlet-config" data-toggle="modal" class="config"></a>
				<a href="javascript:;" class="reload"></a>
				<a href="javascript:;" class="remove"></a>
			</div>
         </div>
         <div class="portlet-body form">
         	<!-- BEGIN FORM-->
		    <form action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getId();?>
/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getId();?>
">
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
								<h4><i class="icon-picture"></i> <?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getTitle();?>
</h4>
							</div>
							<!-- BEGIN GALLERY MANAGER LISTING-->
							<div class="row-fluid">
								<div id="file_upload"></div>
							</div>
							<div class="row-fluid">
								<ul class="images sortable">
									<?php  $_smarty_tpl->tpl_vars["oImage"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oImage"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oImage"]->key => $_smarty_tpl->tpl_vars["oImage"]->value){
$_smarty_tpl->tpl_vars["oImage"]->_loop = true;
?>
										<li class="item" style="width: 200px;">
											<div class="wrap">
												<a class="fancybox-button image" data-rel="fancybox-button" href="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getUrl();?>
" target="_blank">
													<img src="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getResizedImage(200,200);?>
" alt="" />							
													<span class="desc">
														<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getTitle();?>
<hr>
														<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getDescription();?>

													</span>
												
												</a>
												<div class="details">
												
													<a href="#image-config" data-toggle="modal" class="icon config"><i class="icon-pencil"></i></a>
													<a href="/admin/files/" target="_blank" class="icon"><i class="icon-zoom-in"></i></a>
													<a href="#" class="icon" onclick="return removeImage('<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
removeimage/<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getId();?>
/', this);">
														<i class="icon-remove"></i>
													</a>		
												</div>
											</div>
											
											<input type="hidden" class="config title" 		name="file[<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getID();?>
][title]"		 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oImage']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
" data-target="title">
											<input type="hidden" class="config description" name="file[<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getID();?>
][description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oImage']->value->getDescription(), ENT_QUOTES, 'UTF-8', true);?>
" data-target="description">
											
											<input name="file[<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getID();?>
][sort]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getSort();?>
" class="sort">
										</li>
									<?php }
if (!$_smarty_tpl->tpl_vars["oImage"]->_loop) {
?>
										<li class="span12">
											<p>Фотографии еще не загружены</p>
										</li>
									<?php } ?>
								</ul>

								
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
		                  <button type="button" class="btn" onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
#portlet_tab2';">Отмена</button>
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
		<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок",'value'=>'','name'=>"title"), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Описание",'value'=>'','name'=>"description"), 0);?>

	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>