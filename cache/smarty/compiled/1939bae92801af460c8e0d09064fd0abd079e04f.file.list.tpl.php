<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 10:33:48
         compiled from "components/pattern/templates/admin/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3107661715283012cc50047-99133656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1939bae92801af460c8e0d09064fd0abd079e04f' => 
    array (
      0 => 'components/pattern/templates/admin/list.tpl',
      1 => 1380011884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3107661715283012cc50047-99133656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'aRequest' => 0,
    'aPatterns' => 0,
    'oPattern' => 0,
    'oMap' => 0,
    'sAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5283012cd7b757_40661765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5283012cd7b757_40661765')) {function content_5283012cd7b757_40661765($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['id'];?>
">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-map-marker"></i> Области на карте</a></li>
							<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cog"></i> Основное</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">

							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								<p>	
									<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
add/" class="btn green"><i class="icon-plus"></i> Добавить область</a>
									<a href="#" class="btn" data-set="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
								</p>
								<table id="table1" class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th width="10">ID</th>
											<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
											<th width="10"><i class="icon-reorder"></i></th>
											<th><i class="icon-bookmark"></i> Заголовок</th>
											<th><i class="icon-info-sign"></i> Описание</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['oPattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oPattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPatterns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oPattern']->key => $_smarty_tpl->tpl_vars['oPattern']->value){
$_smarty_tpl->tpl_vars['oPattern']->_loop = true;
?>
											<tr>
												
												<td><?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getId();?>
</td>
												<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getId();?>
"></td>
												<td>
													<div class="btn-group no-margin">
														<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
														<i class="icon-reorder"></i>
														</a>
														<ul class="dropdown-menu nodes-dropdown">
															<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
edit/<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
															<li class="divider"></li>
															<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm('Подтверждение удаления', 'Вы действительно хотите удалить область?', '<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
delete/<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getId();?>
');"><i class="icon-trash"></i> Удалить</a></li>
														</ul>
													</div>
												</td>
												<td>
													<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
edit/<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getTitle();?>
</a>
												</td>
												<td><?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getDesc();?>
</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>

							</div>
							<!-- END PORTLET TAB1-->

							<!-- BEGIN PORTLET TAB2-->
							<div class="tab-pane" id="portlet_tab2">
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Описание",'name'=>"desc",'value'=>$_smarty_tpl->tpl_vars['oMap']->value->getDesc()), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Изображение",'name'=>"image",'image'=>$_smarty_tpl->tpl_vars['oMap']->value->getImg(),'remove'=>((string)$_smarty_tpl->tpl_vars['aTemplate']->value['node_url'])."removeimage/".((string)$_smarty_tpl->tpl_vars['oMap']->value->getId())."/"), 0);?>

							</div>
							<!-- END PORTLET TAB2-->



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
<div id="modalDelete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		<h3 id="modalDeleteLabel">Подтверждение удаления</h3>
	</div>
	<div class="modal-body">
		<p></p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Нет</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>