<?php /* Smarty version Smarty-3.1.12, created on 2014-08-20 16:45:05
         compiled from "components/admin/templates/default/form/datetime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75838910253f47c31f099c8-70960657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c69994dc419efb1f7b9c90c658f47bf69a50864a' => 
    array (
      0 => 'components/admin/templates/default/form/datetime.tpl',
      1 => 1408530774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75838910253f47c31f099c8-70960657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'datename' => 0,
    'dateval' => 0,
    'timename' => 0,
    'timeval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_53f47c32005234_86613572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f47c32005234_86613572')) {function content_53f47c32005234_86613572($_smarty_tpl) {?><div class="control-group">
	<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
	<div class="controls">
		<?php if ($_smarty_tpl->tpl_vars['datename']->value){?>
			<input name="<?php echo $_smarty_tpl->tpl_vars['datename']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['dateval']->value;?>
" type="date" class="span-auto m-wrap">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['timename']->value){?>
			<input name="<?php echo $_smarty_tpl->tpl_vars['timename']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['timeval']->value;?>
" type="date" class="span-auto m-wrap">
		<?php }?>
	</div>
</div><?php }} ?>