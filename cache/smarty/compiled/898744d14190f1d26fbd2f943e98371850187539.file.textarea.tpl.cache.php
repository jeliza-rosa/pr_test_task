<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 18:32:16
         compiled from "components/admin/templates/default/form/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78489122352739f504183f1-49917577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '898744d14190f1d26fbd2f943e98371850187539' => 
    array (
      0 => 'components/admin/templates/default/form/textarea.tpl',
      1 => 1380005318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78489122352739f504183f1-49917577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'popover' => 0,
    'name' => 0,
    'hint' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52739f5045f984_30266795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52739f5045f984_30266795')) {function content_52739f5045f984_30266795($_smarty_tpl) {?><div class="control-group">
	<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
	<div class="controls">
		<textarea class="span6 m-wrap<?php if ($_smarty_tpl->tpl_vars['popover']->value){?> popovers<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" rows="4"<?php if ($_smarty_tpl->tpl_vars['popover']->value){?> data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>
	</div>
</div><?php }} ?>