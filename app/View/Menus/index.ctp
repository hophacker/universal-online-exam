<!Doctype html><html xmlns=http://www.w3.org/1999/xhtml>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8;"  />
        <title>Examination Management</title>
        <?php echo $this->Html->script('jquery-1.9.1'); ?>
        <style type="text/css">
        </style>
    </head>
    <frameset name="top" rows="*" frameborder="1" border="0" framespacing="0">
        <frameset id ="content" name="content" cols="150,*" frameborder="0" border="0" framespacing="0">
            <frame id="menu" name="menu" src="/Menus/menu/<?=$type?>" marginheight="0" marginwidth="0" scrolling="auto" noresize>
            <frame id="tabs" name="tabs" src="/Menus/tabs/<?=$type?>" marginheight="0" marginwidth="0" scrolling="auto" noresize>
        </frameset>
        
        <noframes>
            <p>您的浏览器不支持框架，请更新浏览器</p>
        </noframes>

    </frameset>
    
</html>
