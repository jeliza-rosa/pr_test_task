<?php /* Smarty version Smarty-3.1.12, created on 2014-03-12 20:33:33
         compiled from "components/feedback/templates/admin/result_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18290655915320525d7b6031-16093635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '689cbb913c222c60926bc5a68a5d95eb9f704627' => 
    array (
      0 => 'components/feedback/templates/admin/result_form.tpl',
      1 => 1394634791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18290655915320525d7b6031-16093635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5320525d9e4ec8_46319498',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'oResult' => 0,
    'aFields' => 0,
    'oField' => 0,
    'aResultValues' => 0,
    'sResultValue' => 0,
    'aValues' => 0,
    'sValue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5320525d9e4ec8_46319498')) {function content_5320525d9e4ec8_46319498($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oResult']->value->getId();?>
">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">
							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								<?php $_smarty_tpl->tpl_vars["aResultValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oResult']->value->getValues(), null, 0);?>
								<?php  $_smarty_tpl->tpl_vars["oField"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oField"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oField"]->key => $_smarty_tpl->tpl_vars["oField"]->value){
$_smarty_tpl->tpl_vars["oField"]->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['aResultValues']->value[$_smarty_tpl->tpl_vars['oField']->value->getName()]){?>
										<?php $_smarty_tpl->tpl_vars["sResultValue"] = new Smarty_variable($_smarty_tpl->tpl_vars['aResultValues']->value[$_smarty_tpl->tpl_vars['oField']->value->getName()]["value"]->getValue(), null, 0);?>
									<?php }else{ ?>
										<?php $_smarty_tpl->tpl_vars["sResultValue"] = new Smarty_variable('', null, 0);?>
									<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="label"){?>
										<div class="control-group">
											<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue();?>
</label>
										</div>
									<?php }else{ ?>
										<div class="control-group">
											<label class="control-label"><?php if ($_smarty_tpl->tpl_vars['oField']->value->isArray()||$_smarty_tpl->tpl_vars['oField']->value->getType()!="checkbox"){?><?php echo $_smarty_tpl->tpl_vars['oField']->value->getTitle();?>
<?php }?></label>
											<div class="controls">
											<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="textarea"){?>
												<textarea class="span6" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['sResultValue']->value;?>
</textarea>
											<?php }elseif($_smarty_tpl->tpl_vars['oField']->value->getType()=="checkbox"){?>
												<?php if ($_smarty_tpl->tpl_vars['oField']->value->isArray()){?>
													<?php $_smarty_tpl->tpl_vars["aValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oField']->value->getValueArray(), null, 0);?>
													<?php  $_smarty_tpl->tpl_vars["sValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sValue"]->key => $_smarty_tpl->tpl_vars["sValue"]->value){
$_smarty_tpl->tpl_vars["sValue"]->_loop = true;
?>
														<label class="checkbox">
															<input type="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getType();?>
" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
" <?php if (strpos($_smarty_tpl->tpl_vars['sResultValue']->value,$_smarty_tpl->tpl_vars['sValue']->value)!==false){?>checked="checked"<?php }?>>
															<?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>

														</label>
													<?php } ?>
												<?php }else{ ?>
													<label class="checkbox">
														<input type="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getType();?>
" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue();?>
" <?php if ($_smarty_tpl->tpl_vars['sValue']->value==$_smarty_tpl->tpl_vars['sResultValue']->value){?>checked="checked"<?php }?>>
														<?php echo $_smarty_tpl->tpl_vars['oField']->value->getTitle();?>

													</label>
												<?php }?>
											<?php }elseif($_smarty_tpl->tpl_vars['oField']->value->getType()=="radio"){?>
												
													<?php $_smarty_tpl->tpl_vars["aValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oField']->value->getValueArray(), null, 0);?>
													<?php  $_smarty_tpl->tpl_vars["sValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sValue"]->key => $_smarty_tpl->tpl_vars["sValue"]->value){
$_smarty_tpl->tpl_vars["sValue"]->_loop = true;
?>
														<label>
															<input type="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getType();?>
" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sValue']->value==$_smarty_tpl->tpl_vars['sResultValue']->value){?>checked="checked"<?php }?>>
															<?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>

														</label>
													<?php } ?>
												
											<?php }elseif($_smarty_tpl->tpl_vars['oField']->value->getType()=="select"){?>
												<select class="m-wrap span6 chosen" tabindex="1" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
">
													<?php $_smarty_tpl->tpl_vars["aValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oField']->value->getValueArray(), null, 0);?>
													<?php  $_smarty_tpl->tpl_vars["sValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sValue"]->key => $_smarty_tpl->tpl_vars["sValue"]->value){
$_smarty_tpl->tpl_vars["sValue"]->_loop = true;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sValue']->value==$_smarty_tpl->tpl_vars['sResultValue']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
</option>
													<?php } ?>
												</select>
											<?php }else{ ?>
												<input type="text" class="span6" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['sResultValue']->value;?>
">
											<?php }?>
											</div>
										</div>
									<?php }?>
								<?php } ?>
							</div>
						</div>
							<!-- END PORTLET TAB1-->
					</div>
					<!-- END TAB CONTENT-->
					<div class="form-actions">
						<button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
						<button type="button" class="btn apply">Применить</button>
						<a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
#portlet_tab1">Отмена</a>
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