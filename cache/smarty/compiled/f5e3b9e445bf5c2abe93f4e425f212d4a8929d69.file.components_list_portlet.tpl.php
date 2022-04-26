<?php /* Smarty version Smarty-3.1.12, created on 2014-04-16 13:54:11
         compiled from "components/admin/templates/default/components/components_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198001258152820dcc83a942-41543798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e3b9e445bf5c2abe93f4e425f212d4a8929d69' => 
    array (
      0 => 'components/admin/templates/default/components/components_list_portlet.tpl',
      1 => 1397634846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198001258152820dcc83a942-41543798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52820dcc8bec48_24553247',
  'variables' => 
  array (
    'aTemplate' => 0,
    'aComponents' => 0,
    'oItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52820dcc8bec48_24553247')) {function content_52820dcc8bec48_24553247($_smarty_tpl) {?><p>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/components/add/" class="btn green"><i class="icon-plus"></i> Добавить компонент</a>
	<a href="#" class="btn" id="deleteChosen" data-set="/admin/components/deleteall/"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table id="table1" class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название</th>
			<th width="150"><i class="icon-cogs"></i> Имя</th>
			<th width="100"><i class="icon-eye-open"></i> Активен</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['oItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aComponents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oItem']->key => $_smarty_tpl->tpl_vars['oItem']->value){
$_smarty_tpl->tpl_vars['oItem']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
</td>
				<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
"></td>
				<td>
					<div class="btn-group no-margin">
						<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
						<i class="icon-reorder"></i>
						</a>
						<ul class="dropdown-menu nodes-dropdown">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/components/edit/<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
							<li class="divider"></li>
							<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm('Удаление компонента', 'Вы действительно хотите удалить компонент?', '<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/components/delete/<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
/');"><i class="icon-trash"></i> Удалить</a></li>
						</ul>
					</div>
				</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/components/edit/<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getTitle();?>
</a>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getName();?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['oItem']->value->getActive()==1){?><a href="#" onclick="return ajaxActivate('deactivate', <?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
, this);"><span class="badge badge-success">Да</span></a><?php }else{ ?><a href="#" onclick="return ajaxActivate('activate', <?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
, this);"><span class="badge badge-important">Нет</span></a><?php }?></td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>