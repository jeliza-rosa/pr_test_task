jQuery(function(){
	App.toggleButtonInit($(".button-init"));
	var ckElements = $(".ckeditor");
	
	if( ckElements.length ){
		$(".ckeditor").each(function(){
			var id = $(this).attr("id"),
				html = $(this).data("html");
			CKEDITOR.replace( id, {}, html );
		})
	}
})