<?php /* Smarty version Smarty-3.1.12, created on 2014-04-16 15:29:12
         compiled from "components/gallery/templates/admin/gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:653303777530b25d3afcdc2-17163954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda7a1f71bfeb89b0d92c14e56f5b2fa46eed141' => 
    array (
      0 => 'components/gallery/templates/admin/gallery_list.tpl',
      1 => 1395030582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653303777530b25d3afcdc2-17163954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530b25d401c428_07778511',
  'variables' => 
  array (
    'sFormTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b25d401c428_07778511')) {function content_530b25d401c428_07778511($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-cogs"></i><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</h4>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body">
		<?php echo $_smarty_tpl->getSubTemplate ("components/gallery/templates/admin/gallery_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>