$(document).ready(function() {
    $('#comment').val('');
    $('#reset').click(function() {
        $.post('TestPapers/reset',{},function(data) {
            if(data.success==true) {
                artSuccess('重置成功');
            } else {
                artError('重置成功');
            }
            location.reload();
        },'json');
    });
    $('#enable').click(function() {
        $.post('TestPapers/enable',{},function(data) {
            location.reload();
        },'json');
    });
    // 点击修改按钮
    $('.modifyLink').click(function() {
        $('#uploadBtn').show();
        
        var pid = $(this).attr('pid');              // 数据库中的id
        var tableId = $('#No'+pid).html();             //　表格前面的序号
        var suffix = $(this).attr('suffix');
        $('#Pid').val(pid);
        $('#Suffix').val(suffix);
        $('#paper_id').html(tableId);
        $('#pComment').html($('#com'+pid).html());
        
    })
});