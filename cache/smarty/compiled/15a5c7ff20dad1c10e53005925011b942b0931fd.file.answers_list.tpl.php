<?php /* Smarty version Smarty-3.1.12, created on 2014-03-12 20:53:29
         compiled from "components/feedback/templates/admin/answers_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10819137453145fbc9b46f0-54414125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15a5c7ff20dad1c10e53005925011b942b0931fd' => 
    array (
      0 => 'components/feedback/templates/admin/answers_list.tpl',
      1 => 1394635921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10819137453145fbc9b46f0-54414125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53145fbca29e04_08162078',
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'oResult' => 0,
    'aAnswers' => 0,
    'item' => 0,
    'aValue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53145fbca29e04_08162078')) {function content_53145fbca29e04_08162078($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="portlet">
	<div class="portlet-title">
		<h4><i class="icon-cogs"></i><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</h4>
	</div>
	<div class="portlet-body">
		<p>	
			<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
answer_add/<?php echo $_smarty_tpl->tpl_vars['oResult']->value->getId();?>
/" class="btn green"><i class="icon-edit"></i> Написать ответ</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
" class="btn">Назад</a>
		</p>
		<div class="tabbable tabbable-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
				<li class=""><a href="#portlet_tab2" data-toggle="tab"><i class="icon-envelope"></i> Сообщение</a></li>
			</ul>
			<!-- BEGIN TAB CONTENT-->
			<div class="tab-content">
				<div class="tab-pane active" id="portlet_tab1">
					<table class="table table-striped table-bordered table-advance table-hover">
						<thead>
							<tr>
								<th width="10">ID</th>
								<th width="100">Редактировать</th>
								<th><i class="icon-user"></i> Автор</th>
								<th><i class="icon-bookmark"></i> Содержимое</th>
								<th width="150"><i class="icon-calendar"></i> Дата</th>
								<th width="100"><i class="icon-eye-open"></i> Показывать</th>
								<th width="100"><i class="icon-external-link"></i> Отправлен</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aAnswers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
</td>
									<td>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
answer_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
/"><i class="icon-pencil"></i></a>
									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['item']->value->getAuthor();?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['item']->value->getPreview();?>

									</td>
									<td>
										<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->getDatetime());?>

									</td>
									<td>
										<a href="#" class="activation" data-component="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
answer_activate" data-action="<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()){?>de<?php }?>activate" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
											<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
												<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()==1){?>Да<?php }else{ ?>Нет<?php }?>
											</span>
										</a>
									</td>
									<td>
										<span class="badge <?php if ($_smarty_tpl->tpl_vars['item']->value->getSent()==1){?>badge-success<?php }else{ ?>badge-important<?php }?>">
											<?php if ($_smarty_tpl->tpl_vars['item']->value->getSent()==1){?>Да<?php }else{ ?>Нет<?php }?>
										</span>
									</td>
								</tr>
							<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
								<tr>
									<td colspan="6"> Ответов нет</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
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
			</div>
		</div>



		<div id="modalDelete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="modalDeleteLabel">Подтверждение удаления</h3>
			</div>
			<div class="modal-body">
				<p>Вы действительно хотите удалить этот элемент?</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Нет</button>
				<button data-dismiss="modal" class="btn blue submit">Да</button>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>