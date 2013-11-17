<!DOCTYPE html>

<html>
<head>
  <title>Testing jQuery</title>
<head></head>
<script type="text/javascript" src="./script/jquery-1.8.3.js"> </script>
<script type="text/javascript">
	$(document).ready(function(){
		$("p").click(function(){
		  //$("p").hide();
      $.ajax({
        "type":"POST",
        "url":"mail_fengjie.php",
        "success":function(data){
          $("#bar").css("background", "yellow").html(data);
        }
      }
      )
		});

    $("<a>", {
      "href": "http://google.com/",
      "text": "Go to Google!"
    }).appendTo("#bar");
	});
  window.onbeforeunload=(function(){
    alert("Bye! Google somthing neat!");
  });
  $(window).unload(function(){
   alert("Bye! Google somthing neat!");
  });
</script>

</head>
<body>
  <ul>
      <li class="list1"></li>
      <li class="list2"></li>
      <li class="list3"></li>
  </ul>
  <p>Hello World!</p>
  <p class="foo">Another paragraph, but this one has a clas.</p>
  <p><span>This is a span inside a paragraph</span></p>
  <p id="bar">Paragrap
    <span id="foo">and this sentence is in a span.</span>
  </p>
</body>
</html>
