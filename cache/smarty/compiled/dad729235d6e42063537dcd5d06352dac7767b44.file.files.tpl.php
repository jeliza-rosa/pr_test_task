<?php /* Smarty version Smarty-3.1.12, created on 2013-11-28 23:00:10
         compiled from "components/admin/templates/default/files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9636134945297769a50a0c1-04792974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad729235d6e42063537dcd5d06352dac7767b44' => 
    array (
      0 => 'components/admin/templates/default/files.tpl',
      1 => 1370835326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9636134945297769a50a0c1-04792974',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5297769a565758_00375677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297769a565758_00375677')) {function content_5297769a565758_00375677($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-sitemap"></i>Файловый менеджер</h4>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body">
		<div id="elfinder"></div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>