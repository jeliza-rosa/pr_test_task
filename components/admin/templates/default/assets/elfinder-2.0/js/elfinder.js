jQuery(function() {
	function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
        var match = window.location.search.match(reParam) ;
        
        return (match && match.length > 1) ? match[1] : '' ;
    }
	var elf = jQuery('#elfinder').elfinder({
		url : '/components/admin/templates/default/assets/elfinder-2.0/php/connector.php',  // connector URL (REQUIRED)
		getFileCallback : function(file) {
			var funcNum = getUrlParam('CKEditorFuncNum');
            if (funcNum){
            	file=file.replace("/components/admin/templates/default/assets/elfinder-2.0/php/../../../../../../..", "");
	            window.opener.CKEDITOR.tools.callFunction(funcNum, file);
	            window.close();
            }
        },
        resizable: false// lang: 'ru',             // language (OPTIONAL)
	}).elfinder('instance');
});