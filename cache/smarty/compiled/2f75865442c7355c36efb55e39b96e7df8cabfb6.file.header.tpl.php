<?php /* Smarty version Smarty-3.1.12, created on 2014-02-13 11:55:27
         compiled from "templates/custom/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209151144152fc5e4f42b353-08099157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f75865442c7355c36efb55e39b96e7df8cabfb6' => 
    array (
      0 => 'templates/custom/header.tpl',
      1 => 1392270265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209151144152fc5e4f42b353-08099157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52fc5e4f496e31_11040483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fc5e4f496e31_11040483')) {function content_52fc5e4f496e31_11040483($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['title'];?>
</title>
	
	<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<meta charset="UTF-8">
	<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['meta'];?>

	<link rel='StyleSheet' href='/components/admin/templates/default/assets/fonts/font.css' type='text/css'>
	<link rel='StyleSheet' href='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['path'];?>
css/bootstrap-responsive.css' type='text/css'>
	<link href="//bootstrap-ru.com/assets/css/bootstrap.css" rel="stylesheet">
	<link rel='StyleSheet' href='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['path'];?>
css/styles.css' type='text/css'>
	==css==
	
	<script type="text/javascript" src="http://www.google.ru/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1");
	</script>
	==js==
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
	<header>
		<h2>Шапка</h2>
	</header>
	<section id="body" class="type">
		<h1><?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['page_title'];?>
</h1>
	
	<?php }} ?>