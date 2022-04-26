<div class="control-group">
  <label class="control-label">{$title}</label>
  <div class="controls">
     <input {if $name}name="{$name}"{/if} {if $value}value="{$value}"{/if} type="password" class="span6 m-wrap{if $popover} popovers{/if}{if $validate} validate{/if}{if $class} class{/if}"{if $popover}  data-trigger="hover" data-original-title="{$title}" data-content="{$hint}"{/if}{if $validate} data-validate-rule="{$validate_rule}" data-validate-content="Пожалуйста, заполните поле."{/if} {if $disabled}disabled="disabled"{/if}>
  </div>
</div>