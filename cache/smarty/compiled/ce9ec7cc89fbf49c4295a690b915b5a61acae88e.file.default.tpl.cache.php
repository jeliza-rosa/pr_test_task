<?php /* Smarty version Smarty-3.1.12, created on 2013-10-31 20:43:20
         compiled from "hooks/breadcrumbs/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132149998752726c881c5e50-81117461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce9ec7cc89fbf49c4295a690b915b5a61acae88e' => 
    array (
      0 => 'hooks/breadcrumbs/templates/default.tpl',
      1 => 1378396843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132149998752726c881c5e50-81117461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCrumbs' => 0,
    'oNode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52726c88206281_65630982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52726c88206281_65630982')) {function content_52726c88206281_65630982($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['aCrumbs']->value)){?>
	<ul class="hook-breadcrumbs-default">
		<?php  $_smarty_tpl->tpl_vars['oNode'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oNode']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oNode']->key => $_smarty_tpl->tpl_vars['oNode']->value){
$_smarty_tpl->tpl_vars['oNode']->_loop = true;
?>
			<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oNode']->value->getFullUrl();?>
" itemprop="url">
					<span itemprop="title">
						<?php echo $_smarty_tpl->tpl_vars['oNode']->value->getTitle();?>

					</span>
				</a>
			</li>
		<?php } ?>
	</ul>
<?php }?><?php }} ?>