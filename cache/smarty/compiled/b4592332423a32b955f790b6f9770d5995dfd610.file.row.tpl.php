<?php /* Smarty version Smarty-3.1.12, created on 2014-02-13 11:40:46
         compiled from "components/admin/templates/default/templates/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132384187652fb11e9d5b827-66499078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4592332423a32b955f790b6f9770d5995dfd610' => 
    array (
      0 => 'components/admin/templates/default/templates/row.tpl',
      1 => 1392270045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132384187652fb11e9d5b827-66499078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52fb11e9e15d01_74255711',
  'variables' => 
  array (
    'id' => 0,
    'aTemplatesAvailable' => 0,
    'oTemplate' => 0,
    'template' => 0,
    'aConditionTypes' => 0,
    'sName' => 0,
    'type' => 0,
    'sConditionTitle' => 0,
    'var' => 0,
    'value' => 0,
    'aNodeTree' => 0,
    'foo' => 0,
    'node' => 0,
    'active' => 0,
    'sort' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fb11e9e15d01_74255711')) {function content_52fb11e9e15d01_74255711($_smarty_tpl) {?><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>

		<input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
	</td>
	<td>
		<select name="template[]" class="chosen" tabindex="1">
			<?php  $_smarty_tpl->tpl_vars['oTemplate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTemplate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTemplatesAvailable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTemplate']->key => $_smarty_tpl->tpl_vars['oTemplate']->value){
$_smarty_tpl->tpl_vars['oTemplate']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['oTemplate']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['template']->value==$_smarty_tpl->tpl_vars['oTemplate']->value->getName()){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['oTemplate']->value->getTitle();?>
 - <?php echo $_smarty_tpl->tpl_vars['oTemplate']->value->getName();?>
</option>
			<?php } ?>
		</select>
	</td>
	<td>
		<select name="type[]" class="chosen selectype" tabindex="1">
			<?php  $_smarty_tpl->tpl_vars['sConditionTitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sConditionTitle']->_loop = false;
 $_smarty_tpl->tpl_vars['sName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aConditionTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sConditionTitle']->key => $_smarty_tpl->tpl_vars['sConditionTitle']->value){
$_smarty_tpl->tpl_vars['sConditionTitle']->_loop = true;
 $_smarty_tpl->tpl_vars['sName']->value = $_smarty_tpl->tpl_vars['sConditionTitle']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['sName']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['sConditionTitle']->value;?>
</option>
			<?php } ?>
		</select>
	</td>
	<td>
		<div class="condition get <?php if ($_smarty_tpl->tpl_vars['type']->value=="get"){?>active<?php }?>">
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"GET-переменная",'name'=>"var[]",'value'=>$_smarty_tpl->tpl_vars['var']->value,'popover'=>true,'hint'=>"Допускаются только латинские буквы (a-z), нижнее подчеркивание (_) и цифры (0-9)"), 0);?>
 
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Значение",'name'=>"value[]",'value'=>$_smarty_tpl->tpl_vars['value']->value,'popover'=>true,'hint'=>"Допускаются только латинские буквы (a-z), нижнее подчеркивание (_) и цифры (0-9)"), 0);?>

		</div>

		<div class="condition node nodetree <?php if ($_smarty_tpl->tpl_vars['type']->value=="node"||$_smarty_tpl->tpl_vars['type']->value=="nodetree"){?>active<?php }?>">
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Раздел",'name'=>"node[]",'class'=>"node"), 0);?>

				<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aNodeTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/nodes/nodes_form_node_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>0,'val'=>$_smarty_tpl->tpl_vars['node']->value), 0);?>

				<?php } ?>
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</td>
	<td>
		<a class="btn no-padding no-background delete-button" href="#modalDelete" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="icon-remove-sign text-error"></i></a>
	</td>
	<td>
		<a href="#" class="active-button" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<span class="badge <?php if ($_smarty_tpl->tpl_vars['active']->value==1){?>badge-success<?php }else{ ?>badge-important<?php }?>"><?php if ($_smarty_tpl->tpl_vars['active']->value==1){?>Да<?php }else{ ?>Нет<?php }?></span>
		</a>
		<input type="hidden" class="active-input" name="active[]" value="<?php echo $_smarty_tpl->tpl_vars['active']->value;?>
">
	</td>
	<td>
		<a href="#" class="arrow-down sort-button" data-direction="down"><i class="icon-chevron-down"></i></a>
		<a href="#" class="arrow-up sort-button" data-direction="up"><i class="icon-chevron-up"></i></a>
		<input type="hidden" class="sort-input" name="sort[]" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
	</td>
</tr><?php }} ?>