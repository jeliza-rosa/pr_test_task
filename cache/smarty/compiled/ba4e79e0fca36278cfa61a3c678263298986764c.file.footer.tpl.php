<?php /* Smarty version Smarty-3.1.12, created on 2014-06-09 18:43:45
         compiled from "templates/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3226593065280dc701ed9e5-39245228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba4e79e0fca36278cfa61a3c678263298986764c' => 
    array (
      0 => 'templates/default/footer.tpl',
      1 => 1402295298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3226593065280dc701ed9e5-39245228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5280dc70223969_38935925',
  'variables' => 
  array (
    'oCurrentNode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5280dc70223969_38935925')) {function content_5280dc70223969_38935925($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/function.hook.php';
?>	<?php if ($_smarty_tpl->tpl_vars['oCurrentNode']->value->getUrl()!="root"){?>
	</section>
	<?php }?>
	<nav><h2>Меню</h2></nav>
	<footer>
		<h2>Футер</h2>
		<?php echo smarty_function_hook(array('hookgroup'=>"footer-menu"),$_smarty_tpl);?>

		Создание сайта - <a href="http://vprioritete.ru/" target="_blank">ИК Приоритет</a>
	</footer>
</div>


</body>
</html><?php }} ?>