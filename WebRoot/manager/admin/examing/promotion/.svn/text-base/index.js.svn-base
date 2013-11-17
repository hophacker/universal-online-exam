$(document).ready(function() {
    $("input[type='button']").click(function() {
        parent = $(this).parent();
        $test_type_id = parent.find("#test_type_id").val();
        $test_times1 = parent.find("#test_times1").val();
        $test_times2 = parent.find("#test_times2").val();
        $highest1 = parent.find("#highest1").val();
        $highest2 = parent.find("#highest2").val();

        $.post('action.php', {
            test_type_id: $test_type_id,
            test_times1: $test_times1,
            test_times2: $test_times2,
            highest1: $highest1,
            highest2: $highest2
        },
        function(data) {
            $("#dialog").html(data.ret).dialog("open");
        }, 'json');
    });
});




