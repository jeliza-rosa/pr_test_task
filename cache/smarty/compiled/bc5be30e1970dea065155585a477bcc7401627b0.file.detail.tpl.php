<?php /* Smarty version Smarty-3.1.12, created on 2014-04-11 14:56:33
         compiled from "components/catalog/templates/skins/default/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14257207245347ae41d67042-75046224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc5be30e1970dea065155585a477bcc7401627b0' => 
    array (
      0 => 'components/catalog/templates/skins/default/detail.tpl',
      1 => 1378384178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14257207245347ae41d67042-75046224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5347ae41e5fd48_79876634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5347ae41e5fd48_79876634')) {function content_5347ae41e5fd48_79876634($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h2><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getTitle();?>
</h2>
Товар подробнее

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>