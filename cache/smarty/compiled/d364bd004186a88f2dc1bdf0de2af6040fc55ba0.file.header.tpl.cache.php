<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 17:00:48
         compiled from "templates/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49426003052726c88042329-87577620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd364bd004186a88f2dc1bdf0de2af6040fc55ba0' => 
    array (
      0 => 'templates/default/header.tpl',
      1 => 1383303643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49426003052726c88042329-87577620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52726c8809e386_43184859',
  'variables' => 
  array (
    'aTemplate' => 0,
    'oCurrentNode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52726c8809e386_43184859')) {function content_52726c8809e386_43184859($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/function.hook.php';
?><!DOCTYPE html>
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
	<nav><h2>Меню</h2>
		<?php echo smarty_function_hook(array('name'=>"menu",'template'=>"default",'menu'=>"mainmenu"),$_smarty_tpl);?>

	</nav>
	<section>
		<?php echo smarty_function_hook(array('name'=>"breadcrumbs",'template'=>"default",'showroot'=>1),$_smarty_tpl);?>


		<?php echo smarty_function_hook(array('name'=>"banner",'template'=>"default",'group'=>4,'width'=>150,'height'=>100,'crop'=>1),$_smarty_tpl);?>
<hr />
		
		<?php echo smarty_function_hook(array('name'=>"bannergroup",'template'=>"slider",'group'=>4,'width'=>400,'height'=>300,'crop'=>1,'control'=>1,'navigation'=>1),$_smarty_tpl);?>
<hr />
	</section>
	<?php if ($_smarty_tpl->tpl_vars['oCurrentNode']->value->getUrl()=="root"){?>
	<section id="teaser">
		<h1>Текст главной страницы</h1>
		<div class="row-fluid">
			<div class="span12">
	             <h3>На всю ширину</h3>
	             <p>Dantooine. They're on Dantooine. I have traced the Rebel spies to her. Now she is my only link to finding their secret base. The plans you refer to will soon be back in our hands.</p>
	<p>Alderaan? I'm not going to Alderaan. I've got to go home. It's late, I'm in for it as it is. I find your lack of faith disturbing. Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything. There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. Your eyes can deceive you. Don't trust them. Dantooine. They're on Dantooine.</p>
	             
	        </div>
		</div>
		<div class="row-fluid">
			<div class="span6">
	             <h3>На пол страницы</h3>
	             <p>Dantooine. They're on Dantooine. I have traced the Rebel spies to her. Now she is my only link to finding their secret base. The plans you refer to will soon be back in our hands.</p>
	<p>Alderaan? I'm not going to Alderaan. I've got to go home. It's late, I'm in for it as it is. I find your lack of faith disturbing. Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything. There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. Your eyes can deceive you. Don't trust them. Dantooine. They're on Dantooine.</p>
	             
	        </div>
	        <div class="span6">
	             <h3>На пол страницы</h3>
	             <p>Dantooine. They're on Dantooine. I have traced the Rebel spies to her. Now she is my only link to finding their secret base. The plans you refer to will soon be back in our hands.</p>
	<p>Alderaan? I'm not going to Alderaan. I've got to go home. It's late, I'm in for it as it is. I find your lack of faith disturbing. Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything. There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. Your eyes can deceive you. Don't trust them. Dantooine. They're on Dantooine.</p>
	             
	        </div>
		</div>
		<div class="row-fluid">
			<div class="span4">
	             <h3>На треть страницы</h3>
	             <p>Dantooine. They're on Dantooine. I have traced the Rebel spies to her. Now she is my only link to finding their secret base. The plans you refer to will soon be back in our hands.</p>
	<p>Alderaan? I'm not going to Alderaan. I've got to go home. It's late, I'm in for it as it is. I find your lack of faith disturbing. Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything. There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. Your eyes can deceive you. Don't trust them. Dantooine. They're on Dantooine.</p>
	             
	        </div>
	        <div class="span4">
	             <h3>На треть страницы</h3>
	             <p>Dantooine. They're on Dantooine. I have traced the Rebel spies to her. Now she is my only link to finding their secret base. The plans you refer to will soon be back in our hands.</p>
	<p>Alderaan? I'm not going to Alderaan. I've got to go home. It's late, I'm in for it as it is. I find your lack of faith disturbing. Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything. There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. Your eyes can deceive you. Don't trust them. Dantooine. They're on Dantooine.</p>
	             
	        </div>
	        <div class="span4">
	             <h3>На треть страницы</h3>
	             <p>Dantooine. They're on Dantooine. I have traced the Rebel spies to her. Now she is my only link to finding their secret base. The plans you refer to will soon be back in our hands.</p>
	<p>Alderaan? I'm not going to Alderaan. I've got to go home. It's late, I'm in for it as it is. I find your lack of faith disturbing. Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything. There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. Your eyes can deceive you. Don't trust them. Dantooine. They're on Dantooine.</p>
	             
	        </div>
		</div>
		<div class="row-fluid">
			<div class="span6">
	             <h1>This is an H1 header</h1>
	             <h2>This is an H2 header</h2>
	             <h3>This is an H3 header</h3>
	             <h4>This is an H4 header</h4>
	             <h5>This is an H5 header</h5>
	             <h6>This is an H6 header</h6>
	        </div>
	        <div class="span6">
	        	 <h3>Ненумерованый список</h3>
	        	 <ul>
                                    
                    <li>List item one</li>
                    <li>List item two</li>
                    <li>List item three
                    
                        <ul>
                            
                            <li><a href="#">List item four</a></li>
                            <li>List item five</li>
                            <li>List item six</li>
                            
                        </ul>
                    
                    </li>
                    <li>List item seven</li>
                    
                 </ul>
                 <h3>Нумерованный список</h3>
	             <ol>
                                    
                    <li>List item one</li>
                    <li>List item two</li>
                    <li>List item three
                    
                        <ol>
                            
                            <li><a href="#">List item four</a></li>
                            <li>List item five</li>
                            <li>List item six</li>
                            
                        </ol>
                    
                    </li>
                    <li>List item seven</li>
                    
                </ol>
	        </div>
		</div>
	</section>
	<?php }else{ ?>
	<section id="body" class="type">
		<h1><?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['page_title'];?>
</h1>
	<?php }?>
	<?php }} ?>