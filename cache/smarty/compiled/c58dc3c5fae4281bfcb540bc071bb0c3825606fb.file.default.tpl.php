<?php /* Smarty version Smarty-3.1.12, created on 2014-04-16 16:34:33
         compiled from "components/gallery/templates/skins/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1656796952534e5be825e323-43577632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c58dc3c5fae4281bfcb540bc071bb0c3825606fb' => 
    array (
      0 => 'components/gallery/templates/skins/default/default.tpl',
      1 => 1397644470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656796952534e5be825e323-43577632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_534e5be82fc184_16838553',
  'variables' => 
  array (
    'aGalleries' => 0,
    'aTemplate' => 0,
    'oGallery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534e5be82fc184_16838553')) {function content_534e5be82fc184_16838553($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<section id="com-gallery">
	<div class="row-fluid">
	<?php  $_smarty_tpl->tpl_vars["oGallery"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oGallery"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGalleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["oGallery"]->key => $_smarty_tpl->tpl_vars["oGallery"]->value){
$_smarty_tpl->tpl_vars["oGallery"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
?>
	  <div class="span4">
		<figure>
			<a class="popup-photo align-left pretty-photo" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getId();?>
/">
				<div class="overlay"></div>
				<img src="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getResizedImage(294,165);?>
">
				<div class="icon-search"></div>
			</a>
			<figcaption><?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getTitle();?>
</figcaption>
		</figure>
	  </div>
      <?php if ((($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%3==0)){?></div><div class="row-fluid"><?php }?>
	<?php } ?>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>