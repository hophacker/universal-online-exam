<?php
echo $this->Html->script('plugin/jquery.dualListBox-1.3.min.js');
?>

<style type="text/css">
    .main{
        padding:0 5px;
    }
    #assignArea{
        width:900px;
        margin-top:20px;
    }
    select.selectList{
        width:300px;
        height:300px;
    }
    .assignSelect,.assignBtns{
        float:left;
    }
    .assignSelect p{
        font-size:14px;
    }
    .assignSelect select{
        padding:5px;
    }
    #assignLeft p{
        color:red;
    }
    #assignRight p{
        color:green;
    }
    .assignBtns{
        padding-top:25px;
        width:50px;
        padding-left:10px;
    }
    .assignBtns button{
        width:30px;
        height:30px;
        margin:5px;
        display:block;
        cursor:pointer;
    }
    #assign_sure{
        width:50px;
        height:50px;
    }
    #see_type {
        width: 157px;
    }
    
</style>

<script type="text/javascript">
    $(function() {
        $('#assign_sure').hide();
        $.ajaxSetup({
            async: false
        });

        $.configureBoxes({
            'box1View': 'stu_list',
            'box2View': 'assign_list',
            'sortBy': 'value'
        });
        //查找符合条件的用户
        $('#st_button').click(function() {
            var see_type = $("#see_type").val();
            var dept_id = $("#st_depart").val();
            var test_type_id = $("#st_type").val();
            var s_user = $("#s_user").val().trim();
            if (dept_id == -1 && s_user =="") {
                alert('出于保护措施，本系统不支持全部选出');
                return false;
            }

            $(".main").mask("正在加载，请稍后...");


            $.post("getAssign", {
                "dept_id": dept_id,
                "major_id": $("#st_major").val(),
                "class_id": $("#st_class").val(),
                "st_type": test_type_id,
                "s_grade": $("#st_grade").val(),
                "see_type": see_type,
                "s_user": s_user
            }, function(students) {
                $.ajaxSetup({
                    async: false
                });
                $("#assignArea").empty();
                
                var head_assign = "";
                var row_assign = "";
//                        if (see_type == '0'){
//                            head_assign = '<th>分配与否</th>';
//                            row_assign = "<td><input type='button' class='button_assign' /></td>";
//                        }

                if (see_type == 0){
                    $('#assign_sure').show();
                    var url = '../tests/getAvailableByDept/' + dept_id + '/' + test_type_id;
                    if (s_user != ""){
                        url = '../tests/getAvailableBySUser/' + s_user;
                    }
                    
                    $.post(url, {}, function(tests) {
                        var sel = "请选择考试:<select id='test_id_select'>";
                        $.each(tests, function(i, s) {
                            s = s.Test;
                            var option = "<option id=':id'>考试场次[:id] 时间[:value]</options>";
                            option = option.replace(/:id/g, s.id).replace(":value", s.begin_time);
                            sel += option;

                        })
                        sel += "</select>";
                        $("#assignArea").append(sel);
                        $.ajaxSetup({
                            async: true
                        });
                    }, 'json');
                }else{
                    $('#assign_sure').hide();
                }
                
                $('#assignArea').append("<div class='larger_label'>总人数为:" +students.length+ "</div>");
                var html = "<tr class='table_head' width='900px'>" + "<th>考试场次</th>" + "<th>姓名</th><th>学号</th>" +
                        "<th>练习次数</th><th>最高分</th>" + 
                        "<th>练习1</th><th>练习2</th><th>练习3</th><th>练习4</th><th>练习5</th>" +
                        "<th>练习6</th><th>练习7</th><th>练习8</th><th>练习9</th><th>练习10</th>" +
                        "<th>练习11</th><th>练习12</th><th>练习13</th><th>练习14</th><th>练习15</th>"
                        + "</tr>";
                if (students) {
                    $.each(students, function(i, s) {
                        var row = row_assign;
                        row += ("<td>" + s.test_id + "</td>");

                        row += "<td>" + s.s_name + "<input type='hidden' class='student_id' value='" + s.id + "' /></td>"
                                + "<td>" + s.s_num + "</td>" + "<td>" + s.times + "</td>" + "<td>" + s.highest + "</td>";
                        row = "<tr class='stu_row'>" + row + "</tr>";
                        html += row;
                    })
                    html = "<table>" + html + "</table>";
                    $("#assignArea").append(html);

                    $(".main").unmask();
                    var first = true;
                    
                    $('#assignArea').on('click', 'tr.stu_row', function() {
                        var selectRow = $(this);
                        if (selectRow.attr('hovered') != '1'){
                            selectRow.attr('hovered', '1');
                            selectRow.css('font-weight', 'bolder');
                            $.post("../TryHistories/getExcresizeHitories", {
                                student_id: $(this).find('.student_id').val(),
                                test_type_id: $("#st_type").val()
                            }, function(excresizeHitories) {
                                $.each(excresizeHitories, function(i, s) {
                                    s = s.TryHistory;
                                    var score = parseInt(s.jud_score) + parseInt(s.sel_score) + parseInt(s.ans_score);
                                    selectRow.append('<td>' + score + '</td>');
                                })
                            }
                            , "json")
                        }
                    });
//                    
//                    $("#assignArea").find('tr.stu_row').each(function() {
//                        
//                    });

                } else {
                    return false;
                }

            }, "json")
        });
        //分配考试
        $("#assign_sure").click(function() {

            str = $("#test_id_select").val()
            if (typeof(str) == 'undefined') {
                alert('请先创建考试');
                return false;
            }
            $("#assignArea").mask("正在分配中，请稍后...");
            var left = str.indexOf('[');
            var right = str.indexOf(']');
            var test_id = str.substring(left + 1, right);

            var student_ids = "";
            var first = true;
            $("#assignArea").find('tr.stu_row').each(function() {
                if (first) {
                    first = false;
                } else
                    student_ids += ",";
                student_ids += $(this).find('.student_id').val();
            });
            $.post("../students/setTestIds", {
                test_id: test_id,
                student_ids: student_ids
            }, function(data) {
                $("#assignArea").unmask();
                artWarning("考试分配成功了哦!");
            });

        })
    });
</script>
<div class="main">
    <?php
    echo $this->element('select');
    ?>

    <div class="selectArea">
        <div class="linkageArea" id="linkageSelect">
            <span>
                用户名：
                <?php
                echo $this->Form->input('s_user', array('label' => false, 'div' => false));
                ?>
            </span>
            <span>
                考试类型：
                <?php
                echo $this->Form->select('st_type', $testtypes, array('empty' => false));
                ?>
            </span>

            <span>
                入学年份：
                <?php
                $grades[-1] = '全部';
                for ($start = 2002; $start <= 2020; $start++) {
                    $grades[$start] = $start;
                }
                echo $this->Form->select('st_grade', $grades, array('empty' => false));
                ?>
            </span>
        </div>
    </div>
    <div class="selectArea">
        <div class="linkageArea">
            <span>  达标类型:
                <?php
                echo $this->Form->select('see_type', array('0' => '练习已达标', '1' => '练习未达标', '2' => '全部'), array('empty' => false));
                ?>
            </span>

            <span>
                <?php
                echo $this->Form->button('点击查询', array('type' => 'button', 'id' => 'st_button'));
                ?>
            </span>
        </div>
    </div>
</div>

<button id='assign_sure' >确定分配</button>
<div id="assignArea">
</div>
</div>