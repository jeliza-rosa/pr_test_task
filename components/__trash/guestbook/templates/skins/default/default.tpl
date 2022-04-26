{include file="header.tpl"}
{$sText}
<div style="text-align: center">
	{if ($sSubmit=="new")}
		<div style="margin: 10px 0" class="result-geustbook">Благодарим Вас за вопрос! Мы обязательно Вам ответим!</div>
	{/if}
	{if ($sSubmit=="error")}
		<div style="margin: 10px 0" class="result-geustbook error">Пожалуйста заполните все поля!</div>
	{/if}
	<form action="" method="post" class="form" enctype="multipart/form-data">
		<div class="form-item">
			<label for="author">Имя <span class="red">*</span></label><br> <input type="text" name="author" class="inputtext"> 
		</div>
		<div class="form-item">
			<label for="author">E-mail (только для нас)</label><br> <input type="text" name="phone" class="inputtext"> 
		</div>
		<div class="form-item">
			<label for="question">Вопрос <span class="red">*</span></label> <br><textarea name="question" class="textarea"></textarea>
		</div>
		<div class="form-button">
			<input type="reset" value="Очистить"> <input type="submit" name="submit" value="Отправить вопрос">
		</div>
	</form>
</div>
<br>
<h2>Ответы на заданные вопросы</h2>
<section class="com-guestbook-list">
{foreach from=$aGuestbook item="oGuestbook" name="foo"}
	<article class="com-guestbook-list-item">
		<div class="com-guestbook-list-item-desc">
			Вопрос:
			<div class="com-guestbook-list-item-question"><div>{$oGuestbook->getQuestionhtml()}</div></div>
			<!-- <div class="com-guestbook-list-item-author"> {$oGuestbook->getDatefullcreate()|date_format:"%d.%m.%Y"} | {$oGuestbook->getAuthor()} </div>		 -->
		</div>
		<div class="com-guestbook-list-item-answer-desc">
			Ответ:
			<div class="com-guestbook-list-item-answer"> {$oGuestbook->getAnswerhtml()}</div>
			<div class="com-guestbook-list-item-answerauthor">{$oGuestbook->getDatefullanswer()|date_format:"%d.%m.%Y"}</div>
		</div>
	</article>
{/foreach}
</section>

{include file="footer.tpl"}
