function checkInter(){
    var reg = /^[0-9]{1,3}$/;
    if( reg.test(document.getElementById("pri").value) 
        && reg.test(document.getElementById("adv").value)
        && reg.test(document.getElementById("valid").value)){
        return true;
    }
    else{
        alert("时长设定设定有误:\n\t1.查看有无空格未填！\n\t2.查看设定格式");
        return false;
    }
}
function checkTimeBegin(){
    var reg = /^\d{4}-\d{2}-\d{2} \d{2}:\d{2}$/;
    var i;
    var j;
    for (i = 1; i <= 27; i++){
        for (j = 1; j <= 6; j++){
            var ele = document.getElementById(""+i+j);
            if (ele.value != "" && !reg.test(ele.value)){
                alert("输入的时间格式有误，请查看格式以及首尾是否有多余空格");
                ele.focus();
                return false;
            }
        }
    }
    return true;
}