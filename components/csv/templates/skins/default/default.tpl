{include file="header.tpl"}
<section class="com-news-list">
	<table>
		<tr>
			<th style="border: 1px solid black;">ID</th>
			<th style="border: 1px solid black;">Задача</th>
			<th style="border: 1px solid black;">Группа задачи</th>
			<th style="border: 1px solid black;">Дата</th>
			<th style="border: 1px solid black;">Время(план)</th>
			<th style="border: 1px solid black;">Время(факт)</th>
			<th style="border: 1px solid black;">Сумма</th>
			<th style="border: 1px solid black;">Ссылка</th>
		</tr>
			{foreach from=$aCsv item="oCsv" name="foo"}
				<tr>
					<td style="border: 1px solid black;">{$oCsv->getId()}</td>
					<td style="border: 1px solid black;">{$oCsv->getTask()}</td>
					<td style="border: 1px solid black;">{$oCsv->getGroup()}</td>
					<td style="border: 1px solid black;">{$oCsv->getDate()|date_format}</td>
					<td style="border: 1px solid black;">{$oCsv->getTimePlan()}</td>
					<td style="border: 1px solid black;">{$oCsv->getTimeFact()}</td>
					<td style="border: 1px solid black;">{$oCsv->getSum()}</td>
					<td style="border: 1px solid black;"><a href="{$oCsv->getLink()}">{$oCsv->getLink()}</a></td>
				</tr>
			{/foreach}
	</table>

	{if $iPage && $iCount && iOnPage}
		{hook name="pagination" template="default" page=$iPage count=$iCount onpage=$iOnPage}
	{/if}
</section>
{include file="footer.tpl"}