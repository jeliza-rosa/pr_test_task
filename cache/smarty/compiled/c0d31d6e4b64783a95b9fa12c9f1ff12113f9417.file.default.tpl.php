<?php /* Smarty version Smarty-3.1.12, created on 2013-12-16 15:08:04
         compiled from "hooks/pagination/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147471070652aec1b67a8bc0-70903443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0d31d6e4b64783a95b9fa12c9f1ff12113f9417' => 
    array (
      0 => 'hooks/pagination/templates/default.tpl',
      1 => 1387184882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147471070652aec1b67a8bc0-70903443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52aec1b683b024_40900502',
  'variables' => 
  array (
    'iPages' => 0,
    'oCurrentNode' => 0,
    'foo' => 0,
    'iCurrent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aec1b683b024_40900502')) {function content_52aec1b683b024_40900502($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['iPages']->value>1){?>
	<ul class="hook-pagintion-default">
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['iPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['iPages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oCurrentNode']->value->getFullUrl();?>
page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/" <?php if ($_smarty_tpl->tpl_vars['foo']->value==$_smarty_tpl->tpl_vars['iCurrent']->value){?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
			</li>
		<?php }} ?>
	</ul>
<?php }?><?php }} ?>