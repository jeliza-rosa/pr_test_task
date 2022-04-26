<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 18:32:04
         compiled from "components/admin/templates/default/users/users_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72092389752739f4425c443-02966284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65593e98dcf86ee93ac7555a56f179c981149c6f' => 
    array (
      0 => 'components/admin/templates/default/users/users_list.tpl',
      1 => 1378299366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72092389752739f4425c443-02966284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'aUsers' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52739f4436cf03_69998123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52739f4436cf03_69998123')) {function content_52739f4436cf03_69998123($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-sitemap"></i>Пользователи</h4>
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
admin/users/add/" class="btn green"><i class="icon-plus"></i> Добавить пользователя</a>
			<a href="#" class="btn" id="deleteChosen" data-set="/admin/users/deleteall/"><i class="icon-trash"></i> Удалить выбранные</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/users/groups/" class="btn"><i class="icon-group"></i> Группы Пользователей</a>
		</p>
		<table id="table1" class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th width="10">ID</th>
					<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
					<th width="10"><i class="icon-reorder"></i></th>
					<th><i class="icon-bookmark"></i> Login</th>
					<th width="150"><i class="icon-cogs"></i> Группа</th>
					<th width="150"><i class="icon-cogs"></i> Имя</th>
					<th width="100"><i class="icon-eye-open"></i> Активен</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/users/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
									<li class="divider"></li>
									<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteUser(<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
);"><i class="icon-trash"></i> Удалить</a></li>
								</ul>
							</div>
						</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/users/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value->getLogin();?>
</a>
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value->getGroup()->getName();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</td>

						<td>
							<a href="#" class="activation" data-component="users" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
								<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
									<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>Да<?php }else{ ?>Нет<?php }?>
								</span>
							</a>
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
		<p>Вы действительно хотите удалить этих пользователей?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Нет</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>