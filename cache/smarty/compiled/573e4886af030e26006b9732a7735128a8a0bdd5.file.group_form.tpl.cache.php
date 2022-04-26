<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 18:32:16
         compiled from "components/admin/templates/default/users/group_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13545548352739f5022da72-36744912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '573e4886af030e26006b9732a7735128a8a0bdd5' => 
    array (
      0 => 'components/admin/templates/default/users/group_form.tpl',
      1 => 1379478983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13545548352739f5022da72-36744912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sAction' => 0,
    'sFormAction' => 0,
    'oGroup' => 0,
    'sErrorMsg' => 0,
    'aAccesses' => 0,
    'sAccess' => 0,
    'sType' => 0,
    'aValues' => 0,
    'value' => 0,
    'desc' => 0,
    'aNodes' => 0,
    'foo' => 0,
    'oAccess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52739f503eb3c1_10432174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52739f503eb3c1_10432174')) {function content_52739f503eb3c1_10432174($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
		       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getId();?>
">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	         	   	  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>
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
						<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"Имя группы",'name'=>"name",'value'=>$_smarty_tpl->tpl_vars['oGroup']->value->getName(),'popover'=>true,'hint'=>"Имя группы. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>


						<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"Описание",'name'=>"desc",'value'=>$_smarty_tpl->tpl_vars['oGroup']->value->getDesc()), 0);?>


						<?php  $_smarty_tpl->tpl_vars['sAccess'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sAccess']->_loop = false;
 $_smarty_tpl->tpl_vars['sType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aAccesses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sAccess']->key => $_smarty_tpl->tpl_vars['sAccess']->value){
$_smarty_tpl->tpl_vars['sAccess']->_loop = true;
 $_smarty_tpl->tpl_vars['sType']->value = $_smarty_tpl->tpl_vars['sAccess']->key;
?>
							<div class="control-group">
								<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['sAccess']->value;?>
</label>
								<div class="controls">
									<select name="accesses[<?php echo $_smarty_tpl->tpl_vars['sType']->value;?>
]" class="span6 m-wrap chosen" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['sType']->value;?>
" tabindex="1">
										<?php  $_smarty_tpl->tpl_vars['desc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['desc']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['desc']->key => $_smarty_tpl->tpl_vars['desc']->value){
$_smarty_tpl->tpl_vars['desc']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['desc']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['oGroup']->value->getAccess($_smarty_tpl->tpl_vars['sType']->value)==$_smarty_tpl->tpl_vars['value']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</option>
										<?php } ?>
									</select>
								</div>
							</div>
						<?php } ?>
					
			          </div>
			          <!-- END PORTLET TAB1-->
					  <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
							<?php $_smarty_tpl->tpl_vars["aAccesses"] = new Smarty_variable($_smarty_tpl->tpl_vars['oGroup']->value->getAccesses("nodes"), null, 0);?>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=(count($_smarty_tpl->tpl_vars['aAccesses']->value)+1)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['aAccesses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]){?>
									<?php $_smarty_tpl->tpl_vars["oAccess"] = new Smarty_variable($_smarty_tpl->tpl_vars['aAccesses']->value[$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']], null, 0);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars["oAccess"] = new Smarty_variable(Engine::GetEntity('User',null,'Access'), null, 0);?>
								<?php }?>
								<div class="control-group">
									<label class="control-label">Доступ к разделу</label>
									<div class="controls">
										<select name="node[]" class="m-wrap chosen nodes" data-placeholder="Выберите раздел" tabindex="1" style="width: 450px;">
											<option value="0">&nbsp;</option>
											<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aNodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
												<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/nodes/nodes_form_node_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>0,'val'=>$_smarty_tpl->tpl_vars['oAccess']->value->getNode()), 0);?>

											<?php } ?>
										</select>
										<select name="value[]" class="m-wrap chosen access" data-placeholder="Уровень доступа" tabindex="1" style="width: 250px;">
											<?php  $_smarty_tpl->tpl_vars['desc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['desc']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['desc']->key => $_smarty_tpl->tpl_vars['desc']->value){
$_smarty_tpl->tpl_vars['desc']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['desc']->key;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['oGroup']->value->getAccess($_smarty_tpl->tpl_vars['oAccess']->value->getType())==$_smarty_tpl->tpl_vars['value']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
	                  		<?php endfor; endif; ?>

	                  </div>
	                  <!-- END PORTLET TAB2-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <button type="button" class="btn" onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/groups/';">Отмена</button>
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
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>