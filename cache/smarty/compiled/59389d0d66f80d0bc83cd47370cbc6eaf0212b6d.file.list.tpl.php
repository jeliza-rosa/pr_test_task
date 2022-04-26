<?php /* Smarty version Smarty-3.1.12, created on 2013-11-28 23:01:49
         compiled from "components/catalog/templates/skins/default/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1978579595529776fd70bd02-93591389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59389d0d66f80d0bc83cd47370cbc6eaf0212b6d' => 
    array (
      0 => 'components/catalog/templates/skins/default/list.tpl',
      1 => 1378715869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1978579595529776fd70bd02-93591389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aGroups' => 0,
    'aTemplate' => 0,
    'oGroup' => 0,
    'aItems' => 0,
    'oItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529776fd7f20a7_34000514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529776fd7f20a7_34000514')) {function content_529776fd7f20a7_34000514($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="row-fluid" id="cart">
		<?php echo smarty_function_hook(array('name'=>"Cart",'component'=>"Cart",'template'=>"cart"),$_smarty_tpl);?>

	</div>
	<div class="row-fluid">
		<?php  $_smarty_tpl->tpl_vars["oGroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oGroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oGroup"]->key => $_smarty_tpl->tpl_vars["oGroup"]->value){
$_smarty_tpl->tpl_vars["oGroup"]->_loop = true;
?>
			<div class="span4"><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['oGroup']->value->getTitle();?>
</a></div>
		<?php } ?>
	</div>
	<h2>Товары</h2>
	<div class="row-fluid">
		<?php  $_smarty_tpl->tpl_vars["oItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oItem"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oItem"]->key => $_smarty_tpl->tpl_vars["oItem"]->value){
$_smarty_tpl->tpl_vars["oItem"]->_loop = true;
?>
			<div class="span4 item">
				<?php if ($_smarty_tpl->tpl_vars['oItem']->value->getImage()){?><a class="link" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getTitle();?>
"><span class="new">Новый</span><img class="product_image" src="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getImage();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getTitle();?>
"></a><?php }?>
				<div class="product_details">
					<h4><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getTitle();?>
"><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getTitle();?>
</a></h4>
					<p><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getPrice();?>
 руб.</span></p>
				</div> 
				<a class="btn btn-mini btn-info add-to-cart" href="/cart/add/<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getId();?>
/" title="Добавить в корзину">Добавить в корзину</a></li>
			</div>
		<?php } ?>
	</div>
	<p></p>
	
	<style>
	.item{
		margin: 0;
		padding: 0 0 30px 0;
		text-align: center;
	}
	.item .price {
		color: #da3b44;
		font-size: 14px;
		font-weight: 700;
		cursor: default;
	}
	.item .link {
		display: block;
		position: relative;
		overflow: hidden;
		height: auto;
		margin: 1px 1px 3px 2px;
		-webkit-backface-visibility: hidden;
		border: 8px solid #ffffff;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		-moz-box-shadow: 0 0 0 1px rgba(0,0,0,0.095) ,0 1.5px 1.5px 0 rgba(0,0,0,0.2),0 2px 1.5px 0 rgba(0,0,0,0.1);
		-webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.095) ,0 1.5px 1.5px 0 rgba(0,0,0,0.2),0 2px 1.5px 0 rgba(0,0,0,0.1);
		box-shadow: 0 0 0 1px rgba(0,0,0,0.095) ,0 1.5px 1.5px 0 rgba(0,0,0,0.2),0 2px 1.5px 0 rgba(0,0,0,0.1);
	}
	.item .image {
		width: 192px;
		height: auto;
		z-index: 1;
	}
	.item .new{
		position: absolute;
		display: block;
		top: 15px;
		right: -30px;
		overflow: hidden;
		width: 101px;
		background-color: #da3b44;
		background: rgba(218,59,68,0.9);
		padding: 1px 4px;
		font-size: 11px;
		line-height: 17px;
		letter-spacing: 1px;
		color: #ffffff;
		text-transform: uppercase;
		text-align: center;
		z-index: 2;
		-webkit-transform: rotate(45deg);
		-moz-transform: rotate(45deg);
		-o-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
	}
	</style>
	<script language="javascript">
		jQuery(".add-to-cart").click(function(){
			var btn = this;
			if (jQuery(this).attr("href")!="/cart/"){
				jQuery.ajax({
					url: jQuery(this).attr("href"),
					success: function(data){
						jQuery("#cart").html(data);
						jQuery(btn).html('В корзине');
						jQuery(btn).removeClass('btn-info');
						jQuery(btn).addClass('btn-success');
						jQuery(btn).attr('href', '/cart/');
						jQuery(btn).click(function(){return true;});
					}
				});
				return false;
			}
		});
	</script>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>