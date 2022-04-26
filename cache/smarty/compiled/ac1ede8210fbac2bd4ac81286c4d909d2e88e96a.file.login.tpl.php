<?php /* Smarty version Smarty-3.1.12, created on 2013-11-11 19:32:36
         compiled from "components/admin/templates/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9124811415280dc74862874-83522337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1ede8210fbac2bd4ac81286c4d909d2e88e96a' => 
    array (
      0 => 'components/admin/templates/default/login.tpl',
      1 => 1383297300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9124811415280dc74862874-83522337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'aRequest' => 0,
    'aMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5280dc74992656_09702136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5280dc74992656_09702136')) {function content_5280dc74992656_09702136($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
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
<body class="login">
  <!-- BEGIN LOGO -->
  <div class="logo">
    <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/">prCMS 3.0</a>
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="form-vertical login-form" action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/login/" method="post">
      <input type="hidden" name="sub" value="1">
      <h3 class="form-title">Авторизация</h3>
      <div class="control-group">
        <div class="controls">
          <div class="input-icon <?php if ($_smarty_tpl->tpl_vars['aRequest']->value['login']){?>input-icon-error<?php }?> left">
            <i class="icon-user"></i>
            <input class="m-wrap" name="login" type="text" value="<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['login'];?>
" placeholder="Имя пользователя" />
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="input-icon <?php if ($_smarty_tpl->tpl_vars['aRequest']->value['password']){?>input-icon-error<?php }?> left">
            <i class="icon-lock"></i>
            <input class="m-wrap" name="password" type="password" style="" value="<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['password'];?>
" placeholder="Пароль" />
          </div>
        </div>
      </div>
      <div class="form-actions">
        <label class="checkbox">
        <input type="checkbox" /> Запомнить меня
        </label>
        <button href="index.html" id="login-btn" class="btn green pull-right">
        Войти <i class="m-icon-swapright m-icon-white"></i>
        </button>            
      </div>
      <div class="forget-password">
        <h4>Забыли свой пароль?</h4>
        <p>
          Пройдите процедуру <a href="javascript:;" class="" id="forget-password">востановления</a>
          пароля.
        </p>
      </div>
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="form-vertical forget-form" action="index.html">
      <h3 class="">Забыли пароль?</h3>
      <p>Введите адрес вашей электронной почты, чтобы восстановить пароль.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-envelope"></i>
            <input class="m-wrap" type="text" placeholder="Email" />
          </div>
        </div>
      </div>
      <div class="form-actions">
        <a href="javascript:;" id="back-btn" class="btn">
        <i class="m-icon-swapleft"></i>  Назад
        </a>
        <a href="javascript:;" id="forget-btn" class="btn green pull-right">
        Отправить <i class="m-icon-swapright m-icon-white"></i>
        </a>            
      </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div class="copyright">
    &copy; 2008-<?php echo smarty_modifier_date_format(time(),"%Y");?>
. ИК «Приоритет»
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  ==js==
  <script>
  	
    jQuery(document).ready(function() {     
      	App.initLogin();
      	setTimeout(function () {
			
			<?php  $_smarty_tpl->tpl_vars['aMessage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMessage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTemplate']->value['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMessage']->key => $_smarty_tpl->tpl_vars['aMessage']->value){
$_smarty_tpl->tpl_vars['aMessage']->_loop = true;
?>
			showMessage("<?php echo $_smarty_tpl->tpl_vars['aMessage']->value['title'];?>
", "<?php echo $_smarty_tpl->tpl_vars['aMessage']->value['msg'];?>
");
			<?php } ?>
			
		}, 500);
    });
    
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>