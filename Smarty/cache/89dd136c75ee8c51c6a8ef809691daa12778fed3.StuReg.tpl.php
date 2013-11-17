<?php /*%%SmartyHeaderCode:2002651014a7a4a7fc0-53426289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89dd136c75ee8c51c6a8ef809691daa12778fed3' => 
    array (
      0 => 'I:\\fedchenlin\\yangda\\view\\StuReg.tpl',
      1 => 1359033369,
      2 => 'file',
    ),
    'b59a0469aaa37fc6e79198cc54a49b4f47adb8a6' => 
    array (
      0 => 'I:\\fedchenlin\\yangda\\view\\head.tpl',
      1 => 1359033369,
      2 => 'file',
    ),
    '75bf1ba495760bebde31c96b01bc93a6876ba2f8' => 
    array (
      0 => 'I:\\fedchenlin\\yangda\\view\\CONFIGS',
      1 => 1358598100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2002651014a7a4a7fc0-53426289',
  'variables' => 
  array (
    'name' => 0,
    'st_edu' => 0,
    'st_edu_sel' => 0,
    'st_depart' => 0,
    'st_depart_sel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51014a7a741a87_24866333',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51014a7a741a87_24866333')) {function content_51014a7a741a87_24866333($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <link href="css/common.css" rel="stylesheet" type="text/css" />
        <link href="css/StuReg.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />

        <script type="text/javascript" src="script/jquery-1.9.0.js"></script>
        <script type="text/javascript" src="script/StuReg.js"></script>
        <script type="text/javascript" src="script/common.js"></script>
        
        <title>新用户注册</title>
<link rel="icon" href="images/StuReg/favicon.ico" type="image/x-icon">
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
	</script>s
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
                            <select name="st_edu" id="st_edu">
<option value="1" selected="selected" id="st_edu-0">本科</option>
<option value="2" id="st_edu-1">硕士</option>
<option value="3" id="st_edu-2">博士</option>
<option value="4" id="st_edu-3">大专</option>
</select>
 
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_depart" id="st_depart_label">学院</label>             	
                            </div> 
                        </div>
                        <div class="input_blank">
                            <select name="st_depart" id="st_depart">
<option value="1" id="st_depart-0">文学院</option>
<option value="2" id="st_depart-1">社会发展学院</option>
<option value="3" id="st_depart-2">马克思主义学院</option>
<option value="4" id="st_depart-3">法学院</option>
<option value="5" id="st_depart-4">教育科学学院</option>
<option value="6" id="st_depart-5">新闻与传媒学院</option>
<option value="7" id="st_depart-6">外国语学院</option>
<option value="8" id="st_depart-7">数学科学学院</option>
<option value="9" id="st_depart-8">物理科学与技术学院</option>
<option value="10" id="st_depart-9">化学化工学院</option>
<option value="11" id="st_depart-10">体育学院</option>
<option value="12" id="st_depart-11">机械工程学院</option>
<option value="13" id="st_depart-12">信息工程学院</option>
<option value="14" id="st_depart-13">建筑科学与工程学院</option>
<option value="15" id="st_depart-14">水利科学与工程学院</option>
<option value="16" id="st_depart-15">能源与动力工程学院</option>
<option value="17" id="st_depart-16">环境科学与工程学院</option>
<option value="18" id="st_depart-17">农学院</option>
<option value="19" id="st_depart-18">园艺与植物保护学院</option>
<option value="20" id="st_depart-19">动物科学与技术学院</option>
<option value="21" id="st_depart-20">兽医学院</option>
<option value="22" id="st_depart-21">生物科学与技术学院</option>
<option value="23" id="st_depart-22">医学院</option>
<option value="24" id="st_depart-23">商学院</option>
<option value="25" id="st_depart-24">旅游烹饪学院</option>
<option value="26" id="st_depart-25">艺术学院</option>
<option value="27" id="st_depart-26">广陵学院</option>
<option value="30" id="st_depart-27">机关部门</option>
<option value="-1" selected="selected" id="st_depart-28">无</option>
</select>
 
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
                    选择所在院系，如若没有，请速与辅导员或党校管理员联系！
                </div>
                <div id="st_major_aten" class="aten_style  gray">
                    选择学院后，专业会自动弹出，若网速慢，请稍作等待。
                    如若专业没有，请速与辅导员或党校管理员联系！
                </div>
                <div id="st_class_aten" class="aten_style  gray">
                    选择专业后，班级会自动弹出，若网速慢，请稍作等待。
                    如若班级没有，请速与辅导员或党校管理员联系！
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
<?php }} ?>