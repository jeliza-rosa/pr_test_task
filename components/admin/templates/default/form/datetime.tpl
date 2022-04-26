<div class="control-group">
	<label class="control-label">{$title}</label>
	<div class="controls">
		{if $datename}
			<input name="{$datename}" value="{$dateval}" type="date" class="span-auto m-wrap">
		{/if}
		{if $timename}
			<input name="{$timename}" value="{$timeval}" type="date" class="span-auto m-wrap">
		{/if}
	</div>
</div>