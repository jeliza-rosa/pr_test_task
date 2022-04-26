<?php /* Smarty version Smarty-3.1.12, created on 2014-04-17 09:30:08
         compiled from "components/catalog/templates/admin/attributes_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1346619320534f4ac0d43228-61074342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59788af0c1414854af298003738201d9414fbfe9' => 
    array (
      0 => 'components/catalog/templates/admin/attributes_form.tpl',
      1 => 1378452463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1346619320534f4ac0d43228-61074342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFormTitle' => 0,
    'aRequest' => 0,
    'aAttributes' => 0,
    'item' => 0,
    'aLang' => 0,
    'aTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_534f4ac0eeb7b6_98493136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534f4ac0eeb7b6_98493136')) {function content_534f4ac0eeb7b6_98493136($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
		       <div class="tabbable tabbable-custom">
         	       <ul class="nav nav-tabs">	
	         	   	  <li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
	                  <!-- <li><a href="#portlet_tab2" data-toggle="tab"><i class="icon-cogs"></i> Дополнительные</a></li> -->
	               </ul>
	               <!-- BEGIN TAB CONTENT-->
	               <div class="tab-content">
	               <!-- BEGIN PORTLET TAB1-->
				   	   <table class="table table-striped table-bordered table-advance table-hover">
							<thead>
								<tr>
									<th></th>
									<th><i class="icon-bookmark"></i> Название</th>
									<th><i class="icon-bookmark-empty"></i> Псевдоним</th>
									<th><i class="icon-tasks"></i> Тип</th>
									<th><i class="icon-info-sign"></i> По-умолчанию</th>
									<th width="120"><i class="icon-exclamation-sign"></i> Обязательно</th>
									<th width="100"><i class="icon-reorder"></i> Сортировка</th>
									<th width="50">Удалить</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aAttributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
								<tr>
									<td>
										<input name="attribute[id][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" type="hidden">
										<span style="line-height: 30px;"><?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
</span>
									</td>
									<td>
										<input name="attribute[title][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getTitle();?>
" type="text" class="span12 m-wrap popovers" data-trigger="hover" data-original-title="Заголовок" data-content="Заголовок <?php echo $_smarty_tpl->tpl_vars['aLang']->value['items_genitive'];?>
. Используются любые символы и буквы.">
									</td>
									<td><input name="attribute[name][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" type="text" class="span12 m-wrap"></td>
									<td>
										<select name="attribute[type][]">
											<option value="text"<?php if ($_smarty_tpl->tpl_vars['item']->value->getType()=="text"){?> selected="selected"<?php }?>>
												Текстовое поле
											</option>
											<option value="textarea"<?php if ($_smarty_tpl->tpl_vars['item']->value->getType()=="textarea"){?> selected="selected"<?php }?>>
												Многострочное текстовое поле
											</option>
											<!--
<option value="select"<?php if ($_smarty_tpl->tpl_vars['item']->value->getType()=="select"){?> selected="selected"<?php }?>>
												Выпадающий список
											</option>
-->
											<option value="checkbox"<?php if ($_smarty_tpl->tpl_vars['item']->value->getType()=="checkbox"){?> selected="selected"<?php }?>>
												Флаг
											</option>
											<!--
<option value="file"<?php if ($_smarty_tpl->tpl_vars['item']->value->getType()=="file"){?> selected="selected"<?php }?>>
												Файл/Картинка
											</option>
-->
										</select>
									</td>
									<td><input name="attribute[default][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getDefault();?>
" type="text" class="span12 m-wrap"></td>
									<td style="text-align: center;">
					                     <select name="attribute[active][]" style="width: 70px;">
											<option value="0"<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()=="0"){?> selected="selected"<?php }?>>
												Нет
											</option>
											<option value="1"<?php if ($_smarty_tpl->tpl_vars['item']->value->getActive()=="1"){?> selected="selected"<?php }?>>
												Да
											</option>
										</select>
		                     		</td>
									<td><input name="attribute[sort][]" value="<?php if (!$_smarty_tpl->tpl_vars['item']->value->getId()){?>500<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value->getSort();?>
<?php }?>" type="text" class="span12 m-wrap"></td>
									<td style="text-align: center;">
										 <div class="basic-toggle-button">
					                        <input name="attribute[delete][]" type="checkbox" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" />
					                     </div>
		                     		</td>
								</tr>
								<?php } ?>
		
							</tbody>
						</table>
					
				    <!-- END FORM-->  
				</div>
				
			</div>   
			<div class="form-actions" style="padding-left: 20px;">
                <button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
                <button type="button" class="btn apply">Применить</button>
                <button type="button" class="btn" onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['aTemplate']->value['node_url'];?>
';">Отмена</button>
            </div>  
            </form>
         </div>
      </div>
      <!-- END SAMPLE FORM PORTLET-->
   </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("components/admin/templates/default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>