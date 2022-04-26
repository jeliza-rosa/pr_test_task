<?php /* Smarty version Smarty-3.1.12, created on 2022-04-26 08:42:00
         compiled from "components\csv\templates\skins\default\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9202626646e81e6093-59941102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4eec69cdc7a61cdbb6435364e018c62c574877f' => 
    array (
      0 => 'components\\csv\\templates\\skins\\default\\default.tpl',
      1 => 1650951719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9202626646e81e6093-59941102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_626646e82576e7_82592463',
  'variables' => 
  array (
    'aCsv' => 0,
    'oCsv' => 0,
    'iPage' => 0,
    'iCount' => 0,
    'iOnPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_626646e82576e7_82592463')) {function content_626646e82576e7_82592463($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_hook')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<section class="com-news-list">
	<table>
		<tr>
			<th style="border: 1px solid black;">ID</th>
			<th style="border: 1px solid black;">Задача</th>
			<th style="border: 1px solid black;">Группа задачи</th>
			<th style="border: 1px solid black;">Дата</th>
			<th style="border: 1px solid black;">Время(план)</th>
			<th style="border: 1px solid black;">Время(факт)</th>
			<th style="border: 1px solid black;">Сумма</th>
			<th style="border: 1px solid black;">Ссылка</th>
		</tr>
			<?php  $_smarty_tpl->tpl_vars["oCsv"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oCsv"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCsv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oCsv"]->key => $_smarty_tpl->tpl_vars["oCsv"]->value){
$_smarty_tpl->tpl_vars["oCsv"]->_loop = true;
?>
				<tr>
					<td style="border: 1px solid black;"><?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getId();?>
</td>
					<td style="border: 1px solid black;"><?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getTask();?>
</td>
					<td style="border: 1px solid black;"><?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getGroup();?>
</td>
					<td style="border: 1px solid black;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oCsv']->value->getDate());?>
</td>
					<td style="border: 1px solid black;"><?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getTimePlan();?>
</td>
					<td style="border: 1px solid black;"><?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getTimeFact();?>
</td>
					<td style="border: 1px solid black;"><?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getSum();?>
</td>
					<td style="border: 1px solid black;"><a href="<?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getLink();?>
"><?php echo $_smarty_tpl->tpl_vars['oCsv']->value->getLink();?>
</a></td>
				</tr>
			<?php } ?>
	</table>

	<?php if ($_smarty_tpl->tpl_vars['iPage']->value&&$_smarty_tpl->tpl_vars['iCount']->value&&'iOnPage'){?>
		<?php echo smarty_function_hook(array('name'=>"pagination",'template'=>"default",'page'=>$_smarty_tpl->tpl_vars['iPage']->value,'count'=>$_smarty_tpl->tpl_vars['iCount']->value,'onpage'=>$_smarty_tpl->tpl_vars['iOnPage']->value),$_smarty_tpl);?>

	<?php }?>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>