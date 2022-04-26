<?php /* Smarty version Smarty-3.1.12, created on 2014-01-17 18:37:05
         compiled from "components/news/templates/skins/default/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62073272452d923f14dfd24-16094854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6e747b49550ecdd1f6358be8e7dcb391e65223' => 
    array (
      0 => 'components/news/templates/skins/default/detail.tpl',
      1 => 1370835316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62073272452d923f14dfd24-16094854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oCurrentNode' => 0,
    'oNews' => 0,
    'aTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d923f17e1162_06319565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d923f17e1162_06319565')) {function content_52d923f17e1162_06319565($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['oCurrentNode']->value->getUrl()=="attendance"){?>
<section class="com-news-detail">
	<article class="com-news-detail-item">
		<?php if ($_smarty_tpl->tpl_vars['oNews']->value->getImage()){?><img class="com-news-detail-item-image" src="<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getImage();?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oNews']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
		<div<?php if ($_smarty_tpl->tpl_vars['oNews']->value->getImage()){?> class="com-news-detail-item-desc-att"<?php }?>>
			<h1 class="com-news-detail-item-title"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getTitle();?>
</h1>
			<div class="com-news-detail-item-text"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getBody();?>
</div>
			<p class="com-news-detail-item-back"><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
">Вернуться к списку</a></p>
		</div>
	</article>
	
</section>




<?php }else{ ?>
<section class="com-news-detail">
	<article class="com-news-detail-item">
		<?php if ($_smarty_tpl->tpl_vars['oNews']->value->getImage()){?><img class="com-news-detail-item-image" src="<?php echo $_smarty_tpl->tpl_vars['oNews']->value->getImage();?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oNews']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
		<div<?php if ($_smarty_tpl->tpl_vars['oNews']->value->getImage()){?> class="com-news-detail-item-desc"<?php }?>>
			<p class="com-news-detail-item-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oNews']->value->getDate(),"%B %e, %Y");?>
</p>
			<h2 class="com-news-detail-item-title"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getTitle();?>
</h2>
			<div class="com-news-detail-item-text"><?php echo $_smarty_tpl->tpl_vars['oNews']->value->getBody();?>
</div>
		</div>
	</article>
	<p class="com-news-detail-item-back"><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
">Вернуться к списку</a></p>
</section>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>