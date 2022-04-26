{*
Пример использования:

{include file="components/admin/templates/default/form/text.tpl" title="Заголовок" name="title" value=$oNode->getTitle() popover=true hint="Заголовок раздела. Используются любые символы и буквы." validate=true validate_rule="^.+$" translate="url"}

Где:
title - заголовок (размещается в label)
name - соответствующий аттирбут тега
value - соответствующий аттирбут тега
popover - флаг указывающий на наличие подсказки
hint - текст подсказки
validate - флаг обязательности поля
validate_rule - регулярное выражение по которому будет проверяться поле
translate - ссылка (поиск идет по аттрибуту name) на текстовое поле в которое следует записать транслитерированное значение текущего поля (записывает только в пустое поле)
disabled - активность инпута
attr - произвольный аттрибут 
*}

<div class="control-group">
  <label class="control-label">{$title}</label>
  <div class="controls">
     <input {if $name}name="{$name}"{/if} value="{if $value}{$value|escape:'html'}{elseif $default}{$default|escape:'html'}{/if}" type="number" class="span6 m-wrap{if $popover} popovers{/if}{if $validate} validate{/if}{if $class} class{/if}{if $translate} translate{/if}"{if $popover}  data-trigger="hover" data-original-title="{$title}" data-content="{$hint}"{/if} {if $translate}data-translate="{$translate}"{/if} {if $validate} data-validate-rule="{$validate_rule}" data-validate-content="Пожалуйста, заполните поле."{/if} {$attr} {if $disabled}disabled="disabled"{/if}>
  </div>
</div>