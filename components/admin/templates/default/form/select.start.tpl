<div class="control-group {$class}" {if $disabled}style="display:none;"{/if}>
	<label class="control-label">{$title}</label>
	<div class="controls">
		<select name="{$name}" {if $disabled}disabled="disabled"{/if} {if $id} id="{$id}" {/if} class="{$class} span6 m-wrap {if !$multiple}chosen{/if}" {if $multiple}multiple="multiple"{/if} data-placeholder="{$placeholder}" tabindex="1" {$attr}>