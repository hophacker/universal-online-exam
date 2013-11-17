<!Doctype html><html xmlns=http://www.w3.org/1999/xhtml>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>学生考试分配</title> 
        <script src="../../../../js/jquery-1.9.0.js" type='text/javascript'></script>
        <script src="index.js" type='text/javascript'></script>

        <link rel="stylesheet" href="../../../../css/common.css" />
        <link rel="stylesheet" href="index.css" />
    </head>


    <body>
        <fieldset>
            <legend>
                <div>
                    <p>
                        时长设定:[0-999]
                    </p>
                </div>
            </legend>
            <form action="setTest/setTestInterTime.jsp" method="post"
                  onsubmit="return checkInter();">
                <div id="per">
                    <div>
                        初级:
                        <input type="text" size="4" id="pri" name="pri"
                               value="<%=pri_inter%>" />
                        分钟 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高级:
                        <input type="text" size="4" id="adv" name="adv"
                               value="<%=adv_inter%>" />
                        分钟 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有效时间:
                        <input type="text" size="4" id="valid" name="valid"
                               value="<%=valid%>" />
                        小时 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="确认时长设定" />
                    </div>
                </div>
            </form>
        </fieldset>


        <form action="setTest/setTestBeginTime.jsp" method="post"
              onsubmit="return checkTimeBegin();">
            <div>
                <p>
                    各院系考试开始时间设定
                </p>
            </div>
            <br />
            <div id="dat">
                <p>
                    说明：时间格式为yyyy-mm-dd HH:MM,例如:2011-09-01 12:00
                    &nbsp;&nbsp;[无需填全，系统只对已填项进行设定]
                </p>
            </div>
            <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <th width="180">
                        学院
                    </th>
                    <th width="110">
                        初级一
                    </th>
                    <th width="110">
                        初级二
                    </th>
                    <th width="110">
                        初级三
                    </th>
                    <th width="110">
                        高级一
                    </th>
                    <th width="110">
                        高级二
                    </th>
                    <th width="110">
                        高级三
                    </th>
                </tr>
                <%
                rs = con
                .executeQuery("select * from department, test_time where department.dept_id=test_time.dept_id");
                int num = 0;
                while (rs.next()) {
                if (rs.getInt("dept_id") == 0)
                continue;
                num++;
                %>
                <tr>
                    <td>
                        <%=rs.getString("dept_name")%>
                    </td>
                    <td>
                        <input size=16 type="text" name="<%=num%>1" id="<%=num%>1"
                               value="<%=StrKit.SetTime(rs.getString("pri_begin_1"))%>" />
                </td>
                <td>
                    <input size=16 type="text" name="<%=num%>2" id="<%=num%>2"
                           value="<%=StrKit.SetTime(rs.getString("pri_begin_2"))%>" />
            </td>
            <td>
                <input size=16 type="text" name="<%=num%>3" id="<%=num%>3"
                       value="<%=StrKit.SetTime(rs.getString("pri_begin_3"))%>" />
        </td>
        <td>
            <input size=16 type="text" name="<%=num%>4" id="<%=num%>4"
                   value="<%=StrKit.SetTime(rs.getString("adv_begin_1"))%>" />
    </td>
    <td>
        <input size=16 type="text" name="<%=num%>5" id="<%=num%>5"
               value="<%=StrKit.SetTime(rs.getString("adv_begin_2"))%>" />
</td>
<td>
    <input size=16 type="text" name="<%=num%>6" id="<%=num%>6"
           value="<%=StrKit.SetTime(rs.getString("adv_begin_3"))%>" />
</td>
<input type="hidden" name="num<%=num%>" id="num<%=num%>"
       value="<%=rs.getInt("dept_id")%>" />
</tr>
<%
}
%>
</table>
<input type="hidden" id="total" name="total" value="<%=num%>" />
<input type="submit" id="conf" value="确认起始时间设定" />
</form>



</body>
</html>