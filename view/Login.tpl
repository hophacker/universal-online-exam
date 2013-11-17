{include file="head.tpl"}
{literal}        
        <style type="text/css">
            <!--
            .STYLE2 {font-family: Geneva, Arial, Helvetica, sans-serif}
            -->
        </style> 
{/literal}
    </head>
    <body onkeydown="enterKey();">
        <div id="outer">
            <div id="header">
                <img src="images/logo.jpg" />
            </div>
            <center>
                <div id="main">
                    <div>
                        <form name="form1" action="Login.jsp" id="form1" method="post">
                            <marquee scrollamount="=8" style="width:300">
                                <h2> <a>欢迎来到扬州大学党校测试平台</a> </h2>
                            </marquee>
                            <br />
                            <br />

                            <div id="loga"> &nbsp; </div>
                            <div id="logb"> &nbsp; </div> 
                            <div id="name">
                                <span>&nbsp;帐&nbsp;号:</span>
                                <input type="text" id="uname" name="uname" value="" />
                            </div>
                            <div id="pwd">
                                <span>&nbsp;密&nbsp;码:</span>
                                <input type="password" id="upwd" name="upwd" value=""   />
                            </div>
                            <br /> <br />
                            <div id="chos">
                                <input type="radio" name="logtype" value="1" checked="checked" />
                                <font size="+1"><span>学员</span> </font>
                                <input type="radio" name="logtype" value="2" />
                                <span class="STYLE2"><font size="+1">院管理员 </font></span>
                                <input type="radio" name="logtype" value="3" />
                                <font size="+1"><span>校管理员</span> </font>
                            </div>
                            <div>
                                <span id="conf"> <img name=bt id=bt src='images/bt_off.gif' id='bt'>&nbsp;</img> </span>
                                <span id="reg"><a href="StuReg.jsp">注册</a> </span>                                
                            </div>
                        </form>
                    </div>
                    <div id="logerr">fengjie</div>
                </div>
            </center>
        </div>
    </body>
</html>
