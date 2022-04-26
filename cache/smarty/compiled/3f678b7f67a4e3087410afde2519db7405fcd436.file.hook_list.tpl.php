<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:41:56
         compiled from "components/admin/templates/default/hooks/hook_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22595447252837270d2e5f8-03208058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f678b7f67a4e3087410afde2519db7405fcd436' => 
    array (
      0 => 'components/admin/templates/default/hooks/hook_list.tpl',
      1 => 1384346515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22595447252837270d2e5f8-03208058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52837270ecba44_44833906',
  'variables' => 
  array (
    'sFormTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52837270ecba44_44833906')) {function content_52837270ecba44_44833906($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
	<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/hooks/hook_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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