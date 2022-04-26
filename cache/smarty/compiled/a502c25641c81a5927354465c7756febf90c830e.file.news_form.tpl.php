<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 14:52:07
         compiled from "components\news\templates\admin\news_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33906266476d7b28d6-68275544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a502c25641c81a5927354465c7756febf90c830e' => 
    array (
      0 => 'components\\news\\templates\\admin\\news_form.tpl',
      1 => 1650887366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33906266476d7b28d6-68275544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6266476d820e59_60051250',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'action' => 0,
    'oNews' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6266476d820e59_60051250')) {function content_6266476d820e59_60051250($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getId();?>
">
		       <input type="hidden" name="node" value="<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getNode();?>
">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	 	 <!-- BEGIN PORTLET TAB1-->
	                     <div class="tab-pane active" id="portlet_tab1">
							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок",'name'=>"title",'value'=>$_smarty_tpl->tpl_vars['oNews']->value->getTitle(),'popover'=>true,'hint'=>"Заголовок баннера. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>

							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/datetime.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Дата и время",'datename'=>"date",'dateval'=>$_smarty_tpl->tpl_vars['oNews']->value->getDate(),'timename'=>"time",'timeval'=>$_smarty_tpl->tpl_vars['oNews']->value->getTime()), 0);?>

							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Анонс новости",'name'=>"announcement",'value'=>$_smarty_tpl->tpl_vars['oNews']->value->getaAnnouncement(),'popover'=>1,'hint'=>"Краткое описание новости. Одно-два предложения."), 0);?>

							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Текст новости",'name'=>"body",'value'=>$_smarty_tpl->tpl_vars['oNews']->value->getBody()), 0);?>

							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oNews']->value->getActive()), 0);?>

							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Изображение",'name'=>"image",'image'=>$_smarty_tpl->tpl_vars['oNews']->value->getImage(),'remove'=>((string)$_smarty_tpl->tpl_vars['aTemplate']->value['node_url'])."/removeimage/".((string)$_smarty_tpl->tpl_vars['oNews']->value->getId())."/"), 0);?>

			          </div>
			          <!-- END PORTLET TAB1-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <a type="button" class="btn" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
">Отмена</a>
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