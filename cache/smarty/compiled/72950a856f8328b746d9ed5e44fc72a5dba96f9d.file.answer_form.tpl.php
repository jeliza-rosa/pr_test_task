<?php /* Smarty version Smarty-3.1.12, created on 2014-03-13 10:36:01
         compiled from "components/feedback/templates/admin/answer_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10721122315314380b183d64-14311166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72950a856f8328b746d9ed5e44fc72a5dba96f9d' => 
    array (
      0 => 'components/feedback/templates/admin/answer_form.tpl',
      1 => 1394685359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10721122315314380b183d64-14311166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5314380b24de59_78703916',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'oAnswer' => 0,
    'oResult' => 0,
    'aValue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5314380b24de59_78703916')) {function content_5314380b24de59_78703916($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN SAMPLE FORM PORTLET-->   
		<div class="portlet box blue">
			<div class="portlet-title">
				<h4><i class="icon-reorder"></i><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</h4>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/" class="form-horizontal validate" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oAnswer']->value->getId();?>
">
					<input type="hidden" name="apply" value="0">
					<input type="hidden" name="result" value="<?php echo $_smarty_tpl->tpl_vars['oAnswer']->value->getResult();?>
">
					<input type="hidden" name="active" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
							<li class=""><a href="#portlet_tab2" data-toggle="tab"><i class="icon-envelope"></i> Сообщение</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">
							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Автор",'name'=>"author",'value'=>$_smarty_tpl->tpl_vars['oAnswer']->value->getAuthor(),'popover'=>true,'hint'=>"Заголовок поля. Используются любые символы и буквы.",'validate'=>true,'validate_rule'=>"^.+"."$"), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Текст ответа",'name'=>"text",'value'=>$_smarty_tpl->tpl_vars['oAnswer']->value->getText()), 0);?>


								<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Показывать",'name'=>"active",'value'=>$_smarty_tpl->tpl_vars['oAnswer']->value->getActive()), 0);?>

							</div>
							<!-- END PORTLET TAB1-->

							<!-- BEGIN PORTLET TAB2-->
							<div class="tab-pane" id="portlet_tab2">
								<?php  $_smarty_tpl->tpl_vars["aValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["aValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oResult']->value->getValues(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["aValue"]->key => $_smarty_tpl->tpl_vars["aValue"]->value){
$_smarty_tpl->tpl_vars["aValue"]->_loop = true;
?>
									<?php echo $_smarty_tpl->tpl_vars['aValue']->value['field']->getTitle();?>
: <?php echo $_smarty_tpl->tpl_vars['aValue']->value['value']->getValue();?>
<br>
								<?php } ?>
							</div>
							<!-- END PORTLET TAB2-->
						</div>
					</div>
					<!-- END TAB CONTENT-->
					<div class="form-actions">
						<button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
						<a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
answers/<?php echo $_smarty_tpl->tpl_vars['oResult']->value->getId();?>
/">Отмена</a>
					</div>
				</form>
				<!-- END FORM-->       
			</div>
		</div>
		<!-- END SAMPLE FORM PORTLET-->
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>