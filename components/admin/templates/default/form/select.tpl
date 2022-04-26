<div class="control-group">
  <label class="control-label">{$title}</label>
  <div class="controls">
     <select name="parent" class="span6 m-wrap chosen{if $popover} popovers{/if}{if $validate} validate{/if}" data-placeholder="{$title}" tabindex="1"{if $popover} data-trigger="hover" data-original-title="{$title}" data-content="{$hint}"{/if}{if $validate} data-validate-rule="{$validate_rule}" data-validate-content="Пожалуйста, заполните поле."{/if}>
        {foreach from=$aValues item="item" key="key"}
			<option value="{$key}"{if $key==$value} selected="selected"{/if}>{$item}</option>
		{/foreach}
     </select>
  </div>
</div>