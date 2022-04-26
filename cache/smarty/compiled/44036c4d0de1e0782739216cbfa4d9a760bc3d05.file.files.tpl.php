<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 09:10:26
         compiled from "components\admin\templates\default\files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1657262663b52c40ef5-53745267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44036c4d0de1e0782739216cbfa4d9a760bc3d05' => 
    array (
      0 => 'components\\admin\\templates\\default\\files.tpl',
      1 => 1370835326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1657262663b52c40ef5-53745267',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_62663b52c6cfb8_25308795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62663b52c6cfb8_25308795')) {function content_62663b52c6cfb8_25308795($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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