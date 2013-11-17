$(document).ready(function() {
    $('#reset').click(function() {
        $.post('TestPapers/reset',{},function(data) {
            if(data.success==true) {
                artSuccess('重置成功');
            } else {
                artError('重置成功');
            }
        },'json');
    });
    $('#enable').click(function() {
        $.post('TestPapers/enable',{},function(data) {
            location.reload();
        },'json');
    })
});