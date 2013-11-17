<?php
require_once("../../../../class/autoload.inc");

function Step_1() {
    $html = '<div class="blank_cell">
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
                    
                <div class="alert_blank">
                <div id="st_account_aten" class="aten_style gray">
                    用户名为6-18个字母和数字的组合，区分大小写。
                </div>
                <div id="st_pwd_aten" class="aten_style gray">
                    密码为6-18个字母和数字的组合，区分大小写。
                </div>
                <div id="st_re_pwd_aten" class="aten_style  gray">
                </div>
<input type="button" name="btnStep1" value="下一步" onclick="next2Step_2();" id="" class="nextButton" />                    
';
    return $html;
}

function Step_2() {
    $html = '<div class="blank_cell">
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
<input type="button" name="btnStep2" value="下一步" onclick="next2Step_3();" id="" class="nextButton" />';
    return $html;

}

function test() {
    return "123";
}

function Step_3() {
    $dep = new department();
    $st_depart = $dep->getAll();
    $st_depart[-1] = "无";
    $edu = new education();
    $st_edu = $edu->getAll();
    $html = '<div class="blank_cell">
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_edu" id="st_edu_label">在读学历</label>             	
                            </div> 
                        </div>
                        <div class="input_blank"><select id="st_edu" name="st_edu">';
    foreach ($st_edu as $key => $value) {
        $html .= '<option value="'.$key.'">'.$value.'</option>';
    }
    $html .= '</select></div>
                    </div>
                    <div class="blank_cell">
                        <div class="label_title">
                            <div class="label_aten">
                                <label for="st_depart" id="st_depart_label">学院</label>             	
                            </div> 
                        </div>
                        <div class="input_blank"><select id="st_depart" name="id_depart">';
    foreach ($st_depart as $key => $value) {
        $html .= '<option value="'.$key.'">'.$value.'</option>';
    }
    $html .='</select></div>
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
    <div id="submit_part">
            <a  id="submit_bt"  href="javascript:void(0);"></a>
        </div>
';
    
    return $html;
}
?>
