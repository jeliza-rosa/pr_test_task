<?php /* Smarty version Smarty-3.1.12, created on 2014-06-06 13:34:03
         compiled from "hooks/breadcrumbs/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1868751275280dc6fe63121-72413664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce9ec7cc89fbf49c4295a690b915b5a61acae88e' => 
    array (
      0 => 'hooks/breadcrumbs/templates/default.tpl',
      1 => 1402040029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1868751275280dc6fe63121-72413664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5280dc70084087_60194286',
  'variables' => 
  array (
    'aCrumbs' => 0,
    'aCrumb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5280dc70084087_60194286')) {function content_5280dc70084087_60194286($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['aCrumbs']->value)){?>
	<ul class="hook-breadcrumbs-default">
		<?php  $_smarty_tpl->tpl_vars['aCrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aCrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aCrumb']->key => $_smarty_tpl->tpl_vars['aCrumb']->value){
$_smarty_tpl->tpl_vars['aCrumb']->_loop = true;
?>
			<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="<?php echo $_smarty_tpl->tpl_vars['aCrumb']->value['href'];?>
" itemprop="url">
					<span itemprop="title">
						<?php echo $_smarty_tpl->tpl_vars['aCrumb']->value['title'];?>

					</span>
				</a>
			</li>
		<?php } ?>
	</ul>
<?php }?><?php }} ?>