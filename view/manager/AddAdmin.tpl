{include file="manager/menu.tpl"}

<form action="Admin/add.jsp" method="post" onsubmit="return check();">
    <div id="count">
        <span>账号:</span>
        <input id="addadmin" name="addadmin" value="" />
    </div>
    <div id="pwd">
        <span>密码:</span>
        <input id="addpwd" name="addpwd" value="" />
    </div>
    <div id="name">
        <span>姓名:</span>
        <input id="adminame" name="adminame" value="" />
    </div>
    <div id="dept">
        <span> 所属院系：</span>
        {include file="../dxks_table.tpl" contents=$dept_managers}
    </div>
    <div>
        <input type="submit" id="conf" value="提交" />
    </div>
</form>
    
    
<div id="atten" style="color:red"><h2></h2> </div>

{include file="../foot.tpl"}
