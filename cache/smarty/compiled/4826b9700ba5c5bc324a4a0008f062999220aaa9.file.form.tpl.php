<?php /* Smarty version Smarty-3.1.12, created on 2014-02-13 16:04:42
         compiled from "components/admin/templates/default/templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38405648952f9f0a16e1347-09504774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4826b9700ba5c5bc324a4a0008f062999220aaa9' => 
    array (
      0 => 'components/admin/templates/default/templates/form.tpl',
      1 => 1392285880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38405648952f9f0a16e1347-09504774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52f9f0a18d1ea9_67249736',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'oDefaultTemplate' => 0,
    'aTemplate' => 0,
    'sAction' => 0,
    'sFormAction' => 0,
    'aConditions' => 0,
    'oCondition' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f9f0a18d1ea9_67249736')) {function content_52f9f0a18d1ea9_67249736($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
				<?php if ($_smarty_tpl->tpl_vars['oDefaultTemplate']->value){?>
					<div class="alert alert-info">
						<button class="close" data-dismiss="alert"></button>
						<strong>Обратите внимание!</strong> Шаблоном по умолчанию установлен <?php echo $_smarty_tpl->tpl_vars['oDefaultTemplate']->value->getTitle();?>
 (<?php echo $_smarty_tpl->tpl_vars['oDefaultTemplate']->value->getName();?>
)<br /><?php echo $_smarty_tpl->tpl_vars['oDefaultTemplate']->value->getDescription();?>

					</div>
				<?php }else{ ?>
					<div class="alert alert-error">
						<button class="close" data-dismiss="alert"></button>
						<strong>Внимание!</strong> Шаблон, установленный по умолчанию, отсутствует в файловой структуре.
					</div>
				<?php }?>
				<!-- BEGIN FORM-->
				<form action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/" class="form-horizontal validate" method="post">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">
							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								


								<table id="table1" class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th width="10">ID</th>
											
											<th width="150"><i class="icon-bookmark"></i> Шаблон</th>
											<th width="150"><i class="icon-globe"></i> Условие</th>
											<th><i class="icon-cogs"></i> Параметры</th>
											<th width="10">Удалить</th>
											<th width="100"><i class="icon-eye-open"></i> Активно</th>
											<th width="30"><i class="icon-sort"></i></th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['oCondition'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCondition']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aConditions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCondition']->key => $_smarty_tpl->tpl_vars['oCondition']->value){
$_smarty_tpl->tpl_vars['oCondition']->_loop = true;
?>
											<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/templates/row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['oCondition']->value->getId(),'template'=>$_smarty_tpl->tpl_vars['oCondition']->value->getTemplate(),'type'=>$_smarty_tpl->tpl_vars['oCondition']->value->getType(),'var'=>$_smarty_tpl->tpl_vars['oCondition']->value->getVar(),'value'=>$_smarty_tpl->tpl_vars['oCondition']->value->getValue(),'node'=>$_smarty_tpl->tpl_vars['oCondition']->value->getNode(),'active'=>$_smarty_tpl->tpl_vars['oCondition']->value->getActive(),'sort'=>$_smarty_tpl->tpl_vars['oCondition']->value->getSort()), 0);?>

										<?php } ?>
									</tbody>
								</table>

								<div class="control-group">
									<div class="controls"><a class="btn blue changepass add-button">Добавить условие</a></div>
								</div>
									
							</div>
							<!-- END PORTLET TAB1-->
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
				<div class="pattern"><table><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/templates/row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>"get",'active'=>1,'sort'=>500), 0);?>
</table></div>
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
		<p>Вы действительно хотите удалить этот элемент?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Нет</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>