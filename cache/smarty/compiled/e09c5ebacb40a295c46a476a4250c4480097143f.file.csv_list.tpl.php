<?php /* Smarty version Smarty-3.1.12, created on 2022-04-26 08:28:09
         compiled from "components\csv\templates\admin\csv_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149156266473e3c7e73-54678085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e09c5ebacb40a295c46a476a4250c4480097143f' => 
    array (
      0 => 'components\\csv\\templates\\admin\\csv_list.tpl',
      1 => 1650950882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149156266473e3c7e73-54678085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6266473e428783_97060071',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'aRequest' => 0,
    'oContentNode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6266473e428783_97060071')) {function content_6266473e428783_97060071($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
	<form action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
loadfile/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['id'];?>
">
		<div class="tabbable tabbable-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Текст на странице</a></li>
				<li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cog"></i> Дополнительно</a></li>
			</ul>
			<!-- BEGIN TAB CONTENT-->
			<div class="tab-content">
				<!-- BEGIN PORTLET TAB1-->
				<div class="tab-pane active" id="portlet_tab1">
					<input type="file" name="file">
				</div>
				<!-- END PORTLET TAB1-->
				<!-- BEGIN PORTLET TAB1-->
				<div class="tab-pane" id="portlet_tab2">
					<div id="params-portlet" data-node="<?php echo $_smarty_tpl->tpl_vars['oContentNode']->value->getId();?>
" data-component="<?php echo $_smarty_tpl->tpl_vars['oContentNode']->value->getComponent();?>
">Загрузка параметров...</div>
				</div>
				<button type="submit" class="btn blue"><i class="icon-ok"></i> Загрузить данные</button>
			</div>
			<!-- END TAB CONTENT-->
		</div>
	</form>
	<form action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
" class="form-horizontal validate" method="get">
		<div class="tabbable tabbable-custom">
			<p>Сортировка</p>
			<div class="tab-content">
				<button type="submit" name="sort" value="asc" class="btn blue">По возрастанию</button>
				<button type="submit" name="sort" value="desc" class="btn blue">По убыванию</button>
			</div>
		</div>
	</form>
	<div class="portlet-body">
		<?php echo $_smarty_tpl->getSubTemplate ("components/csv/templates/admin/csv_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>