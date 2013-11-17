<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<?php
echo $this->Html->script('jquery-ui-1.10.0.custom');
echo $this->Html->css('jquery-ui-themes/hot-sneaks/jquery-ui.css');
echo $this->Html->css('jquery-ui-themes/hot-sneaks/jquery.ui.theme.css');
echo $this->Html->css('parameter');
?>
<script>
    function putSlider(name){
        var value = <?=$para['exam_pass_score']?>;
        $("#"+name+"_slider").slider({
            range: "min",
            min: 0,
            max: 100,
            value: value,
            slide: function(event, ui) {
                $("#"+name+"_amount").val(ui.value+'分');
            }
        });
        $("#"+name+"_amount").val($("#" + name +"_slider").slider("value")+'分');
    }
    $(function() {
        putSlider('exam_pass_score');
        $('.sure').click(function(){
            var percent = $(this).closest('.youGot').find('.amount_text').val().replace('分', "");
            var q_type = $(this).attr('qType');
            $('body').mask();
            $.post('setExamPassScore/'+percent, {},function(data){
                $('body').unmask();
                alert(data.info);
            }, 'json');
        });
    });
</script>
<div><label class="very_larger_label">练习需通过分数</label></div>
    <div class='youGot'>
        <div class="float_left">
            <input type="text" class="amount_text" id="exam_pass_score_amount" style="border: 0; color: #f6931f; font-weight: bold;" />
        </div>
        <div class="float_left"id="exam_pass_score_slider" style="height: 10px; width: 600px"></div>
        <div><button class='sure' qType='1'>确定</button></div>
    </div>
    