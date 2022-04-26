<?php /* Smarty version Smarty-3.1.12, created on 2013-11-28 23:01:49
         compiled from "components/cart/templates/hooks/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1295012498529776fd871e02-66625473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcd13778e194406f8543e30c1e1ae157c2f841cb' => 
    array (
      0 => 'components/cart/templates/hooks/cart.tpl',
      1 => 1378717196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1295012498529776fd871e02-66625473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCarts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529776fd87e185_83681109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529776fd87e185_83681109')) {function content_529776fd87e185_83681109($_smarty_tpl) {?><div class="cart">
	Товаров в <a href="/cart/">корзине</a> <?php echo count($_smarty_tpl->tpl_vars['aCarts']->value);?>

</div><?php }} ?>