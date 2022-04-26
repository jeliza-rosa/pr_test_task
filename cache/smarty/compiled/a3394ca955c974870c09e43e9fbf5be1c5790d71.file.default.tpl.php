<?php /* Smarty version Smarty-3.1.12, created on 2014-03-13 10:41:07
         compiled from "components/feedback/templates/skins/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1787229343528202dd68a556-91780692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3394ca955c974870c09e43e9fbf5be1c5790d71' => 
    array (
      0 => 'components/feedback/templates/skins/default/default.tpl',
      1 => 1394685666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1787229343528202dd68a556-91780692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_528202dd7b39e9_85253436',
  'variables' => 
  array (
    'oFeedback' => 0,
    'sMsg' => 0,
    'bShowResults' => 0,
    'aResults' => 0,
    'oResult' => 0,
    'aValues' => 0,
    'aValue' => 0,
    'oAnswer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528202dd7b39e9_85253436')) {function content_528202dd7b39e9_85253436($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/vprioritete/data/www/prcms30.vprioritete.org/engine/libs/Smarty-3.1.12/libs/plugins/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="feedback-default">
		
		<?php echo $_smarty_tpl->tpl_vars['oFeedback']->value->getText();?>


		<?php if ($_smarty_tpl->tpl_vars['sMsg']->value){?><div class="msg"><?php echo $_smarty_tpl->tpl_vars['sMsg']->value;?>
</div><?php }?>

		<?php if ($_smarty_tpl->tpl_vars['bShowResults']->value){?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['oResult'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oResult']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aResults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oResult']->key => $_smarty_tpl->tpl_vars['oResult']->value){
$_smarty_tpl->tpl_vars['oResult']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['oResult']->value&&$_smarty_tpl->tpl_vars['oResult']->value->getActive()){?>
						<li class="result">
							<ul class="values">
								<?php $_smarty_tpl->tpl_vars["aValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oResult']->value->getValues(), null, 0);?>
								<?php  $_smarty_tpl->tpl_vars["aValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["aValue"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["aValue"]->key => $_smarty_tpl->tpl_vars["aValue"]->value){
$_smarty_tpl->tpl_vars["aValue"]->_loop = true;
?>
									<?php if (is_object($_smarty_tpl->tpl_vars['aValue']->value["field"])&&is_object($_smarty_tpl->tpl_vars['aValue']->value["value"])){?>
										<li><span><?php echo $_smarty_tpl->tpl_vars['aValue']->value['field']->getTitle();?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['aValue']->value['value']->getValue();?>
</span></li>
									<?php }?>
								<?php } ?>
							</ul>
							<ul class="answers">
								<?php  $_smarty_tpl->tpl_vars["oAnswer"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oAnswer"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oResult']->value->getAnswers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oAnswer"]->key => $_smarty_tpl->tpl_vars["oAnswer"]->value){
$_smarty_tpl->tpl_vars["oAnswer"]->_loop = true;
?>
									<li>
										<div class="author"><?php echo $_smarty_tpl->tpl_vars['oAnswer']->value->getAuthor();?>
</div>
										<div class="text"><?php echo $_smarty_tpl->tpl_vars['oAnswer']->value->getText();?>
</div>
									</li>
								<?php } ?>
							</ul>
						</li>
					<?php }?>
				<?php } ?>
			</ul>
		<?php }?>

		<?php echo smarty_function_hook(array('name'=>'Feedback','component'=>"feedback",'template'=>'default','node'=>$_smarty_tpl->tpl_vars['oFeedback']->value->getNode()),$_smarty_tpl);?>

	</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>