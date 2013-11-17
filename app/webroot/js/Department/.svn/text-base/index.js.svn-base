$(document).ready(function() {
    $('.saveTestButton').click(function(){
        $id = $(this).closest('tr').find('#TestId').val();
        $begin_time = $(this).closest('tr').find('#begin_time').val();
        $duration = $(this).closest('tr').find('#duration').val();
        $available = $(this).closest('tr').find('#available').val();
        $second_begin_time = $(this).closest('tr').find('#second_begin_time').val();
        //$test_type_id = $(this).closest('tr').find('#test_type_id').val();
        $department_id = $(this).closest('tr').find('#department_id').val();
        $comment = $(this).closest('tr').find('#comment').val();
        artConfirm("确认保存?", 
            function(){
            $.post('../../tests/saveTest', {
                id:$id, 
                begin_time: $begin_time,
                duration: $duration,
                available: $available,
                second_begin_time: $second_begin_time,
                department_id: $department_id,
                comment: $comment
                },
                function(data){ artSuccess('保存成功'); }
                ); 
            });
    });

    $('#addTime').click(function(){
        $('#addBlock').show(400);
    });

    $('#cancelAddTime').click(function(){
        $('#addBlock').hide(400);
    });

    $('.deleteTime').click(function(){
        $id = $(this).closest('tr').find('#TestId').val();
        var r=confirm("确认删除?");
        if (r == true) {                    
            $.post('../../departments/deleteTime/' + $id , 
                function(data){ }); 
            $(this).closest('tr').hide(400);
        }  
    });
    $('.addToHistory').click(function(){
        $id = $(this).closest('tr').find('#TestId').val();
        $.post('../../tests/addToHistory/' + $id , 
            function(data){ }); 
        $(this).closest('tr').hide(400);
    });
});
