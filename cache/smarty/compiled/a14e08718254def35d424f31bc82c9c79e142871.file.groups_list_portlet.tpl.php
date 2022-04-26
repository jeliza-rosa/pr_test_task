<?php /* Smarty version Smarty-3.1.12, created on 2014-04-15 16:01:31
         compiled from "components/catalog/templates/admin/groups_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810494885534d037be43f34-15863205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a14e08718254def35d424f31bc82c9c79e142871' => 
    array (
      0 => 'components/catalog/templates/admin/groups_list_portlet.tpl',
      1 => 1378211013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810494885534d037be43f34-15863205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'oParent' => 0,
    'aGroups' => 0,
    'item' => 0,
    'aItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_534d037c074d68_36088094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534d037c074d68_36088094')) {function content_534d037c074d68_36088094($_smarty_tpl) {?><p>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
group_add/<?php if ($_smarty_tpl->tpl_vars['oParent']->value){?>group/<?php echo $_smarty_tpl->tpl_vars['oParent']->value->getId();?>
/<?php }?>" class="btn green"><i class="icon-plus"></i> Добавить группу</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
item_add/<?php if ($_smarty_tpl->tpl_vars['oParent']->value){?>group/<?php echo $_smarty_tpl->tpl_vars['oParent']->value->getId();?>
/<?php }?>" class="btn blue"><i class="icon-plus"></i> Добавить товар</a>
	<a href="#" class="btn"><i class="icon-trash"></i> Удалить выбранные</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
attributes/" class="btn black"><i class="icon-tasks"></i> Свойства товаров</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
csv/" class="btn purple">CSV</a>
</p>
<table class="table table-striped table-bordered table-advance table-hover" id="table1">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes" /></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название</th>
			
			<th width="100"><i class="icon-eye-open"></i> Показывать</th>
			<th width="100"><i class="icon-tasks"></i> Сортировка</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($_smarty_tpl->tpl_vars['oParent']->value){?>
			<tr>
				<td colspan="3"></td>
				<td colspan="3"><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
group/<?php echo $_smarty_tpl->tpl_vars['oParent']->value->getParent();?>
/"><i class="icon-share-alt"></i> Вверх</a></td>
			</tr>
			
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
group_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
							<li class="divider"></li>
							<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm(null, null, '<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
group_delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/');"><i class="icon-trash"></i> Удалить</a></li>
						</ul>
					</div>
				</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
group/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-folder-close"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value->getTitle();?>
</a>
				</td>
				<td><center><?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?><a href="#" onclick="return ajaxActivate('<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
group_deactivate/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/', this, <?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
);"><span class="badge badge-success">Да</span></a><?php }else{ ?><a href="#" onclick="return ajaxActivate('<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
group_activate/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/', this, <?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
);"><span class="badge badge-important">Нет</span></a><?php }?></center></td>
				<td><center><span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getSort();?>
</span></center></td>
			</tr>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
item_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
							<li class="divider"></li>
							<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm(null, null, '<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
item_delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/');"><i class="icon-trash"></i> Удалить</a></li>
						</ul>
					</div>
				</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
item_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-file"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value->getTitle();?>
</a><div class="pull-right"><?php if ($_smarty_tpl->tpl_vars['item']->value->getPrice()){?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['item']->value->getPrice();?>
 руб.</span><?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value->getCount()){?> <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['item']->value->getCount();?>
 шт.</span><?php }?></div>
				</td>
				<td><center><?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?><a href="#" onclick="return ajaxActivate('<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
item_deactivate/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/', this, <?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
);"><span class="badge badge-success">Да</span></a><?php }else{ ?><a href="#" onclick="return ajaxActivate('<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
item_activate/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/', this, <?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
);"><span class="badge badge-important">Нет</span></a><?php }?></center></td>
				<td><center><span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getSort();?>
</span></center></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
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
</div><?php }} ?>