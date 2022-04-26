<?php /* Smarty version Smarty-3.1.12, created on 2014-02-03 12:55:05
         compiled from "components/news/templates/skins/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104769436452aeb9da904a37-77076174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba2191ea8be783b21acf68280169ecb221dc003' => 
    array (
      0 => 'components/news/templates/skins/default/default.tpl',
      1 => 1389963001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104769436452aeb9da904a37-77076174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52aeb9daa54196_23858424',
  'variables' => 
  array (
    'aNews' => 0,
    'oNews' => 0,
    'aTemplate' => 0,
    'iPage' => 0,
    'iCount' => 0,
    'iOnPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aeb9daa54196_23858424')) {function content_52aeb9daa54196_23858424($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_hook')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<section class="com-news-list">
	<?php  $_smarty_tpl->tpl_vars["oNews"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oNews"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aNews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oNews"]->key => $_smarty_tpl->tpl_vars["oNews"]->value){
$_smarty_tpl->tpl_vars["oNews"]->_loop = true;
?>
		<article class="com-news-list-item">
			<?php if ($_smarty_tpl->tpl_vars['oNews']->value->getImage()){?><img class="com-news-list-item-image" src="<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getImage();?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oNews']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
			<div<?php if ($_smarty_tpl->tpl_vars['oNews']->value->getImage()){?> class="com-news-list-item-desc"<?php }?>>
				<p class="com-news-list-item-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oNews']->value->getDate(),"%B %e, %Y");?>
</p>
				<h2 class="com-news-list-item-title"><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getTitle();?>
</a></h2>
				<p class="com-news-list-item-text"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getAnnouncement();?>
</p>
			</div>
		</article>
	<?php } ?>

	<?php if ($_smarty_tpl->tpl_vars['iPage']->value&&$_smarty_tpl->tpl_vars['iCount']->value&&'iOnPage'){?>
		<?php echo smarty_function_hook(array('name'=>"pagination",'template'=>"default",'page'=>$_smarty_tpl->tpl_vars['iPage']->value,'count'=>$_smarty_tpl->tpl_vars['iCount']->value,'onpage'=>$_smarty_tpl->tpl_vars['iOnPage']->value),$_smarty_tpl);?>

	<?php }?>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>