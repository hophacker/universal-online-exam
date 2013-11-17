$(document).ready(function() {
    $.ajaxSetup({
        async: false
    });
    $('.listBlock').hide();
    /*
     * 删除建议
     */
    $('.delLink').click(function(){
            var r=confirm("确认删除?");
            if (r == true) {
                //$(this).closest('tr').hide(400);
                var flag = 0;
                $.post('../../suggestions/delete/' + $(this).attr('delId'), function(data){
                    flag = data.success
                },'json');
                if(flag == 1)
                    $(this).closest('tr').hide(400);
            }  
            $('.listBlock').hide();
    });
    /*
     * 删除建议的回复
     */
    $('.delReplyLink').click(function(){
            var r=confirm("确认删除?");
            if (r == true) {
                //$(this).closest('tr').hide(400);
                var flag = 0;
                $.post('../../suggestions/deleteReply/' + $(this).attr('delId'), function(data){
                    flag = data.success
                },'json');
                if(flag == 1)
                    $(this).closest('tr').hide(400);
            }  
    });
    /*
     * 点击查看建议按钮的触发事件
     */
    $('.listSuggestion').click(function() {
        $('.listBlock').hide();
        $('#div'+$(this).attr('viewId')).show(400);
    });
    /*
     * 显示和隐藏回复的输入框
     */
    $('.reply').click(function() {
        $('.newReply').hide();
        if($(this).attr('state') == 1) {
            $(this).attr('state', 0);
        } else {
            $(this).attr('state', 1);
            $('#re'+$(this).attr('replyId')).show(400);
        }
    });
    /*
     * 添加一条建议回复
     */
    $('.addReply').click(function() {
       var id = $(this).attr('replyId');
       var suggestion_id = $('#sid'+id).val();
       var content = $('#content'+id).val();
       $.post('../../suggestions/addReply', {'suggestion_id':suggestion_id, 'content':content}, function(data) {
           if(data.success==true) {
               artSuccess('回复成功!');
           } else {
               artError('回复失败');
           }
           location.reload();
       },'json');
    });
});
