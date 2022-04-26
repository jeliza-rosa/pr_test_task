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
<body class="login">
  <!-- BEGIN LOGO -->
  <div class="logo">
    <a class="brand" href="{$aTemplate.host}admin/">prCMS 3.0</a>
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="form-vertical login-form" action="{$aTemplate.host}admin/login/" method="post">
      <input type="hidden" name="sub" value="1">
      <h3 class="form-title">Авторизация</h3>
      <div class="control-group">
        <div class="controls">
          <div class="input-icon {if $aRequest.login}input-icon-error{/if} left">
            <i class="icon-user"></i>
            <input class="m-wrap" name="login" type="text" value="{$aRequest.login}" placeholder="Имя пользователя" />
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="input-icon {if $aRequest.password}input-icon-error{/if} left">
            <i class="icon-lock"></i>
            <input class="m-wrap" name="password" type="password" style="" value="{$aRequest.password}" placeholder="Пароль" />
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
    &copy; 2008-{$smarty.now|date_format:"%Y"}. ИК «Приоритет»
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  ==js==
  <script>
  	{literal}
    jQuery(document).ready(function() {     
      	App.initLogin();
      	setTimeout(function () {
			{/literal}
			{foreach from=$aTemplate.messages item=aMessage}
			showMessage("{$aMessage.title}", "{$aMessage.msg}");
			{/foreach}
			{literal}
		}, 500);
    });
    {/literal}
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>