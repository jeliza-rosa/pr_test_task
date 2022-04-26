<?php /* Smarty version Smarty-3.1.12, created on 2013-11-11 19:37:33
         compiled from "components/iblock/templates/admin/page_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14027293695280dd9d5cd451-77491084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d1c930020fa78c7e2503bfbf79964c99bc08966' => 
    array (
      0 => 'components/iblock/templates/admin/page_form.tpl',
      1 => 1374818497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14027293695280dd9d5cd451-77491084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aTemplate' => 0,
    'sFormAction' => 0,
    'aRequest' => 0,
    'sAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5280dd9d666449_97227304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5280dd9d666449_97227304')) {function content_5280dd9d666449_97227304($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row-fluid">
   <div class="span12">
      <!-- BEGIN SAMPLE FORM PORTLET-->   
      <div class="portlet box blue">
         <div class="portlet-title">
            <h4><i class="icon-reorder"></i><?php echo $_smarty_tpl->tpl_vars['sFormTitle']->value;?>
</h4>
            <div class="tools">
				<a href="javascript:;" class="collapse"></a>
				<a href="#portlet-config" data-toggle="modal" class="config"></a>
				<a href="javascript:;" class="reload"></a>
				<a href="javascript:;" class="remove"></a>
			</div>
         </div>
         <div class="portlet-body form">
         	<!-- BEGIN FORM-->
		    <form action="<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
<?php echo $_smarty_tpl->tpl_vars['sFormAction']->value;?>
/" class="form-horizontal validate" method="post">
		       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['id'];?>
">
		       <input type="hidden" name="apply" value="0">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Текст на странице</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	  <!-- BEGIN PORTLET TAB1-->
	                  <div class="tab-pane active" id="portlet_tab1">
	                  	  <div class="control-group">
			                  <label class="control-label">Текст на странице</label>
			                  <div class="controls">
				                  <textarea class="span12 ckeditor m-wrap" name="content" rows="6"><?php echo $_smarty_tpl->tpl_vars['aRequest']->value['content'];?>
</textarea>
			                  </div>
	                  	  </div>
			          </div>
			          <!-- END PORTLET TAB1-->
			          <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <button type="button" class="btn" onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['host'];?>
admin/<?php echo $_smarty_tpl->tpl_vars['sAction']->value;?>
/';">Отмена</button>
		              </div>
		           </div>
		           <!-- END TAB CONTENT-->
		       </div>   
		    </form>
		    <!-- END FORM-->       
         </div>
      </div>
      <!-- END SAMPLE FORM PORTLET-->
   </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>