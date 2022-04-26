<?php /* Smarty version Smarty-3.1.12, created on 2014-02-03 14:13:34
         compiled from "components/admin/templates/default/hooks/hook_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201820950052837394e01a07-54541780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '908d9e305d4b5192fdf7c138cd0ef16b2fe7ffe1' => 
    array (
      0 => 'components/admin/templates/default/hooks/hook_list_portlet.tpl',
      1 => 1391415208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201820950052837394e01a07-54541780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_528373950f8622_96581654',
  'variables' => 
  array (
    'aTemplate' => 0,
    'sAction' => 0,
    'aHooks' => 0,
    'oHook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528373950f8622_96581654')) {function content_528373950f8622_96581654($_smarty_tpl) {?><div class="portlet-body">
	<p>	
		<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/add/" class="btn green"><i class="icon-plus"></i> Добавить хук</a>
		<a href="#" class="btn" data-set="/admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/groups/" class="btn"><i class="icon-th-list"></i> Группы хуков</a>
	</p>
	<table id="table1" class="table table-striped table-bordered table-advance table-hover">
		<thead>
			<tr>
				<th width="10">ID</th>
				<th width="10">
					<input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes">
				</th>
				<th width="10"><i class="icon-reorder"></i></th>
				<th><i class="icon-bookmark"></i> Заголовок хука</th>
				<th><i class="icon-globe"></i> Описание</th>
				<th><i class="icon-tag"></i> Тип</th>
				<th><i class="icon-pushpin"></i> Группа</th>				
				<th width="100"><i class="icon-eye-open"></i> Показывать</th>
				<th width="100"><i class="icon-eye-open"></i> Сортировка</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['oHook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oHook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aHooks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oHook']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oHook']->iteration=0;
 $_smarty_tpl->tpl_vars['oHook']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['oHook']->key => $_smarty_tpl->tpl_vars['oHook']->value){
$_smarty_tpl->tpl_vars['oHook']->_loop = true;
 $_smarty_tpl->tpl_vars['oHook']->iteration++;
 $_smarty_tpl->tpl_vars['oHook']->index++;
 $_smarty_tpl->tpl_vars['oHook']->first = $_smarty_tpl->tpl_vars['oHook']->index === 0;
 $_smarty_tpl->tpl_vars['oHook']->last = $_smarty_tpl->tpl_vars['oHook']->iteration === $_smarty_tpl->tpl_vars['oHook']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sort']['first'] = $_smarty_tpl->tpl_vars['oHook']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sort']['last'] = $_smarty_tpl->tpl_vars['oHook']->last;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
</td>
					<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
"></td>
					<td>
						<div class="btn-group no-margin">
							<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
							<i class="icon-reorder"></i>
							</a>
							<ul class="dropdown-menu nodes-dropdown">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
								<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteHook(<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
);"><i class="icon-trash"></i> Удалить</a></li>
							</ul>
						</div>
					</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
/">
							<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getTitle();?>

						</a>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['oHook']->value->getDesc();?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['oHook']->value->getName();?>
<?php if ($_smarty_tpl->tpl_vars['oHook']->value->getComponent()){?> (Из компонента <?php echo $_smarty_tpl->tpl_vars['oHook']->value->getComponent();?>
) <?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['oHook']->value->getGroupObject()->getName();?>
 (<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getGroupObject()->getDesc();?>
)</td>
					<td>
						<a href="#" class="activation" data-component="<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
" data-action="<?php if ($_smarty_tpl->tpl_vars['oHook']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
">
							<span class="badge <?php if ($_smarty_tpl->tpl_vars['oHook']->value->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
								<?php if ($_smarty_tpl->tpl_vars['oHook']->value->getActive()==1){?>Да<?php }else{ ?>Нет<?php }?>
							</span>
						</a>
					</td>
					<td>
						<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sort']['last']){?><a href="#" onclick="return ajaxSortDownHook(this, <?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
);"><i class="icon-chevron-down"></i></a> <?php }?>
						<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sort']['first']){?><a href="#" onclick="return ajaxSortUpHook(this, <?php echo $_smarty_tpl->tpl_vars['oHook']->value->getId();?>
);"><i class="icon-chevron-up"></i></a><?php }?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>