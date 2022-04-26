<?php /* Smarty version Smarty-3.1.12, created on 2013-11-11 19:32:31
         compiled from "components/page/templates/skins/default/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9619118075280dc6fbacb53-66294217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '9619118075280dc6fbacb53-66294217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5280dc6fcdec54_56699921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5280dc6fcdec54_56699921')) {function content_5280dc6fcdec54_56699921($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getBody();?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>