<?php /* Smarty version Smarty-3.1.12, created on 2013-11-08 14:26:02
         compiled from "components/admin/templates/default/form/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209414395527ca01a6fb589-10135618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e66dd08105d5fecce701c5396e7d4e1c3bc78f42' => 
    array (
      0 => 'components/admin/templates/default/form/image.tpl',
      1 => 1377671547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209414395527ca01a6fb589-10135618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'image' => 0,
    'remove' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_527ca01a730756_86736614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527ca01a730756_86736614')) {function content_527ca01a730756_86736614($_smarty_tpl) {?>
<div class="control-group">
	<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
	<div class="controls">
		<?php if ($_smarty_tpl->tpl_vars['image']->value){?>
			<div class="item" style="width: 200px;">
				<a class="fancybox-button" data-rel="fancybox-button" href="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" target="_blank">
					<div class="zoom">
						<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="" />							
						<div class="zoom-icon"></div>
					</div>
				</a>
				<div class="details">
					<a href="/admin/files/" target="_blank" class="icon"><i class="icon-pencil"></i></a>
					<a href="#" class="icon" onclick="return removeImage('<?php echo $_smarty_tpl->tpl_vars['remove']->value;?>
', this);"><i class="icon-remove"></i></a>		
				</div>
			</div>
		<?php }?>
		<div class="fileupload fileupload-new" data-provides="fileupload">
			<div class="input-append">
				<div class="uneditable-input">
					<i class="icon-file fileupload-exists"></i> 
					<span class="fileupload-preview"></span>
				</div>
				<span class="btn btn-file">
					<span class="fileupload-new">???????????????? ????????</span>
					<span class="fileupload-exists">????????????????</span>
					<input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="file" class="default" />
				</span>
				<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">??????????????</a>
			</div>
		</div>
	</div>
</div><?php }} ?>