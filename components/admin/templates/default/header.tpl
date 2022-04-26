<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>{$aTemplate.title}</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="{$aTemplate.description}" name="description" />
	<meta content="{$aTemplate.keywords}" name="keywords" />
	<meta content="" name="author" />
	==css==
	<link rel="shortcut icon" href="{$aTemplate.host}components/admin/templates/default/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top" style="display:none;">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse "><!-- navbar-fixed-top -->
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="{$aTemplate.host}admin/">
					prCMS 3.0
					<img src="{$aTemplate.path}assets/img/logo-new.png" alt="vprioritete.ru" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="{$aTemplate.path}assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->	
					<li class="dropdown">
						<a href="/" class="dropdown-toggle" target="_blank">
						<i class="icon-globe"></i>
						</a>
					</li>
					<li class="dropdown">
						<a href="http://vprioritete.ru" class="dropdown-toggle" target="_blank">
						<i class="icon-question-sign"></i>
						</a>
					</li>
					<li class="dropdown">
						<a href="{$aTemplate.host}admin/cache/clean/" class="dropdown-toggle" title="Обновить кэш">
						<i class="icon-refresh"></i>
						</a>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!--
<li class="dropdown" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope-alt"></i>
						<span class="badge">3</span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<li>
								<p>У вас 3 новых сообщения</p>
							</li>
							<li>
								<a href="#">
								<span class="subject">
								<span class="from">Обратная связь</span>
								<span class="time">Только что</span>
								</span>
								<span class="message">
								Исправить почту на корпоративную
								</span>  
								</a>
							</li>
							<li>
								<a href="#">
								<span class="subject">
								<span class="from">Карта сайта</span>
								<span class="time">16 минут</span>
								</span>
								<span class="message">
								Добавить каталог в карту сайта. Сделать sitemap.xml.
								</span>  
								</a>
							</li>
							<li>
								<a href="#">
								<span class="subject">
								<span class="from">Сайт застройщика</span>
								<span class="time">2 часа</span>
								</span>
								<span class="message">
								Добавить выгрузку всех квартир с планировками.
								</span>  
								</a>
							</li>
							<li class="external">
								<a href="#">Смотреть все <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
-->
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="{$aTemplate.path}assets/img/avatar1_small.jpg" />
						<span class="username">{$oAdminUser->getLogin()}</span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> Мой профиль</a></li>
							<li class="divider"></li>
							<li><a href="{$aTemplate.host}admin/login/exit/"><i class="icon-key"></i> Выйти</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<!--
<div class="slide hide">
				<i class="icon-angle-left"></i>
			</div>
			<form class="sidebar-search">
				<div class="input-box">
					<input type="text" class="" placeholder="Поиск" />
					<input type="button" class="submit" value=" " />
				</div>
			</form>
			<div class="clearfix"></div>
-->
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul>
				<li class="{if $sAction=="dashboard"}active{/if}">
					<a href="{$aTemplate.host}admin/">
					<i class="icon-home"></i> Рабочий стол
					{if $sAction=="dashboard"}<span class="selected"></span>{/if}
					</a>					
				</li>
				{*if $oAdminUser->getAccess("nodes")>="R"*}
					<li class="{if $sAction=="nodes"}active{/if}"><a class="" href="{$aTemplate.host}admin/nodes/"><i class="icon-sitemap"></i> Дерево разделов{if $sAction=="nodes"}<span class="selected"></span>{/if}</a></li>
				{*/if*}
				{if $oAdminUser->getAccess("menu")>="R"}
					<li class="{if $sAction=="menu"}active{/if}"><a class="" href="{$aTemplate.host}admin/menu/"><i class="icon-tasks"></i> Меню{if $sAction=="menu"}<span class="selected"></span>{/if}</a></li>
				{/if}
				{if $oAdminUser->getAccess("files")>="R"}
					<li class="{if $sAction=="files"}active{/if}"><a class="" href="{$aTemplate.host}admin/files/"><i class="icon-hdd"></i> Файловый менеджер{if $sAction=="files"}<span class="selected"></span>{/if}</a></li>
				{/if}
				{if $oAdminUser->getAccess("components")>="R"}
				<li class="has-sub {if $sAction=="components"}active{/if}">
					<a href="javascript:;" class="">
					<i class="icon-cogs"></i> Компоненты
					<span class="arrow"></span>
					{if $sAction=="components"}<span class="selected"></span>{/if}
					</a>
					<ul class="sub">
						<li><a class="" href="{$aTemplate.host}admin/components/"><i class="icon-list"></i> Все компоненты</a></li>
						<li><a class="" href="{$aTemplate.host}admin/banners/"><i class="icon-cog"></i> Баннерный барабан</a></li>
						{*<li><a class="" href="{$aTemplate.host}admin/components/"><i class="icon-cog"></i> Голосования</a></li>
						<li><a class="" href="{$aTemplate.host}admin/components/"><i class="icon-cog"></i> Комментарии</a></li>*}
						<li><a class="" href="{$aTemplate.host}admin/hooks/"><i class="icon-cog"></i> Хуки</a></li>
						
					</ul>
				</li>
				{/if}
				{if $oAdminUser->getAccess("users")>="R"}
				<!-- <li class="{if $sAction=="modules"}active{/if}"><a class="" href="grids.html"><i class="icon-th"></i> Модули{if $sAction=="modules"}<span class="selected"></span>{/if}</a></li> -->
				<li class="has-sub {if $sAction=="options"}active{/if}">
					<a href="javascript:;" class="">
					<i class="icon-cog"></i> Настройки
					<span class="arrow"></span>
					{if $sAction=="nodes"}<span class="selected"></span>{/if}
					</a>
					<ul class="sub">
						<li><a class="" href="{$aTemplate.host}admin/users/"><i class="icon-user"></i> Пользователи</a></li>
						<li><a class="" href="{$aTemplate.host}admin/logs/"><i class="icon-edit"></i> Журнал событий</a></li>
						<li><a class="" href="{$aTemplate.host}admin/templates/"><i class="icon-cog"></i> Шаблоны сайта</a></li>
					</ul>
				</li>
				{/if}
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">  	
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->		
						<h3 class="page-title">
							{$aTemplate.page_title}
							<small>{$sPageTitleSmall}</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="{$aTemplate.host}admin/">Главная</a> 
								<span class="icon-angle-right"></span>
							</li>
							<li><a href="{$aTemplate.host}admin/{$sAction}/">{$aTemplate.page_title}</a></li>
							{if $iContentNodeId}<li><span class="icon-angle-right"></span> <a href="{$aTemplate.host}admin/content/{$iContentNodeId}/">{$oCurrentNode->getTitle()}</a></li>{/if}
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
