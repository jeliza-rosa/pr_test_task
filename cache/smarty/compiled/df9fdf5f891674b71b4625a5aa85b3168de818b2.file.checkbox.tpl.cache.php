<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 18:32:07
         compiled from "components/admin/templates/default/form/checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107431794752739f475c7385-02013036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df9fdf5f891674b71b4625a5aa85b3168de818b2' => 
    array (
      0 => 'components/admin/templates/default/form/checkbox.tpl',
      1 => 1370835444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107431794752739f475c7385-02013036',
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
  'unifunc' => 'content_52739f475f0911_37520264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52739f475f0911_37520264')) {function content_52739f475f0911_37520264($_smarty_tpl) {?><div class="control-group">
  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
  <div class="controls">
     <div class="basic-toggle-button">
        <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="checkbox" class="toggle"<?php if ($_smarty_tpl->tpl_vars['value']->value){?> checked="checked"<?php }?> value="1" />
     </div>
  </div>
</div><?php }} ?>