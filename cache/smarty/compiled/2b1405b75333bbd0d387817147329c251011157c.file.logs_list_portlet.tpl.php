<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 08:55:46
         compiled from "components\admin\templates\default\logs\logs_list_portlet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29878626637e2652df4-62623088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1405b75333bbd0d387817147329c251011157c' => 
    array (
      0 => 'components\\admin\\templates\\default\\logs\\logs_list_portlet.tpl',
      1 => 1374652125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29878626637e2652df4-62623088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLogs' => 0,
    'oItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_626637e26a23c5_29468426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_626637e26a23c5_29468426')) {function content_626637e26a23c5_29468426($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\modifier.date_format.php';
?><ul class="feeds">
	<?php  $_smarty_tpl->tpl_vars["oItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oItem"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aLogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oItem"]->key => $_smarty_tpl->tpl_vars["oItem"]->value){
$_smarty_tpl->tpl_vars["oItem"]->_loop = true;
?>
	<li>
		<div class="col1">
			<div class="cont">
				<div class="cont-col1">
					<?php if ($_smarty_tpl->tpl_vars['oItem']->value->getType("login-success")){?>
					<div class="label label-success">								
						<i class="icon-bell"></i>
					</div>
					<?php }else{ ?>
					<div class="label label-success">								
						<i class="icon-bell"></i>
					</div>
					<?php }?>
				</div>
				<div class="cont-col2">
					<div class="desc">
						<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getText();?>

					</div>
				</div>
			</div>
		</div>
		<div class="col2">
			<div class="date">
				
					<?php if (smarty_modifier_date_format(time(),"%Y-%m-%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getDatetime(),"%Y-%m-%d")){?>Сегодня<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getDatetime(),"%d %B");?>
<?php }?>, <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oItem']->value->getDatetime(),"%H:%M");?>


			</div>
		</div>
	</li>
	<?php } ?>
</ul><?php }} ?>