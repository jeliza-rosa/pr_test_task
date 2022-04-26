<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 18:32:37
         compiled from "components/admin/templates/default/denied/denied.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33419632152739f65698420-99738015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '107d6dbf3b69c55ad341856123e5151c70d8174e' => 
    array (
      0 => 'components/admin/templates/default/denied/denied.tpl',
      1 => 1376478696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33419632152739f65698420-99738015',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52739f657111b6_93483773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52739f657111b6_93483773')) {function content_52739f657111b6_93483773($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-sitemap"></i>Доступ запрещен</h4>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>