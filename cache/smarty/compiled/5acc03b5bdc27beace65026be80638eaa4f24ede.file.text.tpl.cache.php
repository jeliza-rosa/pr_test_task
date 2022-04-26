<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 18:32:07
         compiled from "components/admin/templates/default/form/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156919801252739f47446433-53856231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5acc03b5bdc27beace65026be80638eaa4f24ede' => 
    array (
      0 => 'components/admin/templates/default/form/text.tpl',
      1 => 1378298015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156919801252739f47446433-53856231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'value' => 0,
    'popover' => 0,
    'validate' => 0,
    'class' => 0,
    'translate' => 0,
    'hint' => 0,
    'validate_rule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52739f474af8a2_94257844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52739f474af8a2_94257844')) {function content_52739f474af8a2_94257844($_smarty_tpl) {?>

<div class="control-group">
  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
  <div class="controls">
     <input <?php if ($_smarty_tpl->tpl_vars['name']->value){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value){?>value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php }?> type="text" class="span6 m-wrap<?php if ($_smarty_tpl->tpl_vars['popover']->value){?> popovers<?php }?><?php if ($_smarty_tpl->tpl_vars['validate']->value){?> validate<?php }?><?php if ($_smarty_tpl->tpl_vars['class']->value){?> class<?php }?><?php if ($_smarty_tpl->tpl_vars['translate']->value){?> translate<?php }?>"<?php if ($_smarty_tpl->tpl_vars['popover']->value){?>  data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['translate']->value){?>data-translate="<?php echo $_smarty_tpl->tpl_vars['translate']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['validate']->value){?> data-validate-rule="<?php echo $_smarty_tpl->tpl_vars['validate_rule']->value;?>
" data-validate-content="Пожалуйста, заполните поле."<?php }?>>
  </div>
</div><?php }} ?>