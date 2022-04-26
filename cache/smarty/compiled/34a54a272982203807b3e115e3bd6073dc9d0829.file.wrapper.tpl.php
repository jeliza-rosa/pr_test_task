<?php /* Smarty version Smarty-3.1.12, created on 2014-01-31 14:27:39
         compiled from "hooks/menu/templates/default/wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51835962652eb5e7279e4a9-64427798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34a54a272982203807b3e115e3bd6073dc9d0829' => 
    array (
      0 => 'hooks/menu/templates/default/wrapper.tpl',
      1 => 1391156859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51835962652eb5e7279e4a9-64427798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52eb5e72813bd3_81296202',
  'variables' => 
  array (
    'aItems' => 0,
    'sTemplate' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52eb5e72813bd3_81296202')) {function content_52eb5e72813bd3_81296202($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['aItems']->value)){?>
	<ul class="hook-menu-default">
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("hooks/menu/templates/".((string)$_smarty_tpl->tpl_vars['sTemplate']->value)."/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['foo']->value,'class'=>"item"), 0);?>

		<?php } ?>
	</ul>
<?php }?><?php }} ?>