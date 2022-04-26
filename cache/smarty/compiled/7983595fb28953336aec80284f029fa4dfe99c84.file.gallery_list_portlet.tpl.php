<?php /* Smarty version Smarty-3.1.12, created on 2014-04-16 15:29:12
         compiled from "components/gallery/templates/admin/gallery_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107321548530b25d40339d1-37127312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7983595fb28953336aec80284f029fa4dfe99c84' => 
    array (
      0 => 'components/gallery/templates/admin/gallery_list_portlet.tpl',
      1 => 1395030579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107321548530b25d40339d1-37127312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530b25d411cda4_54015557',
  'variables' => 
  array (
    'aRequest' => 0,
    'aTemplate' => 0,
    'aLang' => 0,
    'aGalleries' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b25d411cda4_54015557')) {function content_530b25d411cda4_54015557($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
?><!-- BEGIN FORM-->
<form action="" class="form-horizontal validate form" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['id'];?>
">
	<input type="hidden" name="apply" value="0">
	<input type="hidden" name="sub" value="1">
	<div class="tabbable tabbable-custom">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-picture"></i> Альбомы</a></li>
			<li><a href="#portlet_tab3" data-toggle="tab"><i class="icon-cog"></i> Настройки</a></li>
		</ul>
		<!-- BEGIN TAB CONTENT-->
		<div class="tab-content">
			<!-- BEGIN PORTLET TAB1-->
			<div class="tab-pane active" id="portlet_tab1">
				<p>	
					<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
add/" class="btn green"><i class="icon-plus"></i> Добавить <?php echo $_smarty_tpl->tpl_vars['aLang']->value['item'];?>
</a>
					<a href="#" class="btn" data-set="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
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
									<th width="100"><i class="icon-upload"></i> Файлы</th>
									<th><i class="icon-bookmark"></i> Название</th>
									<th width="150"><i class="icon-calendar"></i> Дата</th>
									<th width="100"><i class="icon-eye-open"></i> Показывать</th>
									<th width="100"><i class="icon-sort"></i> Сортировка</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGalleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
													<li class="divider"></li>
													<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm(null, null, '<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/');"><i class="icon-trash"></i> Удалить</a></li>
												</ul>
											</div>
										</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
images/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/" class="btn blue mini"><i class="icon-upload-alt"></i> Файлы</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value->getTitle();?>
</a></td>
										<td>
											<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->getDatetime());?>

										</td>
										<td>
											<a href="#" class="activation" data-component="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
activate" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
												<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
													<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>Да<?php }else{ ?>Нет<?php }?>
												</span>
											</a>
										</td>
										<td>
										   <a href="#" class="sort-button-ajax arrow-down" data-url="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
sort/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/down/"><i class="icon-chevron-down"></i></a>
										   <a href="#" class="sort-button-ajax arrow-up"   data-url="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
sort/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/up/"><i class="icon-chevron-up"></i></a>
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
			<!-- BEGIN PORTLET TAB3-->
			<div class="tab-pane" id="portlet_tab3">
				<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['mails'];?>

			</div>	
			<!-- END PORTLET TAB3-->
		</div>
		<!-- END TAB CONTENT-->
	</div>   
</form>
<!-- END FORM-->  


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