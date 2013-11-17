$(document).ready(function() {
    $("#postSuggestion").click(function() {
    	var title = $("#sugSubject").val();
    	var info = CKEDITOR.instances.sugInfo.getData();
        var target = $("#target").html();
    	if(!checkVar(title)){
    		artError("请输入建议的主题！",function(){
    			$("#sugSubject").focus();
    		});
    		return false;
    	}
    	if(!checkVar(info)){
    		artError("请输入建议的内容！");
    	}
        var msg;
        if(target == 0) {
            msg = "Are you sure to make such suggestion?？";
        } else {
            msg = "您确认向开发者提出这个建议吗？";
        }
    	artConfirm(msg, function(){
    		$.post("../newsuggestion",{"title":title,"info":info,"target":target},function(data){
                    if(data.success==1){
                        artSuccess("您的建议已经提交成功！",0,function(){
                                    location.reload();
                            });
                    }else{
                            artError("建议提交失败，请再次尝试！");
                    }
                   
    	    }, 'json');
    	},function(){})
    });
});