function check(){
    var reg1 = /^[a-z0-9_]{3,18}$/i;
    var reg2 = /^[a-z0-9_]{6,18}$/i;
    if (!reg1.test(document.getElementById("addadmin").value)){
        alert("用户名只能由3到18位英文字母及数字组成!");
        return false;
    }
    if (!reg2.test(document.getElementById("addpwd").value)){
        alert("密码只能由6到18位英文字母及数字组成!");
        return false;
    }
    if (document.getElementById("adminame").value == ""){
        alert("姓名不能为空!");
        return false;
    }
    else return true;
}