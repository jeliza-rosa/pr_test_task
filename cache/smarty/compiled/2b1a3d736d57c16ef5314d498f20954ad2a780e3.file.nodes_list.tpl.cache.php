<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 18:18:44
         compiled from "components/admin/templates/default/nodes/nodes_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196609572452739c249354c6-39925043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1a3d736d57c16ef5314d498f20954ad2a780e3' => 
    array (
      0 => 'components/admin/templates/default/nodes/nodes_list.tpl',
      1 => 1372340765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196609572452739c249354c6-39925043',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52739c24a1a068_03621341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52739c24a1a068_03621341')) {function content_52739c24a1a068_03621341($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-sitemap"></i>Разделы сайта</h4>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body">
		<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/nodes/nodes_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>