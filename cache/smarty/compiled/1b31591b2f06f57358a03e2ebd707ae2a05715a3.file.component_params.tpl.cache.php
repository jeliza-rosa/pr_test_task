<?php /* Smarty version Smarty-3.1.12, created on 2013-11-08 14:26:03
         compiled from "components/admin/templates/default/components/component_params.tpl" */ ?>
<?php /*%%SmartyHeaderCode:919518714527ca01bb7e591-68826014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b31591b2f06f57358a03e2ebd707ae2a05715a3' => 
    array (
      0 => 'components/admin/templates/default/components/component_params.tpl',
      1 => 1378976902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '919518714527ca01bb7e591-68826014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aParams' => 0,
    'aParam' => 0,
    'sName' => 0,
    'var' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_527ca01bc6f012_53425782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527ca01bc6f012_53425782')) {function content_527ca01bc6f012_53425782($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["aParam"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["aParam"]->_loop = false;
 $_smarty_tpl->tpl_vars["sName"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aParams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["aParam"]->key => $_smarty_tpl->tpl_vars["aParam"]->value){
$_smarty_tpl->tpl_vars["aParam"]->_loop = true;
 $_smarty_tpl->tpl_vars["sName"]->value = $_smarty_tpl->tpl_vars["aParam"]->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['aParam']->value['type']=="select"){?>
	    <div class="control-group">
	      <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['aParam']->value['title'];?>
</label>
	      <div class="controls">
	         <select name="params[<?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
]" class="span6 m-wrap chosen" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['aParam']->value['title'];?>
" tabindex="1" style="width: 300px">
	            <?php  $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["val"]->_loop = false;
 $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aParam']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["val"]->key => $_smarty_tpl->tpl_vars["val"]->value){
$_smarty_tpl->tpl_vars["val"]->_loop = true;
 $_smarty_tpl->tpl_vars["var"]->value = $_smarty_tpl->tpl_vars["val"]->key;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['var']->value==$_smarty_tpl->tpl_vars['aParam']->value['selected']||($_smarty_tpl->tpl_vars['var']->value==$_smarty_tpl->tpl_vars['aParam']->value['default']&&!$_smarty_tpl->tpl_vars['aParam']->value['selected'])){?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
				<?php } ?>
	         </select>
	      </div>
	    </div>
    <?php }?>
<?php } ?><?php }} ?>