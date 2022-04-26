<?php /* Smarty version Smarty-3.1.12, created on 2014-04-16 17:16:10
         compiled from "components/gallery/templates/skins/default/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2136099031534e59be6d7857-74872691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c77a04e5d758ff328e5232834f5adbc9617fc92' => 
    array (
      0 => 'components/gallery/templates/skins/default/gallery.tpl',
      1 => 1397646966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2136099031534e59be6d7857-74872691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_534e59be8ef295_82959137',
  'variables' => 
  array (
    'aImages' => 0,
    'aTemplate' => 0,
    'oImage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534e59be8ef295_82959137')) {function content_534e59be8ef295_82959137($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
	jQuery(function(){
		$(".fancybox").fancybox({

			openEffect : 'elastic',
			openSpeed  : 150,

			closeEffect : 'elastic',
			closeSpeed  : 150,

			closeClick : true,

			helpers : {
				
			}
		});
	});
</script>
<section id="com-gallery">
	<div class="row-fluid">
	<?php  $_smarty_tpl->tpl_vars["oImage"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oImage"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["oImage"]->key => $_smarty_tpl->tpl_vars["oImage"]->value){
$_smarty_tpl->tpl_vars["oImage"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
?>
	  <div class="span4">
		<figure> 
			<a class="popup-photo pretty-photo fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getUrl();?>
">
					<div class="overlay"></div>
					<img src="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getResizedImage(300,165);?>
">
					<div class="icon-search"></div>
			</a>
			<figcaption>
				<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getDescription();?>

			</figcaption>
		</figure>
	  </div>
      <?php if ((($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%3==0)){?></div><div class="row-fluid"><?php }?>
	<?php } ?>
	</div>
	<p class="com-news-detail-item-back"><a href="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
">Вернуться к списку</a></p>
</section>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="/components/admin/templates/default/assets/fancybox/source/jquery.fancybox.js?v=2.1.3"></script>
<link rel="stylesheet" type="text/css" href="/components/admin/templates/default/assets/fancybox/source/jquery.fancybox.css?v=2.1.2" media="screen" />

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>