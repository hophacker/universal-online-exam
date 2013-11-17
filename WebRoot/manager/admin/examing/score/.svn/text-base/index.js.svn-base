function checkNum(){
    var reg = /^[0-9]{1,3}$/;
    if( reg.test(document.getElementById("priSelNum").value) 
        && reg.test(document.getElementById("priJudNum").value)
        && reg.test(document.getElementById("advSelNum").value)
        && reg.test(document.getElementById("advJudNum").value)
        && reg.test(document.getElementById("ansNum").value)){
        return true;
    }
    else{
        alert("题目数设定有误:\n\t1.查看有无空格未填！\n\t2.查看设定格式");
        return false;
    }
}
function checkWei(){
    var reg = /^[0-9]{1,2}$/;
    if( reg.test(document.getElementById("selWei").value) 
        && reg.test(document.getElementById("judWei").value)){
        return true;
    }
    else{
        alert("单条题目分数设定有误:\n\t1.查看有无空格未填！\n\t2.查看设定格式");
        return false;
    }
}