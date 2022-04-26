<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 14:42:32
         compiled from "components\csv\templates\admin\csv_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11963626654975f6317-27557392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b261b4d71efd938a3553e07b834e77eb0d4015' => 
    array (
      0 => 'components\\csv\\templates\\admin\\csv_list_portlet.tpl',
      1 => 1650886951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11963626654975f6317-27557392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_62665497641e22_68136924',
  'variables' => 
  array (
    'aTemplate' => 0,
    'aLang' => 0,
    'aCsv' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62665497641e22_68136924')) {function content_62665497641e22_68136924($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\modifier.date_format.php';
?><p>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
add/" class="btn green"><i class="icon-plus"></i> Добавить <?php echo $_smarty_tpl->tpl_vars['aLang']->value['item'];?>
</a>
	<a href="#" class="btn" data-set="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
/deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table class="table table-striped table-bordered table-advance table-hover" id="table1">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes" /></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th width="600"><i class="icon-bookmark"></i> Название</th>
			<th><i class="icon-bookmark"></i> Группа задачи</th>
			<th><i class="icon-calendar"></i> Дата</th>
			<th width="100"><i class="icon-eye-open"></i> Показывать</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCsv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
							<li class="divider"></li>
							<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirm(null, null, '<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/');"><i class="icon-trash"></i> Удалить</a></li>
						</ul>
					</div>
				</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value->getTask();?>
</a>
				</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['item']->value->getGroup();?>

				</td>
				<td>
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->getDatetime());?>

				</td>
				<td>
					<a href="#" class="activation" data-component="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
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