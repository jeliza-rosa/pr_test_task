<?php /* Smarty version Smarty-3.1.12, created on 2013-11-11 19:32:32
         compiled from "hooks/banner/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18855997625280dc700a0124-19309425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153c0f7bf331c2d90915a34aa5281e662673f043' => 
    array (
      0 => 'hooks/banner/templates/default.tpl',
      1 => 1383283223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18855997625280dc700a0124-19309425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oBanner' => 0,
    'sSize' => 0,
    'aParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5280dc7014ea05_68060204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5280dc7014ea05_68060204')) {function content_5280dc7014ea05_68060204($_smarty_tpl) {?><div class="hook-banner-default">
	<?php if ($_smarty_tpl->tpl_vars['oBanner']->value->getExtension()=="swf"){?>
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="cursor:pointer;" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,2,0" <?php echo $_smarty_tpl->tpl_vars['sSize']->value;?>
>
			<param name="movie" value="<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getImg();?>
">
			<param name="wmode" value="opaque">
			<param name="quality" value="high">
			<embed src="<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getImg();?>
" wmode="transparent" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" <?php echo $_smarty_tpl->tpl_vars['sSize']->value;?>
>
		</object>
	<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['aParams']->value['width']||$_smarty_tpl->tpl_vars['aParams']->value['height']){?>
			<img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['aParams']->value['width'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['aParams']->value['height'];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['aParams']->value['crop'];?>
<?php $_tmp3=ob_get_clean();?><?php echo getimage($_smarty_tpl->tpl_vars['oBanner']->value->getImg(),$_tmp1,$_tmp2,$_tmp3);?>
" alt="" <?php echo $_smarty_tpl->tpl_vars['sSize']->value;?>
 />
		<?php }else{ ?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['oBanner']->value->getImg();?>
" alt="" />
		<?php }?>
	<?php }?>
</div><?php }} ?>