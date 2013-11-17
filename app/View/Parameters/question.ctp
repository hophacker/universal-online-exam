<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<?php
echo $this->Html->script('jquery-ui-1.10.0.custom');
echo $this->Html->css('jquery-ui-themes/hot-sneaks/jquery-ui.css');
echo $this->Html->css('jquery-ui-themes/hot-sneaks/jquery.ui.theme.css');
echo $this->Html->css('parameter');
?>
<script>
    function putSlider(name){
        var value;
        
        switch(name){
            case 'jud': 
                value = <?=$para['jud_percent']?>;
                break;
            case 'sel': 
                value = <?=$para['sel_percent']?>;
                break;
                    
            case 'ans': 
                value = <?=$para['ans_percent']?>;
                break;
        }
        $("#"+name+"_slider").slider({
            range: "min",
            min: 0,
            max: 100,
            value: value,
            slide: function(event, ui) {
                $("#"+name+"_amount").val(ui.value+'%');
            }
        });
        $("#"+name+"_amount").val($("#" + name +"_slider").slider("value")+'%');
    }
    $(function() {
        putSlider('jud');
        putSlider('sel');
        putSlider('ans');
        $('.sure').click(function(){
            var percent = $(this).closest('.youGot').find('.amount_text').val().replace('%', "");
            var q_type = $(this).attr('qType');
            $.post('setQuestionPercent/'+q_type+'/'+percent, {},function(data){
                artWarning(data);
            });
        });
    });
</script>
<div><label class="very_larger_label"> 练习试题占总题库百分比</label></div>
    
    <div class='youGot'>
        <label for="amount" class="larger_label" >选择题:</label>
        
        <div class="float_left">
            <input type="text" class="amount_text" id="sel_amount" style="border: 0; color: #f6931f; font-weight: bold;" />
        </div>
        <div class="float_left" id="sel_slider" style="height: 10px; width: 600px"></div>
        <div><button class='sure' qType='0'>确定</button></div>
    </div>
    <br/>

    <div class='youGot'>
        <label class="larger_label" for="amount"  >判断题:</label>
        <div class="float_left">
            <input type="text" class="amount_text" id="jud_amount" style="border: 0; color: #f6931f; font-weight: bold;" />
        </div>
        <div class="float_left"id="jud_slider" style="height: 10px; width: 600px"></div>
        <div><button class='sure' qType='1'>确定</button></div>
    </div>
    <br/>
    
    
    
    <div class='youGot'>
        <label for="amount" class="larger_label" >解答题:</label>
        <div class="float_left">
            <input type="text" class="amount_text" id="ans_amount" style="border: 0; color: #f6931f; font-weight: bold;" />
        </div>
        <div class="float_left" id="ans_slider" style="height: 10px; width: 600px"></div>
        <div><button class='sure' qType='2'>确定</button></div>
    </div>
    