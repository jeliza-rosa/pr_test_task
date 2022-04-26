<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 08:53:04
         compiled from "components\page\templates\skins\default\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:730862663740038da5-94473030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65b389c8be1c8772e0f6b777b6c03b6aeff89b36' => 
    array (
      0 => 'components\\page\\templates\\skins\\default\\page.tpl',
      1 => 1370835322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '730862663740038da5-94473030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6266374006dc69_45588036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6266374006dc69_45588036')) {function content_6266374006dc69_45588036($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getBody();?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>