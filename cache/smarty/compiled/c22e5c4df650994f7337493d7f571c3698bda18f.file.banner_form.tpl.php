<?php /* Smarty version Smarty-3.1.12, created on 2014-01-17 18:55:31
         compiled from "components/admin/templates/default/banners/banner_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4545770565282ff4f424eb1-60629119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c22e5c4df650994f7337493d7f571c3698bda18f' => 
    array (
      0 => 'components/admin/templates/default/banners/banner_form.tpl',
      1 => 1384508491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4545770565282ff4f424eb1-60629119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5282ff4f55f4a8_77190743',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sAction' => 0,
    'sFormAction' => 0,
    'oBanner' => 0,
    'aGroups' => 0,
    'oGroup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282ff4f55f4a8_77190743')) {function content_5282ff4f55f4a8_77190743($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
		    <form action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getId();?>
">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <!--<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>-->
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	  <!-- BEGIN PORTLET TAB1-->
	                  <div class="tab-pane active" id="portlet_tab1">
			               <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок",'name'=>"title",'value'=>$_smarty_tpl->tpl_vars['oBanner']->value->getTitle(),'popover'=>true,'hint'=>"Заголовок баннера. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>

							
							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Описание",'name'=>"desc",'value'=>$_smarty_tpl->tpl_vars['oBanner']->value->getDesc()), 0);?>


							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"URL",'name'=>"url",'value'=>$_smarty_tpl->tpl_vars['oBanner']->value->getUrl(),'popover'=>true,'hint'=>"Ссылка для баннера."), 0);?>


							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Приоритет",'name'=>"priority",'value'=>$_smarty_tpl->tpl_vars['oBanner']->value->getPriority(),'popover'=>true,'hint'=>"Приоритет показа."), 0);?>


							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Изображение",'name'=>"image",'image'=>$_smarty_tpl->tpl_vars['oBanner']->value->getImg(),'remove'=>((string)$_smarty_tpl->tpl_vars['aTemplate']->value['node_url']).((string)$_smarty_tpl->tpl_vars['sAction']->value)."/removeimage/".((string)$_smarty_tpl->tpl_vars['oBanner']->value->getId())."/"), 0);?>


							<div class="control-group">
							  <label class="control-label">Группа</label>
							  <div class="controls">
							     <select name="group" class="span6 m-wrap chosen" data-placeholder="Выберите группу" tabindex="1">
							        <option value="0">&nbsp;</option>
							        <?php  $_smarty_tpl->tpl_vars['oGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oGroup']->key => $_smarty_tpl->tpl_vars['oGroup']->value){
$_smarty_tpl->tpl_vars['oGroup']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['oGroup']->value->getId()==$_smarty_tpl->tpl_vars['oBanner']->value->getGroup()){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getTitle();?>
</option>
									<?php } ?>
							     </select>
							  </div>
							</div>

							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oBanner']->value->getActive()), 0);?>

			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
	                  	 
	                  </div>	
	                  <!-- END PORTLET TAB2-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/list/<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getGroup();?>
/">Отмена</a>
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