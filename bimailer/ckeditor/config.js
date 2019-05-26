/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.enterMode = CKEDITOR.ENTER_BR;
	config.shiftEnterMode = CKEDITOR.ENTER_P;
	config.disableNativeSpellChecker	= false; //Првоерка русской орфографии
	config.allowedContent				= true;
	config.pasteFilter					= null;
	config.pasteFromWordRemoveStyles	= false;
	config.pasteFromWordRemoveFontStyles= false;//для форматированной
	config.basicEntities = false;//отключаем преобразованеи в HTML сущности

config.toolbar_mini = [
	{ name: 'basicstyles', items: ['Maximize', 'Source', '-', 'Bold', 'Italic', 'Underline', '-', 'TextColor', 'BGColor',  '-', 'RemoveFormat'  ] },
	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','-', 'Link', 'Unlink', '-', 'base64image', 'Table' ] },
];
config.toolbar_standart = [
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Maximize', 'Source', '-', 'Preview', '-',  'Cut', 'Copy', 'NewPage', '-', 'Paste' ] },//'Save',
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'Templates',  'SelectAll', 'ShowBlocks'] },
	'/',
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'TextColor', 'BGColor',  '-', 'RemoveFormat'  ] },
	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','-', 'Link', 'Unlink', '-', 'base64image', 'Table' ] }
];
config.toolbar_maxi = [
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Maximize', 'Source', '-', 'Preview', '-',  'Cut', 'Copy', 'NewPage', '-', 'Paste' ] },//'Save', 
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'Templates',  'SelectAll', 'ShowBlocks'] },
	'/',
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'TextColor', 'BGColor',  '-', 'RemoveFormat'  ] },
	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','-', 'Link', 'Anchor', 'Unlink', '-', 'base64image', 'Table' ] },
	'/',
	{ name: 'links', items: ['BidiLtr', 'BidiRtl', '-', 'HorizontalRule', 'Smiley', 'SpecialChar', '-', 'Blockquote', 'CreateDiv', '-' ] },
	{ name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
];

/*	config.toolbar = [
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Maximize', 'Source', '-', 'Save', 'NewPage', 'Preview', '-', 'Templates' ] },
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll' ] },
	{ name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
	'/',
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'TextColor', 'BGColor',  '-', 'RemoveFormat'  ] },

	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',] },
	'/',
	{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor',  '-', 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar' ] },
	{ name: 'tools', items: ['BidiLtr', 'BidiRtl','-', 'Blockquote', 'CreateDiv', 'ShowBlocks' ] },
	{ name: 'others', items: [ 'autoFormat', 'CommentSelectedRange', 'UncommentSelectedRange', 'AutoComplete', ] }
];*/
	
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
