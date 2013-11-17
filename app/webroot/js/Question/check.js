function checkSel() {
    text = $('#QuestionText').val();
    if (trim(text) == "" || text.indexOf("#Q", 0) == -1){
        alert("上传题目不能为空!");
        return false;
    }
    pos1 = 0;
    pos = text.indexOf("#Q", 0);
    while (pos != -1) {
        pos1 = text.indexOf("#", pos + 2);
        if (pos1 == -1) {
            alert("格式错误: #Q与#标志不匹配!");
            return false;
        }
        if (pos1 == pos + 2) {
            alert("格式错误: #Q与 #之间没有题目!");
            return false;
        }
        pos = pos1;
        for (i = 1; i <= 4; i++) {
            pos = text.indexOf("#", pos + 1);
            if (pos == -1) {
                alert("格式错误：题目选项不足！");
                return false;
            }
        }
        if (pos == text.length - 1) {
            alert("格式错误：#后面没有答案！");
            return false;
        }
        if (text.charAt(pos + 1) != 'A' && text.charAt(pos + 1) != 'B' && text.charAt(pos + 1) != 'C' && text.charAt(pos + 1) != 'D') {
            alert("格式错误: #后面后面答案错误,应为ABC或D!");
            return false;
        }
        pos = text.indexOf("#Q", pos + 1);
    }
    return true;
}
function checkAns() {
    text = $('#QuestionText').val();
    if (trim(text) == "" || text.indexOf("#Q", 0) == -1){
        alert("上传题目不能为空!");
        return false;
    }
    pos1 = 0;
    pos = text.indexOf("#Q", 0);
    while (pos != -1) {
        pos1 = text.indexOf("#", pos + 2);
        if (pos1 == -1) {
            alert("格式错误: #Q与#标志不匹配!");
            return false;
        }
        if (pos1 == pos + 2) {
            alert("格式错误: #Q与 #之间没有题目!");
            return false;
        }
        pos = text.indexOf("#Q", pos + 1);
    }
    return true;
}

function checkJud() {
    text = $('#QuestionText').val();
    if (trim(text) == "" || text.indexOf("#Q", 0) == -1){
        alert("上传题目不能为空!");
        return false;
    }
    pos1 = 0;
    pos = text.indexOf("#Q", 0);
    while (pos != -1) {
        pos1 = text.indexOf("#", pos + 2);
        if (pos1 == -1) {
            alert("格式错误: #Q与#标志不匹配!");
            return false;
        }
        if (pos1 == pos + 2) {
            alert("格式错误: #Q与 #之间没有题目!");
            return false;
        }
        if (pos1 == text.length - 1) {
            alert("格式错误: #后面没有答案!");
            return false;
        }
        if (text.charAt(pos1 + 1) != 'Y' && text.charAt(pos1 + 1) != 'N') {
            alert("格式错误: #后面答案错误,应为Y或N!");
            return false;
        }
        pos = text.indexOf("#Q", pos + 1);
    }
    return true;
}

$(document).ready(function(){
    $('#save').click(function(event){
        switch ($('#QuestionQType').val()){
            case '0':
                return checkSel();
                break;
            case '1':
                return checkJud();
                break;
            case '2':
                return checkAns();
                break;
        }
    });
});
