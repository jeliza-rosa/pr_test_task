<?php /* Smarty version Smarty-3.1.12, created on 2014-02-28 19:41:39
         compiled from "components/feedback/templates/admin/feedback_fields_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42536513153106f10da1603-31784613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c49cbeb2fa0cf34834e6a953b5c37e61e427d23e' => 
    array (
      0 => 'components/feedback/templates/admin/feedback_fields_list_portlet.tpl',
      1 => 1393594850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42536513153106f10da1603-31784613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53106f10e51581_22785747',
  'variables' => 
  array (
    'aTemplate' => 0,
    'oFeedback' => 0,
    'aFields' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53106f10e51581_22785747')) {function content_53106f10e51581_22785747($_smarty_tpl) {?><p>	
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
			<th width="100"><i class="icon-sort"></i> Сортировка</th>
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
				<td>
					<a href="#" class="sort-button-ajax arrow-down" data-url="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_sort/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/down/" ><i class="icon-chevron-down"></i></a>
					<a href="#" class="sort-button-ajax arrow-up"   data-url="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
field_sort/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
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
</table><?php }} ?>