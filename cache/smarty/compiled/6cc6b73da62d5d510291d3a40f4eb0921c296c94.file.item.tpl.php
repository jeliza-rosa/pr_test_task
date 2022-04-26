<?php /* Smarty version Smarty-3.1.12, created on 2014-01-31 14:29:31
         compiled from "hooks/menu/templates/default/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16460522352eb5e7bc0e728-86021139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc6b73da62d5d510291d3a40f4eb0921c296c94' => 
    array (
      0 => 'hooks/menu/templates/default/item.tpl',
      1 => 1391156952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16460522352eb5e7bc0e728-86021139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52eb5e7bc5ab90_14872785',
  'variables' => 
  array (
    'class' => 0,
    'item' => 0,
    'sTemplate' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52eb5e7bc5ab90_14872785')) {function content_52eb5e7bc5ab90_14872785($_smarty_tpl) {?><li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['item']->getCurrent()){?>current<?php }?>">
	<a class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php if (count($_smarty_tpl->tpl_vars['item']->value['childs'])){?>childs<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getItemUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getImg();?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['item']->getTitle();?>
</a>
	<?php if (count($_smarty_tpl->tpl_vars['item']->value['childs'])){?>
		<ul class="childs">
			<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("hooks/menu/templates/".((string)$_smarty_tpl->tpl_vars['sTemplate']->value)."/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'class'=>"child"), 0);?>

			<?php } ?>
		</ul>
	<?php }?>
</li><?php }} ?>