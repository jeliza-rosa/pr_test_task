{include file="components/admin/templates/default/header.tpl"}
	
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
										{$iNodesCount}
									</div>
									<div class="desc">									
										Создано разделов
									</div>
								</div>
								<a class="more" href="{$aTemplate.host}admin/nodes/">
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
									<div class="number">{$iViews}</div>
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
									<div class="number">{$iDirSize} Mb</div>
									<div class="desc">Размер файлов</div>
								</div>
								<a class="more" href="{$aTemplate.host}admin/files/">
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
									<div class="number">{$iDbSize} Mb</div>
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
										<img src="{$aTemplate.path}assets/img/loading.gif" alt="loading">
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
										<a href="{$aTemplate.host}admin/nodes/" class="icon-btn span3">
											<i class="icon-sitemap"></i>
											<div>Дерево разделов</div>
											<span class="badge badge-important">{$iNodesCount}</span>
										</a>
										<a href="{$aTemplate.host}admin/files/" class="icon-btn span3">
											<i class="icon-hdd"></i>
											<div>Файловый менеджер</div>
											<span class="badge badge-success">{$iDirSize} Mb</span>
										</a>
										<a href="{$aTemplate.host}admin/components/" class="icon-btn span3">
											<i class="icon-cogs"></i>
											<div>Компоненты</div>
										</a>
									</div>
									<div class="row-fluid">
										<a href="{$aTemplate.host}admin/hooks/" class="icon-btn span3">
											<i class="icon-th"></i>
											<div>Хуки</div>
											<span class="badge badge-important">{$iHookCount}</span>
										</a>
										<a href="{$aTemplate.host}admin/banners/" class="icon-btn span3">
											<i class="icon-bar-chart"></i>
											<div>Баннерный барабан</div>
											<span class="badge badge-success">{$iBannerCount}</span>
										</a>
										{*<a href="#" class="icon-btn span3">
											<i class="icon-bullhorn"></i>
											<div>Голосования</div>
											<span class="badge badge-info">12</span>
										</a>
										<a href="#" class="icon-btn span3">
											<i class="icon-comments-alt"></i>
											<div>Комментарии</div>
											<span class="badge badge-important">3</span>
										</a>*}
										<a href="{$aTemplate.host}admin/menu/" class="icon-btn span3">
											<i class="icon-tasks"></i>
											<div>Меню</div>
											<span class="badge badge-success">{$iMenuCount}</span>
										</a>
									</div>
									<div class="row-fluid">
										<a href="{$aTemplate.host}admin/templates/" class="icon-btn span3">
											<i class="icon-cog"></i>
											<div>Настройки шаблонов</div>
										</a>
										<a href="{$aTemplate.host}admin/users/" class="icon-btn span3">
											<i class="icon-group"></i>
											<div>Пользователи</div>
											<span class="badge badge-info">{$aUsers|count}</span>
										</a>
										<a href="{$aTemplate.host}admin/logs/" class="icon-btn span3">
											<i class="icon-pencil"></i>
											<div>Журнал событий</div>
											<span class="badge badge-info">{$aLogs|count}</span>
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
													{include file="components/admin/templates/default/logs/logs_list_portlet.tpl"}
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
														{foreach from=$aLogs item="oItem" name="foo"}
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		{if $oItem->getType("login-success")}
																		<div class="label label-success">								
																			<i class="icon-bell"></i>
																		</div>
																		{else}
																		<div class="label label-success">								
																			<i class="icon-bell"></i>
																		</div>
																		{/if}
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			{$oItem->getText()}
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	
																		{if $smarty.now|date_format:"%Y-%m-%d"==$oItem->getDatetime()|date_format:"%Y-%m-%d"}Сегодня{else}{$oItem->getDatetime()|date_format:"%d %B"}{/if}, {$oItem->getDatetime()|date_format:"%H:%M"}

																</div>
															</div>
														</li>
														{/foreach}
													</ul>
												</div>
											</div>
											<div class="tab-pane active" id="tab_2_3">
												<div class="scroller" data-height="140px" data-always-visible="1" data-rail-visible1="1">
													<div class="row-fluid">
														{foreach from=$aUsers item="oItem" name="foo"}
														<div class="span6 user-info">
															<img alt="" src="{$aTemplate.path}assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">{if $oItem->getName()}{$oItem->getName()}{else}{$oItem->getLogin()}{/if}</a> 
																	{if $oItem->getActive()}<span class="label label-success">Активен</span>{else}<span class="label label-important">Не активен</span>{/if}
																</div>
																<div>{$oItem->getRegdate()|date_format:"%d %B %Y %H:%M"}</div>
															</div>
														</div>
														{if ($smarty.foreach.foo.index+1)%2==0}</div><div class="row-fluid">{/if}
														{/foreach}
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
{literal}
<script>


	var pageviews = [
    {/literal}
    {foreach from=$aUniqViewsStat name="foo" item="item" key="key"}
        [{$smarty.foreach.foo.index}, {$item}, '{$key}']{if !$smarty.foreach.foo.last},{/if}
    {/foreach}
    {literal}
    ];
    
    var visitors = [
    {/literal}
    {foreach from=$aViewsStat name="foo" item="item" key="key"}
        [{$smarty.foreach.foo.index}, {$item}]{if !$smarty.foreach.foo.last},{/if}
    {/foreach}
    {literal}
    ];
	
</script>
{/literal}				
{include file="components/admin/templates/default/footer.tpl"}