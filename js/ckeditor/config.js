/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};

FCKConfig.ToolbarSets["MyToolbar"] = [
['Cut','Copy','Paste','PasteText','PasteWord'],
['Undo','Redo','-','Bold','Italic','Underline','StrikeThrough'],
'/',
['OrderedList','UnorderedList','-','Outdent','Indent'],
['Link','Unlink','Anchor'],
'/',
['Style'],
['Table','Image','Flash','Rule','SpecialChar'],
['About']
] ;