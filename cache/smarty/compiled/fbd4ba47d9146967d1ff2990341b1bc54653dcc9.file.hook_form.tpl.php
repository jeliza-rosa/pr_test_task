<?php /* Smarty version Smarty-3.1.12, created on 2014-04-15 19:51:23
         compiled from "components/admin/templates/default/hooks/hook_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23371397952845bf4b66238-71926857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbd4ba47d9146967d1ff2990341b1bc54653dcc9' => 
    array (
      0 => 'components/admin/templates/default/hooks/hook_form.tpl',
      1 => 1395665782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23371397952845bf4b66238-71926857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52845bf51325a7_50591277',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sAction' => 0,
    'sFormAction' => 0,
    'oHook' => 0,
    'aHooksAvailable' => 0,
    'aHook' => 0,
    'aGroups' => 0,
    'oGroup' => 0,
    'title' => 0,
    'aNodesChosen' => 0,
    'aNodes' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52845bf51325a7_50591277')) {function content_52845bf51325a7_50591277($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
		       <input type="hidden" name="id" id="hook" value="<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
">
		       <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getSort();?>
">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Параметры</a></li>
	                  <li><a href="#portlet_tab3" data-toggle="tab"><i class="icon-cogs"></i> Разделы</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	  <!-- BEGIN PORTLET TAB1-->
	                  <div class="tab-pane active" id="portlet_tab1">

			            	<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок",'name'=>"title",'value'=>$_smarty_tpl->tpl_vars['oHook']->value->getTitle(),'popover'=>true,'hint'=>"Заголовок hook. Используются любые символы и буквы."), 0);?>

							
							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Описание",'name'=>"desc",'value'=>$_smarty_tpl->tpl_vars['oHook']->value->getDesc()), 0);?>


							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Тип Hook",'name'=>"type",'placeholder'=>"Выберите тип",'id'=>"type"), 0);?>

								<?php  $_smarty_tpl->tpl_vars['aHook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aHook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aHooksAvailable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aHook']->key => $_smarty_tpl->tpl_vars['aHook']->value){
$_smarty_tpl->tpl_vars['aHook']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['aHook']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['aHook']->value['name']==$_smarty_tpl->tpl_vars['oHook']->value->getType()){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['aHook']->value['title'];?>
</option>
								<?php } ?>
							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Группа",'name'=>"group",'placeholder'=>"Выберите группу хуков"), 0);?>

								<?php  $_smarty_tpl->tpl_vars['oGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oGroup']->key => $_smarty_tpl->tpl_vars['oGroup']->value){
$_smarty_tpl->tpl_vars['oGroup']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['oHook']->value->getGroup()==$_smarty_tpl->tpl_vars['oGroup']->value->getId()){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getName();?>
 (<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getDesc();?>
)</option>
								<?php } ?>
							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oHook']->value->getActive()), 0);?>


			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
						
					  </div>	
	                  <!-- END PORTLET TAB2-->
	                  <!-- BEGIN PORTLET TAB3-->

	                  <div class="tab-pane" id="portlet_tab3">
	                  	

	                  	<div class="control-group nodeAll">
						  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
						  <div class="controls">
						     <div class="custom-toggle-button" data-enabled="Все" data-disabled="Выбрать">
						        <input name="nodes[]" type="checkbox" class="toggle" <?php if ($_smarty_tpl->tpl_vars['aNodesChosen']->value[0]=="all"||empty($_smarty_tpl->tpl_vars['aNodesChosen']->value)){?> checked="checked"<?php }?> value="all" />
						     </div>
						  </div>
						</div>

						<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Разделы",'name'=>"nodes[]",'placeholder'=>"Выберите разделы",'multiple'=>1,'class'=>"node-select nodeAllList",'disabled'=>($_smarty_tpl->tpl_vars['aNodesChosen']->value[0]=="all"||empty($_smarty_tpl->tpl_vars['aNodesChosen']->value))), 0);?>

							<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aNodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/hooks/hook_form_node_item_multiple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>0,'aNodesChosen'=>$_smarty_tpl->tpl_vars['aNodesChosen']->value), 0);?>

							<?php } ?>
						<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



	                  </div>	
	                  <!-- END PORTLET TAB3-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
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