<?php /* Smarty version Smarty-3.1.12, created on 2014-01-31 14:08:13
         compiled from "components/admin/templates/default/hooks/group_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105798235952eb442b405654-08231916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f958c77a4618619c9d92ccc3687317f684c74d8c' => 
    array (
      0 => 'components/admin/templates/default/hooks/group_list.tpl',
      1 => 1391155330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105798235952eb442b405654-08231916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52eb442b528db9_34461169',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sAction' => 0,
    'aGroups' => 0,
    'oGroup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52eb442b528db9_34461169')) {function content_52eb442b528db9_34461169($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-sitemap"></i><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</h4>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	
	<div class="portlet-body">
		<p>	
			<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/groupadd/" class="btn green"><i class="icon-plus"></i> Добавить группу хуков</a>
			<a href="#" class="btn" data-set="/admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/groupdeleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/" class="btn"><i class="icon-th-list"></i> Хуки</a>
		</p>
		<table id="table1" class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th width="10">ID</th>
					<th width="10">
						<input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes">
					</th>
					<th width="10"><i class="icon-reorder"></i></th>
					<th><i class="icon-bookmark"></i> Название группы</th>
					<th><i class="icon-globe"></i> Описание</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['oGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oGroup']->key => $_smarty_tpl->tpl_vars['oGroup']->value){
$_smarty_tpl->tpl_vars['oGroup']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getId();?>
</td>
						<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getId();?>
"></td>
						<td>
							<div class="btn-group no-margin">
								<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
								<i class="icon-reorder"></i>
								</a>
								<ul class="dropdown-menu nodes-dropdown">
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/groupedit/<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
									<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteGroup(<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getId();?>
);"><i class="icon-trash"></i> Удалить</a></li>
								</ul>
							</div>
						</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/groupedit/<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getId();?>
/">
								<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getName();?>

							</a>
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getDesc();?>
</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
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