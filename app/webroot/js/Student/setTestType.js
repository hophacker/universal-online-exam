$(document).ready(function() {
    $('.submit').click(function(){
            var r=confirm("确认给这些同学更换考试级别?");
            if (r == true) {                    
                $.post('../../students/setTestType/1', {
                    s_nums: $('#s_nums').val(),
                    test_type_id: $('#testTypeNames').val()
                },function(ret){
                    artWarning(ret["info"]);
                }, 'json');
            }  
    });
});
