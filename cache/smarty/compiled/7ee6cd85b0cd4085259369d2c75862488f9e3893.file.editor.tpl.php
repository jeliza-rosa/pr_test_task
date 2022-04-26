<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 10:02:05
         compiled from "components\admin\templates\default\form\editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207166266476d8b16a4-77283278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ee6cd85b0cd4085259369d2c75862488f9e3893' => 
    array (
      0 => 'components\\admin\\templates\\default\\form\\editor.tpl',
      1 => 1395030491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207166266476d8b16a4-77283278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6266476d8c8f41_34540240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6266476d8c8f41_34540240')) {function content_6266476d8c8f41_34540240($_smarty_tpl) {?><div class="control-group">
	<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
	<div class="controls">
		<textarea id="ckeditor-<?php echo md5($_smarty_tpl->tpl_vars['name']->value);?>
" class="span12 ckeditor m-wrap" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" rows="6"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>
	</div>
</div><?php }} ?>