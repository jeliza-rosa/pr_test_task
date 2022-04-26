<?php /* Smarty version Smarty-3.1.12, created on 2014-02-28 16:37:13
         compiled from "components/admin/templates/default/users/user_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226839544529d775e2178b8-69743477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea3d4b86ade955c886f111900bfba53c05ba069' => 
    array (
      0 => 'components/admin/templates/default/users/user_form.tpl',
      1 => 1392100880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226839544529d775e2178b8-69743477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529d775e39b0f0_57451678',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sAction' => 0,
    'sFormAction' => 0,
    'oUser' => 0,
    'sErrorMsg' => 0,
    'iPassCheck' => 0,
    'aGroups' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529d775e39b0f0_57451678')) {function content_529d775e39b0f0_57451678($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/" class="form-horizontal validate" method="post">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getId();?>
">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
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
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Login",'name'=>"login",'value'=>$_smarty_tpl->tpl_vars['oUser']->value->getLogin(),'popover'=>true,'hint'=>"Логин.  Допускаются только латинские буквы (a-z), нижнее подчеркивание (_) и цифры (0-9)",'validate'=>true,'validate_rule'=>"^\w+"."$"), 0);?>


								<?php if ($_smarty_tpl->tpl_vars['iPassCheck']->value){?>
									<div class="control-group">
										<div class="controls"><a class="btn blue changepass">Сменить пароль</a></div>
										</div>
									<div id="chengepass" style="display:none;">
								<?php }?>
										<input type="hidden" name="changepass" value="1" <?php if ($_smarty_tpl->tpl_vars['iPassCheck']->value){?>disabled="disabled"<?php }?>>
										<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/pass.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Пароль",'disabled'=>$_smarty_tpl->tpl_vars['iPassCheck']->value,'name'=>"password-first",'class'=>"chechpass",'popover'=>true,'hint'=>"Пароль пользователя. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>

										<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/pass.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Повторите Пароль",'disabled'=>$_smarty_tpl->tpl_vars['iPassCheck']->value,'name'=>"password-second",'class'=>"checkpass",'popover'=>true,'hint'=>"Пароль пользователя. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>


								<?php if ($_smarty_tpl->tpl_vars['iPassCheck']->value){?>
									</div>
								<?php }?>


								<div class="control-group">
									<label class="control-label">Группа</label>
									<div class="controls">
										<select name="group" class="span6 m-wrap chosen" data-placeholder="Выберите группу пользователей" tabindex="1">
											<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getGroup()->getId()==$_smarty_tpl->tpl_vars['foo']->value->getId()){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value->getName();?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
	
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Email",'name'=>"email",'value'=>$_smarty_tpl->tpl_vars['oUser']->value->getEmail()), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Имя",'name'=>"name",'value'=>$_smarty_tpl->tpl_vars['oUser']->value->getName()), 0);?>


							   <?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oUser']->value->getActive()), 0);?>

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
			</div>
		</div>
		<!-- END SAMPLE FORM PORTLET-->
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>