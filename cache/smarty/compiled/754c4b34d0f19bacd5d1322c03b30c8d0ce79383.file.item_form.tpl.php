<?php /* Smarty version Smarty-3.1.12, created on 2014-02-28 12:03:45
         compiled from "components/admin/templates/default/menu/item_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2125278637531026c127be18-54529084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '754c4b34d0f19bacd5d1322c03b30c8d0ce79383' => 
    array (
      0 => 'components/admin/templates/default/menu/item_form.tpl',
      1 => 1377679052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125278637531026c127be18-54529084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'oItem' => 0,
    'iMenuId' => 0,
    'sErrorMsg' => 0,
    'aNodes' => 0,
    'foo' => 0,
    'aItems' => 0,
    'sAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_531026c13ff312_88934210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531026c13ff312_88934210')) {function content_531026c13ff312_88934210($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
admin/menu/<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
">
		       <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="menu" value="<?php echo $_smarty_tpl->tpl_vars['iMenuId']->value;?>
">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <!--<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>-->
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
					  <?php if ($_smarty_tpl->tpl_vars['sErrorMsg']->value){?>
						<div class="alert alert-error">
						  <button class="close" data-dismiss="alert"></button>
						  <strong>Ошибка!</strong>
						  <?php echo $_smarty_tpl->tpl_vars['sErrorMsg']->value;?>

					    </div>
					  <?php }?>
	               	  <!-- BEGIN PORTLET TAB1-->
	                  <div class="tab-pane active" id="portlet_tab1">
			               <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок",'name'=>"title",'value'=>$_smarty_tpl->tpl_vars['oItem']->value->getTitle(),'popover'=>true,'hint'=>"Заголовок пункта меню. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>

						   
							<div class="control-group">
							  <label class="control-label">Раздел</label>
							  <div class="controls">
							     <select name="node" class="span6 m-wrap chosen" data-placeholder="Выберите раздел" tabindex="1">
							        <option value="0">&nbsp;</option>
							        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aNodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
										<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/nodes/nodes_form_node_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>0,'val'=>$_smarty_tpl->tpl_vars['oItem']->value->getNode()), 0);?>

									<?php } ?>
							     </select>
							  </div>
							</div>
						   
						   
						   <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"URL",'name'=>"url",'value'=>$_smarty_tpl->tpl_vars['oItem']->value->getUrl(),'popover'=>true,'hint'=>"Укажите внешнюю ссылку (это значение приоритетнее, чем Раздел)"), 0);?>


						   <div class="control-group">
							  <label class="control-label">Родительский пункт</label>
							  <div class="controls">
							     <select name="parent" class="span6 m-wrap chosen" data-placeholder="Выберите родительский пункт" tabindex="1">
							        <option value="0">&nbsp;</option>
							        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
										<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/menu/item_list_option.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>0,'sel'=>$_smarty_tpl->tpl_vars['oItem']->value->getParent(),'cur'=>$_smarty_tpl->tpl_vars['oItem']->value->getId()), 0);?>

									<?php } ?>
							     </select>
							  </div>
							</div>

							<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Изображение",'name'=>"image",'image'=>$_smarty_tpl->tpl_vars['oItem']->value->getImg(),'remove'=>((string)$_smarty_tpl->tpl_vars['aTemplate']->value['node_url'])."menu/removeimage/".((string)$_smarty_tpl->tpl_vars['oItem']->value->getId())."/"), 0);?>


						   <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oItem']->value->getActive()), 0);?>

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
/items/<?php echo $_smarty_tpl->tpl_vars['iMenuId']->value;?>
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