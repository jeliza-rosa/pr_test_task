{include file="header.tpl"}
{if $aCarts}
<table border="1" cellpadding="5" cellpadding="0">
  <tr>
	<th>Товар</th>
	<th>Кол-во</th>
	<th>Цена</th>
	<th></th>
  </tr>
  {foreach from=$aCarts item="oCart"}
  {assign var="oItem" value=$oCart->getItem0()}
  <tr>
	<td>{$oItem->getTitle()}</td>
	<td>{$oCart->getCount()}</td>
	<td>{$oItem->getPrice()} руб</td>
	<td><a href="/cart/delete/{$oCart->getId()}/">Удалить</a></td>
  </tr>
  {/foreach}
</table><br>
<p>
	<a href="/catalog/" class="btn btn-info">Вернуться к каталогу</a> <a href="/order/" class="btn btn-success">Оформить заказ</a>
</p>
{else}
<p>Ваша корзина пуста! Перейти к <a href="/catalog/">каталогу товаров</a>.</p>
{/if}

{include file="footer.tpl"}