<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 08:55:46
         compiled from "components\admin\templates\default\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30072626637e2428d38-25989098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6911d64b875d52e6d1e61af4f417e9067455bfbd' => 
    array (
      0 => 'components\\admin\\templates\\default\\dashboard.tpl',
      1 => 1392294682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30072626637e2428d38-25989098',
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
    'iHookCount' => 0,
    'iBannerCount' => 0,
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
  'unifunc' => 'content_626637e2565af6_95513904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_626637e2565af6_95513904')) {function content_626637e2565af6_95513904($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
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
										?????????????? ????????????????
									</div>
								</div>
								<a class="more" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/nodes/">
								???????????????? ?????? <i class="m-icon-swapright m-icon-white"></i>
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
									<div class="desc">???????????????????? ??????????????</div>
								</div>
								<a class="more" href="#">
								???????????????? ?????? <i class="m-icon-swapright m-icon-white"></i>
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
									<div class="desc">???????????? ????????????</div>
								</div>
								<a class="more" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/files/">
								???????????????? ?????????? <i class="m-icon-swapright m-icon-white"></i>
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
									<div class="desc">?????????? ???????? ????????????</div>
								</div>
								<a class="more" href="#">
								???????????????? ?????? <i class="m-icon-swapright m-icon-white"></i>
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
									<h4><i class="icon-bar-chart"></i>??????????????????</h4>
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
									<h4><i class="icon-globe"></i>?????????????? ??????????????</h4>
								</div>
								<div class="portlet-body">
									<div class="row-fluid">
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/nodes/" class="icon-btn span3">
											<i class="icon-sitemap"></i>
											<div>???????????? ????????????????</div>
											<span class="badge badge-important"><?php echo $_smarty_tpl->tpl_vars['iNodesCount']->value;?>
</span>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/files/" class="icon-btn span3">
											<i class="icon-hdd"></i>
											<div>???????????????? ????????????????</div>
											<span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['iDirSize']->value;?>
 Mb</span>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/components/" class="icon-btn span3">
											<i class="icon-cogs"></i>
											<div>????????????????????</div>
										</a>
									</div>
									<div class="row-fluid">
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/hooks/" class="icon-btn span3">
											<i class="icon-th"></i>
											<div>????????</div>
											<span class="badge badge-important"><?php echo $_smarty_tpl->tpl_vars['iHookCount']->value;?>
</span>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/banners/" class="icon-btn span3">
											<i class="icon-bar-chart"></i>
											<div>?????????????????? ??????????????</div>
											<span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['iBannerCount']->value;?>
</span>
										</a>
										
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/" class="icon-btn span3">
											<i class="icon-tasks"></i>
											<div>????????</div>
											<span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['iMenuCount']->value;?>
</span>
										</a>
									</div>
									<div class="row-fluid">
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/templates/" class="icon-btn span3">
											<i class="icon-cog"></i>
											<div>?????????????????? ????????????????</div>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/users/" class="icon-btn span3">
											<i class="icon-group"></i>
											<div>????????????????????????</div>
											<span class="badge badge-info"><?php echo count($_smarty_tpl->tpl_vars['aUsers']->value);?>
</span>
										</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/logs/" class="icon-btn span3">
											<i class="icon-pencil"></i>
											<div>???????????? ??????????????</div>
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
									<h4><i class="icon-bell"></i>???????????? ??????????????</h4>
								</div>
								<div class="portlet-body">
									<!--BEGIN TABS-->
									<div class="tabbable tabbable-custom">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#tab_1_1" data-toggle="tab">??????????????</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_1">
												<div class="scroller" data-height="140px" data-always-visible="1" data-rail-visible1="1">
													<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/logs/logs_list_portlet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
									<h4><i class="icon-bell"></i>???????????????????? ??????????????????????????</h4>
								</div>
								<div class="portlet-body">
									<!--BEGIN TABS-->
									<div class="tabbable tabbable-custom">
										<ul class="nav nav-tabs">
											<li><a href="#tab_2_2" data-toggle="tab">????????????????????</a></li>
											<li class="active"><a href="#tab_2_3" data-toggle="tab">????????????????????????</a></li>
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
																	
																		<?php if (smarty_modifier_date_format(time(),"%Y-%m-%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getDatetime(),"%Y-%m-%d")){?>??????????????<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getDatetime(),"%d %B");?>
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
																	<?php if ($_smarty_tpl->tpl_vars['oItem']->value->getActive()){?><span class="label label-success">??????????????</span><?php }else{ ?><span class="label label-important">???? ??????????????</span><?php }?>
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
				
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>