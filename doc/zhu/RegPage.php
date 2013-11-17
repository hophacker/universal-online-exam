<?php
require_once("../private/class/autoload.inc");

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
                    
                <div id="alert_blank">
                <div id="st_account_aten" class="aten_style gray">
                    用户名为6-18个字母和数字的组合，区分大小写。
                </div>
                <div id="st_pwd_aten" class="aten_style gray">
                    密码为6-18个字母和数字的组合，区分大小写。
                </div>
                <div id="st_re_pwd_aten" class="aten_style  gray">
                </div>
<input type="button" name="btnStep1" value="下一步" onclick="nextStep();" id="" class="nextButton" />                    
';
    return $html;
}

function Step_2() {
    $dep = new department();
$st_depart = $dep->getAll();
$st_depart[-1] = "无";


$edu = new education();
$st_edu = $edu->getAll();
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
    $html .= '<option value="-1">无</option>';
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
    <div id="submit_part">
            <a  id="submit_bt"  href="javascript:void(0);"></a>
        </div>';
    
    return $html;
}
?>
