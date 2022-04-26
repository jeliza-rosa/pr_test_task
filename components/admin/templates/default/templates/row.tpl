<tr>
	<td>{$id}
		<input type="hidden" name="id[]" value="{$id}">
	</td>
	<td>
		<select name="template[]" class="chosen" tabindex="1">
			{foreach from=$aTemplatesAvailable item=oTemplate}
				<option value="{$oTemplate->getName()}" {if $template==$oTemplate->getName()}selected="selected"{/if}>{$oTemplate->getTitle()} - {$oTemplate->getName()}</option>
			{/foreach}
		</select>
	</td>
	<td>
		<select name="type[]" class="chosen selectype" tabindex="1">
			{foreach from=$aConditionTypes key=sName item=sConditionTitle}
				<option value="{$sName}" {if $type==$sName}selected="selected"{/if}>{$sConditionTitle}</option>
			{/foreach}
		</select>
	</td>
	<td>
		<div class="condition get {if $type=="get"}active{/if}">
			{include file="components/admin/templates/default/form/text.tpl" title="GET-переменная" name="var[]" value=$var popover=true hint="Допускаются только латинские буквы (a-z), нижнее подчеркивание (_) и цифры (0-9)"} 
			{include file="components/admin/templates/default/form/text.tpl" title="Значение" name="value[]" value=$value popover=true hint="Допускаются только латинские буквы (a-z), нижнее подчеркивание (_) и цифры (0-9)" }
		</div>

		<div class="condition node nodetree {if $type=="node" or $type=="nodetree"}active{/if}">
			{include file="components/admin/templates/default/form/select.start.tpl" title="Раздел" name="node[]" class="node"}
				{foreach from=$aNodeTree item=foo}
					{include file="components/admin/templates/default/nodes/nodes_form_node_item.tpl" item=$foo level=0 val=$node}
				{/foreach}
			{include file="components/admin/templates/default/form/select.end.tpl"}
		</div>
	</td>
	<td>
		<a class="btn no-padding no-background delete-button" href="#modalDelete" data-toggle="modal" data-id="{$id}"><i class="icon-remove-sign text-error"></i></a>
	</td>
	<td>
		<a href="#" class="active-button" data-id="{$id}">
			<span class="badge {if $active==1}badge-success{else}badge-important{/if}">{if $active==1}Да{else}Нет{/if}</span>
		</a>
		<input type="hidden" class="active-input" name="active[]" value="{$active}">
	</td>
	<td>
		<a href="#" class="arrow-down sort-button" data-direction="down"><i class="icon-chevron-down"></i></a>
		<a href="#" class="arrow-up sort-button" data-direction="up"><i class="icon-chevron-up"></i></a>
		<input type="hidden" class="sort-input" name="sort[]" value="{$sort}">
	</td>
</tr>