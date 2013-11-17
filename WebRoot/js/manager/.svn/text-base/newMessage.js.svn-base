$(document).ready(function() {
    $.ajaxSetup({
        async: false
    });
    var post_url = "../../../../../class/message.php";
    $("#title").val("");
    // 生成通知类型下拉列表
   $.post(post_url, {oper:'getMessageTypeToSelect'}, function(data) {
       $("#info_type").html(data.content);
   }, 'json');
  
   $("#postMessage").click(function() {
     var title = $("#title").val();
     var info = CKEDITOR.instances.editor1.getData();
     var info_type = $("#info_type").val();
     $.post(post_url, {title:title, info:info, info_type:info_type, oper:'postMessage'}, function(data) {
         if(data.flag == 1) {
             alert('success');
             window.location.reload();
         } else {
             alert('fail');
         }
     }, 'json');
   });
});