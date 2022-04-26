/*$(document).ready(function(){
	ajaxActivateNode = function(action, id, obj){
		var el = jQuery(obj).parents(".portlet"),
			url = '/admin/nodes/'+action+'/'+id+'/';
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
						jQuery(obj).data('action', 'activate')
								   .find('.badge').removeClass('badge-success')
								   				  .addClass('badge-important')
								   				  .text('Нет');

					}
					if (data.msg==1){
						jQuery(obj).data('action', 'deactivate')
								   .find('.badge').removeClass('badge-important')
								   				  .addClass('badge-success')
								   				  .text('Да');
					}
				}
			}
		});
	}

	var div = $('div.portlet');
	jQuery('a.activation', div).live('click', function(){
		ajaxActivateNode(jQuery(this).data('action'), jQuery(this).data("id"), this);
		return false;
	});
})
*/


function ajaxSortUpNode(obj, id){
	var url = '/admin/nodes/sort/'+id+'/up/';
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

function ajaxSortDownNode(obj, id){
	var url = '/admin/nodes/sort/'+id+'/down/';
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

function modalConfirmDeleteNode(id){
	modalConfirm("Подтверждение удаления", "Вы действительно хотите удалить этот элемент?", "/admin/nodes/delete/"+id+"/");
}

jQuery(window).load(function(){
	var SelComponent = jQuery("#component");
	var InpNode = jQuery("#node");
	loadNodeParams(SelComponent.val(), InpNode.val());
	SelComponent.change(function(){
		loadNodeParams(jQuery(this).val(), InpNode.val());
	})
})
