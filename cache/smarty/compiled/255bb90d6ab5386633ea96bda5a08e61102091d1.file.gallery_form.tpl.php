<?php /* Smarty version Smarty-3.1.12, created on 2014-05-07 09:59:54
         compiled from "components/gallery/templates/admin/gallery_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:471736965530b278a833415-49702791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '255bb90d6ab5386633ea96bda5a08e61102091d1' => 
    array (
      0 => 'components/gallery/templates/admin/gallery_form.tpl',
      1 => 1399434999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '471736965530b278a833415-49702791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530b278acc2b10_53616987',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'oGallery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b278acc2b10_53616987')) {function content_530b278acc2b10_53616987($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getId();?>
">
		       <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getParent();?>
">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	   <!-- BEGIN PORTLET TAB1-->
	                   <div class="tab-pane active" id="portlet_tab1">
			               <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок",'name'=>"title",'value'=>$_smarty_tpl->tpl_vars['oGallery']->value->getTitle(),'popover'=>true,'hint'=>"Заголовок поля. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>

	                       
	                       <div class="control-group">
			                  <label class="control-label">Дата и время</label>
			                  <div class="controls">
			                     <input name="date" value="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getDate();?>
" type="date" class="span-auto m-wrap">
			                     <input name="time" value="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getTime();?>
" type="time" class="span-auto m-wrap">
			                  </div>
			               </div>
			               
	                       <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Описание",'name'=>"description",'value'=>$_smarty_tpl->tpl_vars['oGallery']->value->getDescription(),'popover'=>true,'hint'=>"Описание фотогалереи"), 0);?>

			               
			               <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oGallery']->value->getActive()), 0);?>

			               
			               <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Изображение",'name'=>"image",'image'=>$_smarty_tpl->tpl_vars['oGallery']->value->getImage(),'remove'=>((string)$_smarty_tpl->tpl_vars['aTemplate']->value['node_url'])."removegalleryimage/".((string)$_smarty_tpl->tpl_vars['oGallery']->value->getId())."/"), 0);?>

	                       
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
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>