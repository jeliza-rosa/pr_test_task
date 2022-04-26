<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 15:07:51
         compiled from "components\admin\templates\default\form\select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90262668f17188cb4-27232292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53fbd6a4ea68b052d71aa94570f77f83b9e79ffa' => 
    array (
      0 => 'components\\admin\\templates\\default\\form\\select.tpl',
      1 => 1374768649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90262668f17188cb4-27232292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'popover' => 0,
    'validate' => 0,
    'hint' => 0,
    'validate_rule' => 0,
    'aValues' => 0,
    'key' => 0,
    'value' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_62668f171bff41_50943826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62668f171bff41_50943826')) {function content_62668f171bff41_50943826($_smarty_tpl) {?><div class="control-group">
  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
  <div class="controls">
     <select name="parent" class="span6 m-wrap chosen<?php if ($_smarty_tpl->tpl_vars['popover']->value){?> popovers<?php }?><?php if ($_smarty_tpl->tpl_vars['validate']->value){?> validate<?php }?>" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" tabindex="1"<?php if ($_smarty_tpl->tpl_vars['popover']->value){?> data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['validate']->value){?> data-validate-rule="<?php echo $_smarty_tpl->tpl_vars['validate_rule']->value;?>
" data-validate-content="Пожалуйста, заполните поле."<?php }?>>
        <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['value']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
		<?php } ?>
     </select>
  </div>
</div><?php }} ?>