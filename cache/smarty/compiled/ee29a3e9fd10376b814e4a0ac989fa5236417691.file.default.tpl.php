<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 11:41:28
         compiled from "components/pattern/templates/skins/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155488162452830e430665c2-67744813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee29a3e9fd10376b814e4a0ac989fa5236417691' => 
    array (
      0 => 'components/pattern/templates/skins/default/default.tpl',
      1 => 1384321288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155488162452830e430665c2-67744813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52830e431fe385_66756907',
  'variables' => 
  array (
    'oCurrentNode' => 0,
    'oMap' => 0,
    'iNodeId' => 0,
    'aPatterns' => 0,
    'oPattern' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52830e431fe385_66756907')) {function content_52830e431fe385_66756907($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['iNodeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['oCurrentNode']->value->getId(), null, 0);?>
<div class="com_pattern_default">
	<?php echo $_smarty_tpl->tpl_vars['oMap']->value->getDesc();?>

	<div class="map">
		<img class="map" src="<?php echo $_smarty_tpl->tpl_vars['oMap']->value->getImg();?>
" alt=""/>
		<canvas id="canv" <?php echo $_smarty_tpl->tpl_vars['oMap']->value->getImgSizeAttr();?>
></canvas>
		<map id="map_node<?php echo $_smarty_tpl->tpl_vars['iNodeId']->value;?>
" name="map_node<?php echo $_smarty_tpl->tpl_vars['iNodeId']->value;?>
">
			<?php  $_smarty_tpl->tpl_vars["oPattern"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oPattern"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPatterns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oPattern"]->key => $_smarty_tpl->tpl_vars["oPattern"]->value){
$_smarty_tpl->tpl_vars["oPattern"]->_loop = true;
?>
				<area coords="<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getCoords();?>
" shape="poly" id="area<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getId();?>
_node<?php echo $_smarty_tpl->tpl_vars['iNodeId']->value;?>
" data-desc="<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getDesc();?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getTitle();?>
" href="#"/>
			<?php } ?>
		</map>
		<img class="hover" src="/components/<?php echo $_smarty_tpl->tpl_vars['oCurrentNode']->value->getComponentObject()->getName();?>
/templates/skins/1x1.gif" alt="" style="height:<?php echo $_smarty_tpl->tpl_vars['oMap']->value->getImgHeight();?>
px; width:<?php echo $_smarty_tpl->tpl_vars['oMap']->value->getImgWidth();?>
px;" usemap="#map_node<?php echo $_smarty_tpl->tpl_vars['iNodeId']->value;?>
" />
	</div>
</div>
<script>
	var coords = [];
	<?php  $_smarty_tpl->tpl_vars["oPattern"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oPattern"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPatterns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oPattern"]->key => $_smarty_tpl->tpl_vars["oPattern"]->value){
$_smarty_tpl->tpl_vars["oPattern"]->_loop = true;
?>
		coords.push( [<?php echo $_smarty_tpl->tpl_vars['oPattern']->value->getCoords();?>
] );
	<?php } ?>
</script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>