function loadHookParams(sType, iHookId){
	jQuery.ajax({
		url: "/admin/hooks/params/"+sType+"/"+(iHookId?iHookId+"/":""),
		success: function(data){
			jQuery("#portlet_tab2").html(data);
			
			if (!jQuery().chosen) {
				return;
			}
			$(".chosen").chosen();
			$(".chosen-with-diselect").chosen({
				allow_single_deselect: true
			});
		}
	});
}
function modalConfirmDeleteHook(id){
	modalConfirm("Подтверждение удаления", "Вы действительно хотите удалить этот элемент?", "/admin/hooks/delete/"+id+"/");
}
function modalConfirmDeleteGroup(id){
	modalConfirm("Подтверждение удаления", "Вы действительно хотите удалить этот элемент?", "/admin/hooks/groupdelete/"+id+"/");
}

function ajaxSortUpHook(obj, id){
	var url = '/admin/hooks/sort/'+id+'/up/';
	var el = jQuery(obj).parents(".portlet");
    App.blockUI(el);
    jQuery.ajax({
		url: url, 
		complete: function(){
			App.unblockUI(el);
		},
		success: function(data){
			el.find(".portlet-body").html(data);
		}
	});
	return false;
}

function ajaxSortDownHook(obj, id){
	var url = '/admin/hooks/sort/'+id+'/down/';
	var el = jQuery(obj).parents(".portlet");
    App.blockUI(el);
    jQuery.ajax({
		url: url, 
		complete: function(){
			App.unblockUI(el);
		},
		success: function(data){
			el.find(".portlet-body").html(data);
		}
	});
	return false;
}

jQuery(window).load(function(){
	var SelType = jQuery("#type");
	var iHookId = jQuery("#hook").val();
	loadHookParams(SelType.val(), iHookId);
	SelType.change(function(){
		loadHookParams(jQuery(this).val(), iHookId);
	})

	$('.nodeAll input').change(function(){
		if($(this).prop("checked")){
			$('div.nodeAllList').slideUp().find("select").prop("disabled", true);
		}else{
			$('div.nodeAllList').slideDown().find("select").prop("disabled", false);
		}
	})
})