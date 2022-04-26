<?php /* Smarty version Smarty-3.1.12, created on 2013-10-31 20:43:19
         compiled from "components/page/templates/skins/default/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49727126852726c87d79809-91515246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a2c111398a680febcc92c5a5fdb73a81a73b79' => 
    array (
      0 => 'components/page/templates/skins/default/page.tpl',
      1 => 1370835322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49727126852726c87d79809-91515246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52726c88039032_12293447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52726c88039032_12293447')) {function content_52726c88039032_12293447($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getBody();?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>