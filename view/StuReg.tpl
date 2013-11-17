{include file="head.tpl"}
<link rel="icon" href="images/{$name}/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="jquery-ui/development-bundle/themes/base/jquery.ui.all.css">
	<script src="jquery-ui/development-bundle/jquery-1.9.0.js"></script>
	<script src="jquery-ui/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="jquery-ui/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="jquery-ui/development-bundle/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="../demos.css">
	<script>
	$(function() {
		$( "* #datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	</script>
</head>
<body> 
    <div class="container">
        <div class="container_top">
            <div id="fill_blank">
                <div id="sub_title">
                    <div class="content" id="sub_title_content">新用户注册</div>
                </div>
                <form id="form"  name="form">


                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten ">
                                <label for="st_account" id="st_account_label">用户名</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="text" id="st_account" value="1111111"/>
                        </div>
                    </div>


                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_pwd" id="st_pwd_label">密码</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="password" id="st_pwd" value="1111111"/>
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_re_pwd" id="st_re_pwd_label">密码确认</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="password" id="st_re_pwd" value="1111111"/>
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_name" id="st_name_label">姓名</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="text" id="st_name" value="王朝"/>
                        </div>
                    </div>

                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label  id="st_birth_label">出生年月</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="text" id="datepicker" />
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_No" id="st_No_label">学号</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="text" id="st_No" value="093211"/>
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_mail" id="st_mail_label">邮箱</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="text" id="st_mail" value="dxks@126.com"/>
                        </div>
                    </div>
                    
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_edu" id="st_edu_label">在读学历</label>             	
                            </div> 
                        </div>
                        <div class="input_blank">
                            {html_options name=st_edu options=$st_edu id=st_edu selected = $st_edu_sel} 
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_depart" id="st_depart_label">学院</label>             	
                            </div> 
                        </div>
                        <div class="input_blank">
                            {html_options name=st_depart options=$st_depart id=st_depart selected = $st_depart_sel} 
                        </div>
                    </div>

                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_class" id="st_major_label">专业</label>             	
                            </div> 
                        </div>
                        <div class="input_blank ">
                            <select id="st_major">
                            </select>
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_class" id="st_class_label">班级</label>             	
                            </div> 
                        </div>
                        <div class="input_blank ">
                            <select id="st_class">

                            </select>
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_class" id="st_grade_label">入学年份</label>             	
                            </div> 
                        </div>
                        <div class="input_blank ">
                            <select id="st_grade">

                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div id="alert_blank">
                <div id="st_account_aten" class="aten_style gray">
                    用户名为6-18个字母和数字的组合，区分大小写。
                </div>
                <div id="st_pwd_aten" class="aten_style gray">
                    密码为6-18个字母和数字的组合，区分大小写。
                </div>
                <div id="st_re_pwd_aten" class="aten_style  gray">
                </div>
                <div id="st_name_aten" class="aten_style gray">
                    为了您的有效注册，请填写真实姓名。
                </div>
                <div id="st_birth_aten" class="aten_style  gray">
                    请仔细选择
                </div>
                <div id="st_No_aten" class="aten_style  gray">
                    请使用学生证、考试卷上的真实学号
                </div>
                <div id="st_mail_aten" class="aten_style  gray">
                    请填写正确的邮箱地址，以便您找回密码
                </div>
                
                
                <div id="st_edu_aten" class="aten_style  gray">
                    选择当前在读学历
                </div>
                
                <div id="st_depart_aten" class="aten_style  gray">
                    Please select your department, if there is none, please contact the administrators!
                </div>
                <div id="st_major_aten" class="aten_style  gray">
                    选择学院后，专业会自动弹出，若网速慢，请稍作等待。
                    Please select your major, if there is none, please contact the administrators!
                </div>
                <div id="st_class_aten" class="aten_style  gray">
                    选择专业后，班级会自动弹出，若网速慢，请稍作等待。
                    Please select your class, if there is none, please contact the administrators!
                </div>
                <div id="st_grade_aten" class="aten_style  gray">
                </div>
            </div>
        </div>

        <div id="submit_part">
            <a  id="submit_bt"  href="javascript:void(0);"></a>
        </div>
    </div>
    <div class="white_area">
    </div>
    <div class="footer">
    </div>
    <div id="shadow_bg">
    </div>
    <div id="alert_win">
        <div id="alert_content"></div>
        <a   id="alert_bt" href="#"></a>
    </div>
    <script>
        $(function() {
        $('* #datepicker').datepicker({
            showButtonPanel: true
        });
        });
    </script>
</body>
</html>
