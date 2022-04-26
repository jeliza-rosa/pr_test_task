<?php /* Smarty version Smarty-3.1.12, created on 2013-12-13 18:45:51
         compiled from "components/news/templates/skins/another/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194594239052ab017f49bc32-76069950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '469ac6d9dd7f3d0d7b3264d34cbe8ecc5acd311a' => 
    array (
      0 => 'components/news/templates/skins/another/default.tpl',
      1 => 1378971573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194594239052ab017f49bc32-76069950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oCurrentNode' => 0,
    'aNews' => 0,
    'oNews' => 0,
    'aTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ab017f679f13_07809293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ab017f679f13_07809293')) {function content_52ab017f679f13_07809293($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

ЭТО ДОРУГОЙ ШАБЛОН

<?php if ($_smarty_tpl->tpl_vars['oCurrentNode']->value->getUrl()=="attendance"){?>
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
			<h2 class="com-news-list-item-title"><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getTitle();?>
</a></h2>
			<p class="com-news-list-item-text"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getAnnouncement();?>
</p>
		</div>
	</article>
<?php } ?>
</section>
<?php }elseif($_smarty_tpl->tpl_vars['oCurrentNode']->value->getUrl()=="information_partners"){?>
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
			<h2 class="com-news-list-item-title"><a href="<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getAnnouncement();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getTitle();?>
</a></h2>
			<p class="com-news-list-item-text"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getBody();?>
</p>
		</div>
	</article>
<?php } ?>
</section>
<?php }else{ ?>
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
</section>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>