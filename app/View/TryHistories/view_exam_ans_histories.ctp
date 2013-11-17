<?php
echo $this->Html->script('plugin/jquery.dualListBox-1.3.min.js');
?>

<style type="text/css">
    .main{
        padding:0 5px;
    }
    #viewArea{
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
        $.ajaxSetup({
            async: false
        });
        //查找符合条件的用户
        $('#st_button').click(function() {
            var dept_id = $("#st_depart").val();
            var test_type_id = $("#st_type").val();
            var s_user = $("#s_user").val().trim();
//            if (dept_id == -1 && s_user == "") {
//                alert('出于保护措施，本系统不支持全部选出');
//                return false;
//            }

            $(".main").mask("正在加载，请稍后...");

            $.post("getExamAnsHistories", {
                "dept_id": dept_id,
                "major_id": $("#st_major").val(),
                "class_id": $("#st_class").val(),
                "s_grade": $("#st_grade").val(),
                "st_type": test_type_id,
                "s_user": s_user
            }, function(hitories) {
                $('#viewArea').empty();
                $(".main").unmask();
//Department.dept_name, Major.major_name, Class.class_name, Student.s_name, Student.s_num, TryHistory.id
                $('#viewArea').append("<div class='larger_label'>总人数为:" + hitories.length + "</div>");
                var html = "<tr class='table_head' width='900px'><th>院系</th><th>专业</th><th>班级</th>" +
                        "<th>姓名</th><th>学号</th><th>批改与否</th><th>分数</th><th>查看</th></tr>";
                var checked = new Array();
                checked['0'] = '<strong style="color:red">还未批改</strong>';
                checked['1'] = '已阅';
                
                if (hitories) {
                    $.each(hitories, function(i, s) {
                        var row = "";
                        
                        row += "<tr><td>" + s.Department.dept_name + "</td>";
                        row += "<td>" + s.Major.major_name + "</td>";
                        row += "<td>" + s.Class.class_name + "</td>";
                        row += "<td>" + s.Student.s_name + "</td>";
                        row += "<td>" + s.Student.s_num + "</td>";
                        row += "<td>" + checked[s.TryHistory.has_checked] + "</td>";
                        row += "<td>" + s.TryHistory.ans_score + "</td>";
                        row += "<td>" + '<a target="_blank" href="/tryHistories/markAnsHistory/' + 
                                s.TryHistory.id + '">批改解答题</a></td></tr>';
                        html += row;
                    });
                    html = "<table>" + html + "</table>";
                    $("#viewArea").append(html);
                }
            }, "json")
        });
    });
</script>
<div class="main">
    <?php
    echo $this->element('select', array('isManager' => $isManager));
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
                入学年份：
                <?php
                $grades[-1] = '全部';
                for ($start = 2002; $start <= 2020; $start++) {
                    $grades[$start] = $start;
                }
                echo $this->Form->select('st_grade', $grades, array('empty' => false));
                ?>
            </span>
            <span>
                考试类型：
                <?php
                echo $this->Form->select('st_type', $testtypes, array('empty' => false));
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

<div id="viewArea">
</div>
</div>
