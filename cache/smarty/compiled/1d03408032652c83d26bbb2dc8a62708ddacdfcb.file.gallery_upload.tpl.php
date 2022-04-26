<?php /* Smarty version Smarty-3.1.12, created on 2014-02-24 17:10:07
         compiled from "components/gallery/templates/admin/gallery_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1441042730530b288fbc0262-24697431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d03408032652c83d26bbb2dc8a62708ddacdfcb' => 
    array (
      0 => 'components/gallery/templates/admin/gallery_upload.tpl',
      1 => 1378569830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1441042730530b288fbc0262-24697431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplate' => 0,
    'aRequest' => 0,
    'sFormTitle' => 0,
    'aImages' => 0,
    'oImage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530b288fe61f28_21660404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b288fe61f28_21660404')) {function content_530b288fe61f28_21660404($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
	var upload_url='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['id'];?>
/';
</script>
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
		    <form action="" class="form-horizontal validate" method="post" enctype="multipart/form-data">
		       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['id'];?>
">
		       <input type="hidden" name="apply" value="0">
		       <input type="hidden" name="sub" value="1">
		       <input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['aRequest']->value['parent'];?>
">
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительно</a></li>
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               	   <!-- BEGIN PORTLET TAB1-->
	                   <div class="tab-pane active" id="portlet_tab1">
			                <div class="row-fluid">
								<h4><i class="icon-picture"></i> <?php echo $_smarty_tpl->tpl_vars['aRequest']->value['title'];?>
</h4>
							</div>
							<!-- BEGIN GALLERY MANAGER LISTING-->
							<div class="row-fluid">
								<div id="file_upload"></div>
							</div>
							<div class="row-fluid">			
								<?php if ($_smarty_tpl->tpl_vars['aImages']->value){?>
									<?php  $_smarty_tpl->tpl_vars["oImage"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oImage"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["oImage"]->key => $_smarty_tpl->tpl_vars["oImage"]->value){
$_smarty_tpl->tpl_vars["oImage"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
?>
										
										<?php if (preg_match("/\.(jpg|jpeg|gif|png)"."$"."/",$_smarty_tpl->tpl_vars['oImage']->value->getUrl)){?>
											<div class="span2">
												<div class="item">
													<a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getUrl();?>
" target="_blank">
														<div class="zoom">
															<img src="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getUrl();?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oImage']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
" />							
															<div class="zoom-icon"></div>
														</div>
													</a>
													<div class="details">
														<a href="#" class="icon"><i class="icon-paper-clip"></i></a>
														<a href="#" class="icon"><i class="icon-link"></i></a>
														<a href="#" class="icon"><i class="icon-pencil"></i></a>
														<a href="#" class="icon" onclick="return removeImage('<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
removeimage/<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getId();?>
/', this);"><i class="icon-remove"></i></a>		
													</div>
												</div>
											</div>
										
										<?php }else{ ?>
											<table>
												<!-- <tr>
													<th>Название</th>
													<th>Описание</th>
													<th>Удалить</th>
												</tr> -->
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['oImage']->value->getID();?>
</td>
													<td><label>Название</label><input name="file[<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getID();?>
][title]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oImage']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
"></td>
													<td><label>Описание</label><input name="file[<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getID();?>
][description]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oImage']->value->getDescription(), ENT_QUOTES, 'UTF-8', true);?>
"></td>
													<td><a href="#" class="icon" onclick="return removeImage('<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
removeimage/<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getId();?>
/', this);"><i class="icon-remove"></i></a><input name="file[<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getID();?>
][url]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getUrl();?>
"><input name="file[<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getID();?>
][gallery]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oImage']->value->getGallery();?>
"></td>
												</tr>
											</table>
										<?php }?>
										<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%6==0){?></div><div class="row-fluid"><?php }?>
									<?php } ?>
								<?php }else{ ?>
								<div class="span12">
									<p>Фотографии еще не загружены</p>
								</div>
								<?php }?>
							</div>

			          </div>
			          <!-- END PORTLET TAB1-->
			          <!-- BEGIN PORTLET TAB2-->
	                  <div class="tab-pane" id="portlet_tab2">
	                  	   
	                  </div>	
	                  <!-- END PORTLET TAB2-->
			          <!-- BEGIN PORTLET TAB3-->
	                  <div class="tab-pane" id="portlet_tab3">
	                  	
	                  </div>	
	                  <!-- END PORTLET TAB3-->
	                  <div class="form-actions">
		                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
		                  <button type="button" class="btn apply">Применить</button>
		                  <button type="button" class="btn" onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
#portlet_tab2';">Отмена</button>
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