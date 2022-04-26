<?php /* Smarty version Smarty-3.1.12, created on 2014-02-27 11:37:51
         compiled from "components/admin/templates/default/menu/item_list_tr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119710988530ecf2f0178a3-99240648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2480da4096e7fd42bb99e3355a5e702b801322df' => 
    array (
      0 => 'components/admin/templates/default/menu/item_list_tr.tpl',
      1 => 1377532095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119710988530ecf2f0178a3-99240648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'aTemplate' => 0,
    'iMenuId' => 0,
    'level' => 0,
    'last' => 0,
    'first' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530ecf2f3fef58_37379362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ecf2f3fef58_37379362')) {function content_530ecf2f3fef58_37379362($_smarty_tpl) {?><tr>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
</td>
	<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
"></td>
	<td>
		<div class="btn-group no-margin">
			<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
			<i class="icon-reorder"></i>
			</a>
			<ul class="dropdown-menu nodes-dropdown">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/edititem/<?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/additem/<?php echo $_smarty_tpl->tpl_vars['iMenuId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
/"><i class="icon-plus"></i> Добавить подраздел меню</a></li>
				<li class="divider"></li>
				<li><a href="#modalDelete" data-toggle="modal" onclick="modalConfirmDeleteItem(<?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
);"><i class="icon-trash"></i> Удалить</a></li>
			</ul>
		</div>
	</td>
	<td>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['level']->value*2) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <i class="icon-null"></i> <?php endfor; endif; ?>
		<?php if (count($_smarty_tpl->tpl_vars['item']->value['childs'])){?><i class="icon-caret-down"></i><?php }else{ ?><i class="icon-null"></i><?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/edititem/<?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
/">
			<?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getTitle();?>

	</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getImg();?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getNodeObject()->getTitle();?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getUrl();?>
</td>
	<td>
		<a href="#" class="activation" data-component="menu/itemactivation" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value['item']->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
">
			<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value['item']->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['item']->value['item']->getActive()==1){?>Да<?php }else{ ?>Нет<?php }?>
			</span>
		</a>
	</td>
	
	<td>
		<?php if (!$_smarty_tpl->tpl_vars['last']->value){?><a href="#" onclick="return ajaxSortMenu(this, <?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
, 'down');"><i class="icon-chevron-down"></i></a> <?php }?>
		<?php if (!$_smarty_tpl->tpl_vars['first']->value){?><a href="#" onclick="return ajaxSortMenu(this, <?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getId();?>
, 'up');"><i class="icon-chevron-up"></i></a><?php }?>
	</td>
</tr>
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
	<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/menu/item_list_tr.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'first'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['childs']['first'],'last'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['childs']['last']), 0);?>

<?php } ?><?php }} ?>