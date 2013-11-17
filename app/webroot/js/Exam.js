$(function() {
	$(document).keydown(function(e){
		e=window.event||e;
		if(event.shiftKey||event.altKey||event.ctrlKey){
			return false;
		}
		var keycode=event.which;
		if(keycode>=112&&keycode<=123){
			return false;
		}
	})
	
        $("#header").hide();
        $("#footer").hide();
        total_ans = $('.statButton').size();
        $('#has_ans').html(has_ans);
        $('#left_ans').html(total_ans-has_ans);
        $('.touch').click(function(){
            b_id = $(this).closest('li').attr('id').replace('q', 'b');
            var buttonA = $("#"+b_id).find('a');
            buttonA.css('color', '#0073EA');
            if (!buttonA.attr('stat')){
                buttonA.attr('stat', '1');
                has_ans++;
            }
            $('#has_ans').html(has_ans);
            $('#left_ans').html(total_ans-has_ans);
        });
        
        $('#submit_bt').click(function(){
        	var leftans=total_ans-has_ans;
        	var info="您确认交卷吗？";
        	if(leftans>0){
        		info="您还有"+leftans+"道题没有回答，交卷之后将无法重新答题！<br/>"+info;
        	}
        	artConfirm(info,function(){
        		$(".container").mask("正在交卷，请稍后...")
        		$.post($("#form").attr("action"),$("#form").serialize(),function(e){
        			if(e.status==1){
        				$("submit_bt").unbind("click");
        				var info=e.info;
        				var message;
        				message="本次测试您的得分为<em class='red'>"+(e.data.judge+e.data.select)+"</em>分，" +
        						"</br>其中判断题得分<em class='red'>"+e.data.judge+"</em>分，选择题得分<em class='red'>"+e.data.select+"分</em>";
        				info+=message;
        				if(isTest==0){
        					info+="<br/>您做错的题目已为您高亮显示，请认真学习！"
        				}
        				var dialog=artSuccess(info,0,function(){
        					if(isTest==1){
        						window.close();
        					}
        					else{
        						$(".ans_sheet td a").css({"color":"#003d4c"})
        						$.each(e.data.error,function(i,id){
        							$("#q"+id).css({"border":"2px solid red"});
        							$("#b"+id).find("a").css({"color":"red"})
        						})
        						$(".quick_help").html(message);
        					}
        				})
        				$("#right_time").hide();
    					$('#submit_bt').hide();
        			}else{
        				artError(e.info);
        			}
        			$(".container").unmask();
        		},"json")
            })
        });
        inter = setInterval(mtime, 1000);
        $("#time").html(getTime(minute,second));
})

function mtime() {
        if(second==0&&minute==0) {
            clearInterval(inter);
            $("#submit_bt").attr("disabled","disabed").unbind("click").hide().parent().html("<span style='color:red'>考试结束</span>");
            return;
        }
        if(second==0) {
            minute = minute - 1;
            second = 59;
        } else {
            second = second-1;
        }
        $("#time").html(getTime(minute,second));
}

function getTime(minute, second) {
    if(minute<10) minute = "0"+minute;
    if(second<10) second = "0"+second;
    return minute+":"+second;
}
