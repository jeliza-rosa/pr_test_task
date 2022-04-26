{include file="components/admin/templates/default/header.tpl"}

<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN SAMPLE FORM PORTLET-->   
		<div class="portlet box blue">
			<div class="portlet-title">
				<h4><i class="icon-reorder"></i>{$sFormTitle}</h4>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="#portlet-config" data-toggle="modal" class="config"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="{$aTemplate.host}admin/{$sAction}/{$sFormAction}/" class="form-horizontal validate" method="post">
					<input type="hidden" name="id" value="{$oUser->getId()}">
					<input type="hidden" name="apply" value="0">
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#portlet_tab1" data-toggle="tab"><i class="icon-cog"></i> Основные</a></li>
						</ul>
						<!-- BEGIN TAB CONTENT-->
						<div class="tab-content">
							{if $sErrorMsg}
								<div class="alert alert-error">
									<button class="close" data-dismiss="alert"></button>
									<strong>Ошибка!</strong>
									{$sErrorMsg}
								</div>
							{/if}
							<!-- BEGIN PORTLET TAB1-->
							<div class="tab-pane active" id="portlet_tab1">
								{include file="components/admin/templates/default/form/text.tpl" title="Login" name="login" value=$oUser->getLogin() popover=true hint="Логин.  Допускаются только латинские буквы (a-z), нижнее подчеркивание (_) и цифры (0-9)" validate=true validate_rule="^\w+$"}

								{if $iPassCheck}
									<div class="control-group">
										<div class="controls"><a class="btn blue changepass">Сменить пароль</a></div>
										</div>
									<div id="chengepass" style="display:none;">
								{/if}
										<input type="hidden" name="changepass" value="1" {if $iPassCheck}disabled="disabled"{/if}>
										{include file="components/admin/templates/default/form/pass.tpl" title="Пароль" disabled=$iPassCheck name="password-first" class="chechpass" popover=true hint="Пароль пользователя. Используются любые символы и буквы." validate=true validate_rule="^.+$"}
										{include file="components/admin/templates/default/form/pass.tpl" title="Повторите Пароль" disabled=$iPassCheck name="password-second" class="checkpass" popover=true hint="Пароль пользователя. Используются любые символы и буквы." validate=true validate_rule="^.+$"}

								{if $iPassCheck}
									</div>
								{/if}


								<div class="control-group">
									<label class="control-label">Группа</label>
									<div class="controls">
										<select name="group" class="span6 m-wrap chosen" data-placeholder="Выберите группу пользователей" tabindex="1">
											{foreach from=$aGroups item=foo}
												<option value="{$foo->getId()}"{if $oUser->getGroup()->getId()==$foo->getId()} selected="selected"{/if}>{$foo->getName()}</option>
											{/foreach}
										</select>
									</div>
								</div>
	
								{include file="components/admin/templates/default/form/text.tpl" title="Email" name="email" value=$oUser->getEmail() }

								{include file="components/admin/templates/default/form/text.tpl" title="Имя" name="name" value=$oUser->getName() }

							   {include file="components/admin/templates/default/form/checkbox.tpl" title="Показывать" name="active" value=$oUser->getActive() }
							</div>
							<!-- END PORTLET TAB1-->
							<div class="form-actions">
								<button type="submit" class="btn blue"><i class="icon-ok"></i> Сохранить</button>
								<button type="button" class="btn apply">Применить</button>
								<button type="button" class="btn" onclick="document.location='{$aTemplate.host}admin/{$sAction}/';">Отмена</button>
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

{include file="components/admin/templates/default/footer.tpl"}