/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $.ajaxSetup({
        async: false
    });
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
    $("#btn1").button();
    $("#btn2").button();
    $("#btn3").button();
    $("#btn4").button();
    $("#btn_ret_0").button();
    $("#btn_ret_1").button();
    $("#btn_ret_2").button();
    $("#btn_ret_3").button();
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
        //if(num == "0")  return;
        $(".edit:eq("+num+")").show();
    }, function() {
        var num = $(this).attr("value");
        $(".edit:eq("+num+")").hide();
    });
    
    
    $("#btn_ret_0").click(function() {
        $("#old_pwd").val("");
        $("#new_pwd").val("");
        $("#new_pwd_con").val("");
        $(".viewBlock:eq(0)").show();
        $(".editBlock:eq(0)").hide();
    })
    $("#btn_ret_1").click(function() {
        $(".viewBlock:eq(1)").show();
        $(".editBlock:eq(1)").hide();
    })
    $("#btn_ret_2").click(function() {
        $(".viewBlock:eq(2)").show();
        $(".editBlock:eq(2)").hide();
    })
    $("#btn_ret_3").click(function() {
        $(".viewBlock:eq(3)").show();
        $(".editBlock:eq(3)").hide();
    })
    
    
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
    $("#btn1").click(function() {
       var st_user = $("#st_user").html();
       var old_pwd = $("#old_pwd").val();
       var new_pwd = $("#new_pwd").val();
       var new_pwd_con = $("#new_pwd_con").val();
       var flag=false;
       $.post('profile.php', {st_user:st_user,st_pwd:old_pwd,oper:'checkPassword'},function(data) {
           if(data.success==1) flag=true; 
       },'json');
       if(flag==false) {
           alert('原密码错误，请重新输入');
           return;
       }
       if(CheckPwd()==false) return;
       if(CheckRePwd()==false) return;
       //alert(new_pwd);
       $.post('profile.php', {st_user:st_user,st_pwd:new_pwd,oper:'updatePassword'},function(data) {
           if(data.success==1) {
               alert('密码修改成功');
               location.reload();
           }
       },'json');
    });
    
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



/*检查输入字符串是否为空或者全部都是空格 */
function isNotNull( str ){ 
    if ( str == "" ) 
        return false; 
    var regu = "^[ ]+$"; 
    var re = new RegExp(regu); 
    return !re.test(str); 
} 
/*检查是否含有空格*/
function isHasSpace (str){
    var regu="[ ]";
    var re= new RegExp(regu);
    return re.test(str);
}
/*检查输入字符串是否只由英文字母和数字和下划线组成 */
function isNumberOr_Letter( str ){//判断是否是数字或字母 
    var regu = "^[0-9a-zA-Z]+$"; 
    var re = new RegExp( regu ); 
    if ( re.test( str )) { 
        return true; 
    }else{ 
        return false; 
    } 
} 

// 检查密码
function CheckPwd() {
    var str=$("#new_pwd").val();
    if(!isNotNull(str)){
        alert("密码不能为空");
        return false;
    }else if(isHasSpace(str)){
        alert("密码不能含有空格");
        return false;
    }else if(str.length<6||str.length>16){
        alert("密码长度为6-16个字符");
        return false;
    }else{
        if(!isNumberOr_Letter(str)) {
            alert("密码为6-18个字母和数字的组合，区分大小写，不要出现非法字符");
            return false;
        }
    }
    return true;
}
// 检查密码确认
function CheckRePwd() {
    var str1=$("#new_pwd").val();
    var str2=$("#new_pwd_con").val();
    if(str1==""){
        return false;
    }
    if(str1==str2){
       return true;
    } else{
        alert("密码不一致");
        return false;
    }
}
