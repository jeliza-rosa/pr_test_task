<?php /* Smarty version Smarty-3.1.12, created on 2014-02-27 11:32:17
         compiled from "components/feedback/templates/admin/field_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:367380220530d6df8d1ac21-77379981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55bcf67c01422303b37012218fbebd2eba87d77e' => 
    array (
      0 => 'components/feedback/templates/admin/field_form.tpl',
      1 => 1393479114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367380220530d6df8d1ac21-77379981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530d6df8e61ea3_70562116',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'oField' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d6df8e61ea3_70562116')) {function content_530d6df8e61ea3_70562116($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
">
					<input type="hidden" name="apply" value="0">
					<input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getFeedback();?>
">
					<input type="hidden" name="required" value="0">
					<input type="hidden" name="active" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> ????????????????</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">
							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"??????????????????",'name'=>"title",'value'=>$_smarty_tpl->tpl_vars['oField']->value->getTitle(),'popover'=>true,'hint'=>"?????????????????? ????????. ???????????????????????? ?????????? ?????????????? ?? ??????????.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"???????????????? ????????",'name'=>"name",'value'=>$_smarty_tpl->tpl_vars['oField']->value->getName(),'popover'=>true,'hint'=>"???????????????????????? ???????????? ???????????????????? ?????????? ?? '_'.",'validate'=>true,'validate_rule'=>"^\w+"."$"), 0);?>



								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"?????? ????????",'name'=>"type"), 0);?>

									<option value="text"	<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="text"){?> 	selected="selected"<?php }?>>???????????? (text)</option>
									<option value="textarea"<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="textarea"){?> selected="selected"<?php }?>>?????????? (textarea)</option>
									<option value="select"	<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="select"){?> 	selected="selected"<?php }?>>???????????????????? ???????????? (select)</option>
									<option value="checkbox"<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="checkbox"){?> selected="selected"<?php }?>>???????????? (checkbox)</option>
									<option value="radio"	<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="radio"){?> 	selected="selected"<?php }?>>?????????????????????????? (radio)</option>
									<option value="label"	<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="label"){?> 	selected="selected"<?php }?>>?????????????????? (label)</option>
									<option value="mail"	<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="mail"){?> 	selected="selected"<?php }?>>?????????? (mail)</option>
									<option value="phone"	<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="phone"){?> 	selected="selected"<?php }?>>?????????????? (phone)</option>
									<option value="file"	<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="file"){?> 	selected="selected"<?php }?>>???????? (file)</option>
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"??????????????????????",'name'=>"required",'value'=>$_smarty_tpl->tpl_vars['oField']->value->getRequired()), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"???????????????? ???? ??????????????????",'name'=>"value",'value'=>$_smarty_tpl->tpl_vars['oField']->value->getValue(),'popover'=>true,'hint'=>"?????? ???????????? ?????????????? ???????????????? ?????????? ?????????? ?? ??????????????."), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"????????????????????",'name'=>"sort",'value'=>$_smarty_tpl->tpl_vars['oField']->value->getSort(),'popover'=>true,'hint'=>"??????????, ???? ???????????????? ?????????????????????? ?????????????? ??????????????????. ?????? ???????????? ??????????, ?????? ???????? ?????????????? ?? ????????????."), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"????????????????????",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oField']->value->getActive()), 0);?>



							</div>
						</div>
							<!-- END PORTLET TAB1-->
					</div>
					<!-- END TAB CONTENT-->
					<div class="form-actions">
						<button type="submit" class="btn blue"><i class="icon-ok"></i> ??????????????????</button>
						<button type="button" class="btn apply">??????????????????</button>
						<button type="button" class="btn" onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
#portlet_tab2';">????????????</button>
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