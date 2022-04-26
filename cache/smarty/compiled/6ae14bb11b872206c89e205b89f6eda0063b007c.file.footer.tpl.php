<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 08:53:04
         compiled from "templates\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1002626637404283b1-53142021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ae14bb11b872206c89e205b89f6eda0063b007c' => 
    array (
      0 => 'templates\\default\\footer.tpl',
      1 => 1402295298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1002626637404283b1-53142021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oCurrentNode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_62663740434d70_44375900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62663740434d70_44375900')) {function content_62663740434d70_44375900($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\function.hook.php';
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