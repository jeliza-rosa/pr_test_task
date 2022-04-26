<?php /* Smarty version Smarty-3.1.12, created on 2014-02-03 15:00:56
         compiled from "components/admin/templates/default/form/checkbox.classic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102455627752ef59acc68961-80735350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e202477d623f591e7003e73c088d8d078dff99d' => 
    array (
      0 => 'components/admin/templates/default/form/checkbox.classic.tpl',
      1 => 1391418010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102455627752ef59acc68961-80735350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ef59acc80239_03779491',
  'variables' => 
  array (
    'class' => 0,
    'title' => 0,
    'name' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ef59acc80239_03779491')) {function content_52ef59acc80239_03779491($_smarty_tpl) {?><div class="control-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
	<div class="controls">
		<label class="checkbox line">
			<input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['value']->value){?> checked="checked"<?php }?> value="1" />
		</label>
	</div>
</div><?php }} ?>