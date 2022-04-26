<?php /* Smarty version Smarty-3.1.12, created on 2022-04-26 08:16:48
         compiled from "components\csv\templates\admin\Csv_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3253626652a63fdeb9-75027929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6045cd10b54f5c90d86df97ba9ff5eee869fd4a' => 
    array (
      0 => 'components\\csv\\templates\\admin\\Csv_form.tpl',
      1 => 1650950203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3253626652a63fdeb9-75027929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_626652a642dca1_36426670',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'action' => 0,
    'oCsv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_626652a642dca1_36426670')) {function content_626652a642dca1_36426670($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getId();?>
">
					<input type="hidden" name="node" value="<?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getNode();?>
">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
						</ul>

						<div class="tab-content">

							<div class="tab-pane active" id="portlet_tab1">
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Группа задачи",'name'=>"group",'value'=>$_smarty_tpl->tpl_vars['oCsv']->value->getGroup(),'popover'=>true), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Задача",'name'=>"task",'value'=>$_smarty_tpl->tpl_vars['oCsv']->value->getTask(),'popover'=>true), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/datetime.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Дата",'datename'=>"date",'dateval'=>$_smarty_tpl->tpl_vars['oCsv']->value->getDate()), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Запланированное время",'name'=>"time_plan",'value'=>$_smarty_tpl->tpl_vars['oCsv']->value->getTimePlan(),'popover'=>true), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Фактическое время",'name'=>"time_fact",'value'=>$_smarty_tpl->tpl_vars['oCsv']->value->getTimeFact(),'popover'=>true), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Сумма",'name'=>"sum",'value'=>$_smarty_tpl->tpl_vars['oCsv']->value->getSum(),'popover'=>true), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Ссылка",'name'=>"link",'value'=>$_smarty_tpl->tpl_vars['oCsv']->value->getLink(),'popover'=>true), 0);?>

								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oCsv']->value->getActive()), 0);?>

							</div>


								<button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
								<button type="button" class="btn apply">Применить</button>
								<a type="button" class="btn" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
">Отмена</a>

						</div>

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