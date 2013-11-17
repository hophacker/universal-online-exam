<?php
$webroot = "../../../..";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$title|default:'Universal Online Examination System'}</title>
        <script src="<?php echo $webroot . '/ckeditor/ckeditor.js' ?>"></script>
        <script src="<?php echo $webroot . '/jquery-ui/js/jquery-1.9.1.js' ?>"></script>
        <script src="<?php echo $webroot . '/js/manager/newMessage.js' ?>"></script>
        <script language="javascript" type="text/javascript" src="<?php echo $webroot . '/js/niceforms.js' ?>"></script>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $webroot . '/css/niceforms-default.css' ?>" />  
    </head>
    <body>
        <form class="niceform">
            <dl>
            <dt><label for="title" >主题：</label></dt>
            <dd><input type="text" id="title" /></dd>
            </dl>
            <br/><br/>
            <dl>
            <dt><label for="info_type" >通知类型：</label></dt>
            <dd><select size="1" id="info_type" name="info_type"></select></dd>
            </dl>
        </form>
            <br/><br/>
            <textarea cols="80" id="editor1" name="editor1" rows="10"></textarea>
            <script>
                // Set the number of languages.
            // document.getElementById( 'count' ).innerHTML = window.CKEDITOR_LANGS.length;
                var editor;
                function createEditor( languageCode ) {
                        if ( editor )
                                editor.destroy();
                        // Replace the <textarea id="editor"> with an CKEditor
                        // instance, using default configurations.
                        editor = CKEDITOR.replace( 'editor1', {
                                language: languageCode,
                                skin : 'kama'
                        });
                }
                // At page startup, load the default language:
                createEditor('zh-cn');
            </script>
        <form class="niceform">    
            <button id="postMessage">发布</button>
        </form>
    </body>
</html>