<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 18:18:44
         compiled from "components/admin/templates/default/nodes/nodes_list_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64686128552739c24a9cc04-76686500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5351e62d76955f2db7612b41b200c87b963756ef' => 
    array (
      0 => 'components/admin/templates/default/nodes/nodes_list_node_item.tpl',
      1 => 1380169115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64686128552739c24a9cc04-76686500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'aTemplate' => 0,
    'level' => 0,
    'last' => 0,
    'first' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52739c24badfb7_08567628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52739c24badfb7_08567628')) {function content_52739c24badfb7_08567628($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['item']->value['node']->getUrl()!="admin"){?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
</td>
		<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
"></td>
		<td>
			<div class="btn-group no-margin">
				<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
				<i class="icon-reorder"></i>
				</a>
				<ul class="dropdown-menu nodes-dropdown">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/content/<?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getFullUrl();?>
" target="_blank"><i class="icon-external-link"></i> Просмотр</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/nodes/add/<?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
/"><i class="icon-plus"></i> Добавить подраздел</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/nodes/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
/"><i class="icon-cog"></i> Свойства раздела</a></li>
					<li class="divider"></li>
					<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteNode(<?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
);"><i class="icon-trash"></i> Удалить</a></li>
				</ul>
			</div>
		</td>
		<td>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?><i class="icon-null"></i><i class="icon-null"></i><i class="icon-null"></i> <?php endfor; endif; ?><?php if ($_smarty_tpl->tpl_vars['item']->value['childs']){?><i class="icon-caret-down"></i> <?php }else{ ?><i class="icon-null"></i> <?php }?>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/content/<?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getTitle();?>
</a>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getUrl();?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['node']->getComponentObject()){?><?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getComponentObject()->getTitle();?>
<?php }?></td>
		<td>
			<a href="#" class="activation" data-component="nodes" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value['node']->getActive()==1){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
">
				<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value['node']->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">Да</span>
			</a>
		</td>
		<td><?php if ($_smarty_tpl->tpl_vars['level']->value){?><?php if (!$_smarty_tpl->tpl_vars['last']->value){?><a href="#" onclick="return ajaxSortDownNode(this, <?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
);"><i class="icon-chevron-down"></i></a> <?php }?><?php if (!$_smarty_tpl->tpl_vars['first']->value){?><a href="#" onclick="return ajaxSortUpNode(this, <?php echo $_smarty_tpl->tpl_vars['item']->value['node']->getId();?>
);"><i class="icon-chevron-up"></i></a><?php }?><?php }?></td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['childs']){?>
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/nodes/nodes_list_node_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'first'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['childs']['first'],'last'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['childs']['last']), 0);?>

		<?php } ?>
	<?php }?>
<?php }?><?php }} ?>