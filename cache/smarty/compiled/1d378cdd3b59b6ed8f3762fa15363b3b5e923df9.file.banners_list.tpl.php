<?php /* Smarty version Smarty-3.1.12, created on 2013-11-30 21:39:01
         compiled from "components/admin/templates/default/banners/banners_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13593937705282ff4d2efa01-48794915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d378cdd3b59b6ed8f3762fa15363b3b5e923df9' => 
    array (
      0 => 'components/admin/templates/default/banners/banners_list.tpl',
      1 => 1384779652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13593937705282ff4d2efa01-48794915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5282ff4d3f22e2_71508181',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sAction' => 0,
    'iGroupId' => 0,
    'aBanners' => 0,
    'oBanner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282ff4d3f22e2_71508181')) {function content_5282ff4d3f22e2_71508181($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-sitemap"></i><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</h4>
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
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/add/<?php echo $_smarty_tpl->tpl_vars['iGroupId']->value;?>
/" class="btn green"><i class="icon-plus"></i> Добавить баннер</a>
			<a href="#" class="btn" data-set="/admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/deleteall/" id="deleteChosen"><i class="icon-trash"></i> Удалить выбранные</a>
			<a href="/admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/" class="btn" ><i class="icon-arrow-left"></i> Назад</a>
		</p>
		<table id="table1" class="table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th width="10">ID</th>
					<th width="10">
						<input type="checkbox" class="group-checkable" data-set="#table1 .checkboxes">
					</th>
					<th width="10"><i class="icon-reorder"></i></th>
					<th><i class="icon-bookmark"></i> Заголовок баннера</th>
					<th><i class="icon-globe"></i> URL</th>
					<th width="100"><i class="icon-eye-open"></i> Показывать</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['oBanner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBanner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBanners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBanner']->key => $_smarty_tpl->tpl_vars['oBanner']->value){
$_smarty_tpl->tpl_vars['oBanner']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getId();?>
</td>
						<td><input name="item-checkbox[]" type="checkbox" class="checkboxes item-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getId();?>
"></td>
						<td>
							<div class="btn-group no-margin">
								<a class="btn no-padding no-background" href="#" data-toggle="dropdown">
								<i class="icon-reorder"></i>
								</a>
								<ul class="dropdown-menu nodes-dropdown">
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getId();?>
/"><i class="icon-pencil"></i> Редактировать</a></li>
									<li><a href="#modalDelete" data-toggle="modal" onclick=""><i class="icon-trash"></i> Удалить</a></li>
								</ul>
							</div>
						</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getId();?>
/">
								<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getTitle();?>

							</a>
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getUrl();?>
</td>
						<td>
							<a href="#" class="activation" data-component="<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
" data-action="<?php if ($_smarty_tpl->tpl_vars['oBanner']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getId();?>
">
								<span class="badge <?php if ($_smarty_tpl->tpl_vars['oBanner']->value->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
									<?php if ($_smarty_tpl->tpl_vars['oBanner']->value->getActive()==1){?>Да<?php }else{ ?>Нет<?php }?>
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
		<p>Вы действительно хотите удалить этот элемент?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Нет</button>
		<button data-dismiss="modal" class="btn blue submit">Да</button>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>