<?php /* Smarty version Smarty-3.1.12, created on 2014-04-16 14:40:03
         compiled from "components/search/templates/skins/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11114765965297771f7fb7b7-77164342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c2bde4645105e31bf416e10507fdad505e22851' => 
    array (
      0 => 'components/search/templates/skins/default/default.tpl',
      1 => 1397637583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11114765965297771f7fb7b7-77164342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5297771f8a92f0_31354513',
  'variables' => 
  array (
    'oCurrentNode' => 0,
    'iEmpty' => 0,
    'aResult' => 0,
    'oResult' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297771f8a92f0_31354513')) {function content_5297771f8a92f0_31354513($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo smarty_function_hook(array('name'=>"search",'component'=>"search",'template'=>"default",'node'=>$_smarty_tpl->tpl_vars['oCurrentNode']->value->getId()),$_smarty_tpl);?>

	<div  class="component-search-default">
		<?php if ($_smarty_tpl->tpl_vars['iEmpty']->value){?><p>Поиск не дал результатов.</p><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['aResult']->value){?>
			<ol>
				<?php  $_smarty_tpl->tpl_vars["oResult"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oResult"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oResult"]->key => $_smarty_tpl->tpl_vars["oResult"]->value){
$_smarty_tpl->tpl_vars["oResult"]->_loop = true;
?>
					<li>
						
						<a href="<?php echo $_smarty_tpl->tpl_vars['oResult']->value->getUrl();?>
"><strong><?php echo $_smarty_tpl->tpl_vars['oResult']->value->getTitle();?>
</strong></a>
						<p><?php echo $_smarty_tpl->tpl_vars['oResult']->value->getTextCut();?>
</p>
						<p>количество совпадений: <?php echo $_smarty_tpl->tpl_vars['oResult']->value->getCount();?>
</p>
						
					</li>
				<?php } ?>
			</ol>
		<?php }?>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>