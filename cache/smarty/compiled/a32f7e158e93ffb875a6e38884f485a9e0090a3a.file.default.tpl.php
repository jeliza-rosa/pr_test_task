<?php /* Smarty version Smarty-3.1.12, created on 2013-11-28 23:02:23
         compiled from "components/search/templates/hooks/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18122947605297771f914d06-79921053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a32f7e158e93ffb875a6e38884f485a9e0090a3a' => 
    array (
      0 => 'components/search/templates/hooks/default/default.tpl',
      1 => 1378716178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18122947605297771f914d06-79921053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5297771f920af8_30993180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297771f920af8_30993180')) {function content_5297771f920af8_30993180($_smarty_tpl) {?><form class="hook-search-default" action="<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
" method="POST" enctype="multipart/form-data">
	<input type="text" name="search" value="<?php echo getRequest("search");?>
" placeholder="Поиск...">
	<input type="submit" name="submit" value=" Найти ">
</form><?php }} ?>