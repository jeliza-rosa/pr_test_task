<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 09:02:19
         compiled from "components\admin\templates\default\form\checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175836266396bce6453-21935365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ee3c76379037b59c3dbb7536375d7948c3c446b' => 
    array (
      0 => 'components\\admin\\templates\\default\\form\\checkbox.tpl',
      1 => 1408534222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175836266396bce6453-21935365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'title' => 0,
    'text' => 0,
    'textenabled' => 0,
    'textdisabled' => 0,
    'name' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6266396bd05611_80240750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6266396bd05611_80240750')) {function content_6266396bd05611_80240750($_smarty_tpl) {?><div class="control-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
  <div class="controls">
     <div class="<?php if ($_smarty_tpl->tpl_vars['text']->value=='custom'){?>custom-toggle-button<?php }else{ ?>basic-toggle-button<?php }?>" data-enabled="<?php echo $_smarty_tpl->tpl_vars['textenabled']->value;?>
" data-disabled="<?php echo $_smarty_tpl->tpl_vars['textdisabled']->value;?>
">
     	<input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="hidden" value="0" />
        <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="checkbox" class="toggle" <?php if ($_smarty_tpl->tpl_vars['value']->value){?> checked="checked" <?php }?> value="1" />
     </div>
  </div>
</div><?php }} ?>