<?php /* Smarty version Smarty-3.1.12, created on 2013-11-28 23:00:12
         compiled from "components/admin/templates/default/menu/menu_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20223645595297769c728210-64104917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd361e2ff51c8a7eb996aa9dbd3560491c7da1fa' => 
    array (
      0 => 'components/admin/templates/default/menu/menu_list_portlet.tpl',
      1 => 1377532753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20223645595297769c728210-64104917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'aMenu' => 0,
    'oMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5297769c7cd469_93468812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297769c7cd469_93468812')) {function content_5297769c7cd469_93468812($_smarty_tpl) {?><p>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/add/" class="btn green"><i class="icon-plus"></i> Добавить меню</a>
	<a href="#" class="btn" data-set="/admin/menu/deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table id="table1" class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название меню</th>
			<th width="150"><i class="icon-cogs"></i>Псевдоним</th>
			<th width="100"><i class="icon-eye-open"></i> Показывать</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['oMenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oMenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oMenu']->key => $_smarty_tpl->tpl_vars['oMenu']->value){
$_smarty_tpl->tpl_vars['oMenu']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getId();?>
</td>
				<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getId();?>
"></td>
				<td>
					<div class="btn-group no-margin">
						<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
						<i class="icon-reorder"></i>
						</a>
						<ul class="dropdown-menu nodes-dropdown">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/edit/<?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/additem/<?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getId();?>
/"><i class="icon-plus"></i> Добавить раздел меню</a></li>
							<li class="divider"></li>
							<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteMenu(<?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getId();?>
);"><i class="icon-trash"></i> Удалить</a></li>
						</ul>
					</div>
				</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/items/<?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getTitle();?>
</a>
				</td>
				<td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getName();?>
</span></td>
				<td>
					<a href="#" class="activation" data-component="menu" data-action="<?php if ($_smarty_tpl->tpl_vars['oMenu']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['oMenu']->value->getId();?>
">
						<span class="badge <?php if ($_smarty_tpl->tpl_vars['oMenu']->value->getActive()){?>badge-success<?php }else{ ?>badge-important<?php }?>">
							<?php if ($_smarty_tpl->tpl_vars['oMenu']->value->getActive()){?>Да<?php }else{ ?>Нет<?php }?>
						</span>
					</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>