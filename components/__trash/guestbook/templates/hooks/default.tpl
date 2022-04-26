{foreach from=$aNews item="oNews" name="foo"}
<article>
	{if $oNews->getImage()} {if ($bImage==true)}<a class="popup-photo align-left pretty-photo" href="/news/{$oNews->getId()}/"><div class="overlay"></div><img src="{$oNews->getImage()}"><div class="icon-search"></div></a>{/if} {/if}
	<div class="body align-left">
		<h2><a href="/news/{$oNews->getId()}/">{$oNews->getTitle()}</a> ({$oNews->getDate()|date_format:"%d.%m.%Y"})</h2>
		<p>{$oNews->getAnnouncement()}</p>
	</div>
</article>
{/foreach}