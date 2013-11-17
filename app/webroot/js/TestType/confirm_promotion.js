$(document).ready(function() {
    $.ajaxSetup({
        async: false
    });
    // 
    $('#search').click(function() {
       var st_depart = $('#st_depart').val();
       var st_major = $('#st_major').val();
       var st_class = $('#st_class').val();
       var promotion = $('#promotion').val();
       //alert(st_depart + '+' + st_major + '+' + st_class);
       $.post('getPromotion',{'st_depart':st_depart, 'st_major': st_major, 
           'st_class': st_class, 'test_type': promotion},function(data) {
           var th = '<tr><th><input type="checkbox" id="allChk"/></th>' +
                   '<th>姓名</th><th>学号</th><th>学院</th><th>专业</th><th>班级</th></tr>';
           var button = '<button id="btnPromotion">确认晋级</button>';
           $('#tbPromotion').html(th+data.html);
           $('#btnDiv').html(button);
       }, 'json');
       // 全选
       $('#allChk').click(function() {
            if($(this).attr('checked') == 'checked') {
                $('.chkStudent').attr('checked', 'checked');
            } else {
                $('.chkStudent').attr('checked', false);
            }
        });
        // 确认晋级按钮
        $('#btnPromotion').click(function() {
            //alert(1);
            var param = '';
           $('input[name="chkPromotion"]').each(function() {
               if($(this).attr('checked') == 'checked') {
                   param += $(this).val() + ',';
               }
           }); 
           //alert(param);
           $.post('doPromotion',{'student':param,'promotion':promotion},function(data) {
               if(data.success == true) {
                   artSuccess('晋级成功');
               } else {
                   artError('晋级失败!');
               }
               location.reload();
           },'json');
        });
    });
    
    
});