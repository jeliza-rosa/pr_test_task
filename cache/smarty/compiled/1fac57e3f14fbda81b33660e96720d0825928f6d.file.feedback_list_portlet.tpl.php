<?php /* Smarty version Smarty-3.1.12, created on 2014-02-27 18:29:41
         compiled from "components/feedback/templates/admin/feedback_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2044591570530d6de2796074-52001982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fac57e3f14fbda81b33660e96720d0825928f6d' => 
    array (
      0 => 'components/feedback/templates/admin/feedback_list_portlet.tpl',
      1 => 1393504034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2044591570530d6de2796074-52001982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530d6de2943ed4_72274978',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'oFeedback' => 0,
    'aFields' => 0,
    'aResults' => 0,
    'item' => 0,
    'aValues' => 0,
    'aValue' => 0,
    'oContentNode' => 0,
    'sAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d6de2943ed4_72274978')) {function content_530d6de2943ed4_72274978($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
?><div class="row-fluid">
	<div class="span12">
		<!-- BEGIN SAMPLE FORM PORTLET-->   
		<div class="portlet box blue">
			<div class="portlet-title">
				<h4><i class="icon-reorder"></i><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</h4>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oFeedback']->value->getId();?>
">
					<input type="hidden" name="apply" value="0">
					<input type="hidden" name="sub" value="1">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-inbox"></i> Результаты</a></li>
							<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-tasks"></i> Поля формы</a></li>
							<li><a href="#portlet_tab3" data-toggle="tab"><i class="icon-cog"></i> Настройки</a></li>
							<li><a href="#portlet_tab4" data-toggle="tab"><i class="icon-cog"></i> Дополнительно</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">
							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								<p>	
									
									<a href="#" class="btn deleteChosen" data-set="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
result_deleteall/"><i class="icon-trash"></i> Удалить выбранные</a>
								</p>
								<!-- BEGIN ROW FLUID-->
								<div class="row-fluid">
									<div class="span12">
										<table class="table table-striped table-bordered table-advance table-hover" id="table1">
											<thead>
												<tr>
													<th width="10">ID</th>
													<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes" /></th>
													<th width="10"><i class="icon-reorder"></i></th>
													<th><?php if (is_object($_smarty_tpl->tpl_vars['aFields']->value[0])){?><?php echo $_smarty_tpl->tpl_vars['aFields']->value[0]->getTitle();?>
<?php }?></th>
													<th width="150"><i class="icon-calendar"></i> Дата</th>
													<th width="100"><i class="icon-eye-open"></i> Показывать</th>
												</tr>
											</thead>
											<tbody>
												<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aResults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
													<?php $_smarty_tpl->tpl_vars["aValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value->getValues(), null, 0);?>
													<tr>
														<td><?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
</td>
														<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"></td>
														<td>
															<div class="btn-group no-margin">
																<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
																<i class="icon-reorder"></i>
																</a>
																<ul class="dropdown-menu nodes-dropdown">
																	<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
result_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
																	<li class="divider"></li>
																	<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm(null, null, '<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
result_delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/');"><i class="icon-trash"></i> Удалить</a></li>
																</ul>
															</div>
														</td>
														<td>
															<?php  $_smarty_tpl->tpl_vars["aValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["aValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["aValue"]->key => $_smarty_tpl->tpl_vars["aValue"]->value){
$_smarty_tpl->tpl_vars["aValue"]->_loop = true;
?>
																<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
<br>
															<?php } ?>
														</td>
														
														<td>
															<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->getDatetime());?>

														</td>
														<td>
															<a href="#" class="activation" data-component="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
result_activate" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
																<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
																	<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>Да<?php }else{ ?>Нет<?php }?>
																</span>
															</a>
														</td>
													</tr>
												<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
													<tr>
											  			<td colspan="6">Нет данных</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
									
									
								</div>
								<!-- END ROW FLUID-->
							</div>
							<!-- END PORTLET TAB1-->
							<!-- BEGIN PORTLET TAB2-->
							<div class="tab-pane" id="portlet_tab2">
								<p>	
									<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_add/<?php echo $_smarty_tpl->tpl_vars['oFeedback']->value->getId();?>
/" class="btn green"><i class="icon-plus"></i> Добавить поле</a>
									<a href="#" class="btn deleteChosen" data-set="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_deleteall/"><i class="icon-trash"></i> Удалить выбранные</a>
								</p>
								<table class="table table-striped table-bordered table-advance table-hover" id="table2">
									<thead>
										<tr>
											<th width="10">ID</th>
											<th width="10"><input type="checkbox" class="group-checkable" data-set="#table2 .checkboxes" /></th>
											<th width="10"><i class="icon-reorder"></i></th>
											<th><i class="icon-bookmark"></i> Название</th>
											<th><i class="icon-tasks"></i> Тип поля</th>
											<th width="120"><i class="icon-asterisk"></i> Обязательно</th>
											<th width="100"><i class="icon-eye-open"></i> Показывать</th>
										</tr>
									</thead>
									<tbody>
										
										<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
</td>
												<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"></td>
												<td>
													<div class="btn-group no-margin">
														<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
														<i class="icon-reorder"></i>
														</a>
														<ul class="dropdown-menu nodes-dropdown">
															<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
															<li class="divider"></li>
															<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm(null, null, '<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/');"><i class="icon-trash"></i> Удалить</a></li>
														</ul>
													</div>
												</td>
												<td>
													<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value->getTitle();?>
</a>
												</td>
												<td>
													<?php echo $_smarty_tpl->tpl_vars['item']->value->getType();?>

												</td>
												<td>
													<a href="#" class="activation" data-component="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_required" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value->getRequired()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
														<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value->getRequired()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
															<?php if ($_smarty_tpl->tpl_vars['item']->value->getRequired()==1){?>Да<?php }else{ ?>Нет<?php }?>
														</span>
													</a>
												</td>
												<td>
													<a href="#" class="activation" data-component="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_activate" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
														<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
															<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>Да<?php }else{ ?>Нет<?php }?>
														</span>
													</a>
												</td>
											</tr>
										<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
										
											<tr>
												<td colspan="6">Нет данных</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>	
							<!-- END PORTLET TAB2-->
							<!-- BEGIN PORTLET TAB3-->
							<div class="tab-pane" id="portlet_tab3">
								<div class="portlet-body form">
									
									<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Почта для уведомлений",'name'=>"mails",'value'=>$_smarty_tpl->tpl_vars['oFeedback']->value->getMails(),'popover'=>true,'hint'=>"Электронна почта администратора сайта. Можно указать несколько через запятую"), 0);?>


									<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Текст описания на странице",'name'=>"text",'value'=>$_smarty_tpl->tpl_vars['oFeedback']->value->getText()), 0);?>


								</div>
							</div>
							<!-- END PORTLET TAB3-->
							<!-- BEGIN PORTLET TAB4-->
							<div class="tab-pane" id="portlet_tab4">
								<div id="params-portlet" data-node="<?php echo $_smarty_tpl->tpl_vars['oContentNode']->value->getId();?>
" data-component="<?php echo $_smarty_tpl->tpl_vars['oContentNode']->value->getComponent();?>
">Загрузка параметров...</div>
							</div>
							<!-- END PORTLET TAB4-->
							<div class="form-actions">
								<button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
								<button type="button" class="btn apply">Применить</button>
								<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/" class="btn">Отмена</a>
							</div>
						</div>
						<!-- END TAB CONTENT-->
					</div>   
				</form>
				<!-- END FORM-->  
			</div>
		</div>
	</div>
</div>

<div id="modalDelete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		<h3 id="modalDeleteLabel">Подтверждение удаления</h3>
	</div>
	<div class="modal-body">
		<p>Вы действительно хотите удалить этот элемент?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Нет</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div><?php }} ?>