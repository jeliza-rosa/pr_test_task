<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 10:33:52
         compiled from "components/pattern/templates/admin/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105601761452830130371936-21056944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4bf0d9c9a64f7478e47c5f20409da269ff9755' => 
    array (
      0 => 'components/pattern/templates/admin/form.tpl',
      1 => 1380010979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105601761452830130371936-21056944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'oPattern' => 0,
    'oMap' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52830130420389_51240971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52830130420389_51240971')) {function content_52830130420389_51240971($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getId();?>
">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Параметры</a></li>
							<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cog"></i> Координаты</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">
							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Заголовок",'name'=>"title",'value'=>$_smarty_tpl->tpl_vars['oPattern']->value->getTitle()), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Описание",'name'=>"desc",'value'=>$_smarty_tpl->tpl_vars['oPattern']->value->getDesc()), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oPattern']->value->getActive()), 0);?>


							</div>
							<!-- END PORTLET TAB1-->

							<!-- BEGIN PORTLET TAB2-->
							<div class="tab-pane" id="portlet_tab2">
								
								<div id="map">
									<div class="control-group">
										<label class="control-label">Координаты</label>
										<div class="controls">
											<textarea class="span6 m-wrap canvas-area input-xxlarge" name="coords" rows="4" data-image-url="<?php echo $_smarty_tpl->tpl_vars['oMap']->value->getImg();?>
"><?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getCoords();?>
</textarea>
										</div>
									</div>
								</div>

							</div>
							<!-- END PORTLET TAB2-->


							<div class="form-actions">
								<button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
								<button type="button" class="btn apply">Применить</button>
								<button type="button" class="btn" onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
';">Отмена</button>
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