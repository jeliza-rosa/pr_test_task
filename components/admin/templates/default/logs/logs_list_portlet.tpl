<ul class="feeds">
	{foreach from=$aLogs item="oItem" name="foo"}
	<li>
		<div class="col1">
			<div class="cont">
				<div class="cont-col1">
					{if $oItem->getType("login-success")}
					<div class="label label-success">								
						<i class="icon-bell"></i>
					</div>
					{else}
					<div class="label label-success">								
						<i class="icon-bell"></i>
					</div>
					{/if}
				</div>
				<div class="cont-col2">
					<div class="desc">
						{$oItem->getText()}
					</div>
				</div>
			</div>
		</div>
		<div class="col2">
			<div class="date">
				
					{if $smarty.now|date_format:"%Y-%m-%d"==$oItem->getDatetime()|date_format:"%Y-%m-%d"}Сегодня{else}{$oItem->getDatetime()|date_format:"%d %B"}{/if}, {$oItem->getDatetime()|date_format:"%H:%M"}

			</div>
		</div>
	</li>
	{/foreach}
</ul>