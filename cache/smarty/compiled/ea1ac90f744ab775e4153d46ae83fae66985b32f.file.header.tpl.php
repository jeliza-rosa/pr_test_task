<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 08:55:46
         compiled from "components\admin\templates\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17489626637e25794a8-11156104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea1ac90f744ab775e4153d46ae83fae66985b32f' => 
    array (
      0 => 'components\\admin\\templates\\default\\header.tpl',
      1 => 1394011362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17489626637e25794a8-11156104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'oAdminUser' => 0,
    'sAction' => 0,
    'sPageTitleSmall' => 0,
    'iContentNodeId' => 0,
    'oCurrentNode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_626637e260cf75_56271201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_626637e260cf75_56271201')) {function content_626637e260cf75_56271201($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['title'];?>
</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['description'];?>
" name="description" />
	<meta content="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['keywords'];?>
" name="keywords" />
	<meta content="" name="author" />
	==css==
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
components/admin/templates/default/assets/img/favicon.ico" />
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
				<a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/">
					prCMS 3.0
					<img src="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['path'];?>
assets/img/logo-new.png" alt="vprioritete.ru" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['path'];?>
assets/img/menu-toggler.png" alt="" />
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
						<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/cache/clean/" class="dropdown-toggle" title="Обновить кэш">
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
						<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['path'];?>
assets/img/avatar1_small.jpg" />
						<span class="username"><?php echo $_smarty_tpl->tpl_vars['oAdminUser']->value->getLogin();?>
</span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> Мой профиль</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/login/exit/"><i class="icon-key"></i> Выйти</a></li>
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
				<li class="<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="dashboard"){?>active<?php }?>">
					<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/">
					<i class="icon-home"></i> Рабочий стол
					<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="dashboard"){?><span class="selected"></span><?php }?>
					</a>					
				</li>
				
					<li class="<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="nodes"){?>active<?php }?>"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/nodes/"><i class="icon-sitemap"></i> Дерево разделов<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="nodes"){?><span class="selected"></span><?php }?></a></li>
				
				<?php if ($_smarty_tpl->tpl_vars['oAdminUser']->value->getAccess("menu")>="R"){?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="menu"){?>active<?php }?>"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/menu/"><i class="icon-tasks"></i> Меню<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="menu"){?><span class="selected"></span><?php }?></a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['oAdminUser']->value->getAccess("files")>="R"){?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="files"){?>active<?php }?>"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/files/"><i class="icon-hdd"></i> Файловый менеджер<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="files"){?><span class="selected"></span><?php }?></a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['oAdminUser']->value->getAccess("components")>="R"){?>
				<li class="has-sub <?php if ($_smarty_tpl->tpl_vars['sAction']->value=="components"){?>active<?php }?>">
					<a href="javascript:;" class="">
					<i class="icon-cogs"></i> Компоненты
					<span class="arrow"></span>
					<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="components"){?><span class="selected"></span><?php }?>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/components/"><i class="icon-list"></i> Все компоненты</a></li>
						<li><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/banners/"><i class="icon-cog"></i> Баннерный барабан</a></li>
						
						<li><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/hooks/"><i class="icon-cog"></i> Хуки</a></li>
						
					</ul>
				</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['oAdminUser']->value->getAccess("users")>="R"){?>
				<!-- <li class="<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="modules"){?>active<?php }?>"><a class="" href="grids.html"><i class="icon-th"></i> Модули<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="modules"){?><span class="selected"></span><?php }?></a></li> -->
				<li class="has-sub <?php if ($_smarty_tpl->tpl_vars['sAction']->value=="options"){?>active<?php }?>">
					<a href="javascript:;" class="">
					<i class="icon-cog"></i> Настройки
					<span class="arrow"></span>
					<?php if ($_smarty_tpl->tpl_vars['sAction']->value=="nodes"){?><span class="selected"></span><?php }?>
					</a>
					<ul class="sub">
						<li><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/users/"><i class="icon-user"></i> Пользователи</a></li>
						<li><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/logs/"><i class="icon-edit"></i> Журнал событий</a></li>
						<li><a class="" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/templates/"><i class="icon-cog"></i> Шаблоны сайта</a></li>
					</ul>
				</li>
				<?php }?>
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
							<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['page_title'];?>

							<small><?php echo $_smarty_tpl->tpl_vars['sPageTitleSmall']->value;?>
</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/">Главная</a> 
								<span class="icon-angle-right"></span>
							</li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['page_title'];?>
</a></li>
							<?php if ($_smarty_tpl->tpl_vars['iContentNodeId']->value){?><li><span class="icon-angle-right"></span> <a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/content/<?php echo $_smarty_tpl->tpl_vars['iContentNodeId']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['oCurrentNode']->value->getTitle();?>
</a></li><?php }?>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
<?php }} ?>