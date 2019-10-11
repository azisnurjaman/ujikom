/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:  
    // config.language = 'fr';  
    // config.uiColor = '#AADC6E';  
    config.filebrowserBrowseUrl = '/templateEditor/kcfinder-3.12/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/templateEditor/kcfinder-3.12/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/templateEditor/kcfinder-3.12/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/templateEditor/kcfinder-3.12/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/templateEditor/kcfinder-3.12/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/templateEditor/kcfinder-3.12/upload.php?opener=ckeditor&type=flash';
};
