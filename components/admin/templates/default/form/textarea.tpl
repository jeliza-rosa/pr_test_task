<div class="control-group">
	<label class="control-label">{$title}</label>
	<div class="controls">
		<textarea class="span6 m-wrap{if $popover} popovers{/if}" name="{$name}" rows="4"{if $popover} data-trigger="hover" data-original-title="{$title}" data-content="{$hint}"{/if}>{$value}</textarea>
	</div>
</div>