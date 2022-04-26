<?php /* Smarty version Smarty-3.1.12, created on 2014-04-15 16:01:31
         compiled from "components/catalog/templates/admin/groups_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:993174224534d037bd04047-38989465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bed2a9c5f23b01d1c7ab5c5e27d9321ce0aab373' => 
    array (
      0 => 'components/catalog/templates/admin/groups_list.tpl',
      1 => 1378189315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '993174224534d037bd04047-38989465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'sFormTitle' => 0,
    'oParent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_534d037bdf97d8_23758439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534d037bdf97d8_23758439')) {function content_534d037bdf97d8_23758439($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4 style="display: block;"><i class="icon-cogs"></i><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</a> <?php if ($_smarty_tpl->tpl_vars['oParent']->value){?>&nbsp;<i class="icon-angle-right"></i> <i class="icon-folder-close"></i> <?php echo $_smarty_tpl->tpl_vars['oParent']->value->getTitle();?>
<?php }?></h4>
	</div>
	<div class="portlet-body">
		<?php echo $_smarty_tpl->getSubTemplate ("components/catalog/templates/admin/groups_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>