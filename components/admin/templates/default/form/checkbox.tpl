<div class="control-group {$class}">
  <label class="control-label">{$title}</label>
  <div class="controls">
     <div class="{if $text=='custom'}custom-toggle-button{else}basic-toggle-button{/if}" data-enabled="{$textenabled}" data-disabled="{$textdisabled}">
     	<input name="{$name}" type="hidden" value="0" />
        <input name="{$name}" type="checkbox" class="toggle" {if $value } checked="checked" {/if} value="1" />
     </div>
  </div>
</div>