<?php 
require_once '../../../class/autoload.inc';
   // echo $_SESSION['Student']['Student']['s_user'];
    $webroot = "../../../" . "WebRoot";
    session_start();
    $dept_id = $_SESSION['Student']['Department']['id'];
    $s_user = $_SESSION['Student']['Student']['s_user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>查看通知</title>
        <script src="<?php echo $webroot . '/jquery-ui/js/jquery-1.9.1.js' ?>"></script>
        <script src="<?php echo $webroot . '/jquery-ui/js/jquery-ui-1.10.1.custom.js' ?>"></script>
        <link rel="stylesheet" href="<?php echo $webroot . '/jquery-ui/development-bundle/themes/dot-luv/jquery-ui.css' ?>" />
        <script>
              $(function() {
                $.ajaxSetup({
                    async: false
                });
                $.post("../../../class/message.php", {oper:'getMessageType',st_user:'<?php echo $s_user; ?>'}, function(data) {
                    $("#radio").html(data.content);
                }, 'json');
               
                $.post("../../../class/message.php", {dept_id:<?php echo $dept_id; ?>,is_super:0, 
                    info_type: '-1', st_user:'<?php echo $s_user; ?>', oper:'getMessage'}, function(data) {
                    $("#message").html(data.content);
                    $("#unread").attr('value',data.count);
                    $("#unread").html("<u><b>未读通知("+data.count+")</b></u>");
                    //alert(data.not_in);
                }, 'json');
                $("#radio").buttonset();
                var unread = new Array();
                $("#message").accordion({
                    activate: function(event, ui) {
                        if($('input[name="information"]:checked').val() == -1) {
                            $.post("../../../class/message.php",{st_user:'<?php echo $s_user; ?>', info_id:ui.newHeader.attr('id'),
                            oper:'setReadLabel'},
                            function(data) {
                                
                            },'json');
                           // var num = $("#unread").attr('value')-1;
                           // $("#unread").attr('value',num);
                            //alert($("#unread").attr('value')-1);
                            //var num = 0;
                           // $("#radio").button("destroy");
                            //$("#unread").html("<span class='ui-button-text'><u><b>未读通知("+num+")</b></u></span>");
                            //$("#radio").button("refresh");
                            var flag=false;
                            var curM;
                            if(ui.oldHeader.attr('id')==null) {
                                curM = ui.newHeader.attr('id');
                            } else {
                                curM = ui.oldHeader.attr('id')
                            }
                            
                            
                            
                            for(var i = 0; i < unread.length; i++) {
                                if(curM == unread[i]) {
                                    flag = true;
                                    break;
                                }
                            }
                            
                            if(flag == false) {
                                unread.push(ui.newHeader.attr('id'));
                                var num = $("#unread").attr('value')-1;
                                $("#unread").attr('value',num);

                                $("#unread").html("<span class='ui-button-text'><u><b>未读通知("+num+")</b></u></span>");
                            }
                            
                        }
                       // alert(ui.newHeader.attr('id'));
                        
                    },
                    active: false,
                    collapsible: true
                });
                //$("#message").accordion( "option", "collapsible", true );
                //$("#message").accordion("option","active",0);
                $(".message").click(function() {
                    $("#message").html("");
                    $.post("../../../class/message.php", {dept_id:<?php echo $dept_id; ?>,is_super:0, 
                    info_type: $('input[name="information"]:checked').val(), st_user:'<?php echo $s_user; ?>', oper:'getMessage'}, function(data) {
                        $("#message").html(data.content);
                        $("#message").accordion("destroy");
                        //$("#message").accordion("option","active",false);
                        $("#message").accordion({
                    activate: function(event, ui) {
                        if($('input[name="information"]:checked').val() == -1) {
                            $.post("../../../class/message.php",{st_user:'<?php echo $s_user; ?>', info_id:ui.newHeader.attr('id'),
                            oper:'setReadLabel'},
                            function(data) {
                                
                            },'json');
                            
                        }
                       // alert(ui.newHeader.attr('id'));
                        
                    },
                    active: false,
                    collapsible: true
                });
                    
                }, 'json');
                });
          });
              
        </script>
    </head>
    <body>
        <div id="radio"></div>
        <div id="message"></div>
    </body>
</html>
