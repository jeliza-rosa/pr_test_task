/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'ru';
	config.allowedContent = true;
	config.filebrowserBrowseUrl = '/admin/files/browse/';
	config.filebrowserImageBrowseUrl = '/admin/files/browse/?type=Images';
	config.filebrowserFlashBrowseUrl = '/ckfinder/ckfinder.html?Type=Flash';
    config.filebrowserUploadUrl = '/admin/files/';
    config.filebrowserImageUploadUrl = '/admin/files/';
    config.filebrowserFlashUploadUrl = '/admin/files/';
    config.filebrowserWindowWidth = '800';
    config.filebrowserWindowHeight = '600';
	// config.uiColor = '#AADC6E';
};
