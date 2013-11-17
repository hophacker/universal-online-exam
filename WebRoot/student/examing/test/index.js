 var   total = 1800;//从服务器获取 为方便测试设为定值
$(function(){
	showTime();
	$("td").click(function(){  //右边按钮监听事件
	    $(".test_right td").removeClass("on_an");
	    $(this).addClass("on_an");
	    var  button_val = parseInt($(this).html());
	    window.location.href = "#q"+button_val;
	});
	$("input[type = 'radio']").click(function(){//判断、单选监听
        var radio_id = $(this).attr("id");
        $(".test_right td").removeClass("on_an");
        $("#b"+parseInt(radio_id.substr(2))).addClass("has_an");
        $("#b"+parseInt(radio_id.substr(2))).addClass("on_an");
	});
	$("textarea").click(function(){  //  简答题 点击事件
		var radio_id = $(this).attr("id");
	    $(".test_right td").removeClass("on_an");
        $("#b"+parseInt(radio_id.substr(2))).addClass("on_an");
	});
	$("textarea").blur(function(){  //简答离开时间
        if($(this).html() != ""){	//如果为空则不显示为昨晚	
       	   var textarea_id = $(this).attr("id");
           $("#b"+parseInt(radio_id.substr(2))).addClass("has_an");
        }
	});
	$("#submit_bt").click(function(){
		if(confirm("您确定提交考卷吗？")){
			if(confirm("提交后将无法更改")){
		     $("#form").submit();
			}
		}
	})
});

document.oncontextmenu = function(){event.returnValue = false;}//屏蔽鼠标右键
document.onkeydown = function() 
{ 
   //屏蔽 Alt+ 方向键 ← 
   //屏蔽 Alt+ 方向键 → 
  if ((window.event.altKey)&& 
      ((window.event.keyCode==37)||   
       (window.event.keyCode==39)||
       (window.event.keyCode==9)))   
  { 
     alert("不准你使用ALT+方向键前进或后退网页！"); 
     event.returnValue=false; 
  }
     /* 注：这还不是真正地屏蔽 Alt+ 方向键， 
     因为 Alt+ 方向键弹出警告框时，按住 Alt 键不放， 
     用鼠标点掉警告框，这种屏蔽方法就失效了。以后若 
     有哪位高手有真正屏蔽 Alt 键的方法，请告知。*/

  if ((event.keyCode==116)||                 //屏蔽 F5 刷新键 
      (event.ctrlKey && event.keyCode==86) ||  //Ctrl + V 
      (event.ctrlKey && event.keyCode==67)) { //屏蔽 Ctrl+ C
     event.keyCode=0; 
     event.returnValue=false; 
     } 
		//8   退格键
    //78  Ctrl+N
    //37  Alt+ 方向键 ← 
    //39  Alt+ 方向键 →
    //116       F5 刷新键
    //82  Ctrl + R
    //121       shift+F10
    //115       屏蔽Alt+F4
    //屏蔽 shift 加鼠标左键新开一网页
    if (window.event.keyCode==8
           ||event.keyCode==78
           ||event.keyCode==37
           ||event.keyCode==39
           ||event.keyCode==116
           ||event.keyCode==82
           ||event.keyCode==121
           ||event.keyCode==115
           ||(window.event.srcElement.tagName == "A" && window.event.shiftKey))
           {
                  event.keyCode=0; 
                  window.event.returnvalue=false;
           }
	  if (event.keyCode==122){event.keyCode=0;event.returnValue=false;}  //屏蔽F11 
	  if (event.ctrlKey && event.keyCode==78) event.returnValue=false;   //屏蔽 Ctrl+n 
	  if (event.shiftKey && event.keyCode==121)event.returnValue=false;  //屏蔽 shift+F10 
	  if (window.event.srcElement.tagName == "A" && window.event.shiftKey)  
	      window.event.returnValue = false;             //屏蔽 shift 加鼠标左键新开一网页 
	  if ((window.event.altKey)&&(window.event.keyCode==115))             //屏蔽Alt+F4 
	  { 
	      window.showModelessDialog("about:blank","","dialogWidth:1px;dialogheight:1px"); 
	      return false; 
	  } 
} 

var timerID;
function showTime ()							
{
    if(total<0)     //自动交卷
	 {
			document.form.submit();
	 }
	 if (total == 300){
	 	alert("考试还剩5分钟，请赶紧提交！");
	 }else if (total == 600){
	 	alert("考试还剩10分钟，请赶紧提交！");
	 }
	 var chour=parseInt(total/7200);
	 var cmin=parseInt(total%7200/60);
	 var csec=parseInt(total%7200%60%60);
	 var time="还剩：";
	 if(chour==0)
	 time+="00:";
	 else if(chour>0&&chour<10)
	 time+="0"+chour+":";
	 else
	 time+=""+chour+":";
	 
	  if(cmin==0)
	 time+="00:";
	 else if(cmin>0&&cmin<10)
	 time+="0"+cmin+":";
	 else
	 time+=""+cmin+":";
	  if(csec==0)
	 time+="00";
	 else if(csec>0&&csec<10)
	 time+="0"+csec;
	 else
	 time+=""+csec;	
	 $(".time_left").html(time);
	 total--;
	timerID = setTimeout("showTime()",1000);								
}