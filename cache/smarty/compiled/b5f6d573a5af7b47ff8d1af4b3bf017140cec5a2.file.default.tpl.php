<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 15:15:50
         compiled from "hooks\pagination\templates\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5088626690f6d9b5f6-77443104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f6d573a5af7b47ff8d1af4b3bf017140cec5a2' => 
    array (
      0 => 'hooks\\pagination\\templates\\default.tpl',
      1 => 1387184882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5088626690f6d9b5f6-77443104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iPages' => 0,
    'oCurrentNode' => 0,
    'foo' => 0,
    'iCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_626690f6ddc102_75115560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_626690f6ddc102_75115560')) {function content_626690f6ddc102_75115560($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['iPages']->value>1){?>
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