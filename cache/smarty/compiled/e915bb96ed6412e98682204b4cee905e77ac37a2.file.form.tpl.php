<?php /* Smarty version Smarty-3.1.12, created on 2014-07-07 17:47:57
         compiled from "components/feedback/templates/hooks/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404363778530efc48828a98-67420917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e915bb96ed6412e98682204b4cee905e77ac37a2' => 
    array (
      0 => 'components/feedback/templates/hooks/default/form.tpl',
      1 => 1404133704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404363778530efc48828a98-67420917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_530efc48988321_98244729',
  'variables' => 
  array (
    'oPage' => 0,
    'oNode' => 0,
    'aFields' => 0,
    'oField' => 0,
    'aValues' => 0,
    'sValue' => 0,
    'oFeedback' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530efc48988321_98244729')) {function content_530efc48988321_98244729($_smarty_tpl) {?><div class="hook-feedback-default">
	<div class="text"><?php echo $_smarty_tpl->tpl_vars['oPage']->value->getBody();?>
</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['oNode']->value->getFullUrl();?>
submit/" method="post">	
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h3>Вы можете оставить свою заявку здесь и сейчас</h3>
		</div>
		<div >
			<?php  $_smarty_tpl->tpl_vars["oField"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oField"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["oField"]->key => $_smarty_tpl->tpl_vars["oField"]->value){
$_smarty_tpl->tpl_vars["oField"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
?>
				<?php if ($_smarty_tpl->tpl_vars['oField']->value->getActive()==1){?>
					<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="label"){?>
						<div class="control-group">
							<p class="label"><?php echo $_smarty_tpl->tpl_vars['oField']->value->getTitle();?>
</p>
						</div>
					<?php }else{ ?>
						<div class="control-group">
							<label class="control-label"><?php if ($_smarty_tpl->tpl_vars['oField']->value->isArray()||$_smarty_tpl->tpl_vars['oField']->value->getType()!="checkbox"){?><?php echo $_smarty_tpl->tpl_vars['oField']->value->getTitle();?>
<?php }?></label>
							<div class="controls">
							<?php if ($_smarty_tpl->tpl_vars['oField']->value->getType()=="textarea"){?>
								<textarea name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['oField']->value->getRequired()){?>data-required="1"<?php }?>><?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue();?>
</textarea>
							<?php }elseif($_smarty_tpl->tpl_vars['oField']->value->getType()=="checkbox"){?>
								<?php if ($_smarty_tpl->tpl_vars['oField']->value->isArray()){?>
									<?php $_smarty_tpl->tpl_vars["aValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oField']->value->getValueArray(), null, 0);?>
									<?php  $_smarty_tpl->tpl_vars["sValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["sValue"]->key => $_smarty_tpl->tpl_vars["sValue"]->value){
$_smarty_tpl->tpl_vars["sValue"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
?>
										<input id="field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'];?>
" type="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getType();?>
" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
">
										<label for="field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'];?>
"><?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
</label><br>
									<?php } ?>
								<?php }else{ ?>
									<input id="field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
" type="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getType();?>
" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue();?>
">
									<label for="field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oField']->value->getTitle();?>
</label>
								<?php }?>
							<?php }elseif($_smarty_tpl->tpl_vars['oField']->value->getType()=="radio"){?>
								
									<?php $_smarty_tpl->tpl_vars["aValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oField']->value->getValueArray(), null, 0);?>
									<?php  $_smarty_tpl->tpl_vars["sValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["sValue"]->key => $_smarty_tpl->tpl_vars["sValue"]->value){
$_smarty_tpl->tpl_vars["sValue"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
?>
										<input id="field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'];?>
" type="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getType();?>
" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
">
										<label for="field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'];?>
"><?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
</label><br>
									<?php } ?>
								
							<?php }elseif($_smarty_tpl->tpl_vars['oField']->value->getType()=="select"){?>
								<select name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['oField']->value->getRequired()){?>data-required="1"<?php }?>>
									<?php $_smarty_tpl->tpl_vars["aValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oField']->value->getValueArray(), null, 0);?>
									<?php  $_smarty_tpl->tpl_vars["sValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["sValue"]->key => $_smarty_tpl->tpl_vars["sValue"]->value){
$_smarty_tpl->tpl_vars["sValue"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foo"]['index']++;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
</option>
									<?php } ?>
								</select>
							<?php }else{ ?>
								<input type="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getType();?>
" name="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue();?>
" <?php if ($_smarty_tpl->tpl_vars['oField']->value->getRequired()){?>data-required="1"<?php }?>>
							<?php }?>
							</div>
						</div>
					<?php }?>
				<?php }?>
			<?php } ?>
		</div>
		<div class="modal-footer">
			<input type="text" name="security" value="" style="display: none;">
			<input type="hidden" name="feedback" value="<?php echo $_smarty_tpl->tpl_vars['oFeedback']->value->getId();?>
">
			<input class="btn green" type="submit" name="submit" value="Отправить">
		</div>
		<div class="overlay">
			<div class="sending"></div>
			<div class="error">По техническим причинам Ваша заявка не была отправлена.</div>
			<div class="success">Ваша заявка принята, спасибо за обращение.</div>
		</div>
	</form>
</div><?php }} ?>