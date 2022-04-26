$(function() {
	if (typeof upload_url === 'undefined') alert("var upload_url is not defined!");
	$("#file_upload").uploadify({
		buttonText 	  : '<i class="icon-plus"></i> Загрузить файлы',
		height        : 30,
		swf           : '/components/admin/templates/default/assets/uploadify/uploadify.swf',
		uploader      : upload_url,
		width         : 150,
		'onQueueComplete' : function(file, data, response) {
	        setTimeout(function(){location.reload();}, 1000);
	    }
	});

	var images = $("ul.images"),
		modal = $("#image-config");
	$('a.config', images).click(function(){
		var li = $(this).closest("li");
		li.find("input.config").each(function(){
			var cl = $(this).data("target");
			$('input[name="'+cl+'"]', modal).val($(this).val());
			modal.data("item", li);
		})
	})
	$(".submit", modal).click(function(){
		var text = '',
			li = modal.data("item");
		console.log(li);
		if( !li ) return;
		$("input", modal).each(function(){
			var cl = $(this).attr("name");
			$("input."+cl, li).val($(this).val());
			text += $(this).val()+'<hr>';
		})
		li.find(".desc").html(text).find("hr:last").remove();
	})
	
	/* Сортировка */
	var sortable = $(".sortable");
	if(sortable.find("li").length>1){
		/* Системыные объекты */
		var dragInterval,
			dragElement,
		/* функции */
		writeSort = function(){
			$('li', sortable).each(function(){
				var sort = $(this).index()+1;
				$(this).find('input.sort').val(sort);
			})
		}
		getElPos = function(el){
			var el = $(el),
				elPos = el.position(),
				parentPos = el.parent().position();
			return { left: elPos.left - parentPos.left, top: elPos.top - parentPos.top };
		},
		getDistance = function(pos1, pos2){
			var vert = Math.abs(pos1.top-pos2.top),
				horz = Math.abs(pos1.left-pos2.left);
			return Math.round(Math.pow( ( Math.pow(vert,2) + Math.pow(horz,2) ), 0.5 ));
		},
		findElementByPos = function(){
			if( !dragElement.length ) return;
			var dragPos = getElPos(dragElement),
				aPositions = [],
				aDistances = [],
				minDist = 99999999,
				closestEl,
				index;
			$('li', sortable).not(dragElement).each(function(){
				var elPos = getElPos(this),
					dist = getDistance(dragPos, elPos);
				aPositions[ $(this).index() ] = elPos;
				aDistances[ $(this).index() ] = dist;
				minDist = Math.min(minDist, dist);
			})
			index = $.inArray(minDist, aDistances);
			if( index < 0 ) return false;
			closestEl = $('li', sortable).eq( index );
			return {
				direction: (dragPos.left - aPositions[index].left),
				el: closestEl
			};
		};
		sortable.find("li").draggable({
			start: function( event, ui ){
				dragElement = $(ui.helper);
				dragInterval = setInterval(function(){
					el = findElementByPos();
					sortable.find("li").removeClass("dragBefore dragAfter");
					if( el.direction<0 ){
						el.el.prev().not(dragElement).addClass("dragAfter");
						el.el.not(dragElement).addClass("dragBefore");
					}else{
						el.el.not(dragElement).addClass("dragAfter");
						el.el.next().not(dragElement).addClass("dragBefore");
					}
				},200);
			},
			stop: function( event, ui ){
				clearInterval(dragInterval);
				el = findElementByPos();
				if(el){
					var w = dragElement.width(),
						m = dragElement.css("margin-right"),
						oCopy = dragElement.clone().html('');
					dragElement.css({left:0,top:0,width:0,marginRight:0});

					if( el.direction<0 ){
						oCopy.insertBefore(dragElement);
						dragElement.insertBefore(el.el);
					}else{
						oCopy.insertAfter(dragElement);
						dragElement.insertAfter(el.el);
					}
					

					dragElement.animate({width:w,marginRight:m}, 200);
					oCopy.animate({width:0,marginRight:0},200, function(){ $(this).remove(); });
				}
				
				sortable.find("li").removeClass("dragBefore dragAfter");
				dragElement = false;
				writeSort();
			}
		});
	}
});