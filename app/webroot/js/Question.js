$(document).ready(function() {
    $('.delButton').click(function(){
            var r=confirm("确认删除?");
            if (r == true) {                    
                $.post('../../questions/delete/' + $(this).attr('delId'), function(data){
                });
                $(this).closest('tr').hide(400);
            }  
    });
});
