<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 10:02:05
         compiled from "components\admin\templates\default\form\datetime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142396266476d857c87-59246656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e22abdd8b7efb5e03be9e32449f8ce0b249747' => 
    array (
      0 => 'components\\admin\\templates\\default\\form\\datetime.tpl',
      1 => 1408530774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142396266476d857c87-59246656',
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
  'unifunc' => 'content_6266476d88a933_03816785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6266476d88a933_03816785')) {function content_6266476d88a933_03816785($_smarty_tpl) {?><div class="control-group">
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