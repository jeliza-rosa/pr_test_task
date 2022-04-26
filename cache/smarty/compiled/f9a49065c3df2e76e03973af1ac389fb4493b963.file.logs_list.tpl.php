<?php /* Smarty version Smarty-3.1.12, created on 2014-02-05 13:19:15
         compiled from "components/admin/templates/default/logs/logs_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175789043352f1e5f3530bd5-08497184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a49065c3df2e76e03973af1ac389fb4493b963' => 
    array (
      0 => 'components/admin/templates/default/logs/logs_list.tpl',
      1 => 1374652105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175789043352f1e5f3530bd5-08497184',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52f1e5f35f03b6_12036533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f1e5f35f03b6_12036533')) {function content_52f1e5f35f03b6_12036533($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div id="logs">
		<!-- BEGIN DASHBOARD STATS -->
		<div class="row-fluid">
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/logs/logs_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<!-- END DASHBOARD STATS -->
		<div class="clearfix"></div>
		
		<!-- END PORTLET-->
	</div>

<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>