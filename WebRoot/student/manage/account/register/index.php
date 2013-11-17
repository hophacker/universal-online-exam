<?php
    $noSession = 1;
    require_once("../../../../../class/autoload.inc");
    $webroot = "../../../..";
//    $_SESSION['dept_id']=4;
    $dep = new department();
    $st_depart = $dep->getAll();
   // $st_depart[-1] = "无";
    $edu = new education();
    $st_edu = $edu->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>扬州大学党校用户注册</title>
        
        <link href="../../../../css/StuReg.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $webroot . '/jquery-ui/js/jquery-1.9.1.js' ?>"></script>
        <script src="<?php echo $webroot . '/jquery-ui/js/jquery-ui-1.10.1.custom.js' ?>"></script>
        <script type="text/javascript" src="../../../../js/StuReg.js"></script>
        <link rel="stylesheet" href="<?php echo $webroot . '/jquery-ui/development-bundle/themes/black-tie/jquery-ui.css' ?>" />
        <script>
            $(function() {
                $.ajaxSetup({
                    async: false
                });
                $("#datepicker").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy-mm-dd",
                    yearRange:'-30:+1'
                });
                $("#register").accordion({
                   heightStyle: "content",
                   beforeActivate: function(event, ui) {
                       if(ui.newHeader.attr('value') == '2') {
                           return next2Step_2();
                       } else if(ui.newHeader.attr('value') == '3') {
                           return next2Step_3();
                       }
                   }
                   
                });
                $("#btn2").click(function() {
                    $("#register").accordion("option","active",1);
                });
                $("#btn3").click(function() {
                    $("#register").accordion("option","active",2);
                });
            });
        </script>
    </head>
    <body>
        <div id="register">
            <h3 value="1">第一步：帐号信息</h3>
            <div>
                <p>
                    <div style="float: left">
                        <div class="blank_cell">
                            <div class="label_title">
                                    <div class="label_aten ">
                                        <label for="st_account" id="st_account_label">用户名</label>             	
                                    </div> 
                                </div>
                                <div class="input_blank input_blank_de">
                                    <input type="text" id="st_account" />
                                </div>
                            </div>


                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_pwd" id="st_pwd_label">密码</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="password" id="st_pwd" />
                        </div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_re_pwd" id="st_re_pwd_label">密码确认</label>             	
                            </div> 
                        </div>
                        <div class="input_blank input_blank_de">
                            <input type="password" id="st_re_pwd" />
                        </div>
                    </div>
                    </div>
                    <div style="float: left;margin-left: 20px;">
                        <div class="alert_blank">
                            <div id="st_account_aten" class="aten_style gray">
                                用户名为6-18个字母和数字的组合，区分大小写。
                            </div>
                            <div id="st_pwd_aten" class="aten_style gray">
                                密码为6-18个字母和数字的组合，区分大小写。
                            </div>
                            <div id="st_re_pwd_aten" class="aten_style  gray"></div>
                        </div>

                    </div>
                    <div style="float:left;width:500px;margin-top: 50px">
                        <input type="button" name="btnStep1" value="下一步"  id="btn2" class="nextButton" />
                    </div>
                </p>
            </div>
                
            <h3 value="2">第二步 : 学员身份信息</h3>
            <div>
                <p>
                    <div style="float: left">
                        <div class="blank_cell">
                        <div class="label_title">
                                <div class="label_aten">
                                    <label for="st_name" id="st_name_label">姓名</label>             	
                                </div> 
                            </div>
                            <div class="input_blank input_blank_de">
                                <input type="text" id="st_name" />
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
                                <input type="text" id="st_No" />
                            </div>
                        </div>
                        <div class="blank_cell">
                            <div class="label_title">
                                <div class="label_aten">
                                    <label for="st_mail" id="st_mail_label">邮箱</label>             	
                                </div> 
                            </div>
                            <div class="input_blank input_blank_de">
                                <input type="text" id="st_mail" />
                            </div>
                        </div>
                        <div class="blank_cell">
                            <div class="label_title">
                                <div class="label_aten">
                                    <label for="st_phone" id="st_phone_label">手机</label>             	
                                </div> 
                            </div>
                            <div class="input_blank input_blank_de">
                                <input type="text" id="st_phone" />
                            </div>
                        </div>
                    </div>
                    <div style="float: left;margin-left: 20px;">
                        <div class="alert_blank">
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
                            <div id="st_phone_aten" class="aten_style  gray">
                                请填写现在使用的手机号码
                            </div>
                        </div>
                    </div>
                    <div style="float:left;width:500px;margin-top: 50px">
                        <input type="button" name="btnStep2" value="下一步"  id="btn3" class="nextButton" />
                    </div>
                </p>
            </div>
            
            <h3 value="3">第三步 : 学员学籍信息</h3>
            <div>
                <p>
                    <div style="float: left">
                        
                            <div class="blank_cell">
                                <div class="label_title">
                                    <div class="label_aten">
                                        <label for="st_edu" id="st_edu_label">所属:</label>             	
                                    </div> 
                                </div>
                                <div class="input_blank">
                                    <select id="st_edu" name="st_edu">
                                        <?php 
                                            foreach ($st_edu as $key => $value) {
                                                echo '<option value="'.$key.'">'.$value.'</option>';
                                            }
                                        ?>
                                </select></div>
                            </div>
                        <br />
                            <div class="blank_cell">
                                <div class="label_title">
                                    <div class="label_aten">
                                        <label for="st_depart" id="st_depart_label">学院</label>             	
                                    </div> 
                                </div>
                                <div class="input_blank"><select id="st_depart" name="id_depart">
                                    <option value='-1'>无</option>
                                    <?php 
                                        foreach ($st_depart as $key => $value) {
                                            echo '<option value="'.$key.'">'.$value.'</option>';
                                        }
                                    ?>
                                        </select></div>
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
                        
                    </div>
                        <div style="float: left;margin-left: 20px">
                            <div class="alert_blank">       
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
                                <div id="st_grade_aten" class="aten_style  gray">
                                </div>
                            </div>
                        </div>
                <div id="submit_part" style="float: left; width: 500px;margin-top: 50px;margin-right: 500px;">
                        <a  id="submit_bt"  href="javascript:void(0);"></a>
                    </div>
                </p>
            </div>
        </div>
    </body>
</html>