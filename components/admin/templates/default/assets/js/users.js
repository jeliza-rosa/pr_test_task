/*function ajaxActivate(action, type, id, obj){
	var el = jQuery(obj).parents(".portlet"),
		url = '/admin/users/'+action+'/'+type+'/'+id;
    App.blockUI(el);
	jQuery.ajax({
		url: url, 
		dataType: 'json',
		complete: function(){
			App.unblockUI(el);
		},
		success: function(data){
			if (data.state=="success"){
				if (data.msg==0){
					jQuery(obj).replaceWith('<a href="#" onclick="return ajaxActivate(\'activate\', \''+type+'\', '+id+', this);"><span class="badge badge-important">Нет</span></a>');
				}
				if (data.msg==1){
					jQuery(obj).replaceWith('<a href="#" onclick="return ajaxActivate(\'deactivate\', \''+type+'\', '+id+', this);"><span class="badge badge-success">Да</span></a>');
				}
			}
		}
	});
	return false;
}*/
$('a.changepass').toggle(
	function(){
		$(this).text("Оставить пароль");
		$('#chengepass').slideDown().find("input").prop("disabled", false);
	},
	function(){
		$(this).text("Сменить пароль");
		$('#chengepass').slideUp().find("input").prop("disabled", true);
	}
)

function modalConfirmDeleteUser(id){
	modalConfirm("Подтверждение удаления", "Вы действительно хотите удалить этого пользователя?", "/admin/users/delete/"+id+"/");
}
function modalConfirmDeleteGroup(id){
	modalConfirm("Подтверждение удаления", "Вы действительно хотите удалить эту группу пользователей?", "/admin/users/deletegroup/"+id+"/");
}


$(document).ready(function(){
	var div = $('#portlet_tab2'),
		controlDiv = $('<div>').addClass("control-group").hide();
		$('<label>').appendTo(controlDiv).addClass('control-label').text('Доступ к разделу');
		$('<div>').appendTo(controlDiv).addClass('controls');
		$('select.nodes' , div).eq(0).clone().appendTo( $('.controls', controlDiv) ).removeAttr("id").after('&nbsp;').find("option").prop("selected", false);
		$('select.access', div).eq(0).clone().appendTo( $('.controls', controlDiv) ).removeAttr("id").after('&nbsp;').find("option").prop("selected", false);
		

	checkValue = function(el){
		el.select = el.find(':selected');
		$('select.nodes option[value="'+el.select.val()+'"]:selected', div).not(el.select).each(function(){
			$(this).parents(".control-group").slideToggle().slideToggle();
		})
	}


	$('select.nodes').live('change', function(){
		var el = $(this);
		var iCurVal = $(this).val();

		if( iCurVal==0 ){
			el.parents(".control-group").slideUp(function(){
				$(this).remove();
			});
		}else{
			if( !( $('select.nodes option[value="0"]:selected', div).length ) ){
				var newSelect = controlDiv.clone().appendTo(div).slideDown();
				$('select', newSelect).chosen();
			}
			checkValue( el );
		}
	})
})