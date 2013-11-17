/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function check()
{    
    if ($("#uname").val() == ""){
        alert("帐号不能为空。如无帐号，请先注册。");
        $("#uname").focus();
        return false;
    }
    if($("#upwd").val() == ""){
        alert("密码不能为空。");
        $("#upwd").focus();
        return false;
    }else{
        $.post('../../logic/private/class/LoadAndCheck.php',{
            oper:'judgeUser', 
            uname:$("#uname").val(),
            upass:$('#upwd').val(),
            logtype:$("input[name='logtype']:checked").val()
        }, 
        function(data) {
            if (data == '0') $("#logerr").text("您输入的用户名或者密码有误！");
            else{
            }
        }, 'json');
        //document.form1.submit();
    }
}
$(document).ready(function() {
    //$("#logerr").html("feladfjk");
    

    $("#bt").hover(function(){
        $(this).attr('src', 'images/bt_on.gif');
    }, function(){
        $(this).attr('src', 'images/bt_off.gif');
    });
    
    $("#bt").click(function(){
        $(this).attr('src', 'images/bt_click.gif');
        check();
    });
    $("#uname").focus(function(){
         $("#logerr").empty();
    });
});