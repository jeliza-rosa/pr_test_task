<?php /* Smarty version Smarty-3.1.12, created on 2013-11-01 16:21:45
         compiled from "hooks/bannergroup/templates/slider/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10935881055273594c371e29-66452719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3c4dd6070ffe55a1d6095f1a8b60287bdd494ee' => 
    array (
      0 => 'hooks/bannergroup/templates/slider/template.tpl',
      1 => 1383301303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10935881055273594c371e29-66452719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5273594c373552_82368362',
  'variables' => 
  array (
    'aBanners' => 0,
    'oBanner' => 0,
    'sSize' => 0,
    'aParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5273594c373552_82368362')) {function content_5273594c373552_82368362($_smarty_tpl) {?><div class="hook-bannergroup-slider">
	<div class="slider">
		<?php  $_smarty_tpl->tpl_vars['oBanner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBanner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBanners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBanner']->key => $_smarty_tpl->tpl_vars['oBanner']->value){
$_smarty_tpl->tpl_vars['oBanner']->_loop = true;
?>
			<div>
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
			</div>
		<?php } ?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['aParams']->value['control']){?>
		<div class="control">
			<a class="arrow left" href="" >prev</a>
			<a class="arrow right" href="">next</a>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['aParams']->value['navigation']){?>
		<div class="nav"></div>
	<?php }?>
</div><?php }} ?>