<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 10:01:23
         compiled from "components\news\templates\admin\news_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268166266474394dca1-95766956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70f2b9e8fb4a82ba65220fd815089e833b1b6db' => 
    array (
      0 => 'components\\news\\templates\\admin\\news_list.tpl',
      1 => 1370835317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268166266474394dca1-95766956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6266474398b171_62265600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6266474398b171_62265600')) {function content_6266474398b171_62265600($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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