<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 16:51:56
         compiled from "components\news\templates\skins\default\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2747662663c6aa9b391-80772022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a30427857e69a500841e4d88d4e71b2273bd8b19' => 
    array (
      0 => 'components\\news\\templates\\skins\\default\\default.tpl',
      1 => 1650894715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2747662663c6aa9b391-80772022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_62663c6ab12831_07503963',
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
<?php if ($_valid && !is_callable('content_62663c6ab12831_07503963')) {function content_62663c6ab12831_07503963($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_hook')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\function.hook.php';
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