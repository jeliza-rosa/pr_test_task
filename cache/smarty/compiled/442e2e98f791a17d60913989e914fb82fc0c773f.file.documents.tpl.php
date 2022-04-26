<?php /* Smarty version Smarty-3.1.12, created on 2014-04-16 16:25:01
         compiled from "components/gallery/templates/skins/default/documents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156874226552d9299b5e6937-89067312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '442e2e98f791a17d60913989e914fb82fc0c773f' => 
    array (
      0 => 'components/gallery/templates/skins/default/documents.tpl',
      1 => 1395030573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156874226552d9299b5e6937-89067312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d9299b6a69e5_03199934',
  'variables' => 
  array (
    'aGalleries' => 0,
    'oGallery' => 0,
    'oImage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9299b6a69e5_03199934')) {function content_52d9299b6a69e5_03199934($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<section id="com-gallery">
	<div class="row-fluid">
		<?php  $_smarty_tpl->tpl_vars["oGallery"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oGallery"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGalleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oGallery"]->key => $_smarty_tpl->tpl_vars["oGallery"]->value){
$_smarty_tpl->tpl_vars["oGallery"]->_loop = true;
?>
			<h2 class="fileGroupName"><?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getTitle();?>
</h2>
		    <table class="norm_borders information-table">
		    	<?php  $_smarty_tpl->tpl_vars["oImage"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oImage"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oGallery']->value->getImages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oImage"]->key => $_smarty_tpl->tpl_vars["oImage"]->value){
$_smarty_tpl->tpl_vars["oImage"]->_loop = true;
?>
		    		<tr>
		    			<?php if ($_smarty_tpl->tpl_vars['oImage']->value->getUrl()){?>
			    			<td style="min-width: 136px;"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['oImage']->value->getTitle();?>
</a></td>
			    		<?php }?>
		    			<td><?php echo $_smarty_tpl->tpl_vars['oImage']->value->getDescription();?>
</td>
		    		</tr>
		    	<?php } ?>
		    </table>
		<?php } ?>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>