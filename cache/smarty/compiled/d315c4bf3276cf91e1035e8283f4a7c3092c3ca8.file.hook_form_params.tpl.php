<?php /* Smarty version Smarty-3.1.12, created on 2014-02-04 18:52:53
         compiled from "components/admin/templates/default/hooks/hook_form_params.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8567854805285ffedb000f4-48263493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd315c4bf3276cf91e1035e8283f4a7c3092c3ca8' => 
    array (
      0 => 'components/admin/templates/default/hooks/hook_form_params.tpl',
      1 => 1391518330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8567854805285ffedb000f4-48263493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5285ffedbaac31_84149497',
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
<?php if ($_valid && !is_callable('content_5285ffedbaac31_84149497')) {function content_5285ffedbaac31_84149497($_smarty_tpl) {?><div class="button-init">
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
		<?php if ($_smarty_tpl->tpl_vars['aParam']->value['type']=="checkbox"){?>
			<input name="params[<?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
]" value="0" type="hidden">
			<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/form/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>((string)$_smarty_tpl->tpl_vars['aParam']->value['title']),'name'=>"params[".((string)$_smarty_tpl->tpl_vars['sName']->value)."]",'value'=>$_smarty_tpl->tpl_vars['aParam']->value['default']), 0);?>

		<?php }?>
	<?php } ?>
</div>
==js==<?php }} ?>