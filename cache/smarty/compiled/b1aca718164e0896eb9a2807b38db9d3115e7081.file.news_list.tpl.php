<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 10:33:36
         compiled from "components/news/templates/admin/news_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20927812652830120e81de6-06393009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1aca718164e0896eb9a2807b38db9d3115e7081' => 
    array (
      0 => 'components/news/templates/admin/news_list.tpl',
      1 => 1370835317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20927812652830120e81de6-06393009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52830120ef8307_13241403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52830120ef8307_13241403')) {function content_52830120ef8307_13241403($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
		<?php echo $_smarty_tpl->getSubTemplate ("components/news/templates/admin/news_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>