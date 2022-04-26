<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 08:55:50
         compiled from "components\admin\templates\default\nodes\nodes_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21645626637e6913f29-44561194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '745d5c4a2fafc43dddc59cdd298e02348f996715' => 
    array (
      0 => 'components\\admin\\templates\\default\\nodes\\nodes_list_portlet.tpl',
      1 => 1392212709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21645626637e6913f29-44561194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'aNodes' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_626637e692df00_02559586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_626637e692df00_02559586')) {function content_626637e692df00_02559586($_smarty_tpl) {?><p>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/nodes/add/" class="btn green"><i class="icon-plus"></i> Добавить раздел</a>
	<a href="#" class="btn"><i class="icon-external-link"></i> Просмотреть выбранные</a>
	<a href="#" class="btn" id="deleteChosen" data-set="/admin/nodes/deleteall/"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table id="table1" class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название раздела</th>
			<th width="150"><i class="icon-globe"></i> URL</th>
			<th width="150"><i class="icon-cogs"></i> Компонент</th>
			<th width="100"><i class="icon-eye-open"></i> Показывать</th>
			<th width="30"><i class="icon-sort"></i></th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aNodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['foo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['foo']->iteration=0;
 $_smarty_tpl->tpl_vars['foo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['foo']->iteration++;
 $_smarty_tpl->tpl_vars['foo']->index++;
 $_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->index === 0;
 $_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['childs']['first'] = $_smarty_tpl->tpl_vars['foo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['childs']['last'] = $_smarty_tpl->tpl_vars['foo']->last;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/nodes/nodes_list_node_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>0,'first'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['childs']['first'],'last'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['childs']['last']), 0);?>

		<?php } ?>
	</tbody>
</table><?php }} ?>