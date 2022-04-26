<?php /* Smarty version Smarty-3.1.12, created on 2013-11-28 23:02:01
         compiled from "components/cart/templates/skins/default/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22860186052977709734649-62304953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ac1e2f81c79a9a982bb2816e7c78590f7859144' => 
    array (
      0 => 'components/cart/templates/skins/default/cart.tpl',
      1 => 1378747997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22860186052977709734649-62304953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCarts' => 0,
    'oCart' => 0,
    'oItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529777097da277_93172748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529777097da277_93172748')) {function content_529777097da277_93172748($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['aCarts']->value){?>
<table border="1" cellpadding="5" cellpadding="0">
  <tr>
	<th>Товар</th>
	<th>Кол-во</th>
	<th>Цена</th>
	<th></th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars["oCart"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oCart"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCarts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oCart"]->key => $_smarty_tpl->tpl_vars["oCart"]->value){
$_smarty_tpl->tpl_vars["oCart"]->_loop = true;
?>
  <?php $_smarty_tpl->tpl_vars["oItem"] = new Smarty_variable($_smarty_tpl->tpl_vars['oCart']->value->getItem0(), null, 0);?>
  <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getTitle();?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['oCart']->value->getCount();?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getPrice();?>
 руб</td>
	<td><a href="/cart/delete/<?php echo $_smarty_tpl->tpl_vars['oCart']->value->getId();?>
/">Удалить</a></td>
  </tr>
  <?php } ?>
</table><br>
<p>
	<a href="/catalog/" class="btn btn-info">Вернуться к каталогу</a> <a href="/order/" class="btn btn-success">Оформить заказ</a>
</p>
<?php }else{ ?>
<p>Ваша корзина пуста! Перейти к <a href="/catalog/">каталогу товаров</a>.</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>