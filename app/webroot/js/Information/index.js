$(function() {
                $.ajaxSetup({
                    async: false
                });
                $.post("../../../class/message.php", {oper:'getMessageType',st_user:'<?php echo $_SESSION['st_user']; ?>'}, function(data) {
                    $("#radio").html(data.content);
                }, 'json');
               
                $.post("../../../class/message.php", {dept_id:<?php echo $_SESSION['dept_id']; ?>,is_super:0, 
                    info_type: '-1', st_user:'<?php echo $_SESSION['st_user']; ?>', oper:'getMessage'}, function(data) {
                    $("#message").html(data.content);
                    $("#unread").attr('value',data.count);
                    $("#unread").html("<u><b>未读通知("+data.count+")</b></u>");
                    //alert(data.not_in);
                }, 'json');
                $("#radio").buttonset();
                $("#message").accordion({
                    activate: function(event, ui) {
                        if($('input[name="information"]:checked').val() == -1) {
                            $.post("../../../class/message.php",{st_user:'<?php echo $_SESSION['st_user']; ?>', info_id:ui.newHeader.attr('id'),
                            oper:'setReadLabel'},
                            function(data) {
                                
                            },'json');
                            var num = $("#unread").attr('value')-1;
                            $("#unread").attr('value',num);
                            //alert($("#unread").attr('value')-1);
                            //var num = 0;
                           // $("#radio").button("destroy");
                            $("#unread").html("<span class='ui-button-text'><u><b>未读通知("+num+")</b></u></span>");
                            //$("#radio").button("refresh");
                            
                            //$("#radio").buttonset();
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
                    $.post("../../../class/message.php", {dept_id:<?php echo $_SESSION['dept_id']; ?>,is_super:0, 
                    info_type: $('input[name="information"]:checked').val(), st_user:'<?php echo $_SESSION['st_user']; ?>', oper:'getMessage'}, function(data) {
                        $("#message").html(data.content);
                        $("#message").accordion("destroy");
                        //$("#message").accordion("option","active",false);
                        $("#message").accordion({
                    activate: function(event, ui) {
                        if($('input[name="information"]:checked').val() == -1) {
                            $.post("../../../class/message.php",{st_user:'<?php echo $_SESSION['st_user']; ?>', info_id:ui.newHeader.attr('id'),
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
