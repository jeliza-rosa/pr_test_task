<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 09:10:50
         compiled from "components\admin\templates\default\form\select.start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3056662663b6a0d8f62-94679545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c493cdeaec056239668dec60aae8a958262706a4' => 
    array (
      0 => 'components\\admin\\templates\\default\\form\\select.start.tpl',
      1 => 1392186735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3056662663b6a0d8f62-94679545',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_62663b6a11b860_76540220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62663b6a11b860_76540220')) {function content_62663b6a11b860_76540220($_smarty_tpl) {?><div class="control-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
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