function ajaxSortMenu(obj, id, dir){
	var url = '/admin/menu/sort/'+id+'/'+dir+'/';
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
function modalConfirmDeleteMenu(id){
	modalConfirm("Подтверждение удаления", "Вы действительно хотите удалить этот элемент?", "/admin/menu/delete/"+id+"/");
}
function modalConfirmDeleteItem(id){
	modalConfirm("Подтверждение удаления", "Вы действительно хотите удалить этот элемент?", "/admin/menu/deleteitem/"+id+"/");
}