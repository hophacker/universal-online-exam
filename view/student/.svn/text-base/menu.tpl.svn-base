{include file="head.tpl"}
{php}
    $isManager = false;
    $docRoot = getenv("DOCUMENT_ROOT");
    include_once($docRoot . "/logic/private/class/session.php");
    if (!session::check($isManager))
        header("Location: ". $docRoot . "/logic/public/Login.php");
    
{/php}
<link href="{$pubDir}/css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{$pubDir}/script/jquery.js"></script>
<script type="text/javascript" src="{$pubDir}/script/menu.js"></script>
<body>
<style type="text/css">
    
</style>
<div class="menu_top">
  <div  class="log_info"><span>陈琳  同学，您好</span><img src="images/log_out.png" title="退出" class="log_out"></img></a>
  </div>
</div>
<div id="menu">
    <ul class="menu">
        <li><a href="" class="parent"><span >&nbsp;&nbsp;首页通知&nbsp;&nbsp;</span></a></li>
        <li><a href="" class="parent"><span >&nbsp;&nbsp;个人资料&nbsp;&nbsp;</span></a></li>
        <li><a href="" class="parent"><span>&nbsp;&nbsp;修改密码&nbsp;&nbsp;</span></a></li>
        <li><a href="" class="parent"><span >&nbsp;&nbsp;参加考试&nbsp;&nbsp;</span></a></li>
        <li><a href="" class="parent"><span >&nbsp;&nbsp;成绩查询&nbsp;&nbsp;</span></a></li>
    </ul>
</div>
<br/>
<a  style="display:none" href="http://apycom.com/"></a>
<div class="container">