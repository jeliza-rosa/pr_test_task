<?php /* Smarty version Smarty-3.1.12, created on 2013-10-31 20:43:18
         compiled from "components/admin/templates/default/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91577731452726c86703049-28564877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '699bb66c8cfe9a140b2f8154fd0d64b36051edf9' => 
    array (
      0 => 'components/admin/templates/default/dashboard.tpl',
      1 => 1374664499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91577731452726c86703049-28564877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iNodesCount' => 0,
    'aTemplate' => 0,
    'iViews' => 0,
    'iDirSize' => 0,
    'iDbSize' => 0,
    'iMenuCount' => 0,
    'aUsers' => 0,
    'aLogs' => 0,
    'oItem' => 0,
    'aUniqViewsStat' => 0,
    'item' => 0,
    'key' => 0,
    'aViewsStat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52726c869979d0_50847322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52726c869979d0_50847322')) {function content_52726c869979d0_50847322($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	
				<div id="dashboard">
					<!-- BEGIN DASHBOARD STATS -->
					<div class="row-fluid">
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="icon-globe"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php echo $_smarty_tpl->tpl_vars['iNodesCount']->value;?>

									</div>
									<div class="desc">									
										Создано разделов
									</div>
								</div>
								<a class="more" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/nodes/">
								Смотреть все <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="details">
									<div class="number"><?php echo $_smarty_tpl->tpl_vars['iViews']->value;?>
</div>
									<div class="desc">Просмотров сегодня</div>
								</div>
								<a class="more" href="#">
								Смотреть все <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="icon-hdd"></i>
								</div>
								<div class="details">
									<div class="number"><?php echo $_smarty_tpl->tpl_vars['iDirSize']->value;?>
 Mb</div>
									<div class="desc">Размер файлов</div>
								</div>
								<a class="more" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/files/">
								Смотреть файлы <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat yellow">
								<div class="visual">
									<i class="icon-hdd"></i>
								</div>
								<div class="details">
									<div class="number"><?php echo $_smarty_tpl->tpl_vars['iDbSize']->value;?>
 Mb</div>
									<div class="desc">Объем базы данных</div>
								</div>
								<a class="more" href="#">
								Смотреть все <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
					</div>
					<!-- END DASHBOARD STATS -->
					<div class="clearfix"></div>
					
					<div class="row-fluid">
						<div class="span6">
							<!-- BEGIN PORTLET-->
							<div class="portlet solid bordered light-grey">
								<div class="portlet-title">
									<h4><i class="icon-bar-chart"></i>Посещения</h4>
								</div>
								<div class="portlet-body">
									<div id="site_statistics_loading" style="display: none;">
										<img src="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['path'];?>
assets/img/loading.gif" alt="loading">
									</div>
									<div id="site_statistics_content" class="hide">
										<div id="site_statistics" class="chart"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="span6">
							<!-- BEGIN REGIONAL STATS PORTLET-->
							<div class="portlet">
								<div class="portlet-title">
									<h4><i class="icon-globe"></i>Быстрый переход</h4>
								</div>
								<div class="portlet-body">
									<div class="row-fluid">
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/nodes/" class="icon-btn span3">
											<i class="icon-sitemap"></i>
											<div>Дерево разделов</div>
											<span class="badge badge-important"><?php echo $_smarty_tpl->tpl_vars['iNodesCount']->value;?>
</span>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/" class="icon-btn span3">
											<i class="icon-tasks"></i>
											<div>Меню</div>
											<span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['iMenuCount']->value;?>
</span>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/files/" class="icon-btn span3">
											<i class="icon-hdd"></i>
											<div>Файловый менеджер</div>
											<span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['iDirSize']->value;?>
 Mb</span>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/components/" class="icon-btn span3">
											<i class="icon-cogs"></i>
											<div>Компоненты</div>
										</a>
									</div>
									<div class="row-fluid">
										<a href="#" class="icon-btn span3">
											<i class="icon-bar-chart"></i>
											<div>Баннерный барабан</div>
											<span class="badge badge-success">4</span>
										</a>
										<a href="#" class="icon-btn span3">
											<i class="icon-bullhorn"></i>
											<div>Голосования</div>
											<span class="badge badge-info">12</span>
										</a>
										<a href="#" class="icon-btn span3">
											<i class="icon-comments-alt"></i>
											<div>Комментарии</div>
											<span class="badge badge-important">3</span>
										</a>
										<a href="#" class="icon-btn span3">
											<i class="icon-th"></i>
											<div>Модули</div>
										</a>
									</div>
									<div class="row-fluid">
										<a href="#" class="icon-btn span3">
											<i class="icon-cog"></i>
											<div>Настройки</div>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/users/" class="icon-btn span3">
											<i class="icon-group"></i>
											<div>Пользователи</div>
											<span class="badge badge-info"><?php echo count($_smarty_tpl->tpl_vars['aUsers']->value);?>
</span>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/logs/" class="icon-btn span3">
											<i class="icon-pencil"></i>
											<div>Журнал событий</div>
											<span class="badge badge-info"><?php echo count($_smarty_tpl->tpl_vars['aLogs']->value);?>
</span>
										</a>
									</div>

								</div>
							</div>
							<!-- END REGIONAL STATS PORTLET-->
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<div class="portlet paddingless">
								<div class="portlet-title line">
									<h4><i class="icon-bell"></i>Журнал событий</h4>
								</div>
								<div class="portlet-body">
									<!--BEGIN TABS-->
									<div class="tabbable tabbable-custom">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#tab_1_1" data-toggle="tab">Система</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_1">
												<div class="scroller" data-height="140px" data-always-visible="1" data-rail-visible1="1">
													<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/logs/logs_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

												</div>
											</div>
										</div>
									</div>
									<!--END TABS-->
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
											
											
											
						<div class="span6">
							<!-- BEGIN PORTLET-->
							<div class="portlet paddingless">
								<div class="portlet-title line">
									<h4><i class="icon-bell"></i>Активность пользователей</h4>
								</div>
								<div class="portlet-body">
									<!--BEGIN TABS-->
									<div class="tabbable tabbable-custom">
										<ul class="nav nav-tabs">
											<li><a href="#tab_2_2" data-toggle="tab">Активность</a></li>
											<li class="active"><a href="#tab_2_3" data-toggle="tab">Пользователи</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane" id="tab_2_2">
												<div class="scroller" data-height="140px" data-always-visible="1" data-rail-visible1="1">
													<ul class="feeds">
														<?php  $_smarty_tpl->tpl_vars["oItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oItem"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aLogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["oItem"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["oItem"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["oItem"]->key => $_smarty_tpl->tpl_vars["oItem"]->value){
$_smarty_tpl->tpl_vars["oItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["oItem"]->iteration++;
 $_smarty_tpl->tpl_vars["oItem"]->last = $_smarty_tpl->tpl_vars["oItem"]->iteration === $_smarty_tpl->tpl_vars["oItem"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['last'] = $_smarty_tpl->tpl_vars["oItem"]->last;
?>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<?php if ($_smarty_tpl->tpl_vars['oItem']->value->getType("login-success")){?>
																		<div class="label label-success">								
																			<i class="icon-bell"></i>
																		</div>
																		<?php }else{ ?>
																		<div class="label label-success">								
																			<i class="icon-bell"></i>
																		</div>
																		<?php }?>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getText();?>

																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	
																		<?php if (smarty_modifier_date_format(time(),"%Y-%m-%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getDatetime(),"%Y-%m-%d")){?>Сегодня<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getDatetime(),"%d %B");?>
<?php }?>, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getDatetime(),"%H:%M");?>


																</div>
															</div>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<div class="tab-pane active" id="tab_2_3">
												<div class="scroller" data-height="140px" data-always-visible="1" data-rail-visible1="1">
													<div class="row-fluid">
														<?php  $_smarty_tpl->tpl_vars["oItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oItem"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["oItem"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["oItem"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["oItem"]->key => $_smarty_tpl->tpl_vars["oItem"]->value){
$_smarty_tpl->tpl_vars["oItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["oItem"]->iteration++;
 $_smarty_tpl->tpl_vars["oItem"]->last = $_smarty_tpl->tpl_vars["oItem"]->iteration === $_smarty_tpl->tpl_vars["oItem"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['last'] = $_smarty_tpl->tpl_vars["oItem"]->last;
?>
														<div class="span6 user-info">
															<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['path'];?>
assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#"><?php if ($_smarty_tpl->tpl_vars['oItem']->value->getName()){?><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getName();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getLogin();?>
<?php }?></a> 
																	<?php if ($_smarty_tpl->tpl_vars['oItem']->value->getActive()){?><span class="label label-success">Активен</span><?php }else{ ?><span class="label label-important">Не активен</span><?php }?>
																</div>
																<div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getRegdate(),"%d %B %Y %H:%M");?>
</div>
															</div>
														</div>
														<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?></div><div class="row-fluid"><?php }?>
														<?php } ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--END TABS-->
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>

<script>


	var pageviews = [
    
    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aUniqViewsStat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["item"]->key;
 $_smarty_tpl->tpl_vars["item"]->iteration++;
 $_smarty_tpl->tpl_vars["item"]->last = $_smarty_tpl->tpl_vars["item"]->iteration === $_smarty_tpl->tpl_vars["item"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['last'] = $_smarty_tpl->tpl_vars["item"]->last;
?>
        [<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
']<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?>,<?php }?>
    <?php } ?>
    
    ];
    
    var visitors = [
    
    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aViewsStat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["item"]->key;
 $_smarty_tpl->tpl_vars["item"]->iteration++;
 $_smarty_tpl->tpl_vars["item"]->last = $_smarty_tpl->tpl_vars["item"]->iteration === $_smarty_tpl->tpl_vars["item"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['last'] = $_smarty_tpl->tpl_vars["item"]->last;
?>
        [<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
]<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?>,<?php }?>
    <?php } ?>
    
    ];
	
</script>
				
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>