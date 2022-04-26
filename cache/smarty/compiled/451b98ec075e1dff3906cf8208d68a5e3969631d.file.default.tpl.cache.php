<?php /* Smarty version Smarty-3.1.12, created on 2013-10-31 20:43:20
         compiled from "hooks/menu/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213971068752726c880bd0b1-67805869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '451b98ec075e1dff3906cf8208d68a5e3969631d' => 
    array (
      0 => 'hooks/menu/templates/default.tpl',
      1 => 1379086145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213971068752726c880bd0b1-67805869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aItems' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52726c881014e8_54230521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52726c881014e8_54230521')) {function content_52726c881014e8_54230521($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['aItems']->value)){?>
	<ul class="hook-menu-default">
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("hooks/menu/templates/default_item_li.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'class'=>"item"), 0);?>

		<?php } ?>
	</ul>
<?php }?><?php }} ?>