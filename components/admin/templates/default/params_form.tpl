<div class="button-init">
	{foreach from=$aParams item="aParam" name="foo" key="sName"}
		{if $aParam.type=="select"}
			{include file="components/admin/templates/default/form/select.start.tpl" title="{$aParam.title}" name="params[{$sName}]" attr='style="width: 300px"'}
				{foreach from=$aParam.values item="val" key="var"}
					<option {if $var==$aParam.current || ( $var==$aParam.default && !$aParam.current)} selected{/if} value="{$var}">{$val}</option>
				{/foreach}
			{include file="components/admin/templates/default/form/select.end.tpl"}
		{/if}
		{if $aParam.type=="text"}
			{include file="components/admin/templates/default/form/text.tpl" title="{$aParam.title}" name="params[{$sName}]" value=$aParam.current default=$aParam.default}
		{/if}
		{if $aParam.type=="editor"}
			{include file="components/admin/templates/default/form/editor.tpl" title="{$aParam.title}" name="params[{$sName}]" value=$aParam.default}
		{/if}
		{if $aParam.type=="checkbox"}
			<input name="params[{$sName}]" value="0" type="hidden">
			{include file="components/admin/templates/default/form/checkbox.tpl" title="{$aParam.title}" name="params[{$sName}]" value=$aParam.default }
		{/if}
	{/foreach}
</div>
==js==