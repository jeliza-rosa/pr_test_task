<?php /* Smarty version Smarty-3.1.12, created on 2014-03-17 10:33:27
         compiled from "components/admin/templates/default/form/editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9008670425282ff4f579cb8-80873050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d47511a385f386b456eaba1b6c9fe3580aaec59' => 
    array (
      0 => 'components/admin/templates/default/form/editor.tpl',
      1 => 1395030491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9008670425282ff4f579cb8-80873050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5282ff4f5a3448_04100244',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282ff4f5a3448_04100244')) {function content_5282ff4f5a3448_04100244($_smarty_tpl) {?><div class="control-group">
	<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
	<div class="controls">
		<textarea id="ckeditor-<?php echo md5($_smarty_tpl->tpl_vars['name']->value);?>
" class="span12 ckeditor m-wrap" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" rows="6"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>
	</div>
</div><?php }} ?>