{*пример использования
{include file="components/admin/templates/default/form/image.tpl" title="Изображение" name="image" image=$oItem->getImg() remove="{$aTemplate.node_url}menu/removeimage/{$oItem->getId()}/" }
*}
<div class="control-group">
	<label class="control-label">{$title}</label>
	<div class="controls">
		{if $image}
			<div class="item" style="width: 200px;">
				<a class="fancybox-button" data-rel="fancybox-button" href="{$image}" target="_blank">
					<div class="zoom">
						<img src="{$image}" alt="" />							
						<div class="zoom-icon"></div>
					</div>
				</a>
				<div class="details">
					<a href="/admin/files/" target="_blank" class="icon"><i class="icon-pencil"></i></a>
					<a href="#" class="icon" onclick="return removeImage('{$remove}', this);"><i class="icon-remove"></i></a>		
				</div>
			</div>
		{/if}
		<div class="fileupload fileupload-new" data-provides="fileupload">
			<div class="input-append">
				<div class="uneditable-input">
					<i class="icon-file fileupload-exists"></i> 
					<span class="fileupload-preview"></span>
				</div>
				<span class="btn btn-file">
					<span class="fileupload-new">Выберите файл</span>
					<span class="fileupload-exists">Изменить</span>
					<input name="{$name}" type="file" class="default" />
				</span>
				<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Удалить</a>
			</div>
		</div>
	</div>
</div>