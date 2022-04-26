<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 09:10:49
         compiled from "components\admin\templates\default\nodes\nodes_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211762663b694b0777-51109499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a223495cccd8a1693b31ec3668812ae9982c682' => 
    array (
      0 => 'components\\admin\\templates\\default\\nodes\\nodes_form.tpl',
      1 => 1393502681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211762663b694b0777-51109499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'oNode' => 0,
    'aNodes' => 0,
    'foo' => 0,
    'aComponents' => 0,
    'sAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_62663b69561357_12091797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62663b69561357_12091797')) {function content_62663b69561357_12091797($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
admin/nodes/<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" id="node" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oNode']->value->getId();?>
">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-globe"></i> SEO</a></li>
	                  <li><a href="#portlet_tab3" data-toggle="tab"><i class="icon-cogs"></i> Параметры компонента</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	 	 <!-- BEGIN PORTLET TAB1-->
	                     <div class="tab-pane active" id="portlet_tab1">
	                       <?php if ($_smarty_tpl->tpl_vars['oNode']->value->getId()!=1){?>
			               <div class="control-group">
			                  <label class="control-label">Родительский раздел</label>
			                  <div class="controls">
			                     <select name="parent" class="span6 m-wrap chosen" data-placeholder="Выберите раздел" tabindex="1">
			                        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aNodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
										<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/nodes/nodes_form_node_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>0,'val'=>$_smarty_tpl->tpl_vars['oNode']->value->getParent()), 0);?>

									<?php } ?>
			                     </select>
			                  </div>
			               </div>
			               <?php }else{ ?>
			               <input type="hidden" name="parent" value="0">
			               <?php }?>
			               <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок",'name'=>"title",'value'=>$_smarty_tpl->tpl_vars['oNode']->value->getTitle(),'popover'=>true,'hint'=>"Заголовок раздела. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$",'translate'=>"url"), 0);?>

						   
						   <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"URL",'name'=>"url",'value'=>$_smarty_tpl->tpl_vars['oNode']->value->getUrl(),'popover'=>true,'hint'=>"Псевдоним раздела. Используются в адресной строке для доступа к разделу. Допускаются только латинские буквы (a-z), нижнее подчеркивание (_), тире (-) и цифры (0-9)",'validate'=>true,'validate_rule'=>"^[\w\-]+"."$"), 0);?>

						   
			               <div class="control-group">
			                  <label class="control-label">Компонент</label>
			                  <div class="controls">
			                     <select id="component" name="component" class="span6 m-wrap chosen" data-placeholder="Выберите компонент" tabindex="1" >
			                        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aComponents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
			                        	<?php if ($_smarty_tpl->tpl_vars['foo']->value->getName()!="admin"){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['oNode']->value->getComponent()==$_smarty_tpl->tpl_vars['foo']->value->getId()){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value->getTitle();?>
</option>
										<?php }?>
									<?php } ?>
			                     </select>
			                  </div>
			               </div>
			               
			               <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Сортировка",'name'=>"sort",'value'=>$_smarty_tpl->tpl_vars['oNode']->value->getSort(),'popover'=>true,'hint'=>"Число, по которому сортируется порядок элементов. Чем меньше число, тем выше элемент в списке."), 0);?>

						   
						   <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oNode']->value->getActive()), 0);?>

						   
						   <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Описание раздела",'name'=>"description",'value'=>$_smarty_tpl->tpl_vars['oNode']->value->getDescription()), 0);?>

						   

						   <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Изображение",'name'=>"image",'image'=>$_smarty_tpl->tpl_vars['oNode']->value->getImage(),'remove'=>((string)$_smarty_tpl->tpl_vars['aTemplate']->value['node_url'])."nodes/removeimage/".((string)$_smarty_tpl->tpl_vars['oNode']->value->getId())."/"), 0);?>


			               
			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
	                  	 <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок страницы",'name'=>"seo_title",'value'=>$_smarty_tpl->tpl_vars['oNode']->value->getSeoTitle(),'popover'=>true,'hint'=>"Задает независимый заголовок страницы"), 0);?>

	                  	 <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Описание",'name'=>"seo_description",'value'=>$_smarty_tpl->tpl_vars['oNode']->value->getSeoDescription(),'popover'=>true,'hint'=>"Описание страницы (description). Наследуются в иерархическом порядке."), 0);?>

	                  	 <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Ключевые слова",'name'=>"seo_keywords",'value'=>$_smarty_tpl->tpl_vars['oNode']->value->getSeoKeywords(),'popover'=>true,'hint'=>"Ключевые слова страницы (keywords). Наследуются в иерархическом порядке."), 0);?>

	                  </div>	
	                  <!-- END PORTLET TAB2-->
			          <!-- BEGIN PORTLET TAB3-->
	                  <div class="tab-pane" id="portlet_tab3">
	                  	<div id="params-portlet">Загрузка параметров...</div>
	                  </div>
	                  <!-- END PORTLET TAB3-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <button type="button" class="btn" onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/';">Отмена</button>
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