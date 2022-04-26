var TemplateConditionBlock = $('.portlet-body.form .pattern tr').clone();
jQuery(function(){
	var formBlock = $(".portlet-body.form"),
		alertToSave = function(){
			formBlock.prepend('<div class="alert"><button class="close" data-dismiss="alert"></button><strong>Внимание!</strong> Измененные данные не сохранены.</div>');
			alertToSave = function(){};
		};

	$('select.selectype', formBlock).live("change", function(){
		var tr = $(this).closest("tr"),
			condition = $(this).val(),
			conditionBlock = $(".condition."+condition, tr);

		$(".condition", tr).removeClass("active").filter(conditionBlock).addClass("active");
		alertToSave();
	})

	$('.add-button', formBlock).click(function(){
		var tr = TemplateConditionBlock.clone();
		tr.appendTo($("#table1"));
		App.handleFormElementsInit(tr);
		alertToSave();
		return false;
	})

	$('.sort-button', formBlock).live("click", function(){
		var tr = $(this).closest('tr'),
			direction = $(this).data('direction');
		if( direction == "up" ) tr.insertBefore( tr.prev() );
		else if( direction == "down" ) tr.insertAfter( tr.next() );
		tr.parent().find("tr").each(function(i, el){
			$('.sort-input', el).val(i);
		})
		alertToSave();
		return false;
	})

	$('.delete-button', formBlock).live("click", function(){
		var id = $(this).data('id'),
			tr = $(this).closest('tr'),
			modalForm = $('#modalDelete');
		
		modalConfirm("Подтверждение удаления", "Вы действительно хотите удалить этот элемент?");
		$('.submit', modalForm).off("click");
		if( id ){
			$('.submit', modalForm).on("click",function(){
				App.blockUI(formBlock);
				jQuery.ajax({
				    url: "/admin/templates/delete/"+id, 
					dataType: 'json',
					complete: function(){
						App.unblockUI(formBlock);
					},
					success: function(data){
						if (data.state=="success"){
							tr.remove();
						}
					}
				});
			})
		}else{
			$('.submit', modalForm).on("click",function(){
				tr.remove();
			})
		}
	})

	$('.active-button', formBlock).live("click", function(){
		var input = $(this).closest('td').find("input.active-input");
		if( input.val()==1 ){
			$(this).find('span').removeClass('badge-success').addClass('badge-important').text('Нет');
			input.val(0);
		}else{
			$(this).find('span').removeClass('badge-important').addClass('badge-success').text('Да');
			input.val(1);
		}
		alertToSave();
		return false;
	})
})