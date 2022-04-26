<?php /* Smarty version Smarty-3.1.12, created on 2014-02-12 12:32:19
         compiled from "components/admin/templates/default/form/select.start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70981053052860d3ce34b73-63838523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70a3d1ec47c04d86011e5666ee7fefd780b58877' => 
    array (
      0 => 'components/admin/templates/default/form/select.start.tpl',
      1 => 1392186735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70981053052860d3ce34b73-63838523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52860d3ce4da28_01776981',
  'variables' => 
  array (
    'class' => 0,
    'disabled' => 0,
    'title' => 0,
    'name' => 0,
    'id' => 0,
    'multiple' => 0,
    'placeholder' => 0,
    'attr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52860d3ce4da28_01776981')) {function content_52860d3ce4da28_01776981($_smarty_tpl) {?><div class="control-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>style="display:none;"<?php }?>>
	<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
	<div class="controls">
		<select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value){?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['id']->value){?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 span6 m-wrap <?php if (!$_smarty_tpl->tpl_vars['multiple']->value){?>chosen<?php }?>" <?php if ($_smarty_tpl->tpl_vars['multiple']->value){?>multiple="multiple"<?php }?> data-placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
" tabindex="1" <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
><?php }} ?>