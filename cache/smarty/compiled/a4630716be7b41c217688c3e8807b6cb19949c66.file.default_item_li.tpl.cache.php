<?php /* Smarty version Smarty-3.1.12, created on 2013-10-31 20:43:20
         compiled from "hooks/menu/templates/default_item_li.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32304196652726c88107577-83903351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4630716be7b41c217688c3e8807b6cb19949c66' => 
    array (
      0 => 'hooks/menu/templates/default_item_li.tpl',
      1 => 1379086489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32304196652726c88107577-83903351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'item' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52726c881a56f2_90686001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52726c881a56f2_90686001')) {function content_52726c881a56f2_90686001($_smarty_tpl) {?><li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
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
				<?php echo $_smarty_tpl->getSubTemplate ("hooks/menu/templates/default_item_li.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'class'=>"child"), 0);?>

			<?php } ?>
		</ul>
	<?php }?>
</li><?php }} ?>