<?php /* Smarty version Smarty-3.1.12, created on 2022-04-25 08:55:46
         compiled from "components\admin\templates\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21943626637e2716952-70443263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249d9bb0c88923483d80630773de1181ee58af8e' => 
    array (
      0 => 'components\\admin\\templates\\default\\footer.tpl',
      1 => 1397652500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21943626637e2716952-70443263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'aMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_626637e2728cf9_67347418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_626637e2728cf9_67347418')) {function content_626637e2728cf9_67347418($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\localhost\\engine\\libs\\Smarty-3.1.12\\libs\\plugins\\modifier.date_format.php';
?>				<div class="clearfix"></div>
				</div>
			</div>
			<!-- END PAGE CONTAINER-->		
		</div>
		<!-- END PAGE -->
		</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		&copy; 2008-<?php echo smarty_modifier_date_format(time(),"%Y");?>
, все права защищены. ИК «Приоритет»
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>	
	<![endif]-->
	==js==
	
	
	
	<script type="text/javascript">
		jQuery(".fixed-top").fadeIn("normal");
		jQuery(document).ready(function() {		
			App.setPage("index");  // set current page
			App.init(); // init the rest of plugins and elements
			setTimeout(function () {
				
				<?php  $_smarty_tpl->tpl_vars['aMessage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMessage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTemplate']->value['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMessage']->key => $_smarty_tpl->tpl_vars['aMessage']->value){
$_smarty_tpl->tpl_vars['aMessage']->_loop = true;
?>
				showMessage("<?php echo $_smarty_tpl->tpl_vars['aMessage']->value['title'];?>
", "<?php echo $_smarty_tpl->tpl_vars['aMessage']->value['msg'];?>
");
				<?php } ?>
				
			}, 500);
		});
	</script>
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>