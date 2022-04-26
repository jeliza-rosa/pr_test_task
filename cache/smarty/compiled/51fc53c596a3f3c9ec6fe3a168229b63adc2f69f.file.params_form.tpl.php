<?php /* Smarty version Smarty-3.1.12, created on 2014-03-17 10:33:22
         compiled from "components/admin/templates/default/params_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238869640530ef4f945f309-31468033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51fc53c596a3f3c9ec6fe3a168229b63adc2f69f' => 
    array (
      0 => 'components/admin/templates/default/params_form.tpl',
      1 => 1395030434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238869640530ef4f945f309-31468033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530ef4f9551714_52277695',
  'variables' => 
  array (
    'aParams' => 0,
    'aParam' => 0,
    'sName' => 0,
    'var' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ef4f9551714_52277695')) {function content_530ef4f9551714_52277695($_smarty_tpl) {?><div class="button-init">
	<?php  $_smarty_tpl->tpl_vars["aParam"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["aParam"]->_loop = false;
 $_smarty_tpl->tpl_vars["sName"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aParams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["aParam"]->key => $_smarty_tpl->tpl_vars["aParam"]->value){
$_smarty_tpl->tpl_vars["aParam"]->_loop = true;
 $_smarty_tpl->tpl_vars["sName"]->value = $_smarty_tpl->tpl_vars["aParam"]->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['aParam']->value['type']=="select"){?>
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.start.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>((string)$_smarty_tpl->tpl_vars['aParam']->value['title']),'name'=>"params[".((string)$_smarty_tpl->tpl_vars['sName']->value)."]",'attr'=>'style="width: 300px"'), 0);?>

				<?php  $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["val"]->_loop = false;
 $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aParam']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["val"]->key => $_smarty_tpl->tpl_vars["val"]->value){
$_smarty_tpl->tpl_vars["val"]->_loop = true;
 $_smarty_tpl->tpl_vars["var"]->value = $_smarty_tpl->tpl_vars["val"]->key;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['var']->value==$_smarty_tpl->tpl_vars['aParam']->value['current']||($_smarty_tpl->tpl_vars['var']->value==$_smarty_tpl->tpl_vars['aParam']->value['default']&&!$_smarty_tpl->tpl_vars['aParam']->value['current'])){?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
				<?php } ?>
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/select.end.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['aParam']->value['type']=="text"){?>
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>((string)$_smarty_tpl->tpl_vars['aParam']->value['title']),'name'=>"params[".((string)$_smarty_tpl->tpl_vars['sName']->value)."]",'value'=>$_smarty_tpl->tpl_vars['aParam']->value['current'],'default'=>$_smarty_tpl->tpl_vars['aParam']->value['default']), 0);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['aParam']->value['type']=="editor"){?>
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>((string)$_smarty_tpl->tpl_vars['aParam']->value['title']),'name'=>"params[".((string)$_smarty_tpl->tpl_vars['sName']->value)."]",'value'=>$_smarty_tpl->tpl_vars['aParam']->value['default']), 0);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['aParam']->value['type']=="checkbox"){?>
			<input name="params[<?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
]" value="0" type="hidden">
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>((string)$_smarty_tpl->tpl_vars['aParam']->value['title']),'name'=>"params[".((string)$_smarty_tpl->tpl_vars['sName']->value)."]",'value'=>$_smarty_tpl->tpl_vars['aParam']->value['default']), 0);?>

		<?php }?>
	<?php } ?>
</div>
==js==<?php }} ?>