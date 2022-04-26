function ajax(url, todo){
	jQuery.ajax({
		url: url,
		success: todo(data)
	});
}
/*активация элементов (для админских первый параметр - компонент, для всех остальных url до страницы)*/
jQuery(function(){ //zyets
	jQuery('.custom-toggle-button').each(function(){
		var el = $(this);
		el.toggleButtons({
			width: 200,
			label: {
				enabled: el.data("enabled"),
				disabled: el.data("disabled")
			}
		});
	})

	var ajaxActivate = function(component, action, id, obj){
		var el = jQuery(obj).parents(".portlet"),
			url = component+'/'+action+'/'+id+'/';;
		if(component.indexOf("admin")==-1 )	url = '/admin/'+url;
		
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
							.find('.badge')
							.removeClass('badge-success')
							.addClass('badge-important')
							.text('Нет');
					}
					if (data.msg==1){
						jQuery(obj).data('action', 'deactivate')
							.find('.badge')
							.removeClass('badge-important')
							.addClass('badge-success')
							.text('Да');
					}
				}
			}
		});
	}

	var ajaxSortItems = function(obj, url){
		var el = jQuery(obj).closest(".portlet");
		App.blockUI(el);
		jQuery.ajax({
			url: url, 
			complete: function(){
				App.unblockUI(el);
			},
			success: function(data){
				el.find(".portlet-body").html(data);
				App.handleFormElementsInit(el);
			}
		});
		return false;
	}
	$('a.sort-button-ajax').live('click', function(){
		var url = $(this).data("url");
		if( url ) ajaxSortItems(this, url);
	})

	jQuery('a.activation').live('click', function(){
		ajaxActivate(
			jQuery(this).data('component'),
			jQuery(this).data('action'),
			jQuery(this).data("id"),
			this);
		return false;
	});
})
/*активация элементов*/


jQuery(function(){

	/*транслитерация полей*/
	jQuery("input.translate").change(function(){ //zyets
		var el = jQuery(this),
			str = translateValue( el.val() );
			input = jQuery('input[name="'+el.data("translate")+'"]', el.parents("form"));
			input.val(function(index, value){ return (value || str); });
	})


	jQuery("input.validate").blur(function(){
		checkValidation(this);
	});
	jQuery("form.validate").submit(function(){
		var result=true;
		jQuery('.alert').detach();
		jQuery("input.validate:enabled").each(function(){
			if (!checkValidation(this)) result=false;
		});
		if (!result){
			var el=jQuery(this).find('.tab-content');
			if (!el.length) el=jQuery(this).parents('.portlet-body');
			jQuery(el).prepend('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Ошибка!</strong> Не все обязательные поля заполнены правильно.</div>');
			jQuery('html,body').animate({scrollTop: 0}, 200);
		}
		return result;
	});
	jQuery("form .apply").click(function(){
		jQuery(this).parents("form").find('input[name="apply"]').val(1);
		jQuery(this).parents("form").submit();
	});
	jQuery('.group-checkable').change(function () {
        var set = jQuery(this).attr("data-set");
        var checked = jQuery(this).is(":checked");
        jQuery(set).each(function () {
            if (checked) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
        });
        jQuery.uniform.update(set);
    });
    if (document.location.hash) jQuery("a[href='"+document.location.hash+"']").click();
    
    
    
    /*-------УДАЛИТЬ ВЫБРАННЫЕ BEGIN-------*/
    jQuery("#deleteChosen").click(function(){
    	if (!jQuery("#deleteChosen").attr("data-set")){
	    	alert("Не установлен URL в data-set");
	    	return false;
    	}
    	var el = jQuery(this).parents(".portlet");
    	App.blockUI(el);
    	
    	var selector=jQuery(".group-checkable").attr("data-set");
	    var checked=new Array;
	    jQuery(selector+":checked").each(function(){
		   	checked.push(jQuery(this).val());
	    });
	    jQuery.ajax({
		    url: jQuery("#deleteChosen").attr("data-set")+checked+"/", 
			dataType: 'json',
			complete: function(){
				App.unblockUI(el);
			},
			success: function(data){
				console.log(data);
				if (data.state=="success"){
					location.reload(true);
				}
			}
		});
	    //App.unblockUI(el);
	    return false;
    });
    /*-------УДАЛИТЬ ВЫБРАННЫЕ END-------*/
});

function checkValidation(obj){
	jQuery(obj).parent().find('.tooltips').detach();
	var reg=new RegExp(jQuery(obj).attr("data-validate-rule"),"im");
	if (reg.test(jQuery(obj).val())){
		jQuery(obj).parent().append('<span class="input-success tooltips" data-original-title="'+jQuery(obj).attr('data-validate-content')+'"><i class="icon-ok"></i></span>');
		jQuery(obj).parents('.control-group').addClass("success");
		jQuery(obj).parents('.controls').addClass("input-icon");
		return true;
	}else{
		jQuery(obj).parent().append('<span class="input-error tooltips" data-original-title="'+jQuery(obj).attr('data-validate-content')+'"><i class="icon-exclamation-sign"></i></span>');
		jQuery(obj).parents('.control-group').addClass("error");
		jQuery(obj).parents('.controls').addClass("input-icon");
		return false;
	}
}

function modalConfirm(title, msg, url){
	if (title) jQuery('#modalDelete #modalDeleteLabel').html(title);
	if (msg) jQuery('#modalDelete .modal-body p').html(msg);
	if(url){
		jQuery('#modalDelete .submit').off("click").click(function(){
			document.location=url;
		});
	}
}



/*!!!!!!!!!!!!!!!!!!!!!! Найти и удалить !!!!!!!!!!!!!!!!!!!!!!!!*/
/*
найдено в 
- компонентах
+ пользователях
*/
/*function ajaxActivate(url, obj, id){
	var el = jQuery(obj).parents(".portlet");
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
					url=url.replace("deactivate", "activate");
					jQuery(obj).replaceWith('<a href="#" onclick="return ajaxActivate(\''+url+'\', this, '+id+');"><span class="badge badge-important">Нет</span></a>');
				}
				if (data.msg==1){
					url=url.replace("activate", "deactivate");
					jQuery(obj).replaceWith('<a href="#" onclick="return ajaxActivate(\''+url+'\', this, '+id+');"><span class="badge badge-success">Да</span></a>');
				}
			}
		}
	});
	return false;
}*/
/*!!!!!!!!!!!!!!!!!!!!!! Найти и удалить !!!!!!!!!!!!!!!!!!!!!!!!*/

function removeImage(url, obj){
	jQuery.ajax({
		url: url,
		success: function(data){
			jQuery(obj).parents(".item").remove();
		}
	});
	return false;
}

function showMessage(title, msg){
	var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: title,
        // (string | mandatory) the text inside the notification
        text: msg,
        // (string | optional) the image to display on the left
        image: null,
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 6000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'msg'+Math.random()
    });

    /*
setTimeout(function () {
        $.gritter.remove(unique_id, {
            fade: true,
            speed: 'slow'
        });
    }, 12000);
*/
}
function loadNodeParams(iComponentId, iNodeId){
	jQuery.ajax({
		url: "/admin/components/params/"+iComponentId+"/"+(iNodeId ? iNodeId+'/' : ''),
		success: function(data){
			jQuery("#params-portlet").html(data);
			
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

function translateValue(val) { //Рожин, изменил Zyets
	var rus = [],
		eng = [],
		translatestr = [],
		key;
	rus[1] ='а'; eng[1] ='a';
	rus[2] ='б'; eng[2] ='b';
	rus[3] ='в'; eng[3] ='v';
	rus[4] ='г'; eng[4] ='g';
	rus[5] ='д'; eng[5] ='d';
	rus[6] ='е'; eng[6] ='e';
	rus[7] ='ё'; eng[7] ='e';
	rus[8] ='ж'; eng[8] ='zh';
	rus[9] ='з'; eng[9] ='z';
	rus[10]='и'; eng[10]='i';
	rus[11]='й'; eng[11]='j';
	rus[12]='к'; eng[12]='k';
	rus[13]='л'; eng[13]='l';
	rus[14]='м'; eng[14]='m';
	rus[15]='н'; eng[15]='n';
	rus[16]='о'; eng[16]='o';
	rus[17]='п'; eng[17]='p';
	rus[18]='р'; eng[18]='r';
	rus[19]='с'; eng[19]='s';
	rus[20]='т'; eng[20]='t';
	rus[21]='у'; eng[21]='u';
	rus[22]='ф'; eng[22]='f';
	rus[23]='х'; eng[23]='h';
	rus[24]='ц'; eng[24]='c';
	rus[25]='ч'; eng[25]='ch';
	rus[26]='ш'; eng[26]='sh';
	rus[27]='щ'; eng[27]='szh';
	rus[28]='ъ'; eng[28]='';
	rus[29]='ы'; eng[29]='y';
	rus[30]='ь'; eng[30]='';
	rus[31]='э'; eng[31]='e';
	rus[32]='ю'; eng[32]='ju';
	rus[33]='я'; eng[33]='ya';
	rus[34]=' '; eng[34]='-';
	rus[35]="–"; eng[35]='_';
	rus[36]="-"; eng[36]='-';
	rus[37]="№"; eng[37]='nomer';
				 eng[-1]='';

	for (var i=0; i<val.length; i++) {
		if( val[i].match(/\w/g) )
			letter = val[i].toLowerCase();
		else{
			key = jQuery.inArray(val[i].toLowerCase(), rus);
			letter = eng[key];
		}
		translatestr.push( letter );
	}
	return translatestr.join('');
}