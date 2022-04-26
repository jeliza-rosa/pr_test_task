<?php /* Smarty version Smarty-3.1.12, created on 2014-02-27 11:37:50
         compiled from "components/admin/templates/default/menu/items_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1924617877530ecf2ee25396-42037918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf0dc001008a36896ec205bc96bd8ca08ad6f0e5' => 
    array (
      0 => 'components/admin/templates/default/menu/items_list_portlet.tpl',
      1 => 1377157330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1924617877530ecf2ee25396-42037918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'iMenuId' => 0,
    'aItems' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530ecf2f011217_47532300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ecf2f011217_47532300')) {function content_530ecf2f011217_47532300($_smarty_tpl) {?><p>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/additem/<?php echo $_smarty_tpl->tpl_vars['iMenuId']->value;?>
/" class="btn green"><i class="icon-plus"></i> Добавить пункт меню</a>
	<a href="#" class="btn" data-set="/admin/menu/deleteallitem/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
</p>
<table id="table1" class="table table-striped table-bordered table-advance table-hover">
	<thead>
		<tr>
			<th width="10">ID</th>
			<th width="10"><input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes"></th>
			<th width="10"><i class="icon-reorder"></i></th>
			<th><i class="icon-bookmark"></i> Название пункта меню</th>
			<th width="150"><i class="icon-picture"></i> Изображение</th>
			<th width="150"><i class="icon-sitemap"></i> Раздел</th>
			<th width="150"><i class="icon-globe"></i> URL</th>
			<th width="100"><i class="icon-eye-open"></i> Показывать</th>
			<th width="100"><i class="icon-sort"></i> Сортировка</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/menu/item_list_tr.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>0,'first'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['childs']['first'],'last'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['childs']['last']), 0);?>

		<?php } ?>
	</tbody>
</table><?php }} ?>