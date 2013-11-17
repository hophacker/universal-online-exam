/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $(".edit").button({
        icons: {
            primary: "ui-icon-pencil"
        },
        text:false
    });
    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd"
    });
    $("#btn2").button();
    $("#btn3").button();
    $("#btn4").button();
    // 把编辑按钮先隐藏
    $(".edit").hide();
    
    // 获取信息的原始值，如果后面没变就不更新数据库
    var st_name_old = $("#st_name").val();
    var st_date_old = $("#datepicker").val();
    var st_phone_old = $("#st_phone").val();
    var st_mail_old = $("#st_mail").val();
    var st_edu_old = $("#st_edu").val();
    var st_class_old = $("#st_class").val();
    var st_num_old = $("#st_num").val();
    
    $(".edit").click(function() {
        var num = $(this).attr("value");
        $(".viewBlock:eq("+num+")").hide();
        $(".editBlock:eq("+num+")").show();
        /*if(num=="0") {                  // 帐号信息
            
        } else if(num=="1") {           //　个人信息
            
        } else if(num=="2") {           // 联系方式
            
        } else {                        // 学籍信息
            
        }*/
    });
    // 鼠标悬浮在某一块区域中弹出编辑按钮
    $(".info").hover(function() {
        var num = $(this).attr("value");
        if(num == "0")  return;
        $(".edit:eq("+num+")").show();
    }, function() {
        var num = $(this).attr("value");
        $(".edit:eq("+num+")").hide();
    });
    
    $("#st_depart").change(function() {
        $("#st_major").html('<option value="-1" selected="selected">无</option>');
        $("#st_class").html('<option value="-1" selected="selected">无</option>');
        if($(this).val() != -1) {
            $.post("../register/LoadAndCheck.php",{oper:'LoadMajor', dept_id:$(this).val()}, 
                function(data) {
                var option = "";
                for(var i = 0; i < data.length; i++) {
                    option += '<option value="'+data[i].major_id+'">'+data[i].major_name+'</option>';
                    $("#st_major").append(option);
                }
            }, 'json');
        }
    });

    $("#st_major").change(function() {
        $("#st_class").html('<option value="-1" selected="selected">无</option>');
        if($(this).val() != -1) {
            $.post("../register/LoadAndCheck.php",{
                oper:'LoadClass',
                major_id:$(this).val()
                }, function(data) {
                var option="";
                for(var i = 0; i < data.length; i++) {
                    if(i==0) {
                        option += '<option value="'+data[i].class_id+'" selected="selected">'+data[i].class_name+'</option>';
                    } else {
                        option += '<option value="'+data[i].class_id+'">'+data[i].class_name+'</option>';
                    }
                }
                $("#st_class").append(option);
            },'json');
        }
    });
    
    
    
    
    
    
    
    // 编辑确认按钮注册点击事件
    $("#btn2").click(function() {                   // 个人信息
        var st_user = $("#st_user").html();
        var st_name = $("#st_name").val();
        var st_date = $("#datepicker").val();
         
        
        if(st_name!=st_name_old||st_date!=st_date_old) { 
            // 检查名字格式是否正确
            if(!checkName(st_name)) {
                alert("名字格式不正确");
                $("#st_name").focus();
                return;
            }
            
            $.post("profile.php", {st_user:st_user,st_name:st_name,st_date:st_date,oper:'updatePerInfo'}, function(data) {
                location.reload();
            }, 'json');
        } else {
            location.reload();
        }
        
    });
    $("#btn3").click(function() {               // 联系方式
        var st_user = $("#st_user").html();
        var st_phone = $("#st_phone").val();
        var st_mail = $("#st_mail").val();
        
        if(st_phone!=st_phone_old||st_mail!=st_mail_old) {
            // 检查电话和邮箱格式是否正确
            if(st_mail!=st_mail_old&&!CheckMail(st_mail)) {
                return;
            }
            if(st_phone!=st_phone_old&&!checkPhone(st_phone)) {
                alert("您输入的手机格式不正确");
                $("#st_phone").focus();
                return;
            }
            
            $.post("profile.php", {st_phone:st_phone,st_mail:st_mail,st_user:st_user,oper:'updateCommInfo'}, function(data) {
                location.reload();
            }, 'json');
        } else {
            location.reload();
        } 
    });
    
    $("#btn4").click(function() {           //　学籍信息
        var st_num = $("#st_num").val();
        var st_class = $("#st_class").val();
        var st_edu = $("#st_edu").val();
        var st_user = $("#st_user").html();
        
        if(st_num!=st_num_old||st_class!=st_class_old||st_edu!=st_edu_old) {
            if(st_num!=st_num_old&&!checkNo(st_num)) {
                alert("学号格式不正确");
                $("#st_num").focus();
                return;
            }
           $.post("profile.php", {st_num:st_num,st_class:st_class,st_edu:st_edu,st_user:st_user,oper:'updateSchoolInfo'}, function() {
                location.reload();
           }, 'json');
            
        } else {
            location.reload();
        }
    });
});

//检查名字 
function checkName(str){
    var reg = /^[\u4E00-\u9FA5]+$/;
    return reg.test(str);
}
/*检查输入对象的值是否符合E-Mail格式 */
function isEmail( str ){ 
    var myReg = /^[-\._A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/; 
    if(myReg.test(str)) return true; 
    return false; 
}
// 检查邮箱
function CheckMail(st_mail) {
    if(!isEmail($("#st_mail").val())){
        alert("邮箱格式不正确");
        $("#st_mail").focus();
        return false;
    }else{
        var flag=true;
        // 检查邮箱有没有在数据库中存在
        $.post("../register/LoadAndCheck.php", {oper:'CheckMail',st_mail:st_mail}, function(data) {
            if(data.isUsed == true) {
                alert("该邮箱已经被使用过，请重新输入一个邮箱地址");
                $("#st_mail").focus();
                flag = false;
            } else {
                flag = true;
            }
        }, 'json'); 
        return flag;
    }
}
//检查手机
function checkPhone(str) {
    var reg = /^[0-9]{8,12}$/;
    return reg.test(str);
}
//检查学号
function checkNo(str){
    var reg = /^[0-9a-zA-Z]{6,20}$/;
    return reg.test(str);
}
